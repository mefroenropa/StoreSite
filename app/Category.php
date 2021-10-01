<?php

namespace App;


use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

class Category extends Model
{

    use HasSoftDelete;

    protected $table = "categories";
    protected $fillable = ['name', 'user_id', 'parent_id'];
    protected $deletedAt = 'deleted_at';

    public function user(){
        return $this->belongsTo('\App\User', 'user_id', 'id');
    }

    public function parent(){
        return $this->belongsTo('\App\Category', 'parent_id', 'id');
    }

    public function products(){
        return $this->hasMany('\App\Product', 'cat_id', 'id');
    }

}