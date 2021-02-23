<?php

namespace Botble\LiveTemplate\Http\Controllers;

use Botble\Base\Events\BeforeEditContentEvent;
use Botble\LiveTemplate\Http\Requests\LiveTemplateRequest;
use Botble\LiveTemplate\Repositories\Interfaces\LiveTemplateInterface;
use Botble\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Botble\LiveTemplate\Tables\LiveTemplateTable;
use Botble\Base\Events\CreatedContentEvent;
use Botble\Base\Events\DeletedContentEvent;
use Botble\Base\Events\UpdatedContentEvent;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\LiveTemplate\Forms\LiveTemplateForm;
use Botble\Base\Forms\FormBuilder;
use Assets;

class LiveTemplateController extends BaseController
{
    /**
     * @var LiveTemplateInterface
     */
    protected $liveTemplateRepository;

    /**
     * @param LiveTemplateInterface $liveTemplateRepository
     */
    public function __construct(LiveTemplateInterface $liveTemplateRepository)
    {
        $this->liveTemplateRepository = $liveTemplateRepository;
    }

    /**
     * @param LiveTemplateTable $table
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function index(Request $request)
    {
        page_title()->setTitle(trans('plugins/live-template::live-template.name'));

        Assets::addScriptsDirectly(['/vendor/core/plugins/live-template/js/index.js']);

        return view('plugins/live-template::index');
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function create(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins/live-template::live-template.create'));

        return $formBuilder->create(LiveTemplateForm::class)->renderForm();
    }

    /**
     * @param LiveTemplateRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function store(LiveTemplateRequest $request, BaseHttpResponse $response)
    {
        $liveTemplate = $this->liveTemplateRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(LIVE_TEMPLATE_MODULE_SCREEN_NAME, $request, $liveTemplate));

        return $response
            ->setPreviousUrl(route('live-template.index'))
            ->setNextUrl(route('live-template.edit', $liveTemplate->id))
            ->setMessage(trans('core/base::notices.create_success_message'));
    }

    /**
     * @param int $id
     * @param Request $request
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function edit($id, FormBuilder $formBuilder, Request $request)
    {
        $liveTemplate = $this->liveTemplateRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $liveTemplate));

        page_title()->setTitle(trans('plugins/live-template::live-template.edit') . ' "' . $liveTemplate->name . '"');

        return $formBuilder->create(LiveTemplateForm::class, ['model' => $liveTemplate])->renderForm();
    }

    /**
     * @param int $id
     * @param LiveTemplateRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function update($id, LiveTemplateRequest $request, BaseHttpResponse $response)
    {
        $liveTemplate = $this->liveTemplateRepository->findOrFail($id);

        $liveTemplate->fill($request->input());

        $this->liveTemplateRepository->createOrUpdate($liveTemplate);

        event(new UpdatedContentEvent(LIVE_TEMPLATE_MODULE_SCREEN_NAME, $request, $liveTemplate));

        return $response
            ->setPreviousUrl(route('live-template.index'))
            ->setMessage(trans('core/base::notices.update_success_message'));
    }

    /**
     * @param int $id
     * @param Request $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function destroy(Request $request, $id, BaseHttpResponse $response)
    {
        try {
            $liveTemplate = $this->liveTemplateRepository->findOrFail($id);

            $this->liveTemplateRepository->delete($liveTemplate);

            event(new DeletedContentEvent(LIVE_TEMPLATE_MODULE_SCREEN_NAME, $request, $liveTemplate));

            return $response->setMessage(trans('core/base::notices.delete_success_message'));
        } catch (Exception $exception) {
            return $response
                ->setError()
                ->setMessage($exception->getMessage());
        }
    }

    /**
     * @param Request $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     * @throws Exception
     */
    public function deletes(Request $request, BaseHttpResponse $response)
    {
        $ids = $request->input('ids');
        if (empty($ids)) {
            return $response
                ->setError()
                ->setMessage(trans('core/base::notices.no_select'));
        }

        foreach ($ids as $id) {
            $liveTemplate = $this->liveTemplateRepository->findOrFail($id);
            $this->liveTemplateRepository->delete($liveTemplate);
            event(new DeletedContentEvent(LIVE_TEMPLATE_MODULE_SCREEN_NAME, $request, $liveTemplate));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }
}
