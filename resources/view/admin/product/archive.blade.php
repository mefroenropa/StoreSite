@extends('admin.layouts.master')

@section('head-tag')
    <title>محصولات بایگنای </title>
    <link rel="stylesheet" type="text/css" href="<?= asset('src/plugins/jquery-steps/jquery.steps.css')?>">

@endsection

@section('content')
<div class="main-container">
    <div class="pd-ltr-20">

        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="pull-right">
                    <h4 class="text-blue h4 text-right"> محصولات </h4>
                    <p class="mb-30 text-right">لیست همه محصولات  بایگانی شده </p>
                </div>
                <div class="pull-left">
                    <a href="index" class="btn btn-danger d-inline">بازگشت</a>
                </div>
            </div>
 
            <div class="card-box mb-30 " style="text-align: right;">
				<table class="data-table table nowrap">
					<thead>
						<tr>
							<th class="table-plus datatable-nosort">محصول</th>
							<th>نام محصول</th>
							<th>نویسنده</th>
							<th>دسته بندی</th>
							<th>تعداد</th>
							<th>قیمت</th>
							<th class="datatable-nosort">عملیات</th>
						</tr>
					</thead>
					<tbody>
						<tr >
							<td class="table-plus">
								<img src="<?= asset('vendors/images/photo9.jpg')?>" width="70" height="70" alt="">
							</td>
							<td>
                                لپتاپ ایسوس
							</td>
							<td>علیرضا جوادی</td>
							<td>الکترونیک</td>
							<td ><p class="alert alert-warning">وارد نشده</p></td>
							<td>1</td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> بازیابی</a>
										<a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> ویرایش</a>
									</div>
								</div>
							</td>
						</tr>



						
					</tbody>
				</table>
			</div>
        </div>
  

@endsection


            

							