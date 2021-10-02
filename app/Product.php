<?php

namespace App;

use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

class Product extends Model
{

    use HasSoftDelete;

    protected $table = "products";
    protected $fillable = [ 'title', 'body', 'attr', 'amount', 'discount', 'cat_id', 'user_id', 'brand_id'];
    protected $casts = ['attr' => 'array'];
    protected $deletedAt = 'deleted_at';

    public function galleries(){
        return $this->hasMany("\App\Gallery", 'product_id', 'id');
    }

    public function photo(){
        foreach($this->galleries()->get() as $photo){
            return $photo->isFirst == 0 ? '' : $photo;
        }
    }

    public function user(){
        return $this->belongsTo("\App\User", "user_id", "id");
    }

    public function brand(){
        return $this->belongsTo("\App\Brand", "brand_id", "id");
    }

    public function category(){
        return $this->belongsTo("\App\Category", "cat_id", "id");
    }



}