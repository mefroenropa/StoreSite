@extends('admin.layouts.master')

@section('head-tag')
    <title> قسمت انبار داری ویرایش</title>

@endsection

@section('content')
<div class="main-container">
    <div class="pd-ltr-20">

        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="clearfix">
                    <div class="pull-right">
                        <h4 class="text-blue h4 text-right"> مدیریت تعداد محصول </h4>
                    </div>
                    <div class="pull-left">
                        <a href="<?= route('admin.store.index') ?>" class="btn btn-danger d-inline">بازگشت</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="pd-20 card-box mb-30 text-right">
            	<form action="<?= route('admin.store.update', [$store->id]) ?>" method="POST">
                    <input type="hidden" name="_method" value="put">
                    <div class="form-group">
                        <label>کالایه مورد نظر را انتخاب کنید</label>
                        <select class="form-control text-right <?= errorClass('product_id') ?>" name="product_id" >
                            <?php foreach($products as $product){ ?>                            
                                <option value="<?= $product->id ?>" <?= oldOrValue('product_id', $store->product_id) == $product->id ? 'selected' : ''; ?>><?= $product->title ?></option>
                            <?php } ?>                            
                                
                        </select>
                        <?= errorText('product_id') ?>
                    </div>
                    <div class="form-group">
                        <label>تعداد موجودی را وارد کنید</label>
                        <input value="<?= oldOrValue('firstCount', $store->firstCount) ?>" class="form-control text-right <?= errorClass('firstCount') ?>" name="firstCount" type="text" placeholder="مثال : 20">
                        <?= errorText('firstCount') ?>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="ثبت" class="btn btn-success"> 
                    </div>


                    
                  
                </form>
            
            </div>

        </div>


@endsection
