{{--{!! Form::open(['route' => 'public.send.contact', 'method' => 'POST', 'class' => 'contact-form']) !!}--}}
{{--    <div class="contact-form-row">--}}
{{--        <div class="contact-column-6">--}}
{{--            <div class="contact-form-group">--}}
{{--                <label for="contact_name" class="contact-label required">{{ __('Name') }}</label>--}}
{{--                <input type="text" class="contact-form-input" name="name" value="{{ old('name') }}" id="contact_name"--}}
{{--                       placeholder="{{ __('Name') }}">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="contact-column-6">--}}
{{--            <div class="contact-form-group">--}}
{{--                <label for="contact_email" class="contact-label required">{{ __('Email') }}</label>--}}
{{--                <input type="email" class="contact-form-input" name="email" value="{{ old('email') }}" id="contact_email"--}}
{{--                       placeholder="{{ __('Email') }}">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="contact-form-row">--}}
{{--        <div class="contact-column-6">--}}
{{--            <div class="contact-form-group">--}}
{{--                <label for="contact_address" class="contact-label">{{ __('Address') }}</label>--}}
{{--                <input type="text" class="contact-form-input" name="address" value="{{ old('address') }}" id="contact_address"--}}
{{--                       placeholder="{{ __('Address') }}">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="contact-column-6">--}}
{{--            <div class="contact-form-group">--}}
{{--                <label for="contact_phone" class="contact-label">{{ __('Phone') }}</label>--}}
{{--                <input type="text" class="contact-form-input" name="phone" value="{{ old('phone') }}" id="contact_phone"--}}
{{--                       placeholder="{{ __('Phone') }}">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="contact-form-row">--}}
{{--        <div class="contact-column-12">--}}
{{--            <div class="contact-form-group">--}}
{{--                <label for="contact_subject" class="contact-label">{{ __('Subject') }}</label>--}}
{{--                <input type="text" class="contact-form-input" name="subject" value="{{ old('subject') }}" id="contact_subject"--}}
{{--                       placeholder="{{ __('Subject') }}">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="contact-form-row">--}}
{{--        <div class="contact-column-12">--}}
{{--            <div class="contact-form-group">--}}
{{--                <label for="contact_content" class="contact-label required">{{ __('Message') }}</label>--}}
{{--                <textarea name="content" id="contact_content" class="contact-form-input" rows="5" placeholder="{{ __('Message') }}">{{ old('content') }}</textarea>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    @if (setting('enable_captcha') && is_plugin_active('captcha'))--}}
{{--        <div class="contact-form-row">--}}
{{--            <div class="contact-column-12">--}}
{{--                <div class="contact-form-group">--}}
{{--                    {!! Captcha::display() !!}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endif--}}

{{--    <div class="contact-form-group"><p>{!! clean(__('The field with (<span style="color:#FF0000;">*</span>) is required.')) !!}</p></div>--}}

{{--    <div class="contact-form-group">--}}
{{--        <button type="submit" class="contact-button">{{ __('Send') }}</button>--}}
{{--    </div>--}}

{{--    <div class="contact-form-group">--}}
{{--        <div class="contact-message contact-success-message" style="display: none"></div>--}}
{{--        <div class="contact-message contact-error-message" style="display: none"></div>--}}
{{--    </div>--}}

{{--{!! Form::close() !!}--}}


<section class="mt-4" style="margin-bottom: 15px">
    <div class="container info__contact">
        <div class="row">
            <div class="col-lg-5 info__contact--info">
                <h3>Thông tin liên hệ</h3>
                <div class="hd-ct mt-2"></div>
                <div>
                    <h3 class="mt-2 font-size-20 ">
                        <span>TRƯỜNG CAO ĐẲNG TRUYỀN HÌNH ĐÀI TRUYỀN HÌNH VIỆT NAM</span>
                    </h3>
                </div>
                <div class="d-flex flex-row mt-3">
                    <i class="fas fa-home pt-1" style="color:#8B0000;font-size: 20px;"></i>
                    <span class="ml-3">Thị trấn Thường Tín - Huyện Thường Tín - TP.Hà Nội</span>
                </div>
                <div class="d-flex flex-row mt-3">
                    <i class="fas fa-phone pt-1" style="color:#8B0000;font-size: 20px;"></i>
                    <span class="ml-3">024.33853.048</span>
                </div>
                <div class="d-flex flex-row mt-3">
                    <i class="fas fa-voicemail pt-1" style="color:#8B0000;font-size: 20px;"></i>
                    <span class="ml-3">024.33851.592</span>
                </div>
                <div class="d-flex flex-row mt-3">
                    <i class="fas fa-envelope pt-1" style="color:#8B0000;font-size: 20px;"></i>
                    <div>
                        <span class="ml-3">ctv@vtv.vn</span>
                        <span class="ml-3">thongtintv.ctv@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 mt-2">
                {!! Form::open(['route' => 'public.send.contact', 'method' => 'POST', 'class' => 'from-input contact-form']) !!}
                <div class="row m-0">
                    <div class="col">
                        <label class="mb-1">Họ và tên</label>
                        <input type="text" class="form-control" placeholder="Nhập họ tên" name="name">
                    </div>
                    <div class="col">
                        <label class="mb-1">Số Điện Thoại</label>
                        <div class="d-flex flex-row">
                            <input initialCountry="auto" id="phone" type="tel" name="phone"/>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <label class="mb-1">Email</label>
                    <input type="text" class="form-control" placeholder="Nhập email" name="email">
                </div>
                <div class="col mt-3">
                    <label class="mb-1">Chủ đề</label>
                    <input type="text" class="form-control" placeholder="Nhập chủ đề" name="subject">
                </div>
                <div class="col mt-3">
                    <label class="mb-1">Nội dung tin nhắn</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
                </div>
                <button type="submit" class=" ml-3 mt-3">Gửi</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>

