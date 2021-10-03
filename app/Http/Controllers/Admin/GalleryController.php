<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Gallery;
use System\Auth\Auth;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Services\ImageUpload;
use App\Product;
use System\Request\Request;

class GalleryController extends AdminController
{
    public function archive()
    {
        $categories = Category::archive();
        dd($categories);
        return view("admin.product.archive", compact('categories'));
    }

    public function create($id)
    {
        $product = Product::find($id);
        $galleries = Gallery::where('product_id', $product->id)->get();


        return view("admin.gallery.create", compact('galleries', 'id'));
    }


    public function store($id)
    {
        $request = new Request();
       
        $inputs = $request->all();
        $path = 'images/gallery/' . date('Y/M/d');
        $name = date('Y_m_d_H_i_s_') . rand(10, 99);
        $inputs['image'] = ImageUpload::UploadAndFitImage($request->file('image'), $path, $name, 640, 640);
        $inputs['user_id'] = Auth::user()->id;
        $inputs['product_id'] = $id;
        Gallery::create($inputs);
        return back();
    }




    public function isFirst($id)
    {
        $gallery = Gallery::find($id);
        $product = Product::where('id', $gallery->product_id)->get();
        if($gallery->isFirst == 0){
          
            foreach($product[0]->galleries()->get() as $pgallery){
                if($pgallery->isFirst == 1){
                    $pgallery->isFirst = 0;
                    $pgallery->save();
                }
                else{
                    continue;
                }
            }
            $gallery->isFirst = 1;
        }else{
            $gallery->isFirst = 0;
        }
        $gallery->save();
        return back();
    }




    public function destroy($id)
    {
        Gallery::delete($id);
        return back();
    }
}
