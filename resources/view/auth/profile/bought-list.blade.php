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
            <h1 class="text-right">محصولات خریداری شده </h1>
            <div class="row">
                <div class="product-box">
                    <table>
                        <tr>
                          <th>#</th>
                          <th>تصویر</th>
                          <th>نام</th>
                          <th>قیمت</th>
                          <th>تعدااد خریداری شده</th>
                          <th>کد فاکتور</th>
                          <th>وضعیت</th>
                          <th></th>
                        </tr>
                        
                        <?php $numberPlus = 1;foreach ($boughts as $bought) { ?>
                        <tr>
                          <td><?= $numberPlus ?></td>
                          <td><img src="<?= asset($bought->product()->photo()->image) ?>" alt="" width="70px" height="70px"></td>
                          <td><?= $bought->product()->title ?></td>
                          <td><?= $bought->price ?></td>
                          <td><?= $bought->cart()->count ?></td>
                          <td><?= $bought->id ?></td>
                          <td><?= $bought->status() ?></td>
                          <td>
                              <a href="#" class="btn btn-danger">کالا را نمیخوام</a>
                          </td>
                        </tr>
                        <?php $numberPlus++; } ?>
                       
                      </table>
                  </div>
            </div>
        </div>
    </div>

</div>
@endsection