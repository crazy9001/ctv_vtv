<?php

namespace Botble\LiveTemplate\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Blog\Http\Resources\ListPostResource;
use Botble\Blog\Models\Post;
use Botble\Blog\Repositories\Interfaces\PostInterface;
use Botble\LiveTemplate\Http\Requests\HomeConfigRequest;
use Botble\Setting\Http\Requests\SettingRequest;
use Botble\Setting\Supports\SettingStore;
use Illuminate\Http\Request;

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
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function getHighLightHomeConfig(Request $request, BaseHttpResponse $response)
    {
        $language = $request->get('language') ? $request->get('language') : 'vi';
        $setting = json_decode(setting('high_light_home'), true);
        if (is_plugin_active('blog')) {
            $data = $this->postRepository->getModel()
                ->join('language_meta', function ($join) use ($setting) {
                    $join->on('posts.id', '=', 'language_meta.reference_id')
                        ->where(function ($que) use ($setting) {
                            $que->where('language_meta.reference_type', '=', Post::class);
                            if ($setting) {
                                $newIds = implode(',', $setting['ids']);
                                $que->whereIn('posts.id', $setting['ids'])
                                    ->orderByRaw("FIELD(id, $newIds)");
                            }
                        });
                })
                ->where(function ($que) use ($setting, $language) {
                    $que->where('language_meta.lang_meta_code', '=', $language);
                    if (!$setting) {
                        $que->where([
                            'posts.status' => BaseStatusEnum::PUBLISHED,
                            'posts.is_featured' => 1,
                        ])->orderBy('posts.created_at', 'desc')->limit(5);
                    }
                })
                ->get();
            return $response
                ->setData(ListPostResource::collection($data))
                ->toApiResponse();
        }

    }

}
