@extends('admin.layouts.master')

@section('head-tag')
    <title>برند ها</title>
    <link rel="stylesheet" type="text/css" href="<?= asset('src/plugins/jquery-steps/jquery.steps.css')?>">

@endsection

@section('content')
<div class="main-container">
    <div class="pd-ltr-20">

        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="pull-right">
                    <h4 class="text-blue h4 text-right">  برند ها </h4>
                    <p class="mb-30 text-right">لیست همه برند ها  </p>
                </div>
                <div class="pull-left">
                    <a href="<?= route('admin.brand.create') ?>" class="btn btn-success d-inline">افزودن برند جدید</a>
                    <a href="<?= route('admin.brand.archive') ?>" class="btn btn-warning d-inline">برند هایه بایگانی شده</a>
                </div>
            </div>
 
            <div class="card-box mb-30 ">
				<table class="data-table table nowrap">
					<thead>
						<tr>
							<th># </th>
							<th>لوگو برند </th>

							<th class="table-plus datatable-nosort">نام</th>
							<th>سازنده </th>
							<th>تعداد محصولات زیر دسته</th>
							
							<th class="datatable-nosort">عملیات</th>
						</tr>
					</thead>
					<tbody>
						<?php $numberPlus = 1; foreach ($brands as $brand) { ?>
						<tr >
							
							<td><?= $numberPlus; ?></td>

							<td class="table-plus"> <img src="<?= asset($brand->image) ?> " alt="<?= $brand->name ?>" width="70" height="70" srcset=""></td>
							<td>  <?= $brand->name ?> </td>

							<td><?= fullUsername($brand->user()) ?> </td>
							
							<td> <?= count($brand->products()->get()) ?> </td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="<?= route('admin.brand.edit', [$brand->id]) ?>"><i class="dw dw-edit2"></i> ویرایش</a>
										<form action="<?= route('admin.brand.delete', [$brand->id]) ?>" method="post">
											<input type="hidden" name="_method" value="delete">
											<button class="dropdown-item" type="submit"><i class="dw dw-delete-3"></i> حذف</button>
										</form>
										
									</div>
								</div>
							</td>
						</tr>
						<?php $numberPlus++;} ?>

						
					</tbody>
				</table>
			</div>
        </div>
  

@endsection


            

							