@extends('admin.layouts.master') 
@section('head-tag')
<title>افزودن دسته بندی</title>

@endsection 
@section('content')
<div class="main-container">
    <div class="pd-ltr-20">
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="clearfix">
                    <div class="pull-right">
                        <h4 class="text-blue h4 text-right">افزودن دسته بندی</h4>
                    </div>
                    <div class="pull-left">
                        <a href="<?= route('admin.product.index')?>" class="btn btn-danger d-inline">بازگشت</a>
                    </div>
                </div>
            </div>
            <hr />
            <div class="pd-20 card-box mb-30 text-right">
                <form action="<?= route('admin.gallery.store', [$id]) ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>عکس مورد نظر را انتخاب کنید</label>
                        <input type="file" name="image" class="form-control" />
                        <?= errorText('name') ?>
                    </div>
                    <input type="submit" value="ثبت" class="btn btn-success" />
                </form>
            </div>
        </div>

        <div class="pd-ltr-20">
            <div class="pd-20 card-box mb-30">
                <div class="card-group" style="display: flex;">
                    <?php foreach($galleries as $gallery){ ?>
                    <div class="card" style="width: 18rem;">
                        <img class="img-thumbnail card-img-top" src="<?= asset($gallery->image) ?>" alt="image">
                        <?php if($gallery->isFirst == 1){ ?>
                            <a href="<?= route('admin.gallery.isFirst', [$gallery->id]) ?>" class="btn btn-warning ">حذف از قسمت عکس پیشفرض </a>
                            <?php }else{ ?>
                                <a href="<?= route('admin.gallery.isFirst', [$gallery->id]) ?>" class="btn btn-success ">تنظیم به انوان عکس پیشفرض</a>
                        <?php } ?> 
                       <form action="<?= route('admin.gallery.delete', [$gallery->id]) ?>" method="post">
                            <input type="hidden" name="_method" value="delete">
                            <button class="btn btn-danger w-100" type="submit">حذف</button>

                    </form>
                      
                    </div>  
                    <?php } ?>
                 
                    
                </div>  

                
            </div>
        </div>

        @endsection
    </div>
</div>
