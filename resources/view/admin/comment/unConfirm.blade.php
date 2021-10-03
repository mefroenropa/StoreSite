@extends('admin.layouts.master')

@section('head-tag')
    <title>کامنت ها</title>
    <link rel="stylesheet" type="text/css" href="<?= asset('src/plugins/jquery-steps/jquery.steps.css')?>">

@endsection

@section('content')
<div class="main-container">
    <div class="pd-ltr-20">

        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="pull-right">
                    <h4 class="text-blue h4 text-right">کامنت ها</h4>
                </div>
                <div class="pull-left">
                    <a href="<?= route('admin.comment.index') ?>" class="btn btn-danger d-inline"> بازگشت </a>

                </div>
            </div>
 
            <div class="card-box mb-30 " style="text-align: right;">
				<table class="data-table table nowrap">
					<thead>
						<tr>
							<th class="table-plus datatable-nosort">محصول</th>
							<th>نام محصول</th>
							<th>نام فرستنده</th>
							<th>وضیت </th>
							<th>تعداد لایک</th>
							<th>تاریخ انتشار</th>
							<th>ستاره ها</th>
							<th class="datatable-nosort">عملیات</th>
						</tr>
					</thead>
					<tbody>
						
						<?php foreach($comments as $comment){ ?>
						<tr >
							<td class="table-plus">
								<img src="<?= asset($comment->product()->photo()->image)?>" width="70" height="70" alt="">
							</td>
							<td>
                               <?= $comment->product()->title ?>
							</td>
							<td> <?= fullUsername($comment->user()) ?></td>
							<td>  <?= $comment->status() ?></td>
							<td> <?= $comment->likes ?></td>
							<td > <?= $comment->created_at ?></td>
							<td> <?= $comment->star_count ?></td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="<?= route('admin.comment.isConfirm', ['1', $comment->id]) ?>"><i class="dw dw-edit2"></i> تغیر وضعیت به تایید شده</a>
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


            

							