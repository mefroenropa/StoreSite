@extends('auth.profile.layouts.master')



@section('head-tag')
    <title>پروفایل کاربر</title>
@endsection



@section('content')
<div class="profile-info col-md-9">
    <div class="panel">
        <a href="<?= route('home.index') ?>" class="btn btn-danger pull-right">بازگشت </a>
        <div class="bio-graph-heading">
        </div>
        <div class="panel-body bio-graph-info">
            <h1 class="text-right">مشخصات اصلی</h1>
            <div class="row">
                

              <form action="<?= route('profile.update', [$user->id]) ?>" method="post" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label>نام</label>
                    <input value="<?= oldOrValue('first_name', $user->first_name) ?>" class="form-control text-right <?= errorClass('first_name') ?>" name="first_name" type="text" placeholder="نام خود را وارد کنید">
                    <?= errorText('first_name') ?>
                </div>

                <div class="form-group">
                    <label>نام خواندوادگی</label>
                    <input value="<?= oldOrValue('last_name', $user->last_name) ?>" class="form-control text-right <?= errorClass('last_name') ?>" name="last_name" type="text" placeholder="نام خانوادگی را وارد کنید">
                    <?= errorText('last_name') ?>
                </div>

                <div class="form-group">
                    <label>ایمیل</label>
                    <input value="<?= oldOrValue('email', $user->email) ?>" class="form-control text-right <?= errorClass('email') ?>" name="email" type="text" placeholder="ایمیل خود را وارد کنید">
                    <?= errorText('email') ?>
                </div>


                <div class="form-group">
                    <label>عکس مورد نظر را انتخاب کنید</label>
                    <input type="file" name="avatar" class="form-control <?= errorClass('name') ?>" />
                    <?= errorText('name') ?>
                </div>
                <input type="submit" value="ثبت" class="btn btn-success" />
            </form>
            
        </div>
    </div>
  
</div>
@endsection