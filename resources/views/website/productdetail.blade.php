@extends('website.layout')
@section('title','productDetail')

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
                            
                            <li><i class="ri-mail-line"></i> <a href="../../cdn-cgi/l/email-protection.html#ea8985908faa8d878b8386c4898587"><span class="__cf_email__" data-cfemail="52313d283712353f333b3e7c313d3f">[email&#160;protected]</span></a></li>

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
    <div class="page-banner-area bg-5 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-banner-content" data-aos="fade-right" data-aos-delay="50" data-aos-duration="500" data-aos-once="true">
                <h2>Products Details</h2>

                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Products Details</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->
    
    <!-- Start Products Details Area -->
    <section class="products-details-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="products-details-image">
                        <a data-fancybox="gallery" href="assets/images/products-details.jpg">
                            <img src="{{asset('assets/images/products-details.jpg')}}" alt="image">
                        </a>
                        <div class="heart-line">
                            <a href="#"><i class="ri-heart-line"></i></a>
                        </div>
                        <div class="heart-fill">
                            <a href="#"><i class="ri-heart-fill"></i></a>
                        </div>
                        <div class="sale">Sale</div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="products-details-desc">
                        <h3>Technology Book</h3>
                        <div class="price">
                            <span class="new-price">$13.25</span>
                            <span class="old-price">$11.25</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat sed diam voluptua at vero eos et accusam et justo.</p>
                        <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna.</p>
                        <div class="products-meta">
                            <span>SKU: <span class="sku">321HU3</span></span>
                            <span>Category: <a href="#">Book</a></span>
                            <span>Availability: <span class="in-stock">In Stock</span></span>
                        </div>
                        <div class="products-add-to-cart align-items-center">
                            <div class="input-counter">
                                <span class="minus-btn"><i class="ri-subtract-line"></i></span>
                                <input type="text" value="1">
                                <span class="plus-btn"><i class="ri-add-line"></i></span>
                            </div>
                            <button type="submit" class="default-btn"><span>Add to Cart</span></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="products-details-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description">Description</a></li>
                    <li class="nav-item"><a class="nav-link" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews">Reviews (1)</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="description" role="tabpanel">
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit id diam laoreet fringilla etiam pretium semper non nibh sagittis lorem sagittis nisi ac hendrerit lorem sapien viverra feugiat purus est velit consectetur itudin aliquet erat imperdiet lorem ipsum dolor sit amet consectetur adipiscing elit id diam laoreet fringilla tiam pretium semper non nibh sagittis lorem sagittis nisi ac hendrerit lorem sapien viverra.</p>
                            <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat sed diam voluptua.</p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                        <div class="products-reviews">
                            <h3>Products Rating</h3>
                            <div class="rating">
                                <span class="ri-star-fill checked"></span>
                                <span class="ri-star-fill checked"></span>
                                <span class="ri-star-fill checked"></span>
                                <span class="ri-star-fill checked"></span>
                                <span class="ri-star-fill"></span>
                            </div>
                            <div class="rating-count">
                                <span>4.1 average based on 4 reviews.</span>
                            </div>
                            <div class="row">
                                <div class="side">
                                    <div>5 star</div>
                                </div>
                                <div class="middle">
                                    <div class="bar-container">
                                        <div class="bar-5"></div>
                                    </div>
                                </div>
                                <div class="side right">
                                    <div>02</div>
                                </div>
                                <div class="side">
                                    <div>4 star</div>
                                </div>
                                <div class="middle">
                                    <div class="bar-container">
                                        <div class="bar-4"></div>
                                    </div>
                                </div>
                                <div class="side right">
                                    <div>03</div>
                                </div>
                                <div class="side">
                                    <div>3 star</div>
                                </div>
                                <div class="middle">
                                    <div class="bar-container">
                                        <div class="bar-3"></div>
                                    </div>
                                </div>
                                <div class="side right">
                                    <div>04</div>
                                </div>
                                <div class="side">
                                    <div>2 star</div>
                                </div>
                                <div class="middle">
                                    <div class="bar-container">
                                        <div class="bar-2"></div>
                                    </div>
                                </div>
                                <div class="side right">
                                    <div>05</div>
                                </div>
                                <div class="side">
                                    <div>1 star</div>
                                </div>
                                <div class="middle">
                                    <div class="bar-container">
                                        <div class="bar-1"></div>
                                    </div>
                                </div>
                                <div class="side right">
                                    <div>00</div>
                                </div>
                            </div>
                        </div>

                        <div class="products-review-comments">
                            <h3>Reviews</h3>
                            <div class="user-review">
                                <img src="assets/images/products/image-1.jpg" alt="image">
                                
                                <div class="review-rating">
                                    <div class="review-stars">
                                        <i class='ri-star-fill checked'></i>
                                        <i class='ri-star-fill checked'></i>
                                        <i class='ri-star-fill checked'></i>
                                        <i class='ri-star-fill checked'></i>
                                        <i class='ri-star-fill checked'></i>
                                    </div>

                                    <span class="d-inline-block">James Anderson</span>
                                </div>

                                <span class="d-block sub-comment">Excellent</span>
                                <p>Very well built theme, couldn't be happier with it. Can't wait for future updates to see what else they add in.</p>
                            </div>
                        </div>

                        <div class="review-form-wrapper">
                            <h3>Add a Review</h3>
                            <p class="comment-notes">Your email address will not be published. Required fields are marked <span>*</span></p>

                            <form>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="rating">
                                            <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
                                            <input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
                                            <input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
                                            <input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
                                            <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name *">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email *">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea placeholder="Your review" class="form-control" cols="30" rows="6"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <p class="comment-form-cookies-consent">
                                            <input type="checkbox" id="test">
                                            <label for="test">Save my name, email, and website in this browser for the next time I comment.</label>
                                        </p>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn">
                                            <span>Submit</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Products Details Area -->

    <!-- Start Products Area -->
    <div class="products-area pb-75">
        <div class="container">
            <div class="related-title">
                <h2>Related Products</h2>
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
                            <a href="../../cdn-cgi/l/email-protection.html#412928222e3b2401262c20282d6f222e2c"><span class="__cf_email__" data-cfemail="5a32333935203f1a3d373b333674393537">[email&#160;protected]</span></a>
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
