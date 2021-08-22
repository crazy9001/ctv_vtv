<?php

register_page_template([
    'default' => 'Default',
]);

register_page_template([
    'introduce' => __('Landing Page'),
]);

register_sidebar([
    'id'          => 'category_sidebar',
    'name'        => 'Category sidebar',
    'description' => 'Nội dung tin tức hiển thị sidebar chuyên mục',
]);

register_sidebar([
    'id'          => 'posts_sidebar',
    'name'        => 'Posts sidebar',
    'description' => 'Nội dung tin tức hiển thị sidebar trong trang tin tức tổng hợp',
]);



register_sidebar([
    'id'          => 'tag_sidebar',
    'name'        => 'Tag sidebar',
    'description' => 'Nội dung tin tức hiển thị sidebar trong tag',
]);

register_sidebar([
    'id'          => 'footer_sidebar',
    'name'        => 'Footer sidebar',
    'description' => 'Nội dung hiển thị chân trang',
]);

register_sidebar([
    'id'          => 'ads_category_sidebar',
    'name'        => 'Ads category sidebar',
    'description' => 'Nội dung quảng cáo hiển thị trong chuyên mục',
]);

register_sidebar([
    'id'          => 'ads_post_sidebar',
    'name'        => 'Ads post sidebar',
    'description' => 'Nội dung quảng cáo hiển thị trong bài viết',
]);

register_sidebar([
    'id'          => 'ads_posts_sidebar',
    'name'        => 'Ads posts sidebar',
    'description' => 'Nội dung quảng cáo hiển thị trong trang tin tức tổng hợp',
]);



add_shortcode('google-map', __('Google map'), __('Custom map'), function ($shortCode) {
    return Theme::partial('short-codes.google-map', ['address' => $shortCode->content]);
});

shortcode()->setAdminConfig('google-map', Theme::partial('short-codes.google-map-admin-config'));

add_shortcode('box-new', __('Box Tin Tức'), __('Box Tin Tức'), function ($shortCode) {
    return Theme::partial('short-codes.box-new', ['category' => $shortCode->category, 'title' => $shortCode->title, 'type' => $shortCode->type, 'paginate' => $shortCode->paginate]);
});

shortcode()->setAdminConfig('box-new', Theme::partial('short-codes.box-new-admin-config'));

add_shortcode('gallery-media', __('Thư viện media'), __('Thư viện media'),
    function ($shortCode) {
        return Theme::partial('short-codes.gallery-media', ['title' => $shortCode->title, 'description' => $shortCode->description]);
    });

shortcode()->setAdminConfig('gallery-media', Theme::partial('short-codes.gallery-media-admin-config'));

add_shortcode('upcoming-events', __('Sự kiện sắp diễn ra'), __('Sự kiện sắp diễn ra'),
    function ($shortCode) {
        return Theme::partial('short-codes.upcoming-events', ['category' => $shortCode->category, 'title' => $shortCode->title]);
    });

shortcode()->setAdminConfig('upcoming-events', Theme::partial('short-codes.upcoming-events-admin-config'));

add_shortcode('new-letter', __('Đăng ký nhận tin'), __('Đăng ký nhận tin'),
    function ($shortCode) {
        return Theme::partial('short-codes.new-letter');
    });

add_shortcode('menu-content', __('Menu content'), __('Menu content'),
    function ($shortCode) {
        return Theme::partial('short-codes.menu-content');
    });


add_shortcode('college-slogan', __('Phương châm của trường'), __('Phương châm của trường'),
    function ($shortCode) {
        return Theme::partial('short-codes.college-slogan');
    });

add_shortcode('specialized-training', __('Chuyên ngành đào tạo'), __('Chuyên ngành đào tạo'),
    function ($shortCode) {
        return Theme::partial('short-codes.specialized-training');
    });

add_shortcode('lecturer-student', __('Giảng viên - Sinh viên'), __('Giảng viên - Sinh viên'),
    function ($shortCode) {
        return Theme::partial('short-codes.lecturer-student');
    });

