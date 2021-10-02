@extends('admin.layouts.master')

@section('head-tag')
    <title>محصولات</title>
    <link rel="stylesheet" type="text/css" href="<?= asset('src/plugins/jquery-steps/jquery.steps.css')?>">

@endsection

@section('content')
<div class="main-container">
    <div class="pd-ltr-20">

        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="pull-right">
                    <h4 class="text-blue h4 text-right"> محصولات </h4>
                    <p class="mb-30 text-right">لیست همه محصولات  </p>
                </div>
                <div class="pull-left">
                    <a href="<?= route('admin.product.create') ?>" class="btn btn-success d-inline">افزودن محصول جدید</a>
                    <a href="<?= route('admin.product.archive') ?>" class="btn btn-warning d-inline">محصولات بایگانی شده</a>
                </div>
            </div>
 
            <div class="card-box mb-30 ">
				<table class="data-table table nowrap ">
					<thead>
						<tr>
							<th class="table-plus datatable-nosort">محصول</th>
							<th>نام محصول</th>
							<th>فروشنده</th>
							<th>دسته بندی</th>
							<th>برند</th>
							<th>قیمت</th>
							<th class="datatable-nosort">عملیات</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($products as $product) { ?>
							
						<tr >
							<td class="table-plus">
								<img src="<?= asset($product->photo()->image)?>" width="70" height="70" alt="">
							</td>
							<td>
                                 <?= $product->title ?>
							</td>
							<td> <?= fullUsername($product->user()) ?></td>
							<td><?= $product->category()->name ?></td>
							<td ><?= $product->brand()->name ?></td>
							<td><?= $product->amount ?></td>
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="<?= route('admin.gallery.create', [$product->id]) ?>"><i class="dw dw-eye"></i> گالری</a>
										<a class="dropdown-item" href="<?= route('admin.product.edit', [$product->id]) ?>"><i class="dw dw-edit2"></i> ویرایش</a>
										<form action="<?= route('admin.product.delete', [$product->id]) ?>" method="post">
											<input type="hidden" name="_method" value="delete">
											<button class="dropdown-item" type="submit"><i class="dw dw-delete-3"></i> حذف</button>
									
										</form>

									
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


            

							