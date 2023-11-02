<x-guest-layout>
    <x-guest-layout>
        <div class="login-header box-shadow">
            <div class="container-fluid d-flex justify-content-between align-items-center">
                <div class="brand-logo">
                    <a href="">
                        <img src="{{ asset('upload/settings/logo/' . UtilsHelp::settingApp()->logo_settings) }}" alt="{{ UtilsHelp::settingApp()->logo_settings }}" style="width: 110px;"></noscript>
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
                    <div class="col-md-6 col-lg-7">
                        <img src="{{ asset('frontend') }}/vendors/images/login-page-img.png" alt="">
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div class="login-box bg-white box-shadow border-radius-10">
                            <div class="login-title">
                                <h2 class="text-center text-primary" style="font-size: 18px;">Forgot Password</h2>
                            </div>

                            @include('partials.session')


                            <form method="post" action="{{ route('forgotPassword.storeResetPassword') }}">
                                @csrf
                                <div class="select-role">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn" style="background-color: #F3F2FF; border-color: #cecaff;">
                                            <input type="radio" name="options" id="user">
                                            <div class="icon"><img src="{{ asset('frontend') }}/vendors/images/person.svg" class="svg" alt=""></div>
                                            <span>I'm</span>
                                            Employee
                                        </label>
                                    </div>
                                </div>

                                @error('password')
                                <small class="text-danger">
                                    {{$message}}
                                </small>
                                @enderror
                                <div class="input-group custom mb-0">
                                    <input class="form-control form-control-lg" type="password" name="password" placeholder="Password" autocomplete="off" style="font-size: 16px; height: 47px;">
                                    <div class="input-group-append custom">
                                        <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                    </div>
                                </div>
                                @error('password_confirm')
                                <small class="text-danger">
                                    {{$message}}
                                </small>
                                @enderror
                                <div class="input-group custom mb-0">
                                    <input class="form-control form-control-lg" type="password" name="password_confirm" placeholder="Password konfirmasi" autocomplete="off" style="font-size: 16px; height: 47px;">
                                    <div class="input-group-append custom">
                                        <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                    </div>
                                </div>

                                <div class="row pb-30">
                                    <div class="col-6">
                                    </div>
                                    <div class="col-6">
                                        <a href="{{ url('login') }}" class="text-primary">
                                            Already Account ?
                                        </a>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group mb-0">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block" style="font-size: 16px">SUBMIT</button>
                                        </div>

                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-guest-layout>
</x-guest-layout>