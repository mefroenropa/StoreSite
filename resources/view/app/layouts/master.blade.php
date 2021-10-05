
<!DOCTYPE html>
<html lang="en">

<head>
@include('app.layouts.head-tag')
@yield('head-tag')
</head>

<body>

    <?php if(errorExists('Unauthorized')){  ?>
        <script> showError(); </script>
        
    <?php } ?>
    <!-- HEADER -->
    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
                </ul>
                <ul class="header-links pull-right">
                   <?= $user->id != 1 ? '<li><a href="'.route('profile.view').'"><i class="fa fa-user-o"></i> پروفایل من </a></li>' : '<li><a href="'.route('auth.login.view').'"><i class="fa fa-user-o"></i> وارد شوید </a></li>' ?>
                </ul>
            </div>
        </div>
        <!-- /TOP HEADER -->

        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="<?= route('home.index') ?>" class="logo">
                                <img src="<?= asset('./img/logo.png') ?>" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-6">
                        <div class="header-search">
                            <form action="<?= route('product.search') ?>" method="get">
                                <select class="input-select" name="category">
                                    <option value="0">همه دسته بندی ها </option>
                                    <?php foreach($categoriesMaster as $category){ ?>
										<option value="<?= $category->id ?>"><?= $category->name ?></option>
										<?php } ?>
									</select>  
                                <input class="input" name="search" placeholder="Search here">
                                <button class="search-btn">Search</button>
                            </form>
                        </div>
                    </div>
                    <!-- /SEARCH BAR -->

                    <!-- ACCOUNT -->
                    <div class="col-md-3 clearfix">
                        <div class="header-ctn">
                            <!-- Wishlist -->
                            <div>
                                <a href="<?= route('wishlist') ?>">
                                    <i class="fa fa-heart-o"></i>
                                    <span> لیست علاقه مندی ها</span>
                                    <div class="qty"><?= $wishlistCount ?></div>
                                </a>
                            </div>
                            <!-- /Wishlist -->

                            <!-- Cart -->
                            <div class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>سبد خرید </span>
                                    <div class="qty"><?= $cartCount ?></div>
                                </a>
                                <div class="cart-dropdown">
                                    <div class="cart-list">
                                        <?php foreach($carts as $cartItem){  ?>
                                            <div class="product-widget">
                                                <div class="product-img">
                                                    <img src="<?= $cartItem->product()->photo()->image ?>" alt="">
                                                </div>
                                                <div class="product-body">
                                                    <h3 class="product-name"><a href="#"><?= $cartItem->product()->title ?></a></h3>
                                                    <h4 class="product-price"><span class="qty"><?= $cartItem->count ?></span><?= $cartItem->product()->amount ?></h4>
                                                </div>
                                                <form action="<?= route('cart.delete', [$cartItem->id]) ?>" method="post">
                                                    <input type="hidden" name="_method" value="delete">
                                                <button class="delete"><i class="fa fa-close"></i></button>
                                                </form>
                                            </div>
                                        <?php } ?>

                                    </div>
                                    <div class="cart-summary">
                                        <small><?= $cartCount ?> تعداد محصولات انتخاب شده</small><br>
                                        <h5> جمع کل : <?= $sumAomuont ?></h5>
                                    </div>
                                    <div class="cart-btns">
                                        <a href="<?= route('cart.list') ?>">دیدن کل سبد خرید</a>
                                        <a href="<?= route('checkout') ?>">پرداخت نهایی  <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- /Cart -->

                            <!-- Menu Toogle -->
                            <div class="menu-toggle">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </a>
                            </div>
                            <!-- /Menu Toogle -->
                        </div>
                    </div>
                    <!-- /ACCOUNT -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    @include('app.layouts.navbar')
    <!-- /NAVIGATION -->

    @yield('content')

    <!-- FOOTER -->
    @include('app.layouts.footer')
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    @include('app.layouts.script')
    @yield('script')


</body>

</html>