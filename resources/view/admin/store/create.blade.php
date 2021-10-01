@extends('admin.layouts.master')

@section('head-tag')
    <title>قسمت انبار داری</title>
    <link rel="stylesheet" type="text/css" href="<?= asset('src/plugins/jquery-steps/jquery.steps.css')?>">

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
                        <a href="index" class="btn btn-danger d-inline">بازگشت</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="pd-20 card-box mb-30 text-right">
            	<form>
                    <div class="form-group">
                        <label>کالایه مورد نظر را انتخاب کنید</label>
                        <select class="form-control text-right" name="parent_id" >
                            <option value="0">یکی از کالا ها را انتخاب کنید</option>
                            <option value="1">لب تاپ</option>
                            <option value="1">یخجال</option>
                            <option value="1">دوچرخه</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>تعداد موجودی را وارد کنید</label>
                        <input class="form-control text-right" name="name" type="text" placeholder="مثال : 20">
                    </div>

                    <div class="form-group">
                        <input type="submit" value="ثبت" class="btn btn-success"> 
                    </div>


                    
                  
                </form>
            
            </div>

        </div>


@endsection
