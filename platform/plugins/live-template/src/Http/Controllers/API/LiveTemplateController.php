<?php

namespace Botble\LiveTemplate\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Blog\Http\Resources\ListPostResource;
use Botble\Blog\Repositories\Interfaces\PostInterface;
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
     * @param SettingRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse|\Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Resources\Json\JsonResource
     */
    public function postHighLightHomeConfig(HomeConfigRequest $request, BaseHttpResponse $response)
    {
        $currentLocaleCode = Language::getCurrentLocaleCode();
        $this->settingStore
            ->set('theme-high-light-home-' . $currentLocaleCode, json_encode($request->all()))
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
        $currentLocaleCode = Language::getCurrentLocaleCode();

        $setting = json_decode(setting('theme-high-light-home-' . $currentLocaleCode), true);
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
