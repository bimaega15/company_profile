<x-frontend-layout>
    <div class="page-title-area bg-8">
        <div class="container">
            <div class="page-title-content">
                <h2>Log In</h2>
                <ul>
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li class="active">Log In</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="user-area-style ptb-100">
        <div class="container">
            <div class="contact-form-action">
                <div class="account-title">
                    <h2>Log in</h2>
                </div>


                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <div class=" row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Email or Phone</label>
                                <input class="form-control" type="text" name="email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="login-action">
                                <span class="log-rem">
                                    <input id="remember" type="checkbox" name="remember">
                                    <label for="remember">Remember me!</label>
                                </span>
                                <span class="forgot-login">
                                    <a href="recover-password.html">Forgot your password?</a>
                                </span>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="default-btn" type="submit">
                                <span>Log in now</span>
                            </button>
                        </div>
                        <div class="col-12">
                            <p>Have an account? <a href="registration.html">Registration Now!</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

</x-frontend-layout>