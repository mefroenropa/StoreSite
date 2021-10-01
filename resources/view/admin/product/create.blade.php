@extends('admin.layouts.master')

@section('head-tag')
    <title>افزودن محصول</title>
    <link rel="stylesheet" type="text/css" href="<?= asset('src/plugins/jquery-steps/jquery.steps.css')?>">

@endsection

@section('content')
<div class="main-container">
    <div class="pd-ltr-20">

        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="clearfix">
                    <div class="pull-right">
                        <h4 class="text-blue h4 text-right"> افزودن محصول </h4>
                    </div>
                    <div class="pull-left">
                        <a href="index" class="btn btn-danger d-inline">بازگشت</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="pd-20 card-box mb-30">
            
                <div class="wizard-content">
                    <form action="<?= route('admin.product.store') ?>" method="POST" class="tab-wizard wizard-circle wizard text-right">
                        <h5>مشخصات اولیه محصول </h5>
                        <section>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label > نا محصول :</label>
                                        <input type="text" name="title" class="form-control <?= errorClass('title') ?>">
                                        <?= errorText('title') ?>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>قیمت اصلی :</label>
                                        <input type="number" name="amount" class="form-control <?= errorClass('amount') ?>">
                                        <?= errorText('amount') ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>مبلغ اف خورده :</label>
                                        <input type="number" name="discount" class="form-control <?= errorClass('discount') ?>">
                                        <?= errorText('discount') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>برند مورد نظر را انتخاب کنید :</label>
                                        <select name="brand_id" class="custom-select form-control text-right <?= errorClass('brand_id') ?>">
                                            <option value="0">بدونه برند</option>
                                            <?php foreach ($brands as $selectedBrand) {?>
                                                <option value="<?= $selectedBrand->id ?>" <?= old('brand_id') == $selectedBrand->id ? "selected" : ''?>><?= $selectedBrand->name ?></option>
                                                <?php } ?>
                                            </select>
                                            <?= errorText('brand_id') ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>دسته بندی مورد نظر را انتخاب کنید:</label>
                                        <select name="cat_id" class="custom-select form-control text-right <?= errorClass('cat_id') ?>">
                                            <?php foreach ($categories as $selectedCategory) {?>
                                                <option value="<?= $selectedCategory->id ?>" <?= old('cat_id') == $selectedCategory->id ? "selected" : ''?>><?= $selectedCategory->name ?></option>
                                                <?php } ?>
                                            </select>
                                            <?= errorText('cat_id') ?>
                                    </div>
                                </div>
                            
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label > توظیحات  :</label>
                                        <textarea class="form-control <?= errorClass('body') ?>" id="body" rows="5" name="body" placeholder="متن ..."></textarea>
                                        <?= errorText('body') ?>
                                    </div>
                                </div>
                               
                            </div>
                            <hr>
                            <br>
                        </section>
                        <!-- Step 2 -->
                        <h5> مشخصات کلی</h5>
                        <section>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group attr-area">
                                        <label for="">مشخصات (ویژگی ها)</label>
                                        <textarea class="form-control <?= errorClass('attributes') ?>" id="attributes" rows="5" name="attributes" placeholder="متن ..."></textarea>
                                        
                                    </div>
                                </div>
                                <?= errorText('attributes') ?>
                          
                            </div>
                            <div class="row">
                                
                                <div class="col-md-12 text-center">
                                    <input class="btn btn-success w-25" type="submit" value="بارگذاری">

                                </div>
                            <hr>
                            <br>
                        </section>
                    

                       
                   
                    </form>
                </div>
            </div>

        </div>


@endsection

@section('script')

<script src="<?= asset('src/plugins/jquery-steps/jquery.steps.js')?>"></script>
<script src="<?= asset('vendors/scripts/steps-setting.js')?>"></script>

<script src="<?= asset('ckeditor/ckeditor.js') ?>"></script>
<script type="text/javascript">
    CKEDITOR.replace('body');
</script>
@endsection