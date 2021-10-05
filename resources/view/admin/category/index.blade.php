@extends('admin.layouts.master')

@section('head-tag')
    <title>دسته بندی ها</title>

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
                    <a href="<?= route('admin.category.create') ?>" class="btn btn-success d-inline">افزودن دسته بندی جدید</a>
                </div>
            </div>
 
            <div class="card-box mb-30 " style="text-align: right;">
				<table class="data-table table nowrap">
					<thead>
						<tr>
							<th># </th>
							<th>عکس</th>

							<th class="table-plus datatable-nosort">نام</th>
							<th>سازنده </th>
							<th>تعداد محصولات زیر دسته</th>
							<th>دسته بندی والد</th>
							
							<th class="datatable-nosort">عملیات</th>
						</tr>
					</thead>
					<tbody>
						<?php $numberPlus =1; foreach($categories as $category){ ?>
							<tr >
							<td><?= $numberPlus; ?></td>
							<td><img src="<?= $category->image ?>" width="70" height="70" alt=""></td>

							<td> <?= $category->name ?> </td>
							<td> <?= fullUsername($category->user()) ?>  </td>

							<td> <?= count($category->products()->get()) ?> </td>
							
							<td> <?= haveParent($category) ?> </td>
							
							<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
										<a class="dropdown-item" href="<?= route('admin.category.edit', [$category->id]) ?>"><i class="dw dw-edit2"></i> ویرایش</a>
										<form action="<?= route('admin.category.delete', [$category->id]) ?>" method="POST">
										
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


            

							