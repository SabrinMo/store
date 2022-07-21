<!doctype html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Links of CSS files -->
    @include('website.ext.css')

    @yield('styles')

    <title> STORE | @yield('title') </title>

    <link rel="icon" type="image/png" href="assets/images/favicon.png">
</head>

<body>

<!-- Start Preloader Area -->
<div class="preloader">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="lds-spinner">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
</div>
<!-- End Preloader Area -->

<!-- Start Topbar Area -->

<!-- End Topbar Area -->

<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <a href="index.html">
                        <img src="assets/images/logo.png" alt="image">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="main-navbar navbar-with-black-color">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/images/logo.png" alt="image">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                Home
                                <i class="ri-arrow-down-s-line"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="index.html" class="nav-link">Home Demo - 1</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-2.html" class="nav-link active">Home Demo - 2</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-3.html" class="nav-link">Home Demo - 3</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                About
                                <i class="ri-arrow-down-s-line"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="about-style-1.html" class="nav-link">About Style One</a>
                                </li>
                                <li class="nav-item">
                                    <a href="about-style-2.html" class="nav-link">About Style Two</a>
                                </li>
                                <li class="nav-item">
                                    <a href="about-style-3.html" class="nav-link">About Style Three</a>
                                </li>
                                <li class="nav-item">
                                    <a href="gallery.html" class="nav-link">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a href="testimonials.html" class="nav-link">Testimonials</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Services
                                <i class="ri-arrow-down-s-line"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="services-style-1.html" class="nav-link">Services Style One</a>
                                </li>
                                <li class="nav-item">
                                    <a href="services-style-2.html" class="nav-link">Services Style Two</a>
                                </li>
                                <li class="nav-item">
                                    <a href="services-details.html" class="nav-link">Services Details</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Pages
                                <i class="ri-arrow-down-s-line"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="pricing.html" class="nav-link">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a href="team.html" class="nav-link">Team</a>
                                </li>
                                <li class="nav-item">
                                    <a href="faq.html" class="nav-link">FAQ</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Events
                                        <i class="ri-arrow-right-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="events.html" class="nav-link">Events</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="events-details.html" class="nav-link">Events Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Career
                                        <i class="ri-arrow-right-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="career.html" class="nav-link">Career</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="career-details.html" class="nav-link">Career Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Courses
                                        <i class="ri-arrow-right-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="courses.html" class="nav-link">Courses Grid</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="courses-right-sidebar.html" class="nav-link">Courses Right
                                                Sidebar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="courses-details.html" class="nav-link">Courses Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="profile-authentication.html" class="nav-link">Profile Authentication</a>
                                </li>
                                <li class="nav-item">
                                    <a href="membership-levels.html" class="nav-link">Membership Levels</a>
                                </li>
                                <li class="nav-item">
                                    <a href="purchase-guide.html" class="nav-link">Purchase Guide</a>
                                </li>
                                <li class="nav-item">
                                    <a href="terms-of-service.html" class="nav-link">Terms of Service</a>
                                </li>
                                <li class="nav-item">
                                    <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                </li>
                                <li class="nav-item">
                                    <a href="error-404.html" class="nav-link">404 Error</a>
                                </li>
                                <li class="nav-item">
                                    <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Projects
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="projects.html" class="nav-link">Projects</a>
                                </li>
                                <li class="nav-item">
                                    <a href="projects-details.html" class="nav-link">Projects Details</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Shop
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{route('/product')}}" class="nav-link">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a href="cart.html" class="nav-link">Cart</a>
                                </li>
                                <li class="nav-item">
                                    <a href="wishlist.html" class="nav-link">Wishlist</a>
                                </li>
                                <li class="nav-item">
                                    <a href="checkout.html" class="nav-link">Checkout</a>
                                </li>
                                <li class="nav-item">
                                    <a href="my-account.html" class="nav-link">My Account</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('/productdetail')}}" class="nav-link">Products Details</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Blog
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="blog-style-1.html" class="nav-link">Blog Style One</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-style-2.html" class="nav-link">Blog Style Two</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-right-sidebar.html" class="nav-link">Blog Right Sidebar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="author.html" class="nav-link">Author</a>
                                </li>
                                <li class="nav-item">
                                    <a href="categories.html" class="nav-link">Categories</a>
                                </li>
                                <li class="nav-item">
                                    <a href="tags.html" class="nav-link">Tags</a>
                                </li>
                                <li class="nav-item">
                                    <a href="search-page.html" class="nav-link">Search Page</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Single Post
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="single-blog-1.html" class="nav-link">Default</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="single-blog-2.html" class="nav-link">With Video</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="single-blog-3.html" class="nav-link">With Image Slider</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="pricing.html" class="nav-link">Pricing</a>
                        </li>

                        <li class="nav-item">
                            <a href="contact.html" class="nav-link">Contact</a>
                        </li>
                    </ul>

                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <i class="search-btn ri-search-line"></i>
                            <i class="close-btn ri-close-line"></i>
                            <div class="search-overlay search-popup">
                                <div class='search-box'>
                                    <form class="search-form">
                                        <input class="search-input" placeholder="Search..." type="text">

                                        <button class="search-button" type="submit">
                                            <i class="ri-search-line"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="option-item">
                            <div class="side-menu-btn">
                                <i class="ri-bar-chart-horizontal-line" data-bs-toggle="modal"
                                   data-bs-target="#sidebarModal"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>

            <div class="container">
                <div class="option-inner">
                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <i class="search-btn ri-search-line"></i>
                            <i class="close-btn ri-close-line"></i>
                            <div class="search-overlay search-popup">
                                <div class='search-box'>
                                    <form class="search-form">
                                        <input class="search-input" placeholder="Search..." type="text">

                                        <button class="search-button" type="submit">
                                            <i class="ri-search-line"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="option-item">
                            <div class="side-menu-btn">
                                <i class="ri-bar-chart-horizontal-line" data-bs-toggle="modal"
                                   data-bs-target="#sidebarModal"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Navbar Area -->


