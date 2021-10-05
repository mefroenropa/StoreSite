
<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav" dir="rtl!important">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav pull-right">
                <li class="<?= sidebarActive(route('home.index'), false) ?>"><a href="<?= route('home.index') ?>">خانه</a></li>
                <?php foreach($categoriesMaster as $category){ ?>
                    <li class="<?= sidebarActive(route('product.products', [$category->englishName]), false) ?>"><a href="<?= route('product.products',  [$category->englishName]) ?>"><?= $category->name ?></a></li>
                <?php } ?>
               
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>