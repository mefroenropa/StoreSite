@extends('admin.layouts.master')

@section('head-tag')
    <title>کد هایه تخفیف</title>
    <link rel="stylesheet" type="text/css" href="<?= asset('src/plugins/jquery-steps/jquery.steps.css')?>">

@endsection

@section('content')
<div class="main-container">
    <div class="pd-ltr-20">

        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="pull-right">
                    <h4 class="text-blue h4 text-right">کد هایه تخفیف </h4>
                    <p class="mb-30 text-right">لیست همه  کد هایه تخفیف  </p>
                </div>
                <div class="pull-left">
                    <a href="<?= route('admin.discount.create') ?>" class="btn btn-success d-inline">افزودن  کد تخفیف جدید</a>
                </div>
            </div>
 
            <div class="card-box mb-30 " style="text-align: right;">
				<table class="data-table table nowrap">
					<thead>
						<tr>
							<th># </th>

							<th class="table-plus datatable-nosort">کد</th>
							<th>سازنده </th>
							<th> درصد تخفیف / مبلغ تخفیف</th>
							<th>تاریخ انقضا</th>
							
							<th class="datatable-nosort">عملیات</th>
						</tr>
					</thead>
					<tbody>
						
						<?php $numberPlus =1; foreach($discounts as $discount){ ?>
						<tr >
							<td><?= $numberPlus; ?></td>

							<td> <?= $discount->code ?> </td>
							<td> <?= fullUsername($discount->user()) ?> </td>

							<td> <h6> <?= $discount->value ?></h6> </td>
							
							<td> <h6> <?= $discount->timeToDate ?></h6> </td>
							
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<form action="<?= route('admin.discount.delete', [$discount->id]) ?>" method="post">
											<input type="hidden" name="_method" value="delete">
											<button  class="dropdown-item" type="submit"><i class="dw dw-delete-3"></i> حذف</button>
										</form>
									</div>
								</div>
							</td>
						</tr>
						<?php $numberPlus++; } ?>


						
					</tbody>
				</table>
			</div>
        </div>
  

@endsection


            

							