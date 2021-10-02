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
                        <a href="<?= route('admin.product.index') ?>" class="btn btn-danger d-inline">بازگشت</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="pd-20 card-box mb-30">
            
                <div class="wizard-content">
                    <form action="<?= route('admin.product.update', [$product->id]) ?>" method="POST" class="tab-wizard wizard-circle wizard text-right">
                        <input type="hidden" name="_method" value="put">
                        <h5>مشخصات اولیه محصول </h5>
                        <section>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label > نا محصول :</label>
                                        <input value="<?= oldOrValue('title', $product->title) ?>" type="text" name="title" class="form-control <?= errorClass('title') ?>">
                                        <?= errorText('title') ?>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>قیمت اصلی :</label>
                                        <input value="<?= oldOrValue('amount', $product->amount) ?>" type="text" name="amount" class="form-control <?= errorClass('amount') ?>">
                                        <?= errorText('amount') ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>مبلغ اف خورده :</label>
                                        <input value="<?= oldOrValue('discount', $product->discount) ?>" type="text" name="discount" class="form-control <?= errorClass('discount') ?>">
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
                                                <option value="<?= $selectedBrand->id ?>" <?=  oldOrValue('brand_id', $product->brand_id) == $selectedBrand->id ? "selected" : ''?>><?= $selectedBrand->name ?></option>
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
                                                <option value="<?= $selectedCategory->id ?>" <?= oldOrValue('cat_id', $product->cat_id) == $selectedCategory->id ? "selected" : ''?>><?= $selectedCategory->name ?></option>
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
                                        <textarea class="form-control <?= errorClass('body') ?>" id="body" rows="5" name="body" placeholder="متن ..."><?= oldOrValue('body', $product->body) ?></textarea>
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
                            <p class="btn btn-primary" id="attr-add">افزودن</p>
                            <div class="row " id="attr-area">
                                <?php for($i = 0; $i < count($product->attr['value']);$i++){ ?>
                                   
                                <div class="col-md-12 border border-info w-90">
                                    
                                    <div class="form-group d-flex justify-content-center">
                                        <div class="row d-inline">
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                    <label > مقدار  :</label>
                                                    <input value="<?= oldOrValue('attr', $product->attr['value'][$i]) ?>" type="text" name="attr[value][<?= $i ?>]" class="form-control ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label > عنوان :</label>
                                                    <input value="<?= oldOrValue('attr', $product->attr['key'][$i]) ?>" type="text" name="attr[key][<?= $i ?>]" class="form-control ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <p class="btn btn-danger attr-remove" id="attr-remove">حذف</p>
                                    </div>
                                </div>
                                <p class="hidden" style="display: none;"><?= $i ?></p>
                                <?php } ?>


                                
                               
                              
                            </div>
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
<script>
   
 $(document).ready(function(){

    var numberPlus = $(".hidden:last").text();
    

  $("#attr-add").click(function(){
    numberPlus++;
      var div = '';
        div += '<div class="col-md-12 border border-info w-90">';
        div += '<div class="form-group d-flex justify-content-center">';
        div += ' <div class="row d-inline">';
        div += '<div class="col-md-6 ">';
        div += '<div class="form-group">';
        div += ' <label > مقدار  :</label>';
        div += ' <input type="text" name="attr[value]['+numberPlus+']" class="form-control ">';
        div += '</div>';
        div += '</div>';
        div += '</div>';
        div += ' <div class="row">';
        div += '<div class="col-md-6">';
        div += '<div class="form-group">';
        div += ' <label > عنوان :</label>';
        div += '<input type="text" name="attr[key]['+numberPlus+']" class="form-control ">';
        div += '</div>';
        div += '</div>';
        div += '</div>';
        div += '</div>';

        div += ' <div class="d-flex justify-content-center">';
        div += '  <p class="btn btn-danger attr-remove" id="attr-remove">حذف</p>';
        div += ' </div>';
        div += '</div>';
        
       
        

    
    $("#attr-area").append(div);
  });
  $(".attr-remove").click(function(){
    $(this).parent().parent().remove();
  });

});
</script>
<script src="<?= asset('ckeditor/ckeditor.js') ?>"></script>
<script type="text/javascript">
    CKEDITOR.replace('body');
</script>
@endsection