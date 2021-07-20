<?php

use Botble\Widget\AbstractWidget;

class CategoryPostsWidget extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * @var string
     */
    protected $frontendTemplate = 'frontend';

    /**
     * @var string
     */
    protected $backendTemplate = 'backend';

    /**
     * @var string
     */
    protected $widgetDirectory = 'category-posts';

    /**
     * CategoryPosts constructor.
     */
    public function __construct()
    {
        parent::__construct([
            'name'        => __('Category Posts'),
            'description' => __('Category posts widget'),
            'category_id' => null,
            'limit' => 2,
            'show_image' => 1
        ]);
    }
}
