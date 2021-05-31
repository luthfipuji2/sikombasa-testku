    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>SIKOMBASA</title>


    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/benefit.css') }}">
    <link rel="stylesheet" href="{{ asset('css/price.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    



    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('css/tooplate-style.css') }}">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="http://newblog.test/admin/home">Dashboard <span class="sr-only">(current)</span></a>
            </li>
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
        </div>
    </div>

    </nav>
    </head>
    <body>

    <!-- PRE LOADER -->
    <div class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </div>

    <!-- slider photo -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <div class="container">
    <h2>Carousel Example</h2>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

        <div class="item active">
            <img src="./img/3.jpg" alt="Los Angeles" style="width:100%;">
            <div class="carousel-caption">
            <h3>Los Angeles</h3>
            <p>LA is always so much fun!</p>
            </div>
        </div>

        <div class="item">
            <img src="./img/2.jpg" alt="Chicago" style="width:100%;">
            <div class="carousel-caption">
            <h3>Chicago</h3>
            <p>Thank you, Chicago!</p>
            </div>
        </div>
        
        <div class="item">
            <img src="./img/11.jpg" alt="New York" style="width:100%;">
            <div class="carousel-caption">
            <h3>New York</h3>
            <p>We love the Big Apple!</p>
            </div>
        </div>
    
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>
    </div>


    <!-- SERVICE SECTION -->
    <section id="service" class="parallax-section">
        <div class="container">
            <div class="row">

                <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                        <!-- SECTION TITLE -->
                        <h2>All Old Posts</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur venenatis tincidunt.</p>
                </div>
                



            </div>
        </div>
    </section>


    <!-- ABOUT SECTION -->
    <section id="about" class="parallax-section">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-8">
                        <div class="about-image-thumb">
                            <img src="images/profile-image.png" class="wow fadeInUp img-responsive" data-wow-delay="0.2s" alt="about image">
                            <ul class="social-icon">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-instagram"></a></li>
                                <li><a href="#" class="fa fa-behance"></a></li>
                            </ul>
                        </div>
                </div>

                <div class="col-md-8 col-sm-12">
                        <div class="about-thumb">
                            <!-- SECTION TITLE -->
                            <div class="wow fadeInUp section-title" data-wow-delay="0.6s">
                                <h2>www.arrowempire.com</h2>
                                <p>Visit Us Today</p>
                            </div>
                            <div class="wow fadeInUp" data-wow-delay="0.8s">
                                <p>Praesent eleifend tristique nisl, nec finibus urna posuere nec. Quisque vel nunc eget arcu maximus facilisis non eu nisi. Aliquam ullamcorper est a nisl imperdiet luctus.</p>
                                <p>Sed sed convallis odio. Nulla scelerisque libero efficitur diam fermentum, quis tincidunt urna placerat. Maecenas sed tortor sed nisi semper ultricies. Nulla ornare metus in massa mollis scelerisque.</p>
                            </div>
                        </div>
                </div>

            </div>
        </div>
    </section>

    <!-- benefit -->
        <section id="work" class="parallax-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-sm-10">
                            <!-- SECTION TITLE -->
                            <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                            <h2>Benefit</h2>
                            </div>
                    </div>
        <div class="container">
    <div class="row">
        <div class="col-md-4">
        <div class="card card-2">
        <div class="text-center">
        <img  src="./img/frontend/clock1.gif" style="width:40%; left: -25px;""></img>    
        </div>
            <h3>Ionic Native</h3><br><br>
            <p>A curated set of   ES5/ES6/TypeScriptto your Ionic apps.</p>
        </div>
        </div>
        <div class="col-md-4">
        <div class="card card-2">
        <img  src="./img/frontend/rocket.gif" style="width:30%; left: -15px;"></img>
            <h3>Components</h3><br><br>
            <p>Tabs, buttons, inputs, lists, cards, and more! A comprehensive library</p>
        </div>
        </div>
        <div class="col-md-4">
        <div class="card card-3">
        <img  src="./img/frontend/diamond.gif" style="width:30%; left: -5px;""></img>    
            <h3>Theming</h3><br><br>
            <p>Learn how to easily customize and modify your app’s design to fit</p>
        </div>
        </div>
    </div>
    </div>
    </section>

            <!-- price -->
        <section>
    <div class="container-fluid">
        <div class="container">
        <div class="row">
            <div class="col-sm-4">
            <div class="card card_red text-center">
                <div class="title">
                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                <h2>Basic</h2>
                </div>
                <div class="price">
                <h4><sup>$</sup>25</h4>
                </div>
                <div class="option">
                <ul>
                    <li><i class="fa fa-check" aria-hidden="true"></i>10 GB Space</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>3 Domain Names</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>20 Emails Addresse</li>
                    <li><i class="fa fa-times" aria-hidden="true"></i>Live Support</li>
                    </ul>
                </div>
                <a href="#">Order Now</a>
            </div>
            </div>
            <div class="col-sm-4">
            <div class="card card_violet text-center">
                <div class="title">
                <i class="fa fa-plane" aria-hidden="true"></i>
                <h2>Premium</h2>
                </div>
                <div class="price">
                <h4><sup>$</sup>25</h4>
                </div>
                <div class="option">
                <ul>
                    <li><i class="fa fa-check" aria-hidden="true"></i>10 GB Space</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>3 Domain Names</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>20 Emails Addresse</li>
                    <li><i class="fa fa-times" aria-hidden="true"></i>Live Support</li>
                    </ul>
                </div>
                <a href="#">Order Now</a>
            </div>
            </div>
            <div class="col-sm-4">
            <div class="card card_three text-center">
                <div class="title">
                <i class="fa fa-rocket" aria-hidden="true"></i>
                <h2>Standart</h2>
                </div>
                <div class="price">
                <h4><sup>$</sup>50</h4>
                </div>
                <div class="option">
                <ul>
                    <li><i class="fa fa-check" aria-hidden="true"></i>50 GB Space</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>5 Domain Names</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>20 Emails Addresse</li>
                    <li><i class="fa fa-times" aria-hidden="true"></i>Live Support</li>
                    </ul>
                </div>
                <a href="#">Order Now</a>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>


    <!-- CONTACT SECTION -->
    <section id="contact" class="parallax-section">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                        <!-- SECTION TITLE -->
                        <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                            <h2>Get in touch</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur venenatis tincidunt.</p>
                        </div>
                </div>

                <div class="col-md-7 col-sm-10">
                        <!-- CONTACT FORM HERE -->
                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                            <form id="contact-form" action="" method="get">
                                <div class="col-md-6 col-sm-6">
                                    <input type="text" class="form-control" name="name" placeholder="Name" required="">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <textarea class="form-control" rows="5" name="message" placeholder="Message" required=""></textarea>
                                </div>
                                <div class="col-md-offset-8 col-md-4 col-sm-offset-6 col-sm-6">
                                    <button id="submit" type="submit" class="form-control" name="submit">Send Message</button>
                                </div>
                            </form>
                        </div>
                </div>

                <div class="col-md-5 col-sm-8">
                        <!-- CONTACT INFO -->
                        <div class="wow fadeInUp contact-info" data-wow-delay="0.4s">
                            <div class="section-title">
                                <h2>Contact Info</h2>
                                <p>Lorem ipsum dolor sit consectetur adipiscing morbi venenatis et tortor consectetur adipisicing lacinia tortor morbi ultricies.</p>
                            </div>

                            <p><i class="fa fa-map-marker"></i> 456 New Street 22000, New York City, USA</p>
                            <p><i class="fa fa-comment"></i> <a href="mailto:info@company.com">info@company.com</a></p>
                            <p><i class="fa fa-phone"></i> 010-020-0340</p>
                        </div>
                </div>

            </div>
        </div>
    </section>


    <!-- FOOTER SECTION -->
    <footer>
        <div class="container">
            <div class="row">

                <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.8s">
                        <p class="white-color">Copyright &copy; 2019 Your Company
                        </p>
                        <div class="wow fadeInUp" data-wow-delay="1s">
                            <ul class="social-icon">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-instagram"></a></li>
                                <li><a href="#" class="fa fa-behance"></a></li>
                                <li><a href="#" class="fa fa-github"></a></li>
                            </ul>
                        </div>
            </div>
        </div>
    </footer>

    <!-- SCRIPTS -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.parallax.js') }}"></script>
    <script src="{{ asset('js/smoothscroll.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/magnific-popup-options.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    </body>
    </html>
