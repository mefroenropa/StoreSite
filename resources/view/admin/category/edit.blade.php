@extends('admin.layouts.master')

@section('head-tag')
    <title>ویرایش دسته بندی</title>
    <link rel="stylesheet" type="text/css" href="<?= asset('src/plugins/jquery-steps/jquery.steps.css')?>">

@endsection

@section('content')
<div class="main-container">
    <div class="pd-ltr-20">

        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="clearfix">
                    <div class="pull-right">
                        <h4 class="text-blue h4 text-right"> ویرایش دسته بندی </h4>
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
                        <label>نام دسته بندی</label>
                        <input class="form-control" name="name" type="text">
                    </div>
                    <div class="form-group">
                        <label>دسته بندی والد</label>
                        <select class="form-control text-right" name="parent_id" >
                            <option value="0">لطفا یک دسته بندی را انتخاب کنید</option>
                            <option value="0">الکترونیک</option>
                            <option value="0">ورزشی</option>
                            <option value="0">زد آب</option>
                            <option value="0">وسایل خانه</option>
                        </select>
                    </div>
                    <input type="submit" value="ثبت" class="btn btn-success">

                </form>
            
            </div>

        </div>


@endsection
