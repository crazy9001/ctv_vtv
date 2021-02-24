<?php

namespace Botble\LiveTemplate\Http\Controllers;

use Botble\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Botble\LiveTemplate\Tables\LiveTemplateTable;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Assets;
use Botble\Setting\Supports\SettingStore;
use Botble\LiveTemplate\Http\Requests\HomeConfigRequest;
use Botble\Blog\Repositories\Interfaces\PostInterface;
use Botble\Blog\Http\Resources\ListPostResource;

class LiveTemplateController extends BaseController
{
    /**
     * @var SettingStore
     */
    protected $settingStore;

    /**
     * @var PostInterface
     */
    protected $postRepository;

    /**
     * LiveTemplateController constructor.
     * @param SettingStore $settingStore
     * @param PostInterface $postRepository
     */
    public function __construct(SettingStore $settingStore, PostInterface $postRepository)
    {
        $this->settingStore = $settingStore;
        $this->postRepository = $postRepository;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        page_title()->setTitle(trans('plugins/live-template::live-template.name'));

        Assets::addScriptsDirectly(['/vendor/core/plugins/live-template/js/index.js']);

        return view('plugins/live-template::index');
    }

    public function getPostsPublished(Request $request, BaseHttpResponse $response)
    {
        $data = $this->postRepository->getAllPosts();
        return $response
            ->setData(ListPostResource::collection($data))
            ->toApiResponse();
    }

    /**
     * @param HomeConfigRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse|\Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Resources\Json\JsonResource
     */
    public function postHighLightHomeConfig(HomeConfigRequest $request, BaseHttpResponse $response)
    {
        $this->settingStore
            ->set('high_light_home', json_encode(($request->all())))
            ->save();
        return $response
            ->setData('Update success')
            ->toApiResponse();
    }

    /**
     * @param Request $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse|\Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Resources\Json\JsonResource
     */
    public function getHighLightHomeConfig(Request $request, BaseHttpResponse $response)
    {
        $setting = json_decode(setting('high_light_home'), true);
        if (!$setting) {
            $data = $this->postRepository->getFeatured(5, []);
        } else {
            $data = $this->postRepository->getListPostInList($setting['ids'], 5, []);
        }
        return $response
            ->setData(ListPostResource::collection($data))
            ->toApiResponse();
    }
}
