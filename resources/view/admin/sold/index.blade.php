@extends('admin.layouts.master')

@section('head-tag')
    <title>فاکتور کالا هایه فروش رفته</title>
    <link rel="stylesheet" type="text/css" href="<?= asset('src/plugins/jquery-steps/jquery.steps.css')?>">

@endsection

@section('content')
<div class="main-container">
    <div class="pd-ltr-20">

        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="pull-right">
                    <h4 class="text-blue h4 text-right"> فاکتور کالا هایه فروش رفته </h4>
                </div>
                <div class="pull-left">
                </div>
            </div>
 
            <div class="card-box mb-30 " style="text-align: right;">
				<table class="data-table table nowrap">
					<thead>
						<tr>
							<th class="table-plus datatable-nosort">محصول</th>
							<th>نام محصول</th>
							<th>وضیت </th>
							<th>فروشنده</th>
							<th>خریدار</th>
							<th>تعداد خریداری شده</th>
							<th>قیمت کل</th>
							<th class="datatable-nosort">عملیات</th>
						</tr>
					</thead>
					<tbody>
						
						<?php foreach($boughts as $bought){ ?>
						<tr >
							<td class="table-plus">
								<img src="<?= asset($bought->product()->photo()->image)?>" width="70" height="70" alt="">
							</td>
							<td>
                               <?= $bought->product()->title ?>
							</td>
							<td>  <?= $bought->status() ?></td>
							<td> <?= fullUsername($bought->product()->user()) ?></td>
							<td> <?= fullUsername($bought->user()) ?></td>
							<td > <?= $bought->cart()->count ?></td>
							<td> <?= $bought->price ?></td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="<?= route('admin.sold.status', ['1', $bought->id]) ?>"><i class="dw dw-edit2"></i> تغیر وضیت به در حال ارسال</a>
										<a class="dropdown-item" href="<?= route('admin.sold.status', ['2', $bought->id]) ?>"><i class="dw dw-edit2"></i> تعیر وضیت به تحویل داده شده</a>
										<a class="dropdown-item" href="<?= route('admin.sold.status', ['3', $bought->id]) ?>"><i class="dw dw-edit2"></i> تغیر وضیت به مرجوعی</a>
									</div>
								</div>
							</td>
						</tr>
						<?php } ?>


						
					</tbody>
				</table>
			</div>
        </div>
  

@endsection


            

							