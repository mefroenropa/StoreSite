@extends('admin.layouts.master')

@section('head-tag')
    <title>ویرایش برند </title>
    <link rel="stylesheet" type="text/css" href="<?= asset('src/plugins/jquery-steps/jquery.steps.css')?>">

@endsection

@section('content')
<div class="main-container">
    <div class="pd-ltr-20">

        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="clearfix">
                    <div class="pull-right">
                        <h4 class="text-blue h4 text-right"> ویرایش برند </h4>
                    </div>
                    <div class="pull-left">
                        <a href="<?= route('admin.brand.index') ?>" class="btn btn-danger d-inline">بازگشت</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="pd-20 card-box mb-30 text-right">
            	<form action="<?= route('admin.brand.update', [$brand->id]) ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="put">
                        <div class="form-group">
                            <label>نام برند</label>
                            <input value="<?= oldOrValue('name', $brand->name) ?>" class="form-control <?= errorClass('name') ?>" name="name" type="text">
                            <?= errorText('name') ?>
                        </div>
                        
                        <div class="form-group">
                            <label> عکس برند مورد نظر را انتخاب کنید </label>
                            <div class="custom-file">
                                <label class="">Choose file</label>
                                <input type="file" name="image" class="form-control <?= errorClass('image') ?>">
                                <?= errorText('image') ?>
                            </div>
                        </div>

                        <input type="submit" value="ثبت" class="btn btn-success">
                    
                </form>
            
            </div>

        </div>


@endsection
