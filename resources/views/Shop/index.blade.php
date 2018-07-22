@extends('shop.layouts.app')

@section('title')
    Главная страница магазина
@endsection

@section('content1')
    <!-- START HOT-DEALS-AREA -->
    <div class="hot-deals-area carosel-circle">
        <div class="row">
            <div class="col-md-12">
                <div class="area-title">
                    <h3 class="title-group border-red gfont-1">Hot Deals</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-hot-deals">
                <!-- Start Single-hot-deals -->
                <div class="col-xs-12">
                    <div class="single-hot-deals">
                        <div class="hot-deals-photo">
                            <a href="#"><img src="{{ asset('shop') }}/img/hot-deals/1.jpg" alt="Product"></a>
                        </div>
                        <div class="count-down">
                            <div class="timer">
                                <div data-countdown="2017/12/31"></div>
                            </div>
                        </div>
                        <div class="hot-deals-text">
                            <h5><a href="#" class="name-group">Various Versions</a></h5>
                            <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></span>
                            <div class="price-box">
                                <span class="price gfont-2">$99.00</span>
                                <span class="old-price gfont-2">$110.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single-hot-deals -->
                <!-- Start Single-hot-deals -->
                <div class="col-xs-12">
                    <div class="single-hot-deals">
                        <div class="hot-deals-photo">
                            <a href="#"><img src="{{ asset('shop') }}/img/hot-deals/2.jpg" alt="Product"></a>
                        </div>
                        <div class="count-down">
                            <div class="timer">
                                <div data-countdown="2017/06/30"></div>
                            </div>
                        </div>
                        <div class="hot-deals-text">
                            <h5><a href="#" class="name-group">Trid Palm</a></h5>
                            <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></span>
                            <div class="price-box">
                                <span class="price gfont-2">$85.00</span>
                                <span class="old-price gfont-2">$120.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single-hot-deals -->
                <!-- Start Single-hot-deals -->
                <div class="col-xs-12">
                    <div class="single-hot-deals">
                        <div class="hot-deals-photo">
                            <a href="#"><img src="{{ asset('shop') }}/img/hot-deals/3.jpg" alt="Product"></a>
                        </div>
                        <div class="count-down">
                            <div class="timer">
                                <div data-countdown="2017/08/30"></div>
                            </div>
                        </div>
                        <div class="hot-deals-text">
                            <h5><a href="#" class="name-group">Established Fact</a></h5>
                            <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></span>
                            <div class="price-box">
                                <span class="price gfont-2">$90.00</span>
                                <span class="old-price gfont-2">$105.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single-hot-deals -->
            </div>
        </div>
    </div>
    <!-- END HOT-DEALS-AREA -->
    <!-- START SMALL-PRODUCT-AREA -->
    <div class="small-product-area carosel-navigation">
        <div class="row">
            <div class="col-md-12">
                <div class="area-title">
                    <h3 class="title-group gfont-1">Bestseller</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-bestseller sidebar">
                <div class="col-xs-12">
                    <!-- Start Single-Product -->
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-img" src="{{ asset('shop') }}/img/product/small/1.jpg" alt="Product">
                            </a>
                        </div>
                        <div class="product-description">
                            <h5><a href="#">Various Versions</a></h5>
                            <div class="price-box">
                                <span class="price">$99.00</span>
                                <span class="old-price">$120.00</span>
                            </div>
                            <span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
                        </div>
                    </div>
                    <!-- End Single-Product -->
                    <!-- Start Single-Product -->
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-img" src="{{ asset('shop') }}/img/product/small/2.jpg" alt="Product">
                            </a>
                        </div>
                        <div class="product-description">
                            <h5><a href="#">Established Fact</a></h5>
                            <div class="price-box">
                                <span class="price">$85.00</span>
                                <span class="old-price">$105.00</span>
                            </div>
                            <span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
                        </div>
                    </div>
                    <!-- End Single-Product -->
                    <!-- Start Single-Product -->
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-img" src="{{ asset('shop') }}/img/product/small/3.jpg" alt="Product">
                            </a>
                        </div>
                        <div class="product-description">
                            <h5><a href="#">Trid Palm</a></h5>
                            <div class="price-box">
                                <span class="price">$90.00</span>
                                <span class="old-price">$120.00</span>
                            </div>
                            <span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
                        </div>
                    </div>
                    <!-- End Single-Product -->
                    <!-- Start Single-Product -->
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-img" src="{{ asset('shop') }}/img/product/small/4.jpg" alt="Product">
                            </a>
                        </div>
                        <div class="product-description">
                            <h5><a href="#">Established Fact</a></h5>
                            <div class="price-box">
                                <span class="price">$85.00</span>
                                <span class="old-price">$105.00</span>
                            </div>
                            <span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
                        </div>
                    </div>
                    <!-- End Single-Product -->
                </div>
                <div class="col-xs-12">
                    <!-- Start Single-Product -->
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-img" src="{{ asset('shop') }}/img/product/small/5.jpg" alt="Product">
                            </a>
                        </div>
                        <div class="product-description">
                            <h5><a href="#">Various Versions</a></h5>
                            <div class="price-box">
                                <span class="price">$99.00</span>
                                <span class="old-price">$120.00</span>
                            </div>
                            <span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
                        </div>
                    </div>
                    <!-- End Single-Product -->
                    <!-- Start Single-Product -->
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-img" src="{{ asset('shop') }}/img/product/small/6.jpg" alt="Product">
                            </a>
                        </div>
                        <div class="product-description">
                            <h5><a href="#">Established Fact</a></h5>
                            <div class="price-box">
                                <span class="price">$85.00</span>
                                <span class="old-price">$110.00</span>
                            </div>
                            <span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
                        </div>
                    </div>
                    <!-- End Single-Product -->
                    <!-- Start Single-Product -->
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-img" src="{{ asset('shop') }}/img/product/small/7.jpg" alt="Product">
                            </a>
                        </div>
                        <div class="product-description">
                            <h5><a href="#">Trid Palm</a></h5>
                            <div class="price-box">
                                <span class="price">$90.00</span>
                                <span class="old-price">$120.00</span>
                            </div>
                            <span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
                        </div>
                    </div>
                    <!-- End Single-Product -->
                    <!-- Start Single-Product -->
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-img" src="{{ asset('shop') }}/img/product/small/8.jpg" alt="Product">
                            </a>
                        </div>
                        <div class="product-description">
                            <h5><a href="#">Established Fact</a></h5>
                            <div class="price-box">
                                <span class="price">$85.00</span>
                                <span class="old-price">$105.00</span>
                            </div>
                            <span class="rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</span>
                        </div>
                    </div>
                    <!-- End Single-Product -->
                </div>
            </div>
        </div>



    </div>
    <!-- END SMALL-PRODUCT-AREA -->
    <!-- START RECENT-POSTS -->
    <div class="shop-blog-area sidebar">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-group border-red gfont-1">RECENT POSTS </h3>
            </div>
        </div>
        <div class="row">
            <div class="active-recent-posts carosel-circle">
                <!-- Start Single-Recent-Posts -->
                <div class="col-xs-12">
                    <div class="single-recent-posts">
                        <div class="recent-posts-photo">
                            <img src="{{ asset('shop') }}/img/posts/1.jpg" alt="Recent Posts">
                        </div>
                        <div class="recent-posts-text">
                            <h5><a href="#" class="recent-posts-title">swimwear for women</a></h5>
                            <span class="recent-posts-date">23/12/2015 | BootExpert Theme</span>
                            <p class="posts-short-brif">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                            <a href="#" class="posts-read-more">Read more ...</a>
                        </div>
                    </div>
                </div>
                <!-- End Single-Recent-Posts -->
                <!-- Start Single-Recent-Posts -->
                <div class="col-xs-12">
                    <div class="single-recent-posts">
                        <div class="recent-posts-photo">
                            <img src="{{ asset('shop') }}/img/posts/2.jpg" alt="Recent Posts">
                        </div>
                        <div class="recent-posts-text">
                            <h5><a href="#" class="recent-posts-title">swimwear for women</a></h5>
                            <span class="recent-posts-date">23/12/2015 | BootExpert Theme</span>
                            <p class="posts-short-brif">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                            <a href="#" class="posts-read-more">Read more ...</a>
                        </div>
                    </div>
                </div>
                <!-- End Single-Recent-Posts -->
                <!-- Start Single-Recent-Posts -->
                <div class="col-xs-12">
                    <div class="single-recent-posts">
                        <div class="recent-posts-photo">
                            <img src="{{ asset('shop') }}/img/posts/3.jpg" alt="Recent Posts">
                        </div>
                        <div class="recent-posts-text">
                            <h5><a href="#" class="recent-posts-title">swimwear for women</a></h5>
                            <span class="recent-posts-date">23/12/2015 | BootExpert Theme</span>
                            <p class="posts-short-brif">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                            <a href="#" class="posts-read-more">Read more ...</a>
                        </div>
                    </div>
                </div>
                <!-- End Single-Recent-Posts -->
                <!-- Start Single-Recent-Posts -->
                <div class="col-xs-12">
                    <div class="single-recent-posts">
                        <div class="recent-posts-photo">
                            <img src="{{ asset('shop') }}/img/posts/4.jpg" alt="Recent Posts">
                        </div>
                        <div class="recent-posts-text">
                            <h5><a href="#" class="recent-posts-title">swimwear for women</a></h5>
                            <span class="recent-posts-date">23/12/2015 | BootExpert Theme</span>
                            <p class="posts-short-brif">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                            <a href="#" class="posts-read-more">Read more ...</a>
                        </div>
                    </div>
                </div>
                <!-- End Single-Recent-Posts -->
                <!-- Start Single-Recent-Posts -->
                <div class="col-xs-12">
                    <div class="single-recent-posts">
                        <div class="recent-posts-photo">
                            <img src="{{ asset('shop') }}/img/posts/1.jpg" alt="Recent Posts">
                        </div>
                        <div class="recent-posts-text">
                            <h5><a href="#" class="recent-posts-title">swimwear for women</a></h5>
                            <span class="recent-posts-date">23/12/2015 | BootExpert Theme</span>
                            <p class="posts-short-brif">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                            <a href="#" class="posts-read-more">Read more ...</a>
                        </div>
                    </div>
                </div>
                <!-- End Single-Recent-Posts -->
            </div>
        </div>
    </div>
    <!-- END RECENT-POSTS -->

