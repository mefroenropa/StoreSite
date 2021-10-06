
@extends('app.layouts.master')

@section('head-tag')
    <title>صفحه علاقه مندی ها </title>
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
                    
                    <table class="table table-striped " dir="rtl">
                        <h2 class="alert alert-info text-right">سبد خرید</h2>
                        <thead>
                          <tr>
                            <th  class="text-right" scope="col">#</th>
                            <th class="text-right"  scope="col">عکس</th>
                            <th class="text-right"  scope="col">عنوان</th>
                            <th  class="text-right" scope="col">دسته بندی</th>
                            <th  class="text-right" scope="col">تعداد</th>
                            <th  class="text-right" scope="col">امتیاز</th>
                            <th  class="text-center" scope="col">عملیات</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $numberPlus = 1; foreach($carts as $cartItem){ ?>
                                <tr>
                                    <th class="text-right"  scope="row"><?= $numberPlus ?></th>
                                    <td class="text-right" ><img src="<?= asset($cartItem->product()->photo()->image) ?>" width="70" height="70" alt="img"></td>
                                    <td class="text-right" ><a href="<?= route('product.show', [$cartItem->product()->id]) ?>" target="_blank" rel="noopener noreferrer"><?= $cartItem->product()->title ?></a></td>
                                    <td class="text-right" ><?= $cartItem->product()->category()->name ?></td>
                                    <td class="text-right" ><?= $cartItem->count ?></td>
                                    <td class="text-right" ><?= putStars($cartItem->product()->stars()) ?></td>
                                    <td class="text-left" > 
                                        <div class="add-to-cart">
                                            <form action="<?= route('cart.delete', [$cartItem->id]) ?>" method="post">
                                                <input type="hidden" name="_method" value="delete">
                                            <button type="submit" class="btn btn-danger " style="width: 200px!important;"><i class="fa fa-remove"></i> حذف از لیست صبد خرید  </button>
                                            </form>
                                        </div>    
                                    </td>
                                </tr>
                            <?php $numberPlus++;} ?>
                                
                        </tbody>

                      </table>

                      <table class="table table-sm table-dark">
                        <h2 class="alert alert-info text-right">جمع کل  </h2>

                        <thead>
                          <tr class="bg-warning">
                            <th scope="col">تعداد کل</th>
                            <th scope="col">مبلغ کل</th>
                            <th scope="col">تعداد ایتم ها</th>
                            <th class="text-right" scope="col">عملیات</th>
                          </tr>
                        </thead>
                        <tbody >
                            <tr class="bg-warning">
                              <td><?= $allCount; ?></td>
                              <td><?= $sumAmount; ?></td>
                              <td><?= $cartCount; ?></td>
                              <td class="text-right">
                                <form action="<?= route('checkout') ?>" method="post">
                                  <input type="hidden" name="sumAmount" value="<?= $sumAmount; ?>">
                                  <input type="hidden" name="cart_id" value="<?= $cart_id; ?>">
                                  <button type="submit" class="btn btn-success">پرداخت نهایی</button>
                                
                                </form>
                                  <button class="btn btn-danger">انصراف از خرید</button>
                              </td>
                            </tr>
                         
                        </tbody>
                      </table>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
    
@endsection
