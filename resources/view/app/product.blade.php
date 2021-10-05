@extends('app.layouts.master')

@section('head-tag')
    <title>سایت فروشگاهی</title>
@endsection

@section('content')

		<!-- BREADCRUMB -->

		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<?php foreach($galleries as $gallery) { ?>
							<div class="product-preview">
								<img src="<?= asset($gallery->image) ?>" alt="">
							</div>
							<?php } ?>
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							<?php foreach($galleries as $gallery) { ?>
								<div class="product-preview">
									<img src="<?= asset($gallery->image) ?>" alt="">
								</div>
								<?php } ?>
						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details text-right">
							<h2 class="product-name"><?= $product->title ?></h2>
							<div>
								<div class="product-rating">
									<?= putStars($product->stars()) ?>
								</div>
								<a class="review-link" href="#comments"> نظرات  <?= count($product->comments()->get()) ?>| نظر خود را ثبت کنید </a>
							</div>
							<div>
								<h3 class="product-price"><?= $product->amount ?> <?= $product->discount != null ? '<del class="product-old-price">'.$product->discount.' تومان </del>' : '';?> </h3>
								<?= $product->storeCount() >= 1 ? ' <span class="product-available">موجود در انبار </span>' : ' <span class="product-available"> ناموجود </span>'; ?>
							</div>
							<!--

							<div class="product-options">
								<label>
									Size
									<select class="input-select">
										<option value="0">X</option>
									</select>
								</label>
								<label>
									Color
									<select class="input-select">
										<option value="0">Red</option>
									</select>
								</label>
							</div>
							-->
							
							<form action="<?= route('cart.store') ?>" method="post">
							<div class="add-to-cart">
								<input type="hidden" name="product_id" value="<?= $product->id ?>">
								<div class="qty-label">
									تعداد
									<div class="input-number">
										<input type="number" name="count" value="1">
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
								</div>
								
								<button type="submit" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> افزودن به سبد خرید  </button>
							</div>
						</form>

							<ul class="product-btns">
								<li><a href="<?= route('add.to.wishlist', [$product->id]) ?>"><i class="fa fa-heart-o"></i> افزودن به لیست علاقه مندی ها  </a></li>
								<!--<li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>-->
							</ul>

							<ul class="product-links">
								<li><a href="<?= route('product.products', [$product->category()->englishName]) ?>"><?= $product->category()->name ?></a></li>
								<li> : دسته بندی  </li>
								
							</ul>

					

						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab2">مشخصات فنی</a></li>
								<li ><a data-toggle="tab" href="#tab1">توظیحات</a></li>
								<li><a data-toggle="tab" id="comments" href="#tab3">نظرات (<?= count($product->comments()->get()) ?>)</a></li>
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in ">
									<div class="row">
										<div class="col-md-12 text-right">
											<?= html($product->body) ?>
										</div>
									</div>
								</div>
								<!-- /tab1  -->

								<!-- tab2  -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
											<table class="table" dir="rtl">
												<caption class="text-right">مشخصات فنی محصول</caption>
												<thead >
													<tr>
														<th class="text-right" scope="col">مشخصات </th>
														<th class="text-right" scope="col"></th>
														
													</tr>
												</thead>
												<tbody>
													<?php foreach($productAttributes as $key => $value){ ?>
														<tr>
														  <th class="text-right" scope="row"><?= $key ?></th>
														  <th class="text-right" scope="row"><?= $value ?></th>
														  
													  </tr>
													  <?php } ?>
												
												</tbody>
											  </table>
										</div>
									</div>
								</div>
								<!-- /tab2  -->

								<!-- tab3  -->
								<div id="tab3" class="tab-pane fade in">
									<div class="row">
										<!-- Rating -->
										<div class="col-md-3">
											<div id="rating">
												<div class="rating-avg">
													<span><?=	round($product->stars(), 2) ?></span>
													<div class="rating-stars">
														<?= putStars($product->stars()) ?>
													</div>
												</div>
												<ul class="rating">
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
														<div class="rating-progress">
															<div style="width: <?= $product->commentPercent(5) ?>%;"></div>
														</div>
														<span class="sum"><?= $product->countCommentOrderByStar(5) ?></span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div style="width: <?= $product->commentPercent(4) ?>%;"></div>
														</div>
														<span class="sum"><?= $product->countCommentOrderByStar(4) ?></span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div style="width: <?= $product->commentPercent(3) ?>%;"></div>
														</div>
														<span class="sum"><?= $product->countCommentOrderByStar(3) ?></span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div style="width: <?= $product->commentPercent(2) ?>%;"></div>
														</div>
														<span class="sum"><?= $product->countCommentOrderByStar(2) ?></span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div style="width: <?= $product->commentPercent(1) ?>%;"></div>
														</div>
														<span class="sum"><?= $product->countCommentOrderByStar(1) ?></span>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Rating -->

										<!-- Reviews -->
										<div class="col-md-6">
											<div id="reviews">
												<ul class="reviews">
													<?php foreach(paginate($product->comments()->get(),4) as $comment){ ?>
														<li>
															<div class="review-body text-right">
																<p class="text-right"><?= $comment->comment ?></p>
															
															</div>
															<div class="review-heading text-right">
																<h5 class="name"><?= fullUsername($comment->user()) ?></h5>
																<p class="date"><?= $comment->created_at ?></p>
																<div class="review-rating">
																	<?= putStars($comment->star_count) ?>
																</div>
															</div>
														</li>							
													<?php } ?>
												</ul>
												
												<ul class="reviews-pagination">
												
													<?= paginateView($product->comments()->get(), 4) ?>
												</ul>
											</div>
										</div>
										<!-- /Reviews -->

										<!-- Review Form -->
										<div class="col-md-3">
											<div id="review-form">
												<form class="review-form" action="<?= route('comment.store', [$product->id]) ?>" method="POST">
													<textarea class="input text-right" name="comment" placeholder="نظر شما "></textarea>
													<div class="input-rating text-right">
														<span>امتیاز دهید : </span>
														<div class="stars">
															<input id="star5" name="star_count" value="5" type="radio"><label for="star5"></label>
															<input id="star4" name="star_count" value="4" type="radio"><label for="star4"></label>
															<input id="star3" name="star_count" value="3" type="radio"><label for="star3"></label>
															<input id="star2" name="star_count" value="2" type="radio"><label for="star2"></label>
															<input id="star1" name="star_count" value="1" type="radio"><label for="star1"></label>
														</div>
													</div>
													<button class="primary-btn">ارسال</button>
												</form>
											</div>
										</div>
										<!-- /Review Form -->
									</div>
								</div>
								<!-- /tab3  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">اگهی هایه مرتبط</h3>
						</div>
					</div>

					<!-- product -->
					<?php foreach($relationProducts as $product){ ?>
						<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="<?= asset($product->photo()->image) ?>" alt="">
								<div class="product-label">
								   <!-- <span class="sale">-90%</span> -->
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
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">افزودن به علاقه مندی ها</span></button>
									<!-- <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button> -->
									<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp"><?= $product->viewCount() ?></span></button>
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>افزودن به سبد خرید</button>
							</div>
						</div>
					</div>
						<?php } ?>
					<!-- /product -->

					<!-- product -->
					
						

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /Section -->


        @endsection

