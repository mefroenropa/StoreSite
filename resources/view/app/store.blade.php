@extends('app.layouts.master')

@section('head-tag')
    <title>سایت فروشگاهی</title>
@endsection

@section('content')

		<!-- BREADCRUMB -->
	
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section ">
			<!-- container -->
			<div class="container ">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3 pull-right">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title text-right">دسته بندی ها</h3>
							<div class="checkbox-filter">
								<?php foreach($categories as $cateogry){ ?>
								<a href="<?= route('product.products', [$cateogry->englishName]) ?>">
									<div class="input-checkbox text-right">
									
										<span></span>
										<?= $cateogry->name ?>
										<small>(<?= count($cateogry->products()->get()) ?>)</small>
								
									
								</div>
							</a>
							<ul>
								<?php foreach($cateogry->parents()->get() as $categoryChild){ ?>
								<a href="<?= route('product.products', [$categoryChild->englishName]) ?>">
											
								<li class="text-right"> <?= $categoryChild->name ?>
										<small>(<?= count($categoryChild->products()->get()) ?>)</small><--
											
									</li>
							</a>

								<?php } ?>

										</ul>
								<?php } ?>
							</div>
						</div>
						<hr>
						<!-- /aside Widget -->

						<!-- aside Widget
						<div class="aside">
							<h3 class="aside-title text-right">قیمت</h3>
							<div class="price-filter">
								<div id="price-slider"></div>
								<div class="input-number price-min">
									<input id="price-min" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
								<span>-</span>
								<div class="input-number price-max">
									<input id="price-max" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
							</div>
						</div>
						/aside Widget -->

						<!-- aside Widget -->
						<div class="aside text-right">
							<h3 class="aside-title text-right">برند ها</h3>

							<div class="checkbox-filter">
								<?php foreach($brands as $brand){ ?>
									<a href="<?= getCaller('brand', $brand->name) ?>">
										<div class="input-checkbox text-right">
										<label for="brand-1">
											<span></span>
											<?= $brand->name ?>
											<small>(<?= count($brand->products()->get()) ?>)</small>
										</label>
									</div>
								</a>
								<?php } ?>
							
							</div>
						</div>
						<!-- /aside Widget -->
						<hr>

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title text-right">پر فروش ها</h3>
							<?php foreach($mustPopular as $topSell){ ?>
							<div class="product-widget">
								<div class="product-img">
									<img src="<?= asset($topSell->photo()->image) ?>" alt="">
								</div>
								<div class="product-body">
									<p class="product-category"><?= $topSell->category()->name ?></p>
									<h3 class="product-name"><a href="<?= route('product.show', [$topSell->id]) ?>"><?= $topSell->title ?></a></h3>
									<h4 class="product-price"> تومان <?= $topSell->amount ?> <?= $topSell->discount != null ? ' <del class="product-old-price"> '.$topSell->discount.' تومان </del>' : '';?> </h4>

								</div>
							</div>
							<?php } ?>
						
						</div>
						<!-- /aside Widget -->
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9 pull-right">
						<!-- store top filter -->
					
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
							<!-- product -->
							
							<?php foreach(paginate($products, 9) as $product){ ?>
								<div class="col-md-4 col-xs-6 pull-right">
                                        <div class="product ">
                                            <div class="product-img">
                                                <img src="<?= asset($product->photo()->image) ?>" alt="">
                                                <div class="product-label">
                                                    <?= $product->discount != null ? '<span class="sale">%'.discountPercent($product->amount, $product->discount).'</span>'  : '' ?> 

                                                    <!-- <span class="new">NEW</span> -->
                                                </div>
                                            </div>
                                            <div class="product-body" style="height: 210px;">
                                                <p class="product-category"><?= $product->category()->name ?></p>
                                                <h3 class="product-name" title="<?= $product->title?>"><a href="<?= route('view.plus', [$product->id]) ?>"><?= substr($product->title, 0, 40) ?>...</a></h3>
                                                <h4 class="product-price"> تومان <?= $product->amount ?> <?= $product->discount != null ? ' <del class="product-old-price"> '.$product->discount.' تومان </del>' : '';?> </h4>
                                                <div class="product-rating">
                                                    <?= count($product->comments()->get()) ?> نفر
                                                <?= putStars($product->stars()) ?>
                                                </div>
                                                <div class="product-btns">
                                                    <a class="add-to-wishlist" href="<?= route('add.to.wishlist', [$product->id]) ?>"><i class="fa fa-heart-o"></i><span class="tooltipp">افزودن به علاقه مندی ها</span></a>
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
									</div>
                                        <?php } ?>
							<!-- /product -->

						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Showing 0 , 9 products</span>
							<ul class="store-pagination " style="width: 400px;margin: 0 auto;">
								<?= paginateView($products, 9) ?>
							</ul>
						</div>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

        @endsection