add_shortcode('career-opportunities', __('Cơ hội việc làm'), __('Cơ hội việc làm'),
    function ($shortCode) {
        return Theme::partial('short-codes.career-opportunities');
    });

add_shortcode('student-reviews', __('Đánh giá của sinh viên'), __('Đánh giá của sinh viên'),
    function ($shortCode) {
        return Theme::partial('short-codes.student-reviews');
    });

add_shortcode('video-player', __('Video player'), __('Add video player'), function ($shortCode) {
    return Theme::partial('short-codes.video-player', ['url' => $shortCode->content, 'title' => $shortCode->title]);
});

theme_option()
    ->setField([
        'id'         => 'copyright',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'text',
        'label'      => __('Copyright'),
        'attributes' => [
            'name'    => 'copyright',
            'value'   => '© 2020 Cao đẳng truyền hình. All right reserved.',
            'options' => [
                'class'        => 'form-control',
                'placeholder'  => __('Change copyright'),
                'data-counter' => 250,
            ],
        ],
        'helper'     => __('Copyright on footer of site'),
    ])
    ->setField([
        'id'         => 'primary_font',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'googleFonts',
        'label'      => __('Primary font'),
        'attributes' => [
            'name'  => 'primary_font',
            'value' => 'Roboto',
        ],
    ])
    ->setField([
        'id'         => 'primary_color',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'customColor',
        'label'      => __('Primary color'),
        'attributes' => [
            'name'  => 'primary_color',
            'value' => '#ff2b4a',
        ],
    ])
    ->setField([
        'id'         => 'address',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'text',
        'label'      => __('Address'),
        'attributes' => [
            'name'    => 'address',
            'value'   => null,
            'options' => [
                'class'        => 'form-control',
                'data-counter' => 255,
            ],
        ],
    ])
    ->setField([
        'id'         => 'website',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'url',
        'label'      => __('Website'),
        'attributes' => [
            'name'    => 'website',
            'value'   => null,
            'options' => [
                'class'        => 'form-control',
                'data-counter' => 255,
            ],
        ],
    ])
    ->setField([
        'id'         => 'phone_number',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'url',
        'label'      => __('Phone number'),
        'attributes' => [
            'name'    => 'phone_number',
            'value'   => null,
            'options' => [
                'class'        => 'form-control',
                'data-counter' => 255,
            ],
        ],
    ])
    ->setField([
        'id'         => 'contact_email',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'email',
        'label'      => __('Email'),
        'attributes' => [
            'name'    => 'contact_email',
            'value'   => null,
            'options' => [
                'class'        => 'form-control',
                'data-counter' => 120,
            ],
        ],
    ])
    ->setField([
        'id'         => 'facebook_chat_enabled',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'select',
        'label'      => __('Enable Facebook chat?'),
        'attributes' => [
            'name'    => 'facebook_chat_enabled',
            'list'    => [
                'yes' => trans('core/base::base.yes'),
                'no'  => trans('core/base::base.no'),
            ],
            'value'   => 'yes',
            'options' => [
                'class' => 'form-control',
            ],
        ],
    ])
    ->setField([
        'id'         => 'facebook_page_id',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'text',
        'label'      => __('Facebook page ID'),
        'attributes' => [
            'name'    => 'facebook_page_id',
            'value'   => null,
            'options' => [
                'class' => 'form-control',
            ],
        ],
    ])
    ->setField([
        'id'         => 'facebook_comment_enabled_in_post',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'select',
        'label'      => __('Enable Facebook comment in post detail page?'),
        'attributes' => [
            'name'    => 'facebook_comment_enabled_in_post',
            'list'    => [
                'yes' => trans('core/base::base.yes'),
                'no'  => trans('core/base::base.no'),
            ],
            'value'   => 'yes',
            'options' => [
                'class' => 'form-control',
            ],
        ],
    ]);;

add_action('init', function () {
    config([
        'filesystems.disks.public.root' => public_path('storage'),
        'filesystems.disks.public.url'  => str_replace('/index.php', '', url('storage')),
    ]);
}, 124);

RvMedia::addSize('featured', 570, 350)->addSize('medium', 270, 200)->addSize('small', 100, 75);
