<?php

namespace Botble\Blog\Commands;

use Botble\Base\Events\CreatedContentEvent;
use Botble\Blog\Models\Post;
use Botble\Blog\Repositories\Interfaces\PostInterface;
use Botble\Slug\Services\SlugService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

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

        $response = Http::get('http://apictv.vtv.vn/api/v1/public/post/list/dao-tao?per_page=200');

        $parseResponse = json_decode($response->body(), false);

        foreach ($parseResponse->data->data as $post) {
            $request = new Request([
                'name' => $post->title,
                'description' => $post->description,
                'slug' => $this->generateSlug($post->title),
                'slug_id' => 0,
                'language' => 'vi',
                'model' => Post::class
            ]);
            $post = $this->postRepository->createOrUpdate(array_merge($request->all(), [
                'author_id' => 1,
            ]));
            event(new CreatedContentEvent(POST_MODULE_SCREEN_NAME, $request, $post));
            //break;
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

}
