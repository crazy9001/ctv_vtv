<section class="section-tuyen-sinh">
    <div class="position-relative bg-page-2 d-flex flex-column">
        <div class="position-absolute d-none d-lg-block register-img">
            <img src="{{ Theme::asset()->url('images/img-bg-2.png') }}" class="img-fluid"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="video h-100 d-flex justify-content-center">
                        <div class="container d-flex align-items-center">
                            <div class="card-image">
                                <img src="{{ Theme::asset()->url('images/img-video.png') }}" class="img-resize"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-100 d-lg-none d-flex justify-content-center pt-3">
                    <button class="btn-send d-lg-none" data-toggle="modal" data-target="#exampleModalRegister">
                        Đăng ký
                    </button>
                    <div class="modal fade" id="exampleModalRegister" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            {!! Form::open(['route' => 'public.send.admission', 'method' => 'POST', 'class' => 'modal-content']) !!}
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Đăng ký</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row mb-5">
                                        <div class="col-lg-6">
                                            <div class="form-title mt-4">
                                                <h5 class="text-Lato-Bold font-size-12 text-color-9A0000">
                                                    Họ và tên
                                                </h5>
                                                <input type="text" name="name" class="form-control" aria-describedby="emailHelp" placeholder="Họ và tên"/>
                                            </div>
                                            <div class="form-title mt-4">
                                                <h5 class="text-Lato-Bold font-size-12 text-color-9A0000">
                                                    Ngày sinh
                                                </h5>
                                                <input type="date" name="dob" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="dd/mm/yyyy"/>
                                            </div>
                                            <div class="form-title mt-4">
                                                <h5 class="text-Lato-Bold font-size-12 text-color-9A0000">
                                                    Địa chỉ liên hệ
                                                </h5>
                                                <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Địa chỉ"/>
                                            </div>
                                            <div class="form-title mt-4">
                                                <h5 class="text-Lato-Bold font-size-12 text-color-9A0000">
                                                    Hệ Đào tạo
                                                </h5>
                                                <select id="inputState" class="form-control" name="mode_of_study">
                                                    <option selected>- Chọn -</option>
                                                    <option value="CĐ">Cao Đẳng</option>
                                                    <option value="ĐH">Đại Học</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-title mt-4">
                                                <h5 class="text-Lato-Bold font-size-12 text-color-9A0000">
                                                    Số điện thoại
                                                </h5>
                                                <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Số điện thoại"/>
                                            </div>
                                            <div class="form-title mt-4">
                                                <h5 class="text-Lato-Bold font-size-12 text-color-9A0000">
                                                    Email
                                                </h5>
                                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email"/>
                                            </div>
                                            <div class="form-title mt-4">
                                                <h5 class="text-Lato-Bold font-size-12 text-color-9A0000">
                                                    Trường thpt/ trường đại học
                                                </h5>
                                                <input type="text" name="school" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Trường THPT/ Trường đại học"/>
                                            </div>
                                            <div class="form-title mt-4">
                                                <h5 class="text-Lato-Bold font-size-12 text-color-9A0000">
                                                    Ngành đào tạo
                                                </h5>
                                                <select id="inputState" class="form-control" name="specialized">
                                                    <option selected>- Chọn -</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn-send d-lg-none">Gửi</button>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <div class="d-none d-lg-block col-lg-7">
                    {!! Form::open(['route' => 'public.send.admission', 'method' => 'POST', 'class' => 'bg-registor p-5']) !!}
                        <div>
                            <h3 class=" text-Lato-Bold text-color-9A0000 text-uppercase text-center">
                                đăng ký
                            </h3>
                            <div class=" d-flex mt-2 flex-row justify-content-center align-items-center ">
                                <div class="line"></div>
                                <i class="fas fa-book-open" style="color: #9a0000"></i>
                                <div class="line2"></div>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-lg-6">
                                <div class="form-title mt-4">
                                    <h5 class="text-Lato-Bold font-size-12 text-color-9A0000">
                                        Họ và tên
                                    </h5>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Họ và tên"/>
                                </div>
                                <div class="form-title mt-4">
                                    <h5 class="text-Lato-Bold font-size-12 text-color-9A0000">
                                        Ngày sinh
                                    </h5>
                                    <input type="date" name="dob" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="dd/mm/yyyy"/>
                                </div>
                                <div class="form-title mt-4">
                                    <h5 class="text-Lato-Bold font-size-12 text-color-9A0000">
                                        Địa chỉ liên hệ
                                    </h5>
                                    <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Địa chỉ"/>
                                </div>
                                <div class="form-title mt-4">
                                    <h5 class="text-Lato-Bold font-size-12 text-color-9A0000">
                                        Hệ Đào tạo
                                    </h5>
                                    <select id="inputState" class="form-control" name="mode_of_study">
                                        <option selected>- Chọn -</option>
                                        <option value="CĐ">Cao Đẳng</option>
                                        <option value="ĐH">Đại Học</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-title mt-4">
                                    <h5 class="text-Lato-Bold font-size-12 text-color-9A0000">
                                        Số điện thoại
                                    </h5>
                                    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Số điện thoại"/>
                                </div>
                                <div class="form-title mt-4">
                                    <h5 class="text-Lato-Bold font-size-12 text-color-9A0000">
                                        Email
                                    </h5>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email"/>
                                </div>
                                <div class="form-title mt-4">
                                    <h5 class="text-Lato-Bold font-size-12 text-color-9A0000">
                                        Trường thpt/ trường đại học
                                    </h5>
                                    <input type="text" name="school" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Trường THPT/ Trường đại học"/>
                                </div>
                                <div class="form-title mt-4">
                                    <h5 class="text-Lato-Bold font-size-12 text-color-9A0000">
                                        Ngành đào tạo
                                    </h5>
                                    <select id="inputState" class="form-control" name="specialized">
                                        <option selected>- Chọn -</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                            <button class="btn-send">GỬI</button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section>
