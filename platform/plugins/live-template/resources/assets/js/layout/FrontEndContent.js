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
                <div className="
            w-percent-one
            col-xl-3 col-lg-4 col-md-6 col-sm-6 col-8
            row
            m-0
          ">
                    <div className="d-flex w-25 justify-content-center align-items-center">
                        <img width={50} height={50} src="/vendor/core/plugins/live-template/assets/images/ic-cn-1.png"
                             alt="Third slide"/>
                    </div>
                    <div className="
              content
              w-75
              d-flex
              flex-column
              justify-content-center
              p-auto
            ">
                        <h3 className="text-title">Chuyên ngành đào tạo</h3>
                        <h4 className="text-content">Các chuyên ngành đào tạo của trường</h4>
                    </div>
                </div>
                <div className="w-percent-tow col-xl-3 col-lg-4 col-md-6 col-8 row m-0">
                    <div className="d-flex w-25 justify-content-center align-items-center">
                        <img width={50} height={50} src="/vendor/core/plugins/live-template/assets/images/ic-cn-2.png"
                             alt="Third slide"/>
                    </div>
                    <div className="
              content
              w-75
              d-flex
              flex-column
              justify-content-center
              p-auto
            ">
                        <h3 className="text-title">Tra cứu điểm thi</h3>
                        <h4 className="text-content">Tra cứu kết quả thi và học tập</h4>
                    </div>
                </div>
                <div className="
            w-percent-one
            col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6
            row
            m-0
          ">
                    <div className="d-flex w-25 justify-content-center align-items-center">
                        <img width={50} height={50} src="/vendor/core/plugins/live-template/assets/images/ic-cn-3.png"
                             alt="Third slide"/>
                    </div>
                    <div className="
              content
              w-75
              d-flex
              flex-column
              justify-content-center
              p-auto
            ">
                        <h3 className="text-title">Hòm thư nội bộ</h3>
                        <h4 className="text-content">Email hòm thư của CTV</h4>
                    </div>
                </div>
                <div className="
            w-percent-tow
            col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6
            row
            m-0
          ">
                    <div className="d-flex w-25 justify-content-center align-items-center">
                        <img width={50} height={50} src="/vendor/core/plugins/live-template/assets/images/ic-cn-4.png"
                             alt="Third slide"/>
                    </div>
                    <div className="
              content
              w-75
              d-flex
              flex-column
              justify-content-center
              p-auto
            ">
                        <h3 className="text-title">024.3385.048</h3>
                        <h4 className="text-content">Hotline liên hệ</h4>
                    </div>
                </div>
                <div className="
            w-percent-one
            col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6
            row
            m-0
          ">
                    <div className="d-flex w-25 justify-content-center align-items-center">
                        <img width={50} height={50} src="/vendor/core/plugins/live-template/assets/images/ic-cn-3.png"
                             alt="Third slide"/>
                    </div>
                    <div className="
              content
              w-75
              d-flex
              flex-column
              justify-content-center
              p-auto
            ">
                        <h3 className="text-title">Facebook</h3>
                        <h4 className="text-content">Fanpage của trường</h4>
                    </div>
                </div>
            </div>
            {/* End chuyennganh */}
            {/* Tin tuc&Sukien */}
                <HighLightBox/>
            {/* End Tin tuc&Sukien */}
            {/* Dao tao */}
            <section className="section-home">
                <div className="daotao-view">
                    <div className="datao-title">
                        <h3>Đào tạo</h3>
                        <div className="d-flex justify-content-center text-center">
                <span>Bạn yêu thích công việc Báo chí - Truyền hình &amp; Truyền thông và
                  muốn trở thành Người dẫn chương trình truyền hình, Phát thanh
                  viên, Phóng viên, Biên tập viên làm việc trong các Đài Truyền
                  hình - Phát thanh - Tòa soạn báo</span>
                        </div>
                        <div className="
                d-flex
                flex-row
                justify-content-center
                align-items-center
                mt-3
              ">
                            <div className="line"/>
                            <i className="fas fa-book-open" style={{color: '#fff'}}/>
                            <div className="line2"/>
                        </div>
                    </div>
                    <div id="carouseldaotao" className="carousel slide mt-4 px-auto" data-ride="carousel">
                        <ol className="carousel-indicators">
                            <li data-target="#carouseldaotao" data-slide-to={0} className="active"/>
                            <li data-target="#carouseldaotao" data-slide-to={1}/>
                            <li data-target="#carouseldaotao" data-slide-to={2}/>
                        </ol>
                        <div className="carousel-inner">
                            <div className="carousel-item active">
                                <div className="container">
                                    <div className="row">
                                        <div className="col-4">
                                            <a href="#">
                                                <img
                                                    src="/vendor/core/plugins/live-template/assets/images/img-daotao1.png"
                                                    className="img-fluid"/>
                                            </a>
                                            <div className="content-daotao">
                                                Trường Cao đẳng Truyền hình thông báo tuyển sinh Cao
                                                đẳng, Trung cấp 2021
                                            </div>
                                        </div>
                                        <div className="col-4">
                                            <img src="/vendor/core/plugins/live-template/assets/images/img-daotao2.png"
                                                 className="img-fluid"/>
                                            <div className="content-daotao">
                                                Chắp cánh ước mơ cho bạn làm truyền thông, truyền hình
                                            </div>
                                        </div>
                                        <div className="col-4">
                                            <img src="/vendor/core/plugins/live-template/assets/images/img-daotao3.png"
                                                 className="img-fluid"/>
                                            <div className="content-daotao">
                                                Trường Cao đẳng Truyền hình thông báo xét tuyển đợt 2 hệ
                                                Cao đẳng chính quy
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="carousel-item">
                                <div className="container">
                                    <div className="row">
                                        <div className="col-4">
                                            <img src="/vendor/core/plugins/live-template/assets/images/img-daotao1.png"
                                                 className="img-fluid"/>
                                            <div className="content-daotao">
                                                Trường Cao đẳng Truyền hình thông báo tuyển sinh Cao
                                                đẳng, Trung cấp 2021
                                            </div>
                                        </div>
                                        <div className="col-4">
                                            <img src="/vendor/core/plugins/live-template/assets/images/img-daotao2.png"
                                                 className="img-fluid"/>
                                            <div className="content-daotao">
                                                Chắp cánh ước mơ cho bạn làm truyền thông, truyền hình
                                            </div>
                                        </div>
                                        <div className="col-4">
                                            <img src="/vendor/core/plugins/live-template/assets/images/img-daotao3.png"
                                                 className="img-fluid"/>
                                            <div className="content-daotao">
                                                Trường Cao đẳng Truyền hình thông báo xét tuyển đợt 2 hệ
                                                Cao đẳng chính quy
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="carousel-item">
                                <div className="container">
                                    <div className="row">
                                        <div className="col-4">
                                            <img src="/vendor/core/plugins/live-template/assets/images/img-daotao1.png"
                                                 className="img-fluid"/>
                                            <div className="content-daotao">
                                                Trường Cao đẳng Truyền hình thông báo tuyển sinh Cao
                                                đẳng, Trung cấp 2021
                                            </div>
                                        </div>
                                        <div className="col-4">
                                            <img src="/vendor/core/plugins/live-template/assets/images/img-daotao2.png"
                                                 className="img-fluid"/>
                                            <div className="content-daotao">
                                                Chắp cánh ước mơ cho bạn làm truyền thông, truyền hình
                                            </div>
                                        </div>
                                        <div className="col-4">
                                            <img src="/vendor/core/plugins/live-template/assets/images/img-daotao3.png"
                                                 className="img-fluid"/>
                                            <div className="content-daotao">
                                                Trường Cao đẳng Truyền hình thông báo xét tuyển đợt 2 hệ
                                                Cao đẳng chính quy
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a className="carousel-control-prev" href="#carouseldaotao" role="button" data-slide="prev">
                            <div className="view-icon">
                                <i className="fas fa-chevron-left" style={{color: '#fff'}}/>
                            </div>
                            <span className="sr-only">Previous</span>
                        </a>
                        <a className="carousel-control-next" href="#carouseldaotao" role="button" data-slide="next">
                            <div className="view-icon">
                                <i className="fas fa-chevron-right" style={{color: '#fff'}}/>
                            </div>
                            <span className="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </section>
            {/* End Dao tao */}
            {/* tuyensinh */}
            <section className="section-home">
                <div className="title text-center">
                    <h3>Tuyển sinh</h3>
                    <div className="d-flex flex-row justify-content-center align-items-center">
                        <div className="line"/>
                        <i className="fas fa-book-open" style={{color: '#9a0000'}}/>
                        <div className="line2"/>
                    </div>
                </div>
                <div className="container tuyensinh">
                    <div className="row">
                        <div className="col-lg-6">
                            <div className="bg-tuyesinh d-flex flex-column">
                                <a href="#">
                                    <img className="img-fluid"
                                         src="/vendor/core/plugins/live-template/assets/images/bg-tuyensinh1.png"
                                         alt="Third slide"/>
                                </a>
                                <div className="time-item-ps d-flex flex-row align-items-center">
                                    <i className="far fa-calendar-alt"
                                       style={{color: '#666666', width: '17px', height: '16px'}}/>
                                    <span className="ml-2">27/03/2021 - 15:30:17</span>
                                </div>
                                <div className="title-tuyensinh">
                                    Thông báo gia hạn thời gian thu- nhận hồ sơ tuyển sinh LT từ
                                    CĐ lên ĐH các ngành: Báo chí, Quay phim, Điện tử.
                                </div>
                                <div className="content-tuyensinh">
                                    Với phương châm của Trường Cao đẳng Truyền hình là đào tạo
                                    nghề gắn với thực tiễn “Thực học – Thực hành”, ngay từ năm thứ
                                    nhất, sinh viên VTV College đã được trải nghiệm thực tế để
                                    nâng cao tay nghề.
                                </div>
                            </div>
                        </div>
                        <div className="col-lg-6">
                            <div className="tuyensinh-item row">
                                <div className="
                    col-sm-6
                    img-tuyensinh-item
                    d-flex
                    justify-content-center
                  ">
                                    <a href="#">
                                        <img
                                            src="./vendor/core/plugins/live-template/assets/images/img-item-tuyensinh1.png"
                                            className="img-fluid"/>
                                    </a>
                                </div>
                                <div className="col-sm-6 d-flex flex-column">
                                    <div className="time-item-ps d-flex flex-row align-items-center">
                                        <i className="far fa-calendar-alt"
                                           style={{color: '#666666', width: '17px', height: '16px'}}/>
                                        <span className="ml-2">27/03/2021 - 15:30:17</span>
                                    </div>
                                    <div className="content-item-tuyensinh">
                                        VTV College: Từ năm 2021 học sinh hệ song bằng có cơ hội học
                                        liên thông lên đại học
                                    </div>
                                </div>
                            </div>
                            <div className="tuyensinh-item row mt-3">
                                <div className="
                    col-sm-6
                    img-tuyensinh-item
                    d-flex
                    justify-content-center
                  ">
                                    <a href="#">
                                        <img
                                            src="/vendor/core/plugins/live-template/assets/images/img-item-tuyensinh1.png"
                                            className="img-fluid"/>
                                    </a>
                                </div>
                                <div className="col-sm-6 d-flex flex-column">
                                    <div className="time-item-ps d-flex flex-row align-items-center">
                                        <i className="far fa-calendar-alt"
                                           style={{color: '#666666', width: '17px', height: '16px'}}/>
                                        <span className="ml-2">27/03/2021 - 15:30:17</span>
                                    </div>
                                    <div className="content-item-tuyensinh">
                                        VTV College: Từ năm 2021 học sinh hệ song bằng có cơ hội học
                                        liên thông lên đại học
                                    </div>
                                </div>
                            </div>
                            <div className="tuyensinh-item row mt-3">
                                <div className="
                    col-sm-6
                    img-tuyensinh-item
                    d-flex
                    justify-content-center
                  ">
                                    <a href="#">
                                        <img
                                            src="/vendor/core/plugins/live-template/assets/images/img-item-tuyensinh1.png"
                                            className="img-fluid"/>
                                    </a>
                                </div>
                                <div className="col-sm-6 d-flex flex-column">
                                    <div className="time-item-ps d-flex flex-row align-items-center">
                                        <i className="far fa-calendar-alt"
                                           style={{color: '#666666', width: '17px', height: '16px'}}/>
                                        <span className="ml-2">27/03/2021 - 15:30:17</span>
                                    </div>
                                    <div className="content-item-tuyensinh">
                                        VTV College: Từ năm 2021 học sinh hệ song bằng có cơ hội học
                                        liên thông lên đại học
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {/*end tuyensinh */}
            {/* Media */}
            <section className="section-home">
                <div className="bg-media">
                    <div className="title d-flex justify-content-center">
                        <h3>Thư viện media</h3>
                    </div>
                    <div className="media-content d-flex justify-content-center">
                        <div className="text-content text-center">
                <span>
                  Bạn yêu thích công việc Báo chí - Truyền hình &amp; Truyền thông và
                  muốn trở thành Người dẫn chương trình truyền hình, Phát thanh
                  viên, Phóng viên, Biên tập viên làm việc trong các Đài Truyền
                  hình - Phát thanh - Tòa soạn báo
                </span>
                        </div>
                    </div>
                    <div className="w-100 d-flex justify-content-center">
                        <div id="wrapper_bu">
                            <div id="bu1"><p className="txt_Center txt_h1">1</p></div>
                            <div id="bu2"><p className="txt_Center txt_h1">2</p></div>
                            <div id="bu3"><p className="txt_Center txt_h1">3</p></div>
                            <div id="bu4"><p className="txt_Center txt_h1">4</p></div>
                            <div id="bu5"><p className="txt_Center txt_h1">5</p></div>
                        </div>
                    </div>
                </div>
            </section>
            {/* End Media */}
            {/* Sinh vien */}
            <section className="section-home">
                <div className="container">
                    <div className="title text-center">
                        <h3>Sinh viên</h3>
                        <div className="d-flex flex-row justify-content-center align-items-center">
                            <div className="line"/>
                            <i className="fas fa-book-open" style={{color: '#9a0000'}}/>
                            <div className="line2"/>
                        </div>
                    </div>
                    <div className="tab-sinhvien">
                        {/* Tab links */}
                        <div className="tab">
                            <div id="defaultOpen" className="tablinks">
                                TIN TỨC
                            </div>
                            <div className="tablinks">
                                TÁC PHẨM SINH VIÊN
                            </div>
                        </div>
                        {/* Tab content */}
                        <div id="TIN_TUC" className="tabcontent">
                            <div className="sv-tintuc">
                                <div className="row">
                                    <div className="col-xl-3 col-lg-4 col-md-6">
                                        <div className="bg-sv-tintuc d-flex flex-column">
                                            <a href="#">
                                                <img
                                                    src="/vendor/core/plugins/live-template/assets/images/hanh-trang-nhap-hoc-cho-tan-sinh-vien-1.png"
                                                    className="img-fluid"/>
                                            </a>
                                            <div className="time-item-ps d-flex flex-row align-items-center">
                                                <i className="far fa-calendar-alt"
                                                   style={{color: '#666666', width: '17px', height: '16px'}}/>
                                                <span className="ml-2">27/03/2021 - 15:30:17</span>
                                            </div>
                                            <div className="sv-tintuc-content">
                                                Bộ Y tế ra mắt MV Vững tin Việt Nam hưởng ứng chiến dịch
                                                truyền thông Niềm tin chiến
                                            </div>
                                        </div>
                                    </div>
                                    <div className="col-xl-3 col-lg-4 col-md-6">
                                        <div className="bg-sv-tintuc d-flex flex-column">
                                            <a href="#">
                                                <img
                                                    src="/vendor/core/plugins/live-template/assets/images/hanh-trang-nhap-hoc-cho-tan-sinh-vien-1.png"
                                                    className="img-fluid"/>
                                            </a>
                                            <div className="time-item-ps d-flex flex-row align-items-center">
                                                <i className="far fa-calendar-alt"
                                                   style={{color: '#666666', width: '17px', height: '16px'}}/>
                                                <span className="ml-2">27/03/2021 - 15:30:17</span>
                                            </div>
                                            <div className="sv-tintuc-content">
                                                Bộ Y tế ra mắt MV Vững tin Việt Nam hưởng ứng chiến dịch
                                                truyền thông Niềm tin chiến
                                            </div>
                                        </div>
                                    </div>
                                    <div className="col-xl-3 col-lg-4 col-md-6">
                                        <div className="bg-sv-tintuc d-flex flex-column">
                                            <a href="#">
                                                <img
                                                    src="/vendor/core/plugins/live-template/assets/images/hanh-trang-nhap-hoc-cho-tan-sinh-vien-1.png"
                                                    className="img-fluid"/>
                                            </a>
                                            <div className="time-item-ps d-flex flex-row align-items-center">
                                                <i className="far fa-calendar-alt"
                                                   style={{color: '#666666', width: '17px', height: '16px'}}/>
                                                <span className="ml-2">27/03/2021 - 15:30:17</span>
                                            </div>
                                            <div className="sv-tintuc-content">
                                                Bộ Y tế ra mắt MV Vững tin Việt Nam hưởng ứng chiến dịch
                                                truyền thông Niềm tin chiến
                                            </div>
                                        </div>
                                    </div>
                                    <div className="col-xl-3 col-lg-4 col-md-6">
                                        <div className="bg-sv-tintuc d-flex flex-column">
                                            <a href="#">
                                                <img
                                                    src="/vendor/core/plugins/live-template/assets/images/hanh-trang-nhap-hoc-cho-tan-sinh-vien-1.png"
                                                    className="img-fluid"/>
                                            </a>
                                            <div className="time-item-ps d-flex flex-row align-items-center">
                                                <i className="far fa-calendar-alt"
                                                   style={{color: '#666666', width: '17px', height: '16px'}}/>
                                                <span className="ml-2">27/03/2021 - 15:30:17</span>
                                            </div>
                                            <div className="sv-tintuc-content">
                                                Bộ Y tế ra mắt MV Vững tin Việt Nam hưởng ứng chiến dịch
                                                truyền thông Niềm tin chiến
                                            </div>
                                        </div>
                                    </div>
                                    <div className="col-xl-3 col-lg-4 col-md-6">
                                        <div className="bg-sv-tintuc d-flex flex-column">
                                            <a href="#">
                                                <img
                                                    src="/vendor/core/plugins/live-template/assets/images/hanh-trang-nhap-hoc-cho-tan-sinh-vien-1.png"
                                                    className="img-fluid"/>
                                            </a>
                                            <div className="time-item-ps d-flex flex-row align-items-center">
                                                <i className="far fa-calendar-alt"
                                                   style={{color: '#666666', width: '17px', height: '16px'}}/>
                                                <span className="ml-2">27/03/2021 - 15:30:17</span>
                                            </div>
                                            <div className="sv-tintuc-content">
                                                Bộ Y tế ra mắt MV Vững tin Việt Nam hưởng ứng chiến dịch
                                                truyền thông Niềm tin chiến
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="TAC_PHAM_SINH_VIEN" className="tabcontent">
                            <h3>Paris</h3>
                            <p>Paris is the capital of France.</p>
                        </div>
                    </div>
                </div>
            </section>
            {/* End Sinh vien */}
        </main>

    )
}

export default React.memo(FrontEndContent)
