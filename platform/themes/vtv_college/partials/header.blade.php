<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport"/>

        <!-- Fonts-->
        <link href="https://fonts.googleapis.com/css?family={{ urlencode(theme_option('primary_font', 'Roboto')) }}" rel="stylesheet" type="text/css">
        <!-- CSS Library-->

        <style>
            :root {
                --color-1st: {{ theme_option('primary_color', '#ff2b4a') }};
                --primary-font: '{{ theme_option('primary_font', 'Roboto') }}', sans-serif;
            }
        </style>

        {!! Theme::header() !!}
    </head>
    <body @if (BaseHelper::siteLanguageDirection() == 'rtl') dir="rtl" @endif>
{{--        <div class="div-button">--}}
{{--            <div class="d-flex flex-row h-100 justify-content-center align-items-center">--}}
{{--                <i class="fas fa-comment-alt" style="color: #fff; width: 33px; height: 29px"></i>--}}
{{--                <p>Chat trực tuyến</p>--}}
{{--            </div>--}}
{{--           --}}
{{--        </div>--}}
        <div id="btn-up-top" class="up-top" onclick="topFunction()" id="btnUpTop">
            <img src="{{ Theme::asset()->url('images/up-top.png') }}" class="img-fluid"/>
        </div>

        <header id="header-home">
            <div class="container green" style="height: 100%">
                <div class="w-100 js-between h-100 d-flex flex-row">
                    @if (theme_option('logo'))
                        <div class="div-fake"></div>
                        <div id="idLogo" class="px-0">
                            <a href="{{ route('public.single') }}" class="page-logo">
                                <img src="{{ RvMedia::getImageUrl(theme_option('logo')) }}" class="img-logo" alt="{{ theme_option('site_title') }}">
                            </a>
                        </div>
                    @endif
                    <div class="col-10 block-mobile">
                        <div class="d-flex flex-row w-100 h-50">
                            <div class="col-7 w-100 col-lg-6 d-flex align-items-center">
                                <span class="header-title-vtv">{{ __('College of Television') }}</span>
                            </div>
                            <div class="col-5 col-lg-6 d-flex flex-row item-title-top">
                                <div class="col-5 d-flex flex-row align-items-center">
                                    <i class="fas fa-phone-alt" style="color: #ffdd00"></i>
                                    <span class="header-phone">024.3385.048</span>
                                </div>
                                <div class="col-3 d-flex align-items-center">
                                    <span class="text-fanpage">Fanpage</span>
                                </div>
                                <div class="col-3 d-flex align-items-center">
                                    <span class="text-fanpage">Email</span>
                                </div>
                                <div onclick="openSearch()" style="cursor: pointer" class="col-1 d-flex align-items-center">
                                    <i class="fas fa-search" style="color: #fff"></i>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-row w-100 h-50">
                            <div class="col-11 p-0 d-flex flex-row align-items-center mw-100">
                                <div class="col-11 p-0 d-flex flex-row align-items-center header-web mw-100">
                                    <div class="container">
                                        {!!
                                            Menu::renderMenuLocation('main-menu', [
                                                'options' => ['class' => 'flex-row m-0 w-100 d-flex justify-content-lg-between'],
                                                'view'    => 'main-menu',
                                            ])
                                        !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="menu-mobile">
                            <i onclick="openNav()" class="fas fa-bars ic-open-menu"style="color: #fff"></i>
                            <i onclick="closeNav()" class="fas fa-times ic-close-menu" style="color: #fff"></i>
                        </div>
                        <div id="mySidenav" class="sidenav">
                            {!!
                                Menu::renderMenuLocation('main-menu', [
                                    'options' => ['class' => 'sidenav-menu-mobile'],
                                    'view'    => 'main-menu-mobile',
                                ])
                            !!}
                        </div>
                </div>
            </div>
            <div id="header-search">
                <div class="container">
                    <form class="row" action="{{ route('public.search') }}">
                        <input
                            id="inputSearch"
                            class="header-search-input d-search-none"
                            type="text" name="q" placeholder="{{ __('Type to search...') }}"
                        />
                        <div
                            onclick="closeSearch()"
                            id="closeSearch"
                            class="p-2 align-items-center"
                        >
                            <i class="fas fa-times"></i>
                        </div>
                    </form>
                </div>
            </div>
        </header>
