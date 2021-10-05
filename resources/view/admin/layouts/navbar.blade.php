<div class="left-side-bar">
    <div class="brand-logo">
        <a href="<?= route('home.index') ?>">
            <img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
            <img src="vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-house-1"></span><span class="mtext">خانه</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?= route('admin.index') ?>">پنل مدیریت</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-house-1"></span><span class="mtext">مدیریت کلی</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?= route('admin.product.index') ?>"> محصولات </a></li>
                        <li><a href="<?= route('admin.category.index') ?>">  دسته بندی ها </a></li>
                        <li><a href="<?= route('admin.brand.index') ?>"> برند ها</a></li>
                        <li><a href="<?= route('admin.discount.index') ?>"> کد تخفیف ها</a></li>
                        <li><a href="<?= route('admin.store.index') ?>"> انبار داری</a></li>

                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-house-1"></span><span class="mtext">نظرات</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?= route('admin.comment.index') ?>"> نظر ها</a></li>
                    </ul>
                </li>



                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-house-1"></span><span class="mtext">فروش رفته</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?= route('admin.sold.index') ?>">مدیریت کالا هایه فروش رفته</a></li>
                    </ul>
                </li>
       
            </ul>
        </div>
    </div>
</div>