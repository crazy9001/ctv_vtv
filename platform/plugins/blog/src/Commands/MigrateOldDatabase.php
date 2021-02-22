<?php

namespace Botble\Blog\Commands;

use Botble\Base\Events\CreatedContentEvent;
use Botble\Blog\Models\Post;
use Botble\Blog\Repositories\Interfaces\PostInterface;
use Botble\Slug\Services\SlugService;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use RvMedia;
use Illuminate\Http\UploadedFile;

class MigrateOldDatabase extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'cms:migrate:old:database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrate old database';

    protected $slugService;

    protected $postRepository;

    /**
     * MigrateCommand constructor.
     */
    public function __construct(
        SlugService $slugService,
        PostInterface $postRepository
    )
    {
        parent::__construct();
        $this->slugService = $slugService;
        $this->postRepository = $postRepository;
    }

    /**
     * Execute the console command.
     *
     * @return void
     * @throws \Exception
     */
    public function handle()
    {

        $response = Http::get('http://apictv.vtv.vn/api/v1/public/post/list/dao-tao?per_page=300');
        $parseResponse = json_decode($response->body(), false);

        foreach ($parseResponse->data->data as $post) {
            $request = new Request([
                'name' => $post->title,
                'description' => $post->description,
                'slug' => $this->generateSlug($post->title),
                'slug_id' => 0,
                'language' => 'vi',
                'model' => Post::class,
                'image' => $this->generateThumbnail('http://apictv.vtv.vn/storage/uploads' . $post->thumbnail) ?? 'http://ctv.local.ub/storage/galleries/2-540x360.jpg'
            ]);
            $post = $this->postRepository->createOrUpdate(array_merge($request->all(), [
                'author_id' => 1,
            ]));
            event(new CreatedContentEvent(POST_MODULE_SCREEN_NAME, $request, $post));

        }
    }

    /**
     * @param $name
     * @return int|string
     */
    private function generateSlug($name)
    {
        return $this->slugService->create(
            $name,
            0,
            Post::class
        );
    }

    /**
     * @param $url
     * @return false
     */
    private function generateThumbnail($url)
    {
        //$url = 'http://apictv.vtv.vn/storage/uploads/2021/02/20/dvd-tkb-truc-tuyen.png';
        $info = pathinfo($url);
        $contents = file_get_contents($url);
        $file = 'tmp/' . $info['basename'];
        file_put_contents($file, $contents);
        $uploaded_file = new UploadedFile($file, $info['basename']);
        $result = RvMedia::handleUpload($uploaded_file, 5, '');
        if (Arr::get($result, 'error') !== true) {
            return $result['data']->url;
        }
        return false;
    }

}
