{!! Theme::partial('header') !!}

<main>
    <div id="carouselExampleControls" data-interval="3000" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img
                    class="d-block w-100"
                    src="{{ Theme::asset()->url('images/slider.png') }}"
                    alt="First slide"
                />
            </div>
            <div class="carousel-item">
                <img
                    class="d-block w-100"
                    src="{{ Theme::asset()->url('images/slider.png') }}"
                    alt="Second slide"
                />
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ Theme::asset()->url('images/slider.png') }}" alt="Third slide"/>
            </div>
        </div>
    </div>

    <div id="child" class="d-flex row mr-0 block-column">
        <div class="w-percent-one col-xl-3 col-lg-4 col-md-6 col-sm-6 col-8 row m-0">
            <div class="d-flex w-25 justify-content-center align-items-center">
                <img width="50" height="50" src="{{ Theme::asset()->url('images/ic-cn-1.png') }}" alt="Third slide" />
            </div>
            <div class="content w-75 d-flex flex-column justify-content-center p-auto">
                <h3 class="text-title">Chuyên ngành đào tạo</h3>
                <h4 class="text-content">Các chuyên ngành đào tạo của trường</h4>
            </div>
        </div>
        <div class="w-percent-tow col-xl-3 col-lg-4 col-md-6 col-8 row m-0">
            <div class="d-flex w-25 justify-content-center align-items-center">
                <img width="50" height="50" src="{{ Theme::asset()->url('images/ic-cn-2.png') }}" alt="Third slide" />
            </div>
            <div class="content w-75 d-flex flex-column justify-content-center p-auto">
                <h3 class="text-title">Tra cứu điểm thi</h3>
                <h4 class="text-content">Tra cứu kết quả thi và học tập</h4>
            </div>
        </div>
        <div class="w-percent-one col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 row m-0 ">
            <div class="d-flex w-25 justify-content-center align-items-center">
                <img width="50" height="50" src="{{ Theme::asset()->url('images/ic-cn-3.png') }}" alt="Third slide" />
            </div>
            <div class="content w-75 d-flex flex-column justify-content-center p-auto ">
                <h3 class="text-title">Hòm thư nội bộ</h3>
                <h4 class="text-content">Email hòm thư của CTV</h4>
            </div>
        </div>
        <div class="w-percent-tow col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 row m-0">
            <div class="d-flex w-25 justify-content-center align-items-center">
                <img width="50" height="50" src="{{ Theme::asset()->url('images/ic-cn-4.png') }}" alt="Third slide" />
            </div>
            <div class="content w-75 d-flex flex-column justify-content-center p-auto ">
                <h3 class="text-title">024.3385.048</h3>
                <h4 class="text-content">Hotline liên hệ</h4>
            </div>
        </div>
        <div class="w-percent-one col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 row m-0 ">
            <div class="d-flex w-25 justify-content-center align-items-center">
                <img width="50" height="50" src="{{ Theme::asset()->url('images/ic-cn-5.png') }}" alt="Third slide" />
            </div>
            <div class="content w-75 d-flex flex-column justify-content-center p-auto ">
                <h3 class="text-title">Facebook</h3>
                <h4 class="text-content">Fanpage của trường</h4>
            </div>
        </div>
    </div>

    {!! Theme::content() !!}
</main>

{!! Theme::partial('footer') !!}