@endsection

@section('content2')
    <!-- START PRODUCT-AREA (1) -->
    <div class="product-area">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <!-- Start Product-Menu -->
                <div class="product-menu">
                    <div class="product-title">
                        <h3 class="title-group-2 gfont-1">Electronic</h3>
                    </div>

                    <ul role="tablist">
                        <li role="presentation" class=" active"><a href="#display-1-1" role="tab" data-toggle="tab">Speaker</a></li>
                        <li role="presentation"><a href="#display-1-2" role="tab" data-toggle="tab">TV</a></li>
                        <li role="presentation"><a href="#display-1-3"  role="tab" data-toggle="tab">Mobile</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Product-Menu -->
        <div class="clear"></div>
        <!-- Start Product -->
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="product carosel-navigation">
                    <div class="tab-content">
                        <!-- Product = display-1-1 -->
                        <div role="tabpanel" class="tab-pane fade in active" id="display-1-1">
                            <div class="row">
                                <div class="active-product-carosel">
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="label_new">
                                                <span class="new">new</span>
                                            </div>
                                            <div class="sale-off">
                                                <span class="sale-percent">-55%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/12.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/12bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                            </div>
                                            <div class="product-action">
                                                <div class="button-group">
                                                    <div class="product-button">
                                                        <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                    </div>
                                                    <div class="product-button-2">
                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal"><i class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="label_new">
                                                <span class="new">new</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/12bg.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/12.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/2.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/2bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/2bg.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/2.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$105.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="sale-off">
                                                <span class="sale-percent">-20%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/5.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/3bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="sale-off">
                                                <span class="sale-percent">-25%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/6.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/4bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                </div>
                            </div>
                        </div>
                        <!-- End Product = display-1-1 -->
                        <!-- Start Product = display-1-2 -->
                        <div role="tabpanel" class="tab-pane fade" id="display-1-2">
                            <div class="row">
                                <div class="active-product-carosel">
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="label_new">
                                                <span class="new">new</span>
                                            </div>
                                            <div class="sale-off">
                                                <span class="sale-percent">-55%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/3.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/3bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="label_new">
                                                <span class="new">new</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/2.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/2bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$105.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/1.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/1bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/4.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/4bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="sale-off">
                                                <span class="sale-percent">-20%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/5.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/3bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="sale-off">
                                                <span class="sale-percent">-25%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/6.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/4bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$105.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                </div>
                            </div>
                        </div>
                        <!-- End Product = display-1-2 -->
                        <!-- Start Product = di3play-1-1 -->
                        <div role="tabpanel" class="tab-pane fade" id="display-1-3">
                            <div class="row">
                                <div class="active-product-carosel">
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="label_new">
                                                <span class="new">new</span>
                                            </div>
                                            <div class="sale-off">
                                                <span class="sale-percent">-55%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/1.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/1bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="label_new">
                                                <span class="new">new</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/2.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/2bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/3.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/3bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/4.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/4bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$105.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="sale-off">
                                                <span class="sale-percent">-20%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/5.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/3bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="sale-off">
                                                <span class="sale-percent">-25%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/6.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/4bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                </div>
                            </div>
                        </div>
                        <!-- End Product = display-1-3 -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product -->
    </div>
    <!-- END PRODUCT-AREA (1) -->
    <!-- START PRODUCT-AREA (2) -->
    <div class="product-area">
        <!-- Start Product-Menu -->
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="product-menu  border-red">
                    <div class="product-title">
                        <h3 class="title-group-2 gfont-1">Computer</h3>
                    </div>

                    <ul role="tablist">
                        <li role="presentation" class=" active"><a href="#display-2-1" role="tab" data-toggle="tab">Dell</a></li>
                        <li role="presentation"><a href="#display-2-2" role="tab" data-toggle="tab">Hp</a></li>
                        <li role="presentation"><a href="#display-2-3"  role="tab" data-toggle="tab">Apple</a></li>
                        <li role="presentation"><a href="#display-2-4"  role="tab" data-toggle="tab">Sony</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Product-Menu -->
        <!-- Start Product -->
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="product carosel-navigation">
                    <div class="tab-content">
                        <!-- Start Product = display-2-1 -->
                        <div role="tabpanel" class="tab-pane fade in active" id="display-2-1">
                            <div class="row">
                                <div class="active-product-carosel">
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="label_new">
                                                <span class="new">new</span>
                                            </div>
                                            <div class="sale-off">
                                                <span class="sale-percent">-35%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/10.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/10bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="label_new">
                                                <span class="new">new</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/13.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/2bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$105.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/10bg.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/3bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="sale-off">
                                                <span class="sale-percent">-45%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/10.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/4bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="sale-off">
                                                <span class="sale-percent">-20%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/5.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/3bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="sale-off">
                                                <span class="sale-percent">-25%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/6.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/4bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$105.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                </div>
                            </div>
                        </div>
                        <!-- End Product = display-2-1 -->
                        <!-- Start Product = display-2-2 -->
                        <div role="tabpanel" class="tab-pane fade" id="display-2-2">
                            <div class="row">
                                <div class="active-product-carosel">
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="label_new">
                                                <span class="new">new</span>
                                            </div>
                                            <div class="sale-off">
                                                <span class="sale-percent">-55%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/10.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/10bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="label_new">
                                                <span class="new">new</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/10bg.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/2bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/13.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/3bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/10bg.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/4bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$105.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="sale-off">
                                                <span class="sale-percent">-20%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/5.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/3bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="sale-off">
                                                <span class="sale-percent">-25%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/6.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/4bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                </div>
                            </div>
                        </div>
                        <!-- End Product = display-2-2 -->
                        <!-- Start Product = display-2-3 -->
                        <div role="tabpanel" class="tab-pane fade" id="display-2-3">
                            <div class="row">
                                <div class="active-product-carosel">
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="label_new">
                                                <span class="new">new</span>
                                            </div>
                                            <div class="sale-off">
                                                <span class="sale-percent">-55%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/13.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/10bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="label_new">
                                                <span class="new">new</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/10.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/2bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$105.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/10bg.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/3bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/13.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/4bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="sale-off">
                                                <span class="sale-percent">-20%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/10.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/3bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="sale-off">
                                                <span class="sale-percent">-25%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/13.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/4bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$105.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                </div>
                            </div>
                        </div>
                        <!-- End Product = display-2-3 -->
                        <!-- Start Product = display-2-4 -->
                        <div role="tabpanel" class="tab-pane fade" id="display-2-4">
                            <div class="row">
                                <div class="active-product-carosel">
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="label_new">
                                                <span class="new">new</span>
                                            </div>
                                            <div class="sale-off">
                                                <span class="sale-percent">-55%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/10.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/13.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="label_new">
                                                <span class="new">new</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/10bg.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/2bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/13.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/3bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/10bg.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/4bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$105.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="sale-off">
                                                <span class="sale-percent">-20%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/5.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/3bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="sale-off">
                                                <span class="sale-percent">-25%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/6.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/4bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                </div>
                            </div>
                        </div>
                        <!-- End Product = display-2-4 -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product -->
    </div>
    <!-- END PRODUCT-AREA (2) -->
    <!-- START PRODUCT-AREA (3) -->
    <div class="product-area">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <!-- Start Product-Menu -->
                <div class="product-menu">
                    <div class="product-title">
                        <h3 class="title-group-2 gfont-1">Smart Phone</h3>
                    </div>

                    <ul role="tablist">
                        <li role="presentation" class=" active"><a href="#display-3-1" role="tab" data-toggle="tab">Sony</a></li>
                        <li role="presentation"><a href="#display-3-2" role="tab" data-toggle="tab">Apple</a></li>
                        <li role="presentation"><a href="#display-3-3"  role="tab" data-toggle="tab">Samsung</a></li>
                        <li role="presentation"><a href="#display-3-4"  role="tab" data-toggle="tab">Nokia</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Product-Menu -->
        <!-- Start Product -->
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="product carosel-navigation">
                    <div class="tab-content">
                        <!-- Start Product = display-3-1 -->
                        <div role="tabpanel" class="tab-pane fade in active" id="display-3-1">
                            <div class="row">
                                <div class="active-product-carosel">
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="label_new">
                                                <span class="new">new</span>
                                            </div>
                                            <div class="sale-off">
                                                <span class="sale-percent">-35%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/1.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/1bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="label_new">
                                                <span class="new">new</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/5.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/2bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$105.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/3.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/3bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="sale-off">
                                                <span class="sale-percent">-45%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/4.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/4bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="sale-off">
                                                <span class="sale-percent">-20%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/5.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/3bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="sale-off">
                                                <span class="sale-percent">-25%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/6.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/4bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$105.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                </div>
                            </div>
                        </div>
                        <!-- End Product = display-3-1 -->
                        <!-- Start Product = display-3-2 -->
                        <div role="tabpanel" class="tab-pane fade" id="display-3-2">
                            <div class="row">
                                <div class="active-product-carosel">
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="label_new">
                                                <span class="new">new</span>
                                            </div>
                                            <div class="sale-off">
                                                <span class="sale-percent">-55%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/5.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/6.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="label_new">
                                                <span class="new">new</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/1.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/1bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/4.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/4bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/3.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/3bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$105.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="sale-off">
                                                <span class="sale-percent">-20%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/5.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/3bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="sale-off">
                                                <span class="sale-percent">-25%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/6.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/4bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                </div>
                            </div>
                        </div>
                        <!-- End Product = display-3-2 -->
                        <!-- Start Product = display-3-3 -->
                        <div role="tabpanel" class="tab-pane fade" id="display-3-3">
                            <div class="row">
                                <div class="active-product-carosel">
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="label_new">
                                                <span class="new">new</span>
                                            </div>
                                            <div class="sale-off">
                                                <span class="sale-percent">-55%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/1.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/1bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="label_new">
                                                <span class="new">new</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/2.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/2bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$105.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/3.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/3bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/4.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/4bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="sale-off">
                                                <span class="sale-percent">-20%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/5.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/3bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="sale-off">
                                                <span class="sale-percent">-25%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/6.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/4bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$105.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                </div>
                            </div>
                        </div>
                        <!-- End Product = display-3-3 -->
                        <!-- Start Product = display-3-4 -->
                        <div role="tabpanel" class="tab-pane fade" id="display-3-4">
                            <div class="row">
                                <div class="active-product-carosel">
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="label_new">
                                                <span class="new">new</span>
                                            </div>
                                            <div class="sale-off">
                                                <span class="sale-percent">-55%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/1.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/1bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="label_new">
                                                <span class="new">new</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/2.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/2bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/3.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/3bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/4.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/4bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$105.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="sale-off">
                                                <span class="sale-percent">-20%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/5.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/3bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="sale-off">
                                                <span class="sale-percent">-25%</span>
                                            </div>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/mediam/6.jpg" alt="Product">
                                                    <img class="secondary-img" src="{{ asset('shop') }}/img/product/mediam/4bg.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view" data-toggle="modal" data-target="#productModal" title="Quickview"><i class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                </div>
                            </div>
                        </div>
                        <!-- End Product = display-3-4 -->
                    </div>
                </div>
                <!-- End Product -->
            </div>
        </div>
    </div>
    <!-- END PRODUCT-AREA (3) -->

    <!-- START  -->
    <!-- START SMALL-PRODUCT-AREA (1) -->
    <div class="small-product-area">
        <!-- Start Product-Menu -->
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="product-menu">
                    <ul role="tablist">
                        <li role="presentation" class=" active"><a href="#display-4-1" role="tab" data-toggle="tab">Latest</a></li>
                        <li role="presentation"><a href="#display-4-2" role="tab" data-toggle="tab">Sale</a></li>
                        <li role="presentation"><a href="#display-4-3"  role="tab" data-toggle="tab">Random</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Product-Menu -->
        <!-- Start Product -->
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="product carosel-navigation">
                    <div class="tab-content">
                        <!-- Product = display-4-1 -->
                        <div role="tabpanel" class="tab-pane fade in active" id="display-4-1">
                            <div class="row">
                                <div class="active-small-product">
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/1.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="product-button-2">
                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/5.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$105.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="product-button-2">
                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/3.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="product-button-2">
                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/1.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="product-button-2">
                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/5.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="product-button-2">
                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/3.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$105.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="product-button-2">
                                                        <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/1.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/5.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/3.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/1.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$105.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/5.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/3.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/1.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/5.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$105.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/3.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                </div>
                            </div>
                        </div>
                        <!-- End Product = display-4-1 -->
                        <!-- Start Product = display-4-2 -->
                        <div role="tabpanel" class="tab-pane fade" id="display-4-2">
                            <div class="row">
                                <div class="active-small-product">
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/1.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/5.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/3.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$105.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/1.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/5.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/3.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/1.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$105.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/5.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/3.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/1.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/5.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$105.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/3.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/1.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/5.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/3.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$105.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                </div>
                            </div>
                        </div>
                        <!-- End Product = display-4-2 -->
                        <!-- Start Product = display-4-3 -->
                        <div role="tabpanel" class="tab-pane fade" id="display-4-3">
                            <div class="row">
                                <div class="active-small-product">
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/1.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/5.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/3.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/1.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$105.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/5.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/3.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/1.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/5.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$105.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/3.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/1.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/5.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/3.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$105.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                    <!-- Start Single-Product -->
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/1.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Trid Palm</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$99.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/5.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Established Fact</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$85.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="{{ asset('shop') }}/img/product/small/3.jpg" alt="Product">
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <h5><a href="#">Various Versions</a></h5>
                                                <div class="price-box">
                                                    <span class="price">$90.00</span>
                                                    <span class="old-price">$120.00</span>
                                                </div>
                                                <span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star-o"></i>
																	</span>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button-2">
                                                            <a href="#" data-toggle="tooltip" title="Add Cart"><i class="fa fa-shopping-cart"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                </div>
                            </div>
                        </div>
                        <!-- End Product = display-4-3 -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product -->
    </div>
    <!-- END SMALL-PRODUCT-AREA (1) -->
