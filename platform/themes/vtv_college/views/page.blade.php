@php Theme::layout('no-slider') @endphp

{!! apply_filters(PAGE_FILTER_FRONT_PAGE_CONTENT, clean($page->content), $page) !!}