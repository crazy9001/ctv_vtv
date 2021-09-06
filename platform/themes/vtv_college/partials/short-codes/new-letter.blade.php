@if (is_plugin_active('newsletter'))
    <div class="register-container">
        <div class="bg-footer1 pt-3">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-6 d-flex justify-content-center mt-3 mt-md-3">
                        <div class="row d-flex align-items-center">
                            <img src="{{ Theme::asset()->url('images/email.png') }}" class="img-fluid"/>
                            <h3>{{ __('Sign up for email to receive the latest notifications') }}</h3>
                        </div>
                    </div>
                    <div class="col-xl-6 mt-3 d-flex justify-content-center">
                        <div class="row d-flex justify-content-center">
                            <form class="form-inline" action="{{ route('public.newsletter.subscribe') }}" method="post">
                                @csrf
                                <input
                                    type="email"
                                    id="newsletter_email"
                                    class="form-control"
                                    name="email"
                                    aria-describedby="emailHelp"
                                    placeholder="{{ __('Enter email to follow') }}"
                                />
                                <button class="row view-button">
                                    <i class="fas fa-paper-plane" style="color: #fff"></i>
                                    <div class="button-register">{{ __('Register') }}</div>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endif
