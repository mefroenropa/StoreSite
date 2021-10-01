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
                    <form action="index.php" method="POST" class="tab-wizard wizard-circle wizard text-right">
                        <h5>مشخصات اولیه محصول </h5>
                        <section>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label > نا محصول :</label>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>قیمت اصلی :</label>
                                        <input type="email" name="amount" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>مبلغ اف خورده :</label>
                                        <input type="text" name="discount" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>برند مورد نظر را انتخاب کنید :</label>
                                        <select name="brand_id" class="custom-select form-control">
                                            <option value="">Select City</option>
                                            <option value="Amsterdam">India</option>
                                            <option value="Berlin">UK</option>
                                            <option value="Frankfurt">US</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>دسته بندی مورد نظر را انتخاب کنید :</label>
                                        <select name="cat_id" class="custom-select form-control">
                                            <option value="">Select City</option>
                                            <option value="Amsterdam">India</option>
                                            <option value="Berlin">UK</option>
                                            <option value="Frankfurt">US</option>
                                        </select>
                                    </div>
                                </div>
                            
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label > توظیحات  :</label>
                                        <textarea class="form-control" id="body" rows="5" name="body" placeholder="متن ..."></textarea>
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
                                        <a class="btn btn-default waves-effect add-attr-section"> <i class="fa fa-plus m-r-5"></i> <span>افزودن</span> </a>
                                        <div class="attr-section" data-id="0">
                                            <span>عنوان :</span> <input type="text" name="attr[0][title]" class="form-control">
                                            <div class="tags-default">
                                                <span>نام :</span> <input class="myinput" type="text" name="attr[0][name][]">
                                                <span>مقدار :</span><input type="text" data-role="tagsinput" name="attr[0][val][]" placeholder="افزودن" style="display: none;">
                                                <a class="btn btn-icon waves-effect btn-default add-attr-row"> <i class="fa fa-plus-circle"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                          
                            </div>
                            <hr>
                            <br>
                        </section>
                        <!-- Step 3 -->
                        <h5>عکس پیش فرض</h5>
                        <section>
                            <div class="row">
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label> عکس مورد نظر را انتخاب کنید </label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                </div>
                                    
                            </div>
                            <input class="btn btn-success" type="submit" value="بارگذاری">
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
    $(function () {
        'use strict';
        // Change this to the location of your server-side upload handler:
        var url = location.protocol + '//' + window.location.hostname + '/manage/upload',
        uploadButton = $('<button>')
            .addClass('btn btn-primary')
            .prop('disabled', true)
            .text('Processing...')
            .on('click', function () {
                var $this = $(this),
                    data = $this.data();
                $this
                    .off('click')
                    .text('Abort')
                    .on('click', function () {
                        $this.remove();
                        data.abort();
                    });
                data.submit().always(function () {
                    $this.remove();
                });
            });
        $('#fileupload').fileupload({
            url: url,
            dataType: 'json',
            autoUpload: true,
            acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
            //maxFileSize: 120000, // 5 MB
            // Enable image resizing, except for Android and Opera,
            // which actually support image resizing, but fail to
            // send Blob objects via XHR requests:
            disableImageResize: /Android(?!.*Chrome)|Opera/
                .test(window.navigator.userAgent),
            previewMaxWidth: 100,
            previewMaxHeight: 100,
            previewCrop: false,
        }).on('fileuploadadd', function (e, data) {

            $("#uperror").text('');
            data.context = $('<div/>').appendTo('#files');
            $.each(data.files, function (index, file) {
                var node = $('<p/>')
                    .append($('<span/>').text(file.name));
                if (!index) {
                    node
                        .append('<br>')
                        .append(uploadButton.clone(true).data(data));
                }
                node.appendTo(data.context);
            });
        }).on('fileuploadprocessalways', function (e, data) {
            var index = data.index,
                file = data.files[index],
                node = $(data.context.children()[index]);
            if (file.preview) {
                node
                    .prepend('<br>')
                    .prepend(file.preview);
            }
            if (file.error) {



                $("#uperror").text(file.error);

                node
                    .append('<br>')
                    .append($('<span class="text-danger"/>').text(file.error));
            }
            if (index + 1 === data.files.length) {
                data.context.find('button')
                    .text('Upload')
                    .prop('disabled', !!data.files.error);
            }
        }).on('fileuploadprogressall', function (e, data) {
            $('#progress .progress-bar').fadeIn();
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
            $("#darsad").text(progress+'%');

        }).on('fileuploaddone', function (e, data) {
            $.each(data.result.files, function (index, file) {

                if (file.url) {

                    $("#myupload").append('<img style="width: 100px;border: 1px solid #c5c5c5;margin-left: 3px;" src="'+file.url+'">');
                    //console.log(file)
                    var galleryElm =  $('input[name=gallery]');
                    if(galleryElm.val() == '') galleryElm.val(file.name);
                    else galleryElm.val(galleryElm.val() + ',' + file.name);


                    var link = $('<a>')
                        .attr('target', '_blank')
                        .prop('href', file.url);
                    $(data.context.children()[index])
                        .wrap(link);
                } else if (file.error) {
                    var error = $('<span class="text-danger"/>').text(file.error);
                    $(data.context.children()[index])
                        .append('<br>')
                        .append(error);
                }
            });
        }).on('fileuploadfail', function (e, data) {
            $.each(data.files, function (index) {
                var error = $('<span class="text-danger"/>').text('مشکلی در روند بارگذاری پیش آمد.');
                $(data.context.children()[index])
                    .append('<br>')
                    .append(error);
            });
        }).prop('disabled', !$.support.fileInput)
            .parent().addClass($.support.fileInput ? undefined : 'disabled');
    });
    $('.add-attr-section').click(function () {
        //var section = $('.attr-section').clone();
        var id = $('.attr-area .attr-section').last().data('id') + 1;
        $('.attr-area').append('<div class="attr-section" data-id='+id+'>'+
            '<span>عنوان :</span> <a class="btn btn-default btn-trans waves-effect remove-attr-section m-b-5" style="padding: 3px;">حذف</a> <input type="text" name="attr['+id+'][title]" class="form-control">'+
            '<div class="tags-default">'+
            ' <span>نام :</span> <input class="myinput" type="text" name="attr['+id+'][name][]">'+
            ' <span>مقدار :</span><input type="text" class="tagsinput" data-role="tagsinput" name="attr['+id+'][val][]" placeholder="افزودن" style="display: none;">'+
            ' <a class="btn btn-icon waves-effect btn-default add-attr-row"> <i class="fa fa-plus-circle"></i> </a></div></div>');
        $(".tagsinput").tagsinput()
    });
    $('.attr-area').on('click', '.add-attr-row', function () {
        //var section = $('.tags-default').clone();
        //$('.attr-section').append(section)
        var id = $(this).closest('.attr-section').data('id');
        $(this).closest('.attr-section').append('<div class="tags-default"><span>نام :</span> <input class="myinput" type="text" name="attr['+id+'][name][]"> <span>مقدار :</span><input class="tagsinput" type="text" data-role="tagsinput" name="attr['+id+'][val][]" placeholder="افزودن" style="display: none;"> <a class="btn btn-icon waves-effect btn-default remove-attr-row"> <i class="fa fa-close"></i> </a></div>');
        $(".tagsinput").tagsinput()
    });
    $('.attr-area').on('click', '.remove-attr-row', function () {
        $(this).closest('.tags-default').remove();
    });
    $('.attr-area').on('click', '.remove-attr-section', function () {
        $(this).closest('.attr-section').remove();
    });

    $('.variant-area').on('change','select[name=variety]',function () {
        $('.addedvr').remove();
        var id = $(this).val();
        if(id == 0) return;
        $('input[name=varid]').val(id);
        var ajaxUri = location.protocol + '//' + window.location.hostname + '/manager/ajax';
        $.ajax({
            url: ajaxUri,
            method: 'POST',
            data: {id:id,todo:'variety'},
            success:function (msg) {
                if(msg){ console.log(msg)
                    var arr = msg.split(',');
                    var val;var ptr = /^#/;
                    for(i in arr){
                        if(ptr.test(arr[0])) val = "<span class='color-box' style='background-color:"+arr[i]+"'></span>"; else val = arr[i]
                        $('.variant-area').append("<div class='addedvr'><input type='checkbox' name='variant["+i+"][var]' value="+arr[i]+"> "+val+" <input type='number' name='variant["+i+"][qua]' class='small-input' placeholder='موجودی انبار'></div>");
                    }
                }else alert('پاسخی دریافت نشد. بعدا مجدد تلاش نمایید');
            },
            error:function (msg) {
                alert('پاسخی دریافت نشد . مجددا تلاش نمایید');
            }
        });

    });
    $("#cat,#brand,#wrnt,#variety").select2();

</script>
<script src="<?= asset('ckeditor/ckeditor.js') ?>"></script>
<script type="text/javascript">
    CKEDITOR.replace('body');
</script>
@endsection