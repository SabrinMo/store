@extends('website.layout')
@section('title','products')

@section('content')
     <!-- Sidebar Modal -->
     <div class="sidebarModal modal right fade" id="sidebarModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal"><i class="ri-close-line"></i></button>

                <div class="modal-body">
                    <a href="index.html">
                        <img src="assets/images/black-logo.png" class="black-logo" alt="image">
                        <img src="assets/images/logo.png" class="white-logo" alt="image">
                    </a>
                    <div class="sidebar-content">
                        <h3>About Us</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                        <div class="sidebar-btn">
                            <a href="contact.html" class="default-btn">Let’s Talk</a>
                        </div>
                    </div>
                    <div class="sidebar-contact-info">
                        <h3>Contact Information</h3>

                        <ul class="info-list">
                            <li><i class="ri-phone-fill"></i> <a href="tel:9901234567">+990-123-4567</a></li>
                            
                            <li><i class="ri-mail-line"></i> <a href="../../cdn-cgi/l/email-protection.html#95f6faeff0d5f2f8f4fcf9bbf6faf8"><span class="__cf_email__" data-cfemail="7c1f1306193c1b111d1510521f1311">[email&#160;protected]</span></a></li>

                            <li><i class="ri-map-pin-line"></i> 413 North Las Vegas, NV 89032</li>
                        </ul>
                    </div>
                    <ul class="sidebar-social-list">
                        <li><a href="#" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                        <li><a href="#" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                        <li><a href="#" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                        <li><a href="#" target="_blank"><i class="ri-instagram-fill"></i></a></li>
                    </ul>
                    <div class="contact-form">
                        <h3>Ready to Get Started?</h3>

                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" required data-error="Please enter your name" placeholder="Your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" required data-error="Please enter your email" placeholder="Your email address">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" class="form-control" required data-error="Please enter your phone number" placeholder="Your phone number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="Write your message..."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">Send Message<span></span></button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Modal -->
    
    <!-- Start Page Banner Area -->
    <div class="page-banner-area bg-4 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                <h2>Shop</h2>

                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Shop</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->
    
    <!-- Start Products Area -->
    <div class="products-area pt-100 pb-100">
        <div class="container">
            <div class="products-grid-sorting row align-items-center">
                <div class="col-lg-6 col-md-6 result-count">
                    <p>Showing 1–8 of 12 Results</p>
                </div>

                <div class="col-lg-6 col-md-6 ordering">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <form class="search-form">
                                <input type="search" class="search-field" placeholder="Search your products">
                                <button type="submit"><i class="ri-search-line"></i></button>
                            </form>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="select-box">
                                <select>
                                    <option>Default Sorting</option>
                                    <option>Popularity</option>
                                    <option>Latest</option>
                                    <option>Price: Low To High</option>
                                    <option>Price: High To Low</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-products-card">
                        <div class="products-image">
                            <a href="products-details.html"><img src="assets/images/products/products-1.jpg" alt="image"></a>

                            <div class="heart-line">
                                <a href="wishlist.html"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="heart-fill">
                                <a href="wishlist.html"><i class="ri-heart-fill"></i></a>
                            </div>
                            <div class="add-to-cart-btn">
                                <a href="cart.html" class="default-btn">Add To Cart</a>
                            </div>
                        </div>
                        <div class="products-content">
                            <h3>
                                <a href="products-details.html">Technology Book</a>
                            </h3>
                            <span>$ 13.25</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-products-card">
                        <div class="products-image">
                            <a href="products-details.html"><img src="assets/images/products/products-2.jpg" alt="image"></a>

                            <div class="heart-line">
                                <a href="wishlist.html"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="heart-fill">
                                <a href="wishlist.html"><i class="ri-heart-fill"></i></a>
                            </div>
                            <div class="add-to-cart-btn">
                                <a href="cart.html" class="default-btn">Add To Cart</a>
                            </div>
                        </div>
                        <div class="products-content">
                            <h3>
                                <a href="products-details.html">Think Outside The Box</a>
                            </h3>
                            <span>$ 10.25</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-products-card">
                        <div class="products-image">
                            <a href="products-details.html"><img src="assets/images/products/products-3.jpg" alt="image"></a>

                            <div class="heart-line">
                                <a href="wishlist.html"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="heart-fill">
                                <a href="wishlist.html"><i class="ri-heart-fill"></i></a>
                            </div>
                            <div class="add-to-cart-btn">
                                <a href="cart.html" class="default-btn">Add To Cart</a>
                            </div>
                            <div class="sale">Sale</div>
                        </div>
                        <div class="products-content">
                            <h3>
                                <a href="products-details.html">Adventure</a>
                            </h3>
                            <span>$ 20.25</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-products-card">
                        <div class="products-image">
                            <a href="products-details.html"><img src="assets/images/products/products-4.jpg" alt="image"></a>

                            <div class="heart-line">
                                <a href="wishlist.html"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="heart-fill">
                                <a href="wishlist.html"><i class="ri-heart-fill"></i></a>
                            </div>
                            <div class="add-to-cart-btn">
                                <a href="cart.html" class="default-btn">Add To Cart</a>
                            </div>
                        </div>
                        <div class="products-content">
                            <h3>
                                <a href="products-details.html">Notebook With Pen</a>
                            </h3>
                            <span>$ 40.25</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-products-card">
                        <div class="products-image">
                            <a href="products-details.html"><img src="assets/images/products/products-5.jpg" alt="image"></a>

                            <div class="heart-line">
                                <a href="wishlist.html"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="heart-fill">
                                <a href="wishlist.html"><i class="ri-heart-fill"></i></a>
                            </div>
                            <div class="add-to-cart-btn">
                                <a href="cart.html" class="default-btn">Add To Cart</a>
                            </div>
                        </div>
                        <div class="products-content">
                            <h3>
                                <a href="products-details.html">Complete IT Solution</a>
                            </h3>
                            <span>$ 43.25</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-products-card">
                        <div class="products-image">
                            <a href="products-details.html"><img src="assets/images/products/products-6.jpg" alt="image"></a>

                            <div class="heart-line">
                                <a href="wishlist.html"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="heart-fill">
                                <a href="wishlist.html"><i class="ri-heart-fill"></i></a>
                            </div>
                            <div class="add-to-cart-btn">
                                <a href="cart.html" class="default-btn">Add To Cart</a>
                            </div>
                            <div class="new">New</div>
                        </div>
                        <div class="products-content">
                            <h3>
                                <a href="products-details.html">How To Overcome Bug</a>
                            </h3>
                            <span>$ 23.25</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-products-card">
                        <div class="products-image">
                            <a href="products-details.html"><img src="assets/images/products/products-7.jpg" alt="image"></a>

                            <div class="heart-line">
                                <a href="wishlist.html"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="heart-fill">
                                <a href="wishlist.html"><i class="ri-heart-fill"></i></a>
                            </div>
                            <div class="add-to-cart-btn">
                                <a href="cart.html" class="default-btn">Add To Cart</a>
                            </div>
                        </div>
                        <div class="products-content">
                            <h3>
                                <a href="products-details.html">Complete Guide To Success</a>
                            </h3>
                            <span>$ 53.25</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-products-card">
                        <div class="products-image">
                            <a href="products-details.html"><img src="assets/images/products/products-8.jpg" alt="image"></a>

                            <div class="heart-line">
                                <a href="wishlist.html"><i class="ri-heart-line"></i></a>
                            </div>
                            <div class="heart-fill">
                                <a href="wishlist.html"><i class="ri-heart-fill"></i></a>
                            </div>
                            <div class="add-to-cart-btn">
                                <a href="cart.html" class="default-btn">Add To Cart</a>
                            </div>
                        </div>
                        <div class="products-content">
                            <h3>
                                <a href="products-details.html">Note Book Mockup</a>
                            </h3>
                            <span>$ 47.25</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="pagination-area">
                        <a href="#" class="prev page-numbers"><i class="ri-arrow-left-s-line"></i></a>
                        <span class="page-numbers current" aria-current="page">1</span>
                        <a href="#" class="page-numbers">2</a>
                        <a href="#" class="page-numbers">3</a>
                        <a href="#" class="next page-numbers"><i class="ri-arrow-right-s-line"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Products Area -->

    <!-- Start Overview Area -->
    <div class="overview-area pt-100 pb-75">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="overview-card">
                        <h3>Call Us</h3>
                        <span>
                            <a href="tel:9901234567">+990-123-4567</a>
                        </span>

                        <div class="overview-shape">
                            <img src="assets/images/overview/overview-shape.png" alt="image">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="overview-card">
                        <h3>Email Us</h3>
                        <span>
                            <a href="../../cdn-cgi/l/email-protection.html#86eeefe5e9fce3c6e1ebe7efeaa8e5e9eb"><span class="__cf_email__" data-cfemail="a2cacbc1cdd8c7e2c5cfc3cbce8cc1cdcf">[email&#160;protected]</span></a>
                        </span>

                        <div class="overview-shape">
                            <img src="assets/images/overview/overview-shape.png" alt="image">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="overview-card">
                        <h3>Tech Support</h3>
                        <span>
                            <a href="tel:15143125678">+1 (514) 312-5678</a>
                        </span>

                        <div class="overview-shape">
                            <img src="assets/images/overview/overview-shape.png" alt="image">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="overview-card">
                        <h3>Visit Us</h3>
                        <span>413 North Las Vegas, NV 89032</span>

                        <div class="overview-shape">
                            <img src="assets/images/overview/overview-shape.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Overview Area -->
    
@endsection


