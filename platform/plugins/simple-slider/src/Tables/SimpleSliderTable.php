<?php

namespace Botble\SimpleSlider\Tables;

use Botble\SimpleSlider\Models\SimpleSlider;
use Html;
use Illuminate\Support\Facades\Auth;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\SimpleSlider\Repositories\Interfaces\SimpleSliderInterface;
use Botble\Table\Abstracts\TableAbstract;
use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Validation\Rule;
use Yajra\DataTables\DataTables;

class SimpleSliderTable extends TableAbstract
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
     * SimpleSliderTable constructor.
     * @param DataTables $table
     * @param UrlGenerator $urlGenerator
     * @param SimpleSliderInterface $simpleSliderRepository
     */
    public function __construct(
        DataTables $table,
        UrlGenerator $urlGenerator,
        SimpleSliderInterface $simpleSliderRepository
    )
    {
        $this->repository = $simpleSliderRepository;
        $this->setOption('id', 'table-simple_sliders');
        parent::__construct($table, $urlGenerator);

        if (!Auth::user()->hasAnyPermission(['simple-slider.edit', 'simple-slider.destroy'])) {
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
                if (!Auth::user()->hasPermission('simple-slider.edit')) {
                    return $item->name;
                }

                return Html::link(route('simple-slider.edit', $item->id), $item->name);
            })
            ->editColumn('checkbox', function ($item) {
                return table_checkbox($item->id);
            })
            ->editColumn('created_at', function ($item) {
                return date_from_database($item->created_at, config('core.base.general.date_format.date'));
            })
            ->editColumn('status', function ($item) {
                return $item->status->toHtml();
            });

        if (function_exists('shortcode')) {
            $data = $data->editColumn('key', function ($item) {
                return generate_shortcode('simple-slider', ['key' => $item->key]);
            });
        }

        return apply_filters(BASE_FILTER_GET_LIST_DATA, $data, $this->repository->getModel())
            ->addColumn('operations', function ($item) {
                return table_actions('simple-slider.edit', 'simple-slider.destroy', $item);
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
        $query = $model
            ->select([
                'simple_sliders.id',
                'simple_sliders.name',
                'simple_sliders.key',
                'simple_sliders.status',
                'simple_sliders.created_at',
            ]);
        return $this->applyScopes(apply_filters(BASE_FILTER_TABLE_QUERY, $query, $model));
    }

    /**
     * {@inheritDoc}
     */
    public function columns()
    {
        return [
            'id'         => [
                'title' => trans('core/base::tables.id'),
                'width' => '20px',
            ],
            'name'       => [
                'title' => trans('core/base::tables.name'),
                'class' => 'text-left',
            ],
            'key'        => [
                'title' => __('Key'),
                'class' => 'text-left',
            ],
            'created_at' => [
                'title' => trans('core/base::tables.created_at'),
                'width' => '100px',
            ],
            'status'     => [
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
        $buttons = $this->addCreateButton(route('simple-slider.create'), 'simple-slider.create');

        return apply_filters(BASE_FILTER_TABLE_BUTTONS, $buttons, SimpleSlider::class);
    }

    /**
     * {@inheritDoc}
     */
    public function bulkActions(): array
    {
        return $this->addDeleteAction(route('simple-slider.deletes'), 'simple-slider.destroy', parent::bulkActions());
    }

    /**
     * {@inheritDoc}
     */
    public function getBulkChanges(): array
    {
        return [
            'simple_sliders.name'       => [
                'title'    => trans('core/base::tables.name'),
                'type'     => 'text',
                'validate' => 'required|max:120',
            ],
            'simple_sliders.key'        => [
                'title'    => __('Key'),
                'type'     => 'text',
                'validate' => 'required|max:120',
            ],
            'simple_sliders.status'     => [
                'title'    => trans('core/base::tables.status'),
                'type'     => 'select',
                'choices'  => BaseStatusEnum::labels(),
                'validate' => 'required|' . Rule::in(BaseStatusEnum::values()),
            ],
            'simple_sliders.created_at' => [
                'title' => trans('core/base::tables.created_at'),
                'type'  => 'date',
            ],
        ];
    }
}
