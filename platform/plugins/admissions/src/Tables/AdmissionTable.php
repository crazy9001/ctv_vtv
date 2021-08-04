<?php

namespace Botble\Admission\Tables;

use BaseHelper;
use Botble\Contact\Exports\ContactExport;
use Botble\Admission\Models\Admission;
use Html;
use Illuminate\Support\Facades\Auth;
use Botble\Admission\Enums\AdmissionStatusEnum;
use Botble\Admission\Repositories\Interfaces\AdmissionInterface;
use Botble\Table\Abstracts\TableAbstract;
use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Validation\Rule;
use Yajra\DataTables\DataTables;

class AdmissionTable extends TableAbstract
{

    /**
     * @var bool
     */
    protected $hasActions = true;

    /**
     * @var bool
     */
    protected $hasFilter = true;

    /**
     * @var string
     */
    protected $exportClass = ContactExport::class;

    /**
     * ContactTable constructor.
     * @param DataTables $table
     * @param UrlGenerator $urlGenerator
     * @param AdmissionInterface $contactRepository
     */
    public function __construct(DataTables $table, UrlGenerator $urlGenerator, AdmissionInterface $contactRepository)
    {
        $this->repository = $contactRepository;
        $this->setOption('id', 'table-contacts');
        parent::__construct($table, $urlGenerator);

        if (!Auth::user()->hasAnyPermission(['admissions.edit', 'admissions.destroy'])) {
            $this->hasOperations = false;
            $this->hasActions = false;
        }
    }

    /**
     * {@inheritDoc}
     */
    public function ajax()
    {
        $data = $this->table
            ->eloquent($this->query())
            ->editColumn('name', function ($item) {
                if (!Auth::user()->hasPermission('admissions.edit')) {
                    return $item->name;
                }

                return Html::link(route('admissions.edit', $item->id), $item->name);
            })
            ->editColumn('checkbox', function ($item) {
                return $this->getCheckbox($item->id);
            })
            ->editColumn('created_at', function ($item) {
                return BaseHelper::formatDate($item->created_at);
            })
            ->editColumn('status', function ($item) {
                return $item->status->toHtml();
            });

        return apply_filters(BASE_FILTER_GET_LIST_DATA, $data, $this->repository->getModel())
            ->addColumn('operations', function ($item) {
                return $this->getOperations('admissions.edit', 'admissions.destroy', $item);
            })
            ->escapeColumns([])
            ->make(true);
    }

    /**
     * {@inheritDoc}
     */
    public function query()
    {
        $model = $this->repository->getModel();
        $select = [
            'admissions.id',
            'admissions.name',
            'admissions.phone',
            'admissions.email',
            'admissions.created_at',
            'admissions.status',
        ];

        $query = $model->select($select);

        return $this->applyScopes(apply_filters(BASE_FILTER_TABLE_QUERY, $query, $model, $select));
    }

    /**
     * {@inheritDoc}
     */
    public function columns()
    {
        return [
            'id'         => [
                'name'  => 'admissions.id',
                'title' => trans('core/base::tables.id'),
                'width' => '20px',
            ],
            'name'       => [
                'name'  => 'admissions.name',
                'title' => trans('core/base::tables.name'),
                'class' => 'text-left',
            ],
            'email'      => [
                'name'  => 'admissions.email',
                'title' => trans('plugins/contact::contact.tables.email'),
                'class' => 'text-left',
            ],
            'phone'      => [
                'name'  => 'admissions.phone',
                'title' => trans('plugins/contact::contact.tables.phone'),
            ],
            'created_at' => [
                'name'  => 'admissions.created_at',
                'title' => trans('core/base::tables.created_at'),
                'width' => '100px',
            ],
            'status'    => [
                'name'  => 'admissions.status',
                'title' => trans('core/base::tables.status'),
                'width' => '100px',
            ],
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function buttons()
    {
        return apply_filters(BASE_FILTER_TABLE_BUTTONS, [], Admission::class);
    }

    /**
     * {@inheritDoc}
     */
    public function bulkActions(): array
    {
        return $this->addDeleteAction(route('admissions.deletes'), 'admissions.destroy', parent::bulkActions());
    }

    /**
     * {@inheritDoc}
     */
    public function getBulkChanges(): array
    {
        return [
            'admissions.name'       => [
                'title'    => trans('core/base::tables.name'),
                'type'     => 'text',
                'validate' => 'required|max:120',
            ],
            'admissions.email'      => [
                'title'    => trans('core/base::tables.email'),
                'type'     => 'text',
                'validate' => 'required|max:120',
            ],
            'admissions.phone'      => [
                'title'    => trans('plugins/contact::contact.sender_phone'),
                'type'     => 'text',
                'validate' => 'required|max:120',
            ],
            'admissions.status'    => [
                'title'    => trans('core/base::tables.status'),
                'type'     => 'select',
                'choices'  => AdmissionStatusEnum::labels(),
                'validate' => 'required|' . Rule::in(AdmissionStatusEnum::values()),
            ],
            'admissions.created_at' => [
                'title' => trans('core/base::tables.created_at'),
                'type'  => 'date',
            ],
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultButtons(): array
    {
        return [
            'export',
            'reload',
        ];
    }
}
