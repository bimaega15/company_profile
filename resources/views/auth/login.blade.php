<head>
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
</head>
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
