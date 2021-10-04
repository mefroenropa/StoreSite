@extends('admin.layouts.master')

@section('head-tag')
    <title>افزودن دسته بندی</title>
    <link rel="stylesheet" type="text/css" href="<?= asset('src/plugins/jquery-steps/jquery.steps.css')?>">

@endsection

@section('content')
<div class="main-container">
    <div class="pd-ltr-20">

        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="clearfix">
                    <div class="pull-right">
                        <h4 class="text-blue h4 text-right"> افزودن دسته بندی </h4>
                    </div>
                    <div class="pull-left">
                        <a href="<?= route('admin.category.index') ?>" class="btn btn-danger d-inline">بازگشت</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="pd-20 card-box mb-30 text-right">
            	<form action="<?= route('admin.category.store') ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>نام دسته بندی</label>
                        <input  value="<?= old('name') ?>" class="form-control text-righ <?= errorClass('name') ?>" name="name" type="text">
                        <?= errorText('name') ?>
                    </div>
                    <div class="form-group">
                        <label>نام انگلیسی دسته بندی</label>
                        <input value="<?= old('englishName') ?>" class="form-control text-righ <?= errorClass('englishName') ?>" name="englishName" type="text">
                        <?= errorText('englishName') ?>
                    </div>
                    <div class="form-group">
                        <label>عکس مورد نظر را انتخاب کنید</label>
                        <input type="file" name="image" class="form-control" />
                        <?= errorText('image') ?>
                    </div>
                    <div class="form-group">
                        <label>دسته بندی والد</label>
                        <select class="form-control text-right <?= errorClass('parent_id') ?>" name="parent_id" >
                            <option value="0">لطفا یک دسته بندی را انتخاب کنید</option>

                            <?php foreach($categories as $selectedCategory){?>
                            <option value="<?= $selectedCategory->id ?>" <?= (old('parent_id') == $selectedCategory->id) ? 'selected' : ''; ?>><?= $selectedCategory->name ?></option>
                            <?php } ?>
                        
                        </select>
                        <?= errorText('parent_id') ?>
                    </div>

                    <input type="submit" value="ثبت" class="btn btn-success">
                </form>
            
            </div>

        </div>


@endsection
