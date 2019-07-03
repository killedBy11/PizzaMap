<html lang="en">
<head>
    <title>@yield('title')</title>
    <link rel=stylesheet href="https://s3-us-west-2.amazonaws.com/colors-css/2.2.0/colors.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.js"></script>
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
                <a class="btn ml-2 btn-primary" href="{{route("register")}}">Register</a></li>
            <li class="nav-item">
                <a class="btn ml-2 btn-secondary" href="{{route("login")}}">Login</a></li>
            @endguest
            @auth
            <li class="nav-item">
                <a class="btn ml-2 btn-primary" href="{{route("logout")}}">Log out</a></li>
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
<footer class="nb-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="about">
                    <img src="{{asset("/img/pizza.svg")}}" class="img-responsive center-block" style="max-height: 100px" alt="">
                    <p>Aici scriem despre noi scriem despre noi scriem despre noi scriem despre noi scriem despre noi scriem despre noi scriem despre noi scriem despre noi scriem despre noi scriem despre noi scriem despre noi scriem despre noi.</p>

                    {{--<div class="social-media">
                        <ul class="list-inline">
                            <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="http://www.nextbootstrap.com/" title=""><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>--}}
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-info-single">
                    <h2 class="title">Help Center</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> How to Pay</a></li>
                        <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> FAQ's</a></li>
                        <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Sitemap</a></li>
                        <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Delivery Info</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-info-single">
                    <h2 class="title">Customer information</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> About Us</a></li>
                        <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> FAQ's</a></li>
                        <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Sell Your Items</a></li>
                        <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Contact Us</a></li>
                        <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> RSS</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-info-single">
                    <h2 class="title">Security & privacy</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Terms Of Use</a></li>
                        <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Privacy Policy</a></li>
                        <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Return / Refund Policy</a></li>
                        <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Store Locations</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-info-single">
                    <h2 class="title">Help Center</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> How to Pay</a></li>
                        <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> FAQ's</a></li>
                        <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Sitemap</a></li>
                        <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Delivery Info</a></li>
                    </ul>
                </div>
            </div>
    </div>

    <section class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p>Copyright © 2019. PizzaMap.</p>
                </div>
                <div class="col-sm-12"></div>
            </div>
        </div>
    </section>
</footer>
<!-- /.footer -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

