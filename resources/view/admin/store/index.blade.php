@extends('admin.layouts.master')

@section('head-tag')
    <title>قسمت انبار داری</title>
    <link rel="stylesheet" type="text/css" href="<?= asset('src/plugins/jquery-steps/jquery.steps.css')?>">

@endsection

@section('content')
<div class="main-container">
    <div class="pd-ltr-20">

        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="pull-right">
                    <h4 class="text-blue h4 text-right">قسمت انبار داری</h4>
                    <p class="mb-30 text-right">لیست همه محصولات و تعداد دقیق آن ها  </p>
                </div>
                <div class="pull-left">
                    <a href="index" class="btn btn-success d-inline">افزودن  تعداد محصول </a>
                </div>
            </div>
 
			<div class="card-box mb-30 " style="text-align: right;">
				<table class="data-table table nowrap">
					<thead>
						<tr>
							<th>#</th>

							<th class="table-plus datatable-nosort">محصول</th>
							<th>نام محصول</th>
							<th>فروشنده</th>
							<th>تعداد باقی مانده </th>
							<th>کل تعداد</th>
							<th>نصبت فروش</th>
							<th class="datatable-nosort">عملیات</th>
						</tr>
					</thead>
					<tbody>
						<tr >
							<td>1</td>

							<td class="table-plus">
								<img src="<?= asset('vendors/images/photo9.jpg')?>" width="70" height="70" alt="">
							</td>
							<td>
                                لپتاپ ایسوس
							</td>
							<td>علیرضا جوادی</td>
							<td>5</td>
							<td >25</td>
							<td>خوب</td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> ویرایش</a>
										<a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> حذف</a>
									</div>
								</div>
							</td>
						</tr>



						
					</tbody>
				</table>
			</div>
        </div>
  

@endsection


            

							