@endsection

@section('brandlogo')
    <!-- START BRAND-LOGO-AREA -->
    <div class="brand-logo-area carosel-navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="area-title">
                        <h3 class="title-group border-red gfont-1">Brand Logo</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-brand-logo">
                    <div class="col-md-2">
                        <div class="single-brand-logo">
                            <a href="#"><img src="{{ asset('shop') }}/img/brand/1.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="single-brand-logo">
                            <a href="#"><img src="{{ asset('shop') }}/img/brand/2.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="single-brand-logo">
                            <a href="#"><img src="{{ asset('shop') }}/img/brand/3.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="single-brand-logo">
                            <a href="#"><img src="{{ asset('shop') }}/img/brand/4.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="single-brand-logo">
                            <a href="#"><img src="{{ asset('shop') }}/img/brand/5.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="single-brand-logo">
                            <a href="#"><img src="{{ asset('shop') }}/img/brand/6.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="single-brand-logo">
                            <a href="#"><img src="{{ asset('shop') }}/img/brand/1.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="single-brand-logo">
                            <a href="#"><img src="{{ asset('shop') }}/img/brand/2.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="single-brand-logo">
                            <a href="#"><img src="{{ asset('shop') }}/img/brand/3.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END BRAND-LOGO-AREA -->
@endsection