<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Login - Pos admin template</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets') }}/img/favicon.png">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
</head>

<body class="account-page">
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>

    <div class="main-wrapper">
        <div class="account-content">
            <div class="login-wrapper login-new">
                <div class="container">
                    <div class="login-content user-login">
                        <div class="login-logo">
                            <img src="{{ asset('assets') }}/img/logo.png" alt="img">
                            <a href="/" class="login-logo logo-white">
                                <img src="{{ asset('assets') }}/img/logo-white.png" alt>
                            </a>
                        </div>
                        <form action="/">
                            <div class="login-userset">
                                <div class="login-userheading">
                                    <h3>Sign In</h3>
                                    <h4>Access the Trifectaapps panel using your username and passcode.</h4>
                                </div>
                                <div class="form-login">
                                    <label class="form-label" for="username">Username</label>
                                    <div class="form-addons">
                                        <input type="text" class="form-control" id="username" required>
                                        <img src="{{ asset('assets') }}/img/icons/mail.svg" alt="img">
                                    </div>
                                </div>
                                <div class="form-login">
                                    <label class="form-label" for="password">Password</label>
                                    <div class="pass-group">
                                        <input type="password" class="pass-input" id="password" required>
                                        <span class="fas toggle-password fa-eye-slash"></span>
                                    </div>
                                </div>
                                <div class="form-login">
                                    <button class="btn btn-login" type="submit">Sign In</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="my-4 d-flex justify-content-center align-items-center copyright-text">
                        <p>Copyright &copy; 2023 Trifecta APPS. All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="customizer-links" id="setdata">
        <ul class="sticky-sidebar">
            <li class="sidebar-icons">
                <a href="#" class="navigation-add" data-bs-toggle="tooltip" data-bs-placement="left"
                    data-bs-original-title="Theme">
                    <i data-feather="settings" class="feather-five"></i>
                </a>
            </li>
        </ul>
    </div>

    <script src="{{asset('assets')}}/js/jquery-3.7.1.min.js" type="9e9df5c597fe5700c062c3a6-text/javascript"></script>

    <script src="{{asset('assets')}}/js/feather.min.js" type="9e9df5c597fe5700c062c3a6-text/javascript"></script>

    <script src="{{asset('assets')}}/js/bootstrap.bundle.min.js" type="9e9df5c597fe5700c062c3a6-text/javascript"></script>
    <script src="{{asset('assets')}}/js/theme-script.js" type="9e9df5c597fe5700c062c3a6-text/javascript"></script>
    <script src="{{asset('assets')}}/js/script.js" type="9e9df5c597fe5700c062c3a6-text/javascript"></script>
    <script src="{{ asset('assets') }}/js/rocket-loader.min.js" data-cf-settings="9e9df5c597fe5700c062c3a6-|49" defer>
    </script>
</body>

</html>
