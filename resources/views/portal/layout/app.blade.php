<!DOCTYPE html>
<html lang="en-US">
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>The Express Home - Real Estate</title>

    <meta name="author" content="creativelayers">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    @php
    $config = config('site.assets.portal.css'); // Load configuration from site.php
    @endphp

    <!-- Styles -->
    @foreach ($config as $style)
        @if (Str::startsWith($style, 'http'))
            <link rel="stylesheet" href="{{ $style }}">
        @else
            <link rel="stylesheet" type="text/css" href="{{ asset("assets/portal/css/$style") }}">
        @endif
    @endforeach
        <!-- Font -->
    <link rel="stylesheet" href="font/fonts.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet">
        
            <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/portal/icon/flaticon_just-home.css")}}">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/portal/icon/icomoon/style.css")}}">
    

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="images/favicon.png">

</head>

<body class="body">

    <!-- preload -->
    {{-- <div class="preload preload-container">
        <div class="middle"></div>
    </div> --}}
    <!-- /preload -->

    <!-- #wrapper -->
    <div id="wrapper">
        <!-- #page -->
        <div id="page" class="home-1">

            <!-- header -->
            @include('portal.partials.navigation')
            <!-- /header -->

            <!-- main-content -->
            <div class="main-content default">
                @yield('content')
            </div>
            <!-- /main-content -->

            <!-- footer -->
                @include('portal.partials.footer')
            <!-- /footer -->

        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <!-- go top button -->
    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
        </svg>
    </div>
    <!-- /go top button -->

    

    <!-- login-popup -->
    <div class="modal fade modalCenter" id="modallogin">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-sm">
                <a href="#" class="btn-hide-modal" data-bs-dismiss="modal"><i class="icon-close"></i></a>
                <div class="image-left">
                    <img src="images/section/login.jpg" alt="">
                    <h3>Welcome to Your Real Estate Website</h3>
                </div>  
                <div class="content-right">
                    <h4>Sign into your account</h4>
                    <form class="form-login">
                        <fieldset class="name">
                            <input type="text" placeholder="Username" class="" name="text" tabindex="2" value="creative" aria-required="true" required="">
                        </fieldset>
                        <fieldset class="password">
                            <input type="password" placeholder="Password" class="" name="password" tabindex="2" value="" aria-required="true" required="">
                        </fieldset>
                        <div class="flex items-center justify-between w-full">
                            <div class="checkbox-item">
                                <label>
                                    <p>Remember me</p>
                                    <input type="checkbox">
                                    <span class="btn-checkbox"></span>
                                </label>
                            </div>
                            <a href="#" class="lost-password">Lost your password?</a>
                        </div>
                        <div class="button-submit w-full">
                            <button class="tf-button-primary w-full" type="submit">Login<i class="icon-arrow-right-add"></i></button>
                        </div>
                    </form>
                    <div class="flex items-center justify-center">
                        <p>Not a member?</p>
                        <a href="#" class="btn-show-register" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modalregister">Register here</a>
                    </div>
                    <ul class="wg-social-1">
                        <li><a href="#"><i class="flaticon-google"></i></a></li>
                        <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                        <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /login-popup -->

    <!-- register-popup -->
    <div class="modal fade modalCenter" id="modalregister">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-sm">
                <a href="#" class="btn-hide-modal" data-bs-dismiss="modal"><i class="icon-close"></i></a>
                <div class="image-left">
                    <img src="images/section/login.jpg" alt="">
                    <h3>Welcome to Your Real Estate Website</h3>
                </div>
                <div class="content-right">
                    <h4>Create an account</h4>
                    <form class="form-login">
                        <fieldset class="name">
                            <input type="text" placeholder="Username" class="" name="text" tabindex="2" value="" aria-required="true" required="">
                        </fieldset>
                        <fieldset class="email">
                            <input type="email" placeholder="Email" class="" name="email" tabindex="2" value="" aria-required="true" required="">
                        </fieldset>
                        <fieldset class="password">
                            <input type="password" placeholder="Password" class="" name="password" tabindex="2" value="" aria-required="true" required="">
                        </fieldset>
                        <fieldset class="password">
                            <input type="password" placeholder="Retype Password" class="" name="password" tabindex="2" value="" aria-required="true" required="">
                        </fieldset>
                        <div class="flex items-center justify-between">
                            <div class="checkbox-item">
                                <label>
                                    <p>I agree with terms & conditions</p>
                                    <input type="checkbox">
                                    <span class="btn-checkbox"></span>
                                </label>
                            </div>
                        </div>
                        <div class="button-submit">
                            <button class="tf-button-primary w-full" type="submit">Register<i class="icon-arrow-right-add"></i></button>
                        </div>
                    </form>
                    <div class="flex items-center justify-center">
                        <p>Have an account?</p>
                        <a href="#" class="btn-show-register" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modallogin">Log in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /register-popup -->

    <!-- Javascript -->
    @php
     $config = config('site.assets.portal.js'); // Load configuration file
    @endphp
    
    <!-- Scripts -->
    @foreach ($config as $script)
        @if (Str::startsWith($script, 'http'))
            <script src="{{ $script }}"></script>
        @else
            <script src="{{ asset("assets/portal/js/$script") }}"></script>
        @endif
    @endforeach


    

    <script>
        new Mmenu(document.querySelector("#menu"));
    </script>

</body>
</html>