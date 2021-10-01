@extends('admin.layouts.master')

@section('head-tag')
    <title>افزودن کد تخفیف</title>
    <link rel="stylesheet" type="text/css" href="<?= asset('src/plugins/jquery-steps/jquery.steps.css')?>">

@endsection

@section('content')
<div class="main-container">
    <div class="pd-ltr-20">

        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="clearfix">
                    <div class="pull-right">
                        <h4 class="text-blue h4 text-right"> افزودن کد تخفیف </h4>
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
                        <label>مبلغ / درصد کد تخفیف را وارد کنید</label>
                        <input class="form-control text-right" name="name" type="text" placeholder="%مبلع / درصد را وارد کنید مثال 20">
                    </div>
                    <div class="form-group">
                        <label>نوع تخفیف را انتخاب کنید (مبلغ / درصد)</label>
                        <select class="form-control text-right" name="parent_id" >
                            <option value="0">درصد</option>
                            <option value="1">مبلغ</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <label for="example-datetime-local-input" class="col-sm-12 col-md-2 col-form-label">تاریخ تمام شدن اعتبار را وارد کنید</label><br>
                        
                        <select class="form-control text-right" name="parent_id" >
                            <option value="24">24 ساعت</option>
                            <option value="48">48 ساعت</option>
                            <option value="120">120 ساعت</option>
                        </select>
                    </div>
                    <input type="submit" value="ثبت" class="btn btn-success">

                </form>
            
            </div>

        </div>


@endsection
