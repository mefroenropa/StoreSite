@extends('app.layouts.master')

@section('head-tag')
    <title>سایت فروشگاهی</title>
@endsection

@section('content')


    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="./img/shop01.png" alt="" title="">
                        </div>
                        <div class="shop-body">
                            <h3>Laptop<br>Collection</h3>
                            <a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->

                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="./img/shop03.png" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Accessories<br>Collection</h3>
                            <a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->

                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="./img/shop02.png" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Cameras<br>Collection</h3>
                            <a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->


        <!-- SECTION -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
    
                    <!-- section title -->
                    <div class="col-md-12">
                        <div class="section-title">
                            <h3 class="title">New Products</h3>
                            <div class="section-nav">
                                <ul class="section-tab-nav tab-nav">
                                    <li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
                                    <li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
                                    <li><a data-toggle="tab" href="#tab1">Cameras</a></li>
                                    <li><a data-toggle="tab" href="#tab1">Accessories</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /section title -->
    
                    <!-- Products tab & slick -->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="products-tabs">
                                <!-- tab -->
                                <div id="tab1" class="tab-pane active">
                                    <div class="products-slick" data-nav="#slick-nav-1">
                                        <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="https://files.namnak.com/users/hk/aup/201812/763_pics/%D8%B3%D8%AA-%D9%BE%DB%8C%D8%B1%D8%A7%D9%87%D9%86-%D9%88-%DA%A9%D8%B1%D8%A7%D9%88%D8%A7%D8%AA.jpg" alt="">
                                                <div class="product-label">
                                                    <span class="sale">-90%</span>
                                                    <!-- <span class="new">NEW</span> -->
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">لباس مردانه</p>
                                                <h3 class="product-name"><a href="#">ست تیشرت و بلوز</a></h3>
                                                <h4 class="product-price"> تومان 120,000 <del class="product-old-price"> تومان180,000 </del></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">افزودن به علاقه مندی ها</span></button>
                                                    <!-- <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button> -->
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">95227785</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>افزودن به سبد خرید</button>
                                            </div>
                                        </div>
                                        <!-- /product -->
    
                                        <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="./img/product02.png" alt="">
                                                <div class="product-label">
                                                    <span class="new">NEW</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">Category</p>
                                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                            </div>
                                        </div>
                                        <!-- /product -->
    
                                        <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="./img/product03.png" alt="">
                                                <div class="product-label">
                                                    <span class="sale">-30%</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">Category</p>
                                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                                <div class="product-rating">
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                            </div>
                                        </div>
                                        <!-- /product -->
    
                                        <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="./img/product04.png" alt="">
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">Category</p>
                                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                            </div>
                                        </div>
                                        <!-- /product -->
    
                                        <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="./img/product05.png" alt="">
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">Category</p>
                                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                            </div>
                                        </div>
                                        <!-- /product -->
    
                                    </div>
                                    <div id="slick-nav-1" class="products-slick-nav"></div>
                                </div>
                                <!-- /tab -->
                            </div>
                        </div>
                    </div>
                    <!-- Products tab & slick -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION -->
    
        <!-- SECTION -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
    
                    <!-- section title -->
                    <div class="col-md-12">
                        <div class="section-title">
                            <h3 class="title">Top selling</h3>
                            <div class="section-nav">
                                <ul class="section-tab-nav tab-nav">
                                    <li class="active"><a data-toggle="tab" href="#tab2">Laptops</a></li>
                                    <li><a data-toggle="tab" href="#tab2">Smartphones</a></li>
                                    <li><a data-toggle="tab" href="#tab2">Cameras</a></li>
                                    <li><a data-toggle="tab" href="#tab2">Accessories</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /section title -->
    
                    <!-- Products tab & slick -->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="products-tabs">
                                <!-- tab -->
                                <div id="tab2" class="tab-pane fade in active">
                                    <div class="products-slick" data-nav="#slick-nav-2">
                                        <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="./img/product06.png" alt="">
                                                <div class="product-label">
                                                    <span class="sale">-30%</span>
                                                    <span class="new">NEW</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">Category</p>
                                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                            </div>
                                        </div>
                                        <!-- /product -->
    
                                        <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="./img/product07.png" alt="">
                                                <div class="product-label">
                                                    <span class="new">NEW</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">Category</p>
                                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                            </div>
                                        </div>
                                        <!-- /product -->
    
                                        <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="./img/product08.png" alt="">
                                                <div class="product-label">
                                                    <span class="sale">-30%</span>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">Category</p>
                                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                                <div class="product-rating">
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                            </div>
                                        </div>
                                        <!-- /product -->
    
                                        <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="./img/product09.png" alt="">
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">Category</p>
                                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                            </div>
                                        </div>
                                        <!-- /product -->
    
                                        <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="./img/product01.png" alt="">
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">Category</p>
                                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product-btns">
                                                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">افزودن به علاقه مندی ها</span></button>
                                                    <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">2454432</span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> افزودن به سبد خرید</button>
                                            </div>
                                        </div>
                                        <!-- /product -->
                                    </div>
                                    <div id="slick-nav-2" class="products-slick-nav"></div>
                                </div>
                                <!-- /tab -->
                            </div>
                        </div>
                    </div>
                    <!-- /Products tab & slick -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION -->
    
        <!-- SECTION -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-4 col-xs-6">
                        <div class="section-title">
                            <h4 class="title">Top selling</h4>
                            <div class="section-nav">
                                <div id="slick-nav-3" class="products-slick-nav"></div>
                            </div>
                        </div>
    
                        <div class="products-widget-slick" data-nav="#slick-nav-3">
                            <div>
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product07.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    </div>
                                </div>
                                <!-- /product widget -->
    
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product08.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    </div>
                                </div>
                                <!-- /product widget -->
    
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product09.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    </div>
                                </div>
                                <!-- product widget -->
                            </div>
    
                            <div>
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product01.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    </div>
                                </div>
                                <!-- /product widget -->
    
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product02.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    </div>
                                </div>
                                <!-- /product widget -->
    
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product03.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    </div>
                                </div>
                                <!-- product widget -->
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-4 col-xs-6">
                        <div class="section-title">
                            <h4 class="title">Top selling</h4>
                            <div class="section-nav">
                                <div id="slick-nav-4" class="products-slick-nav"></div>
                            </div>
                        </div>
    
                        <div class="products-widget-slick" data-nav="#slick-nav-4">
                            <div>
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product04.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    </div>
                                </div>
                                <!-- /product widget -->
    
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product05.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    </div>
                                </div>
                                <!-- /product widget -->
    
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product06.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    </div>
                                </div>
                                <!-- product widget -->
                            </div>
    
                            <div>
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product07.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    </div>
                                </div>
                                <!-- /product widget -->
    
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product08.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    </div>
                                </div>
                                <!-- /product widget -->
    
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product09.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    </div>
                                </div>
                                <!-- product widget -->
                            </div>
                        </div>
                    </div>
    
                    <div class="clearfix visible-sm visible-xs"></div>
    
                    <div class="col-md-4 col-xs-6">
                        <div class="section-title">
                            <h4 class="title">Top selling</h4>
                            <div class="section-nav">
                                <div id="slick-nav-5" class="products-slick-nav"></div>
                            </div>
                        </div>
    
                        <div class="products-widget-slick" data-nav="#slick-nav-5">
                            <div>
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product01.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    </div>
                                </div>
                                <!-- /product widget -->
    
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product02.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    </div>
                                </div>
                                <!-- /product widget -->
    
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product03.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    </div>
                                </div>
                                <!-- product widget -->
                            </div>
    
                            <div>
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product04.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    </div>
                                </div>
                                <!-- /product widget -->
    
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product05.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    </div>
                                </div>
                                <!-- /product widget -->
    
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./img/product06.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                        <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    </div>
                                </div>
                                <!-- product widget -->
                            </div>
                        </div>
                    </div>
    
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION -->
@endsection