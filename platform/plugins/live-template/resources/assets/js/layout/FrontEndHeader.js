import React from "react";

const FrontEndHeader = ({props}) => {
    return (
        <header id="header-home">
            <div className="container">
                <div className="w-100 js-between h-100 d-flex flex-row">
                <div id="idLogo" className="col-2 px-0">
                    <img className="img-logo img-fluid" src="/vendor/core/plugins/live-template/assets/images/logo.png" />
                </div>
                <div className="col-10 block-mobile">
                    <div className="d-flex flex-row w-100 h-50">
                    <div className="col-7 w-100 col-lg-6 d-flex align-items-center">
                        <span className="header-title-vtv">TRƯỜNG CAO ĐẲNG TRUYỀN HÌNH</span>
                    </div>
                    <div className="col-5 col-lg-6 d-flex flex-row item-title-top">
                        <div className="col-5 d-flex flex-row align-items-center">
                        <i className="fas fa-phone-alt" style={{color: '#ffdd00'}} />
                        <span className="header-phone">024.3385.048</span>
                        </div>
                        <div className="col-3 d-flex align-items-center">
                        <span className="text-fanpage">Fanpage</span>
                        </div>
                        <div className="col-3 d-flex align-items-center">
                        <span className="text-fanpage">Email</span>
                        </div>
                        <div className="col-1 d-flex align-items-center">
                        <i className="fas fa-search" style={{color: '#fff'}} />
                        </div>
                    </div>
                    </div>
                    <div className="d-flex flex-row w-100 h-50">
                    <div className="col-1 d-flex justify-content-center align-items-center">
                        <a href="trang-chu.html">
                        <i className="fas fa-home" style={{color: '#ffdd00'}} />
                        </a>
                    </div>
                    <div className="
                        col-11
                        p-0
                        d-flex
                        flex-row
                        align-items-center
                        justify-content-between
                    ">
                        <a href="gioi-thieu.html" className="title-heder-bottom">Giới thiệu</a>
                        <a href="tin-tuc-su-kien.html" className="title-heder-bottom">Tin tức &amp; sự kiện</a>
                        <a href="dao-tao.html" className="title-heder-bottom">đào tạo</a>
                        <a href="tuyen-sinh.html" className="title-heder-bottom">Tuyển sinh</a>
                        <a href="thu-vien.html" className="title-heder-bottom">Thư viện</a>
                        <a href="sinh-vien.html" className="title-heder-bottom">Sinh viên</a>
                        <a href="co-hoi-viec-lam.html" className="title-heder-bottom">Cơ hội việc làm</a>
                        <a href="thong-bao.html" className="title-heder-bottom">Thông báo</a>
                    </div>
                    </div>
                </div>
                <div className="menu-mobile">
                    <i onclick="openNav()" className="fas fa-bars" style={{color: '#fff'}} />
                </div>
                <div id="mySidenav" className="sidenav">
                    <div className="d-flex flex-row-reverse align-items-center item-menu">
                    <a href="javascript:void(0)" className="text-white" onclick="closeNav()">×</a>
                    </div>
                    <a href="#">Giới thiệu</a>
                    <a href="#">Tin tức &amp; sự kiện</a>
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

    )
}

export default React.memo(FrontEndHeader)
