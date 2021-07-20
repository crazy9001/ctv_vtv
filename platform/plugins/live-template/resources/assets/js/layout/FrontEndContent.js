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
                                                <h3>Trường Cao đẳng Truyền hình thông báo tuyển sinh Cao
                                                    đẳng, Trung cấp 2021</h3>

                                            </div>
                                        </div>
                                        <div className="col-4">
                                            <img src="/vendor/core/plugins/live-template/assets/images/img-daotao2.png"
                                                 className="img-fluid"/>
                                            <div className="content-daotao">
                                                <h3>Chắp cánh ước mơ cho bạn làm truyền thông, truyền hình</h3>
                                            </div>
                                        </div>
                                        <div className="col-4">
                                            <img src="/vendor/core/plugins/live-template/assets/images/img-daotao3.png"
                                                 className="img-fluid"/>
                                            <div className="content-daotao">
                                                <h3>Trường Cao đẳng Truyền hình thông báo xét tuyển đợt 2 hệ
                                                    Cao đẳng chính quy</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="carousel-item">
                                <div className="container">
                                    <div className="row">
                                        <div className="col-4">
                                            <a href="#">
                                                <img
                                                    src="/vendor/core/plugins/live-template/assets/images/img-daotao1.png"
                                                    className="img-fluid"/>
                                            </a>
                                            <div className="content-daotao">
                                                <h3>Trường Cao đẳng Truyền hình thông báo tuyển sinh Cao
                                                    đẳng, Trung cấp 2021</h3>

                                            </div>
                                        </div>
                                        <div className="col-4">
                                            <img src="/vendor/core/plugins/live-template/assets/images/img-daotao2.png"
                                                 className="img-fluid"/>
                                            <div className="content-daotao">
                                                <h3>Chắp cánh ước mơ cho bạn làm truyền thông, truyền hình</h3>
                                            </div>
                                        </div>
                                        <div className="col-4">
                                            <img src="/vendor/core/plugins/live-template/assets/images/img-daotao3.png"
                                                 className="img-fluid"/>
                                            <div className="content-daotao">
                                                <h3>Trường Cao đẳng Truyền hình thông báo xét tuyển đợt 2 hệ
                                                    Cao đẳng chính quy</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="carousel-item">
                                <div className="container">
                                    <div className="row">
                                        <div className="col-4">
                                            <a href="#">
                                                <img
                                                    src="/vendor/core/plugins/live-template/assets/images/img-daotao1.png"
                                                    className="img-fluid"/>
                                            </a>
                                            <div className="content-daotao">
                                                <h3>Trường Cao đẳng Truyền hình thông báo tuyển sinh Cao
                                                    đẳng, Trung cấp 2021</h3>

                                            </div>
                                        </div>
                                        <div className="col-4">
                                            <img src="/vendor/core/plugins/live-template/assets/images/img-daotao2.png"
                                                 className="img-fluid"/>
                                            <div className="content-daotao">
                                                <h3>Chắp cánh ước mơ cho bạn làm truyền thông, truyền hình</h3>
                                            </div>
                                        </div>
                                        <div className="col-4">
                                            <img src="/vendor/core/plugins/live-template/assets/images/img-daotao3.png"
                                                 className="img-fluid"/>
                                            <div className="content-daotao">
                                                <h3>Trường Cao đẳng Truyền hình thông báo xét tuyển đợt 2 hệ
                                                    Cao đẳng chính quy</h3>
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
        </main>

    )
}

export default React.memo(FrontEndContent)
