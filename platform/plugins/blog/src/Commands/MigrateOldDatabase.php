<?php

namespace Botble\Blog\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

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

    /**
     * MigrateCommand constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     * @throws \Exception
     */
    public function handle()
    {
        $response = Http::get('http://apictv.vtv.vn/api/v1/public/post/list/tuyen-sinh?per_page=3');
        dd(json_decode($response->body()), true);
    }
}
