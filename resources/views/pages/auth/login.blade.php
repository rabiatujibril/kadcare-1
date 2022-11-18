<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 5 admin dashboard template & web App ui kit.">
    <meta name="keyword"
          content="LUNO, Bootstrap 5, ReactJs, Angular, Laravel, VueJs, ASP .Net, Admin Dashboard, Admin Theme, HRMS, Projects, Hospital Admin, CRM Admin, Events, Fitness, Music, Inventory, Job Portal">
    <link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">
    <title>KADCARE :: Login</title>

    @include('commons.style')
</head>

<body class="layout-1 clickup-chrome-ext_installed radius-0 font-opensans" data-luno="theme-cyan"
      style="margin-bottom: 29px;" data-new-gr-c-s-check-loaded="14.1086.0" data-gr-ext-installed="">

<div class="wrapper">
    <div class="page-body auth px-xl-4 px-sm-2 px-0 py-lg-2 py-1">
        <div class="container-fluid">
            <div class="row g-0">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <div class="card shadow-sm w-100 p-4 p-md-5" style="max-width: 32rem;">
                        <div class="text-center mb-3">
                            {!! logo(80,80) !!}
                        </div>
                        <form class="row g-3" action="{{ route('auth.log-me') }}" method="post">
                            <div class="col-12 text-center mb-5">
                                <h1>Sign in</h1>
                                <span class="text-muted">Sign in to get access to KADCARE</span>
                            </div>
                            @csrf

                            <div class="col-12">
                                <div class="mb-2">
                                    <label class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control form-control-lg" placeholder="Enter your username">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-2">
                                    <div class="form-label">
                                        <span class="d-flex justify-content-between align-items-center"> Password
                                            <a class="text-primary" href="#">Forgot Password?</a>
                                        </span>
                                    </div>
                                    <input id="password" class="form-control form-control-lg" name="password" type="password" maxlength="20" placeholder="Enter your password">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" name="remember" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault"> Remember me </label>
                                </div>
                            </div>
                            <div class="col-12 text-center mt-4">
                                <button type="submit" class="btn btn-lg btn-block btn-dark lift text-uppercase" title="">SIGN IN</button>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
    <script>
        $(function () {
            $('#password').password()
        })
    </script>
</div>

<script src="./assets/js/theme.js"></script>


</body>
</html>
