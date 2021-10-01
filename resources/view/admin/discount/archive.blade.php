@extends('admin.layouts.master')

@section('head-tag')
    <title> کد هایه تخفیف بایگانی شده</title>
    <link rel="stylesheet" type="text/css" href="<?= asset('src/plugins/jquery-steps/jquery.steps.css')?>">

@endsection

@section('content')
<div class="main-container">
    <div class="pd-ltr-20">

        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="pull-right">
                    <h4 class="text-blue h4 text-right">کد هایه تخفیف </h4>
                    <p class="mb-30 text-right">لیست همه  کد هایه تخفیف بایگانی شده  </p>
                </div>
                <div class="pull-left">
					<a href="index" class="btn btn-danger d-inline">بازگشت</a>

                </div>
            </div>
 
            <div class="card-box mb-30 " style="text-align: right;">
				<table class="data-table table nowrap">
					<thead>
						<tr>
							<th># </th>

							<th class="table-plus datatable-nosort">متن</th>
							<th>سازنده </th>
							<th> درصد تخفیف / مبلغ تخفیف</th>
							<th>تاریخ انقضا</th>
							
							<th class="datatable-nosort">عملیات</th>
						</tr>
					</thead>
					<tbody>
						<tr >
							<td>1</td>

							<td> ECF-252123 </td>
							<td> علیرضا جوادی </td>

							<td> <h6>29%</h6> </td>
							
							<td> <h6>ندارد</h6> </td>
							
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="#"><i class="dw dw-eye"></i> بازیابی</a>
									</div>
								</div>
							</td>
						</tr>



						
					</tbody>
				</table>
			</div>
        </div>
  

@endsection


            

							