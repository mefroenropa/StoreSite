@extends('admin.layouts.master')

@section('head-tag')
    <title>دسته بندی ها</title>
    <link rel="stylesheet" type="text/css" href="<?= asset('src/plugins/jquery-steps/jquery.steps.css')?>">

@endsection

@section('content')
<div class="main-container">
    <div class="pd-ltr-20">

        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="pull-right">
                    <h4 class="text-blue h4 text-right"> دسته بندی ها </h4>
                    <p class="mb-30 text-right">لیست همه دسته بندی ها  </p>
                </div>
                <div class="pull-left">
                    <a href="index" class="btn btn-success d-inline">افزودن دسته بندی جدید</a>
                    <a href="index" class="btn btn-warning d-inline">دسته بندی هایه بایگانی شده</a>
                </div>
            </div>
 
            <div class="card-box mb-30 " style="text-align: right;">
				<table class="data-table table nowrap">
					<thead>
						<tr>
							<th># </th>

							<th class="table-plus datatable-nosort">نام</th>
							<th>سازنده </th>
							<th>تعداد محصولات زیر دسته</th>
							<th>دسته بندی والد</th>
							
							<th class="datatable-nosort">عملیات</th>
						</tr>
					</thead>
					<tbody>
						<tr >
							<td>1</td>

							<td> الکترونیک </td>
							<td> علیرضا جوادی </td>

							<td> <h6 class="alert alert-danger">29</h6> </td>
							
							<td> <h6 class="alert alert-primary">ندارد</h6> </td>
							
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


            

							