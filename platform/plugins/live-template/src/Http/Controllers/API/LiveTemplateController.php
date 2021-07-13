<?php

namespace Botble\LiveTemplate\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Blog\Http\Resources\ListPostResource;
use Botble\Blog\Repositories\Interfaces\PostInterface;
use Botble\LiveTemplate\Http\Requests\CategoryConfigRequest;
use Botble\LiveTemplate\Http\Requests\GetCategoryHighLightRequest;
use Botble\LiveTemplate\Http\Requests\HomeConfigRequest;
use Botble\Setting\Http\Requests\SettingRequest;
use Botble\Setting\Supports\SettingStore;
use Illuminate\Http\Request;
use Language;

class LiveTemplateController extends Controller
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
     * This var get current locale
     */
    protected $currentLocale;

    /**
     * LiveTemplateController constructor.
     * @param SettingStore $settingStore
     * @param PostInterface $postRepository
     */
    public function __construct(SettingStore $settingStore, PostInterface $postRepository)
    {
        $this->settingStore = $settingStore;
        $this->postRepository = $postRepository;
        $this->currentLocale = Language::getCurrentLocaleCode();
    }

    /**
     * @param SettingRequest $request
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
     * @return BaseHttpResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Resources\Json\JsonResource
     */
    public function getHighLightHomeConfig(Request $request, BaseHttpResponse $response)
    {
        $setting = json_decode(setting('theme-high-light-home'), true);
        if ($setting && isset($setting[$this->currentLocale])) {
            $data = $this->postRepository->getListPostInList($setting[$this->currentLocale]['ids'], 5, [], true);
        } else {
            $data = $this->postRepository->getFeatured(5, []);
        }
        return $response
            ->setData(ListPostResource::collection($data))
            ->toApiResponse();

    }

    /**
     * @param Request $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse|\Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Resources\Json\JsonResource
     */
    public function postHighLightCategoryConfig(CategoryConfigRequest $request, BaseHttpResponse $response)
    {
        $setting = json_decode(setting('theme-high-light-category'), true);
        $setting[$this->currentLocale][$request->category]["ids"] = $request->ids;
        $this->settingStore
            ->set('theme-high-light-category', json_encode($setting))
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
    public function getHighLightCategoryConfig(GetCategoryHighLightRequest $request, BaseHttpResponse $response)
    {
        $setting = json_decode(setting('theme-high-light-category'), true);
        if($setting && isset ($setting[$this->currentLocale][$request->category])){
            $data = $this->postRepository->getListPostInList($setting[$this->currentLocale][$request->category]["ids"], 5, [], true);

        }else{
            $data = $this->postRepository->getByCategory($request->category, 5);
        }
        return $response
            ->setData(ListPostResource::collection($data))
            ->toApiResponse();

    }


}