@yield('content')


<!-- End Footer Area -->
<footer class="footer-area with-black-background margin-zero pt-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500"
                     data-aos-once="true">
                    <div class="widget-logo">
                        <a href="index.html"><img src="assets/images/logo.png" alt="image"></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet consetetur sadi scing elitr sed diam nonumy.</p>

                    <ul class="widget-social">
                        <li>
                            <a href="https://www.facebook.com/EnvyTheme" target="_blank">
                                <i class="ri-facebook-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/?lang=en" target="_blank">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </li>

                        <li>
                            <a href="https://www.youtube.com/" target="_blank">
                                <i class="ri-youtube-fill"></i>
                            </a>
                        </li>

                        <li>
                            <a href="https://vimeo.com/" target="_blank">
                                <i class="ri-vimeo-fill"></i>
                            </a>
                        </li>

                        <li>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="ri-instagram-line"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget ps-5" data-aos="fade-up" data-aos-delay="60" data-aos-duration="600"
                     data-aos-once="true">
                    <h3>Links</h3>

                    <ul class="quick-links">
                        <li><a href="about-style-1.html">About Us</a></li>
                        <li><a href="services-style-2.html">Services</a></li>
                        <li><a href="blog-style-1.html">News</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="projects.html">Projects</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget ps-5" data-aos="fade-up" data-aos-delay="70" data-aos-duration="700"
                     data-aos-once="true">
                    <h3>Pages</h3>

                    <ul class="quick-links">
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="purchase-guide.html">Purchase Guide</a></li>
                        <li><a href="faq.html">FAQ's</a></li>
                        <li><a href="terms-of-service.html">Terms of Service</a></li>
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget" data-aos="fade-up" data-aos-delay="80" data-aos-duration="800"
                     data-aos-once="true">
                    <h3>Subscribe Newsletter</h3>

                    <form class="newsletter-form" data-bs-toggle="validator">
                        <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL"
                               required autocomplete="off">

                        <button type="submit" class="default-btn">Subscribe</button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <p>
                    Copyright @
                    <script data-cfasync="false"
                            src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                    <script>document.write(new Date().getFullYear())</script>
                    Coze All Rights Reserved by
                    <a href="https://envytheme.com/" target="_blank"> EnvyTheme</a>
                </p>
            </div>
        </div>
    </div>
    <div class="footer-shape-1">
        <img src="assets/images/footer/footer-shape-1.png" alt="image">
    </div>
    <div class="footer-shape-2">
        <img src="assets/images/footer/footer-shape-2.png" alt="image">
    </div>
    <div class="footer-shape-3">
        <img src="assets/images/footer/footer-shape-3.png" alt="image">
    </div>
</footer>
<!-- End Footer Area -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class="ri-arrow-up-s-line"></i>
</div>
<!-- End Go Top Area -->

<!-- Links of JS files -->
@include('website.ext.js') 

@yield('scripts')

</body>
</html>
