<?php

namespace Botble\LiveTemplate\Http\Controllers;

use Botble\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Assets;
use Botble\Setting\Supports\SettingStore;
use Botble\LiveTemplate\Http\Requests\HomeConfigRequest;
use Botble\Blog\Repositories\Interfaces\PostInterface;
use Botble\Blog\Repositories\Interfaces\CategoryInterface;
use Botble\Blog\Http\Resources\ListPostResource;
use Botble\LiveTemplate\Http\Resources\ListCategoryResource;
use Language;

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
     * @var CategoryInterface
     */
    protected $categoriesRepository;

    /**
     * This var get current locale
     */
    protected $currentLocale;

    /**
     * LiveTemplateController constructor.
     * @param SettingStore $settingStore
     * @param PostInterface $postRepository
     */
    public function __construct(SettingStore $settingStore, PostInterface $postRepository, CategoryInterface $categoriesRepository)
    {
        $this->settingStore = $settingStore;
        $this->postRepository = $postRepository;
        $this->categoriesRepository = $categoriesRepository;
        $this->currentLocale = Language::getCurrentLocaleCode();
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
        $setting = json_decode(setting('theme-high-light-home'), true);
        $setting[$this->currentLocale]["ids"] = $request->ids;
        $this->settingStore
            ->set('theme-high-light-home', json_encode($setting))
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
        $setting = json_decode(setting('theme-high-light-home'), true);
        if ($setting && isset($setting[$this->currentLocale])) {
            $data = $this->postRepository->getListPostInList($setting[$this->currentLocale]['ids'], 5, []);
        } else {
            $data = $this->postRepository->getFeatured(5, []);
        }
        return $response
            ->setData(ListPostResource::collection($data))
            ->toApiResponse();
    }

    public function getCategories(Request $request, BaseHttpResponse $response)
    {
        //$data = $this->categoriesRepository->getAllCategoriesWithChildren(['status' => BaseStatusEnum::PUBLISHED], [], ['id', 'name', 'parent_id']);
        $data = get_categories_with_children();
        return $response
            ->setData(ListCategoryResource::collection($data))
            ->toApiResponse();
    }

}
