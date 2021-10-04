
@extends('app.layouts.master')

@section('head-tag')
    <title>صفحه علاقه مندی ها </title>
@endsection

@section('content')
		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">wishlist</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
                    
                    <table class="table table-striped " dir="rtl">
                        <h2 class="alert alert-info text-right">علاقه مندی ها</h2>
                        <thead>
                          <tr>
                            <th  class="text-right" scope="col">#</th>
                            <th class="text-right"  scope="col">عکس</th>
                            <th class="text-right"  scope="col">عنوان</th>
                            <th  class="text-right" scope="col">دسته بندی</th>
                            <th  class="text-right" scope="col">امتیاز</th>
                            <th  class="text-center" scope="col">عملیات</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $numberPlus = 1; foreach($wishlist as $wishlistItem){ ?>
                                <tr>
                                    <th class="text-right"  scope="row"><?= $numberPlus ?></th>
                                    <td class="text-right" ><img src="<?= asset($wishlistItem->product()->photo()->image) ?>" width="70" height="70" alt="img"></td>
                                    <td class="text-right" ><?= $wishlistItem->product()->title ?></td>
                                    <td class="text-right" ><?= $wishlistItem->product()->category()->name ?></td>
                                    <td class="text-right" ><?= putStars($wishlistItem->product()->stars()) ?></td>
                                    <td class="text-left" > 
                                        <div class="add-to-cart">
                                            <form action="<?= route('cart.store') ?>" method="post">
                                                <input type="hidden" name="product_id" value="<?= $wishlistItem->product()->id ?>">
                                                <input type="hidden" name="count" value="1">
                                                <button type="submit" class="btn btn-success" style="width: 200px!important;"><i class="fa fa-shopping-cart"></i> افزودن به سبد خرید  </button>

                                            </form>
                                            <br>
                                            <form action="<?= route('wishlist.delete', [$wishlistItem->id]) ?>" method="post">
                                                <input type="hidden" name="_method" value="delete">
                                            <button type="submit" class="btn btn-danger " style="width: 200px!important;"><i class="fa fa-remove"></i> جذف از لیتس علاقه مندی ها  </button>
                                            </form>
                                        </div>    
                                    </td>
                                </tr>
                            <?php $numberPlus++;} ?>
                                
                        </tbody>
                      </table>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
    
@endsection
