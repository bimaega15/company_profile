<x-guest-layout>
    <x-guest-layout>
        <div class="login-header box-shadow">
            <div class="container-fluid d-flex justify-content-between align-items-center">
                <div class="brand-logo">
                    <a href="">
                        <img src="{{ asset('upload/settings/logo/' . UtilsHelp::settingApp()->logo_settings) }}"
                            alt="{{ UtilsHelp::settingApp()->logo_settings }}" style="width: 110px;"></noscript>
                    </a>
                </div>
                <div class="login-menu">
                    <ul>

                        {{-- <li><a href="register.html" style="font-size: 13px; color: #fff;">
                        Website</a> --}}
                    </ul>
                </div>
            </div>
        </div>
        <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="{{ asset('frontend') }}/vendors/images/forgot-password.png" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="login-box bg-white box-shadow border-radius-10">
                            <div class="login-title">
                                <h2 class="text-center text-primary" style="font-size: 19px;">Forgot Password</h2>
                            </div>
                            @include('partials.session')
                            <h6 class="mb-20">Enter your email address to reset your password</h6>
                            <form method="post" action="{{ route('forgotPassword.storeForgotPassword') }}">
                                @csrf

                                {{-- @error('email')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror --}}
                                <div class="input-group custom">
                                    <input type="text" class="form-control form-control-lg" placeholder="Email"
                                        type="text" name="email" autocomplete="off" required>
                                    <div class="input-group-append custom">
                                        <span class="input-group-text"><i class="fa fa-envelope-o"
                                                aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-5">
                                        <div class="input-group mb-0">
                                            <!--
           use code for form submit
           <input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit">
          -->
                                            <button class="btn btn-primary btn-lg btn-block" type="submit"
                                                style="font-size: 16px;">Submit</button>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="font-16 weight-600 text-center" data-color="#707373">OR</div>
                                    </div>
                                    <div class="col-5">
                                        <div class="input-group mb-0">
                                            <a class="btn btn-outline-primary btn-lg btn-block"
                                                href="{{ url('login') }}" style="font-size: 16px;">Login</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-guest-layout>
</x-guest-layout>
