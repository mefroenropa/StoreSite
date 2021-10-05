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
                <?php foreach($categories as $category){ ?>
                    <div class="col-md-4 col-xs-6">
                        <div class="shop">
                            <div class="shop-img">
                                <img src="<?= $category->image ?>" alt="<?= $category->name ?>" title="<?= $category->name ?>">
                            </div>
                            <div class="shop-body">
                                <h3><?= $category->name ?><br>دسته بندی</h3>
                                <a href="<?= route('product.products', [$category->englishName]) ?>" class="cta-btn">برو به صفحه این دسته بندی <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- /shop -->

                <!-- 
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
               /shop -->
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
                        <div class="section-title text-right">
                            <h3 class="title">جدید ترین محصولات</h3>
                        
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
                                        <?php foreach($newProducts as $product){ ?>
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="<?= asset($product->photo()->image) ?>" alt="">
                                                <div class="product-label">
                                                    <?= $product->discount != null ? '<span class="sale">%'.discountPercent($product->amount, $product->discount).'</span>'  : '' ?> 

                                                    <!-- <span class="new">NEW</span> -->
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?= $product->category()->name ?></p>
                                                <h3 class="product-name"><a href="<?= route('view.plus', [$product->id]) ?>"><?= $product->title ?></a></h3>
                                                <h4 class="product-price"> تومان <?= $product->amount ?> <?= $product->discount != null ? ' <del class="product-old-price"> '.$product->discount.' تومان </del>' : '';?> </h4>
                                                <div class="product-rating">
                                                    <?= count($product->comments()->get()) ?> نفر
                                                <?= putStars($product->stars()) ?>
                                                </div>
                                                <div class="product-btns">
                                                    <a class="add-to-wishlist" title="افزودن به صبد خرید" href="<?= route('add.to.wishlist', [$product->id]) ?>"><i class="fa fa-heart-o"></i><span class="tooltipp"> </span></a>
                                                    <!-- <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button> -->
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp"><?= $product->viewCount() ?></span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <form action="<?= route('cart.store') ?>" method="post">
                                                    <input type="hidden" name="product_id" value="<?= $product->id ?>">
                                                    <input type="hidden" name="count" value="1">
								                    <button type="submit" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> افزودن به سبد خرید  </button>

                                                </form>
                                            </div>
                                        </div>
                                        <?php } ?>
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
                        <div class="section-title text-right">
                            <h3 class="title">محصولات با محبوبیت بالا</h3>
                        
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
                                        <?php foreach($mustPopular as $product){ ?>
                                            <div class="product">
                                                <div class="product-img">
                                                    <img src="<?= asset($product->photo()->image) ?>" alt="">
                                                    <div class="product-label">
                                                        <?= $product->discount != null ? '<span class="sale">%'.discountPercent($product->amount, $product->discount).'</span>'  : '' ?> 
                                                        <!-- <span class="new">NEW</span> -->
                                                    </div>
                                                </div>
                                                <div class="product-body">
                                                    <p class="product-category"><?= $product->category()->name ?></p>
                                                    <h3 class="product-name"><a href="<?= route('view.plus', [$product->id]) ?>"><?= $product->title ?></a></h3>
                                                    <h4 class="product-price"> تومان <?= $product->amount ?> <?= $product->discount != null ? ' <del class="product-old-price"> '.$product->discount.' تومان </del>' : '';?> </h4>
                                                    <div class="product-rating">
                                                        <?= count($product->comments()->get()) ?> نفر
                                                    <?= putStars($product->stars()) ?>
                                                    </div>
                                                                   <div class="product-btns">
                                                    <a class="add-to-wishlist" title="افزودن به صبد خرید" href="<?= route('add.to.wishlist', [$product->id]) ?>"><i class="fa fa-heart-o"></i><span class="tooltipp"></span></a>
                                                    <!-- <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button> -->
                                                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp"><?= $product->viewCount() ?></span></button>
                                                </div>
                                            </div>
                                            <div class="add-to-cart">
                                                <form action="<?= route('cart.store') ?>" method="post">
                                                    <input type="hidden" name="product_id" value="<?= $product->id ?>">
                                                    <input type="hidden" name="count" value="1">
								                    <button type="submit" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> افزودن به سبد خرید  </button>

                                                </form>
                                            </div>
                                            </div>
                                            <?php } ?>
                                      
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
                            <h4 class="title"> پرفروش</h4>
                         
                        </div>
    
                        <div class="products-widget-slick" data-nav="#slick-nav-3">
                            <?php foreach(array_chunk($mustPopular,3) as $productChunk){ ?>
                            <div>
                                <!-- product widget -->
                                <?php foreach($productChunk as $product){ ?>
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="<?= asset($product->photo()->image) ?>" alt="<?= $product->title ?>">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category"><?= $product->category()->name ?></p>
                                        <h3 class="product-name"><a href="<?= route('product.show', [$product->id]) ?>"><?= $product->title ?></a></h3>
                                        <h4 class="product-price"> تومان <?= $product->amount ?> <?= $product->discount != null ? ' <del class="product-old-price"> '.$product->discount.' تومان </del>' : '';?> </h4>

                                    </div>
                                </div>
                                <?php } ?>
                                <!-- /product widget -->
    
                            </div>
    
                        
                            <?php } ?>
                        </div>
                    </div>
    
                    <div class="col-md-4 col-xs-6">
                        <div class="section-title">
                            <h4 class="title"> ارزان ترین</h4>
                        
                        </div>
    
                        <div class="products-widget-slick" data-nav="#slick-nav-3">
                            <?php foreach(array_chunk($jitneyProducts,3) as $productChunk){ ?>
                            <div>
                                <!-- product widget -->
                                <?php foreach($productChunk as $product){ ?>
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="<?= asset($product->photo()->image) ?>" alt="<?= $product->title ?>">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category"><?= $product->category()->name ?></p>
                                        <h3 class="product-name"><a href="<?= route('product.show', [$product->id]) ?>"><?= $product->title ?></a></h3>
                                        <h4 class="product-price"> تومان <?= $product->amount ?> <?= $product->discount != null ? ' <del class="product-old-price"> '.$product->discount.' تومان </del>' : '';?> </h4>

                                    </div>
                                </div>
                                <?php } ?>
                                <!-- /product widget -->
    
                            </div>
    
                        
                            <?php } ?>
                        </div>
                    </div>

                    <div class="col-md-4 col-xs-6">
                        <div class="section-title">
                            <h4 class="title"> جدید ترین</h4>
                      
                        </div>
    
                        <div class="products-widget-slick" data-nav="#slick-nav-3">
                            <?php foreach(array_chunk($newProducts,3) as $productChunk){ ?>
                            <div>
                                <!-- product widget -->
                                <?php foreach($productChunk as $product){ ?>
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="<?= asset($product->photo()->image) ?>" alt="<?= $product->title ?>">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category"><?= $product->category()->name ?></p>
                                        <h3 class="product-name"><a href="<?= route('product.show', [$product->id]) ?>"><?= $product->title ?></a></h3>
                                        <h4 class="product-price"> تومان <?= $product->amount ?> <?= $product->discount != null ? ' <del class="product-old-price"> '.$product->discount.' تومان </del>' : '';?> </h4>

                                    </div>
                                </div>
                                <?php } ?>
                                <!-- /product widget -->
    
                            </div>
    
                        
                            <?php } ?>
                        </div>
                    </div>
    
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION -->
@endsection