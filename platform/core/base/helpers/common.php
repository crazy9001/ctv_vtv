<?php

use Botble\Base\Facades\DashboardMenuFacade;
use Botble\Base\Facades\PageTitleFacade;
use Botble\Base\Supports\Editor;
use Botble\Base\Supports\PageTitle;

if (!function_exists('anchor_link')) {
    /**
     * @param string $link
     * @param string $name
     * @param array $options
     * @return string
     * @throws Throwable
     * @deprecated
     */
    function anchor_link(?string $link, ?string $name, array $options = []): string
    {
        return Html::link($link, $name, $options);
    }
}

if (!function_exists('language_flag')) {
    /**
     * @param string $flag
     * @param string $name
     * @return string
     */
    function language_flag(string $flag, ?string $name = null): string
    {
        return Html::image(url(BASE_LANGUAGE_FLAG_PATH . $flag . '.svg'), $name, ['title' => $name, 'width' => 16]);
    }
}

if (!function_exists('render_editor')) {
    /**
     * @param string $name
     * @param string|null $value
     * @param bool $withShortCode
     * @param array $attributes
     * @return string
     * @throws Throwable
     */
    function render_editor(string $name, ?string $value = null, $withShortCode = false, array $attributes = []): string
    {
        return (new Editor)->render($name, $value, $withShortCode, $attributes);
    }
}

if (!function_exists('is_in_admin')) {
    /**
     * @return bool
     */
    function is_in_admin(): bool
    {
        $isInAdmin = request()->segment(1) === BaseHelper::getAdminPrefix();

        return apply_filters(IS_IN_ADMIN_FILTER, $isInAdmin);
    }
}

if (!function_exists('page_title')) {
    /**
     * @return PageTitle
     */
    function page_title()
    {
        return PageTitleFacade::getFacadeRoot();
    }
}

if (!function_exists('dashboard_menu')) {
    /**
     * @return \Botble\Base\Supports\DashboardMenu
     */
    function dashboard_menu()
    {
        return DashboardMenuFacade::getFacadeRoot();
    }
}

if (!function_exists('get_cms_version')) {
    /**
     * @return string
     */
    function get_cms_version(): string
    {
        try {
            return trim(get_file_data(core_path('VERSION'), false));
        } catch (Exception $exception) {
            return '5.9';
        }
    }
}

if (!function_exists('platform_path')) {
    /**
     * @param string|null $path
     * @return string
     */
    function platform_path($path = null): string
    {
        return base_path('platform/' . $path);
    }
}

if (!function_exists('core_path')) {
    /**
     * @param string|null $path
     * @return string
     */
    function core_path($path = null): string
    {
        return platform_path('core/' . $path);
    }
}

if (!function_exists('package_path')) {
    /**
     * @param string|null $path
     * @return string
     */
    function package_path($path = null): string
    {
        return platform_path('packages/' . $path);
    }
}

if (!function_exists('process_content_before_insert')) {

    function process_content_before_insert($content)
    {
        if($content){
        //x dd(mb_convert_encoding(trim(preg_replace('/\s\s+/', ' ', $content)),'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $doc = new DOMDocument();
            libxml_use_internal_errors(true);
            $doc->loadHTML(mb_convert_encoding(trim(preg_replace('/\s\s+/', ' ', $content)), 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            libxml_clear_errors();
            $xpath = new DOMXpath($doc);
            //dd($doc);
            foreach ($xpath->query('//div[contains(attribute::class, "video-content-box")]') as $node) {

                $title = isset($node->childNodes->item(3)->textContent) ? isset($node->childNodes->item(3)->textContent) : '';
                $url_video = $node->childNodes->item(1)->getAttribute('data-video');
                $newHtml = '[video-player title="' . $title. '"]' . $url_video . '[/video-player]';
                //$node->parentNode->removeChild($node);
                $node->parentNode->replaceChild($doc->createElement('div', $newHtml), $node);
                //$doc->appendChild($doc->createElement('div', $newHtml));
            }
            return $doc->C14N();
        }
        //return htmlspecialchars_decode(html_entity_decode($doc->C14N()));
    }
}

if (!function_exists('create_element_from_HTML')) {
    /**
     * @param $str
     * @return array
     */
    function create_element_from_HTML($str)
    {
        $nodes = array();
        $d = new DOMDocument();
        libxml_use_internal_errors(true);
        $d->loadHTML("{$str}");
        libxml_clear_errors();
        $child = $d->documentElement->firstChild;
        while ($child) {
            $nodes[] = $d->importNode($child, true);
            $child = $child->nextSibling;
        }
        return $nodes;
    }
}
