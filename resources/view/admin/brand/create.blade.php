@extends('admin.layouts.master')

@section('head-tag')
    <title>افزودن برند جدید</title>
    <link rel="stylesheet" type="text/css" href="<?= asset('src/plugins/jquery-steps/jquery.steps.css')?>">

@endsection

@section('content')
<div class="main-container">
    <div class="pd-ltr-20">

        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="clearfix">
                    <div class="pull-right">
                        <h4 class="text-blue h4 text-right"> افزودن برند </h4>
                    </div>
                    <div class="pull-left">
                        <a href="index" class="btn btn-danger d-inline">بازگشت</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="pd-20 card-box mb-30 text-right">
            	<form>
                        <div class="form-group">
                            <label>نام برند</label>
                            <input class="form-control" name="na222me" type="text">
                        </div>
                        
                        <div class="form-group">
                            <label> عکس برند مورد نظر را انتخاب کنید </label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>

                        <input type="submit" value="ثبت" class="btn btn-success">
                    
                </form>
            
            </div>

        </div>


@endsection
