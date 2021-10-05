@extends('auth.profile.layouts.master')



@section('head-tag')
    <title>پروفایل کاربر</title>
@endsection



@section('content')
<div class="profile-info col-md-9">
    <div class="panel">
        <a href="<?= route('home.index') ?>" class="btn btn-danger pull-right">بازگشت </a>
        <a href="<?= route('profile.edit', [$user->id]) ?>" class="btn btn-warning pull-right">ویرایش پروفایل </a>
        <div class="bio-graph-heading">
        </div>
        <div class="panel-body bio-graph-info">
            <h1 class="text-right">مشخصات اصلی</h1>
            <div class="row" dir="rtl">
                <div class="bio-row">
                    <p><span>نام </span>:<?= fullUsername($user) ?></p>
                </div>
                <div class="bio-row">
                    <p><span>ایمیل </span>: <?= $user->email ?></p>
                </div>
                <div class="bio-row">
                    <p><span>تاریخ عضویت </span>: <?= $user->created_at ?></p>
                </div>
                <div class="bio-row">
                    <p><span>محصولات خریداری شده</span>:<?= count($user->boughts()->get()) ?></p>
                </div>
                <div class="bio-row">
                    <p><span> محصولات در لیست علاقه مندی ها </span>:<?= count($user->wishlist()->get()) ?></p>

                </div>
         
            </div>
        </div>
    </div>

</div>
@endsection