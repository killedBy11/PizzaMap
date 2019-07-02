<html lang="en">
<head>
    <title>@yield('title')</title>
    <link rel=stylesheet href="https://s3-us-west-2.amazonaws.com/colors-css/2.2.0/colors.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-orange" style="background-color: #FF851B">
    <a class="navbar-brand" href="/"> <img class="logo" src={{ asset('/img/pizza.svg') }} height="35"> PizzaMap</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar1">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            @guest
            <li class="nav-item">
                <a class="btn ml-2 btn-primary" href="/register">Register</a></li>
            <li class="nav-item">
                <a class="btn ml-2 btn-secondary" href="/login">Login</a></li>
            @endguest
            @auth
            <li class="nav-item">
                <a class="btn ml-2 btn-primary" href="/logout">Log out</a></li>
                @if(App\Http\Controllers\HasCompany::hasCompany())
                <li class="nav_item">
                    <a class="btn ml-2 btn-secondary" href="/companyoverview/{{App\Http\Controllers\HasCompany::hasCompany()->id}}">My Company</a></li>
                @endif
            @endauth
        </ul>
    </div>
</nav>


@yield('content')



<!-- footer -->
<div class="footer bg-silver">
    <br>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                <div class="ft-logo"><img src={{ asset('img/pizza.svg') }} height="50" alt="">  PizzaMap</div>
            </div>
        </div>
        <hr class="footer-line">
        <div class="row">
            <!-- footer-about -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                <div class="footer-widget ">
                    <div class="footer-title">Company</div>
                    <ul class="list-unstyled">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Legal & Privacy</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.footer-about -->
            <!-- footer-links -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                <div class="footer-widget ">
                    <div class="footer-title">Quick Links</div>
                    <ul class="list-unstyled">
                        <li><a href="#">News</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.footer-links -->
            <!-- footer-links -->
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                <div class="footer-widget ">
                    <div class="footer-title">Social</div>
                    <ul class="list-unstyled">
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Google +</a></li>
                        <li><a href="#">Linked In</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.footer-links -->
            <!-- footer-links -->
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-6 col-6 ">
                <div class="footer-widget ">
                    <h3 class="footer-title">Subscribe Newsletter</h3>
                    <form>
                        <div class="newsletter-form">
                            <input class="form-control" placeholder="Enter Your Email address" type="text">
                            <button class="btn btn-default btn-sm" type="submit">Go</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.footer-links -->
            <!-- tiny-footer -->
        </div>
        <div class="row ">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center ">
                <div class="tiny-footer">
                    <p>Copyright © All Rights Reserved 2025 | PizzaMap and Pentalog </p>
                </div>
            </div>
            <!-- /. tiny-footer -->
        </div>
    </div>
</div>
<!-- /.footer -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

