import React from "react";
import HighLightBox from "./HighLightBox";

const FrontEndContent = ({props}) => {
    return (
        <main>
            {/* Slider */}
            <div id="carouselExampleControls" data-interval={3000} className="carousel slide" data-ride="carousel">
                <div className="carousel-inner">
                    <div className="carousel-item active">
                        <img className="d-block w-100" src="/vendor/core/plugins/live-template/assets/images/slider.png"
                             alt="First slide"/>
                    </div>
                    <div className="carousel-item">
                        <img className="d-block w-100" src="/vendor/core/plugins/live-template/assets/images/slider.png"
                             alt="Second slide"/>
                    </div>
                    <div className="carousel-item">
                        <img className="d-block w-100" src="/vendor/core/plugins/live-template/assets/images/slider.png"
                             alt="Third slide"/>
                    </div>
                </div>
            </div>
            {/* End Slider */}
            {/* chuyennganh */}
            <div id="child" className="d-flex row mr-0 block-column">
                <div className="w-percent-one col-xl-3 col-lg-4 col-md-6 col-sm-6 col-8 row m-0">
                    <div className="d-flex w-25 justify-content-center align-items-center">
                        <img width={50} height={50} src="/vendor/core/plugins/live-template/assets/images/ic-cn-1.png" alt="Third slide"/>
                    </div>
                    <div className=" content w-75 d-flex flex-column justify-content-center p-auto">
                        <h3 className="text-title">Chuyên ngành đào tạo</h3>
                        <h4 className="text-content">Các chuyên ngành đào tạo của trường</h4>
                    </div>
                </div>
                <div className="w-percent-tow col-xl-3 col-lg-4 col-md-6 col-8 row m-0">
                    <div className="d-flex w-25 justify-content-center align-items-center">
                        <img width={50} height={50} src="/vendor/core/plugins/live-template/assets/images/ic-cn-2.png"
                             alt="Third slide"/>
                    </div>
                    <div className="content w-75 d-flex flex-column justify-content-center p-auto">
                        <h3 className="text-title">Tra cứu điểm thi</h3>
                        <h4 className="text-content">Tra cứu kết quả thi và học tập</h4>
                    </div>
                </div>
                <div className="w-percent-one col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 row m-0">
                    <div className="d-flex w-25 justify-content-center align-items-center">
                        <img width={50} height={50} src="/vendor/core/plugins/live-template/assets/images/ic-cn-3.png"
                             alt="Third slide"/>
                    </div>
                    <div className="content w-75 d-flex flex-column justify-content-center p-auto">
                        <h3 className="text-title">Hòm thư nội bộ</h3>
                        <h4 className="text-content">Email hòm thư của CTV</h4>
                    </div>
                </div>
                <div className="w-percent-tow col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 row m-0">
                    <div className="d-flex w-25 justify-content-center align-items-center">
                        <img width={50} height={50} src="/vendor/core/plugins/live-template/assets/images/ic-cn-4.png"
                             alt="Third slide"/>
                    </div>
                    <div className="content w-75 d-flex flex-column justify-content-center p-auto">
                        <h3 className="text-title">024.3385.048</h3>
                        <h4 className="text-content">Hotline liên hệ</h4>
                    </div>
                </div>
                <div className="w-percent-one col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 row m-0">
                    <div className="d-flex w-25 justify-content-center align-items-center">
                        <img width={50} height={50} src="/vendor/core/plugins/live-template/assets/images/ic-cn-3.png"
                             alt="Third slide"/>
                    </div>
                    <div className="content w-75 d-flex flex-column justify-content-center p-auto">
                        <h3 className="text-title">Facebook</h3>
                        <h4 className="text-content">Fanpage của trường</h4>
                    </div>
                </div>
            </div>
            {/* End chuyennganh */}
            {/* Tin tuc&Sukien */}
                <HighLightBox/>
            {/* End Tin tuc&Sukien */}
        </main>
    )
}

export default React.memo(FrontEndContent)
