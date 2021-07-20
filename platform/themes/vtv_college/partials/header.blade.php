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
        <div class="div-button">
            <div class="d-flex flex-row h-100 justify-content-center align-items-center">
                <i class="fas fa-comment-alt" style="color: #fff; width: 33px; height: 29px"></i>
                <p>Chat trực tuyến</p>
            </div>
            <div class="up-top" onclick="topFunction()" id="btnUpTop">
                <img src="../assets/images/up-top.png" class="img-fluid"/>
            </div>
        </div>

        <header id="header-home">
            <div class="container" style="height: 100%">
                <div class="w-100 js-between h-100 d-flex flex-row">
                    @if (theme_option('logo'))
                        <div id="idLogo" class="col-2 px-0">
                            <a href="{{ route('public.single') }}" class="page-logo">
                                <img src="{{ RvMedia::getImageUrl(theme_option('logo')) }}" class="img-logo img-fluid" alt="{{ theme_option('site_title') }}">
                            </a>
                        </div>
                    @endif
                    <div class="col-10 block-mobile">
                        <div class="d-flex flex-row w-100 h-50">
                            <div class="col-7 w-100 col-lg-6 d-flex align-items-center">
                                <span class="header-title-vtv">TRƯỜNG CAO ĐẲNG TRUYỀN HÌNH</span>
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
                                <div class="col-1 d-flex align-items-center">
                                    <i class="fas fa-search" style="color: #fff"></i>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-row w-100 h-50">
{{--                            <div class="col-1 d-flex justify-content-center align-items-center">--}}
{{--                                <a href="trang-chu.html">--}}
{{--                                    <i class="fas fa-home" style="color: #ffdd00"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}
                            <div class="col-11 p-0 d-flex flex-row align-items-center">
                                {!!
                                    Menu::renderMenuLocation('main-menu', [
                                        'options' => ['class' => 'flex-row m-0 w-100 d-flex justify-content-lg-between'],
                                        'view'    => 'main-menu',
                                    ])
                                !!}
                            </div>
                        </div>
                    </div>
                    <div class="menu-mobile">
                        <i onclick="openNav()" class="fas fa-bars" style="color: #fff"></i>
                    </div>
                    <div id="mySidenav" class="sidenav">
                        <div class="d-flex flex-row-reverse align-items-center item-menu">
                            <a href="javascript:void(0)" class="text-white" onclick="closeNav()">&times;</a>
                        </div>
                        <a href="#">Giới thiệu</a>
                        <a href="#">Tin tức & sự kiện</a>
                        <a href="#">đào tạo</a>
                        <a href="#">Tuyển sinh</a>
                        <a href="#">Thư viện</a>
                        <a href="#">Sinh viên</a>
                        <a href="#">Cơ hội việc làm</a>
                        <a href="#">Thông báo</a>
                    </div>
                </div>
            </div>
        </header>