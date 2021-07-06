<?php

use Botble\Blog\Repositories\Interfaces\PostInterface;

if (!function_exists('get_high_light_home')) {

    /**
     * @param int $limit
     * @param array $with
     * @return \Illuminate\Support\Collection
     */
    function get_high_light_home($limit, array $with = [])
    {
        $currentLocaleCode = Language::getCurrentLocaleCode();
        $setting = json_decode(setting('theme-high-light-home'), true);
        if ($setting && isset($setting[$currentLocaleCode])) {
            return app(PostInterface::class)->getListPostInList($setting[$currentLocaleCode]['ids'], $limit, $with);
        }
        return app(PostInterface::class)->getFeatured($limit, $with);
    }

}
