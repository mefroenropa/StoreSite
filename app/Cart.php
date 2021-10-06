<?php

namespace App;


use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

class Cart extends Model
{

    use HasSoftDelete;

    protected $table = "cart";
    protected $fillable = ['user_id', 'count', 'isPaid', 'product_id', 'price'];
    protected $deletedAt = 'deleted_at';

    public function user(){
        return $this->belongsTo('\App\User', 'user_id', 'id');
    }

    public function product(){
        return $this->belongsTo('\App\Product', 'product_id', 'id');
    }

    public function isDone(){
        switch($this->isPaid){
            case 0:
                return '<h4 class="alert alert-warning">پرداخت نشده </h4>';
            break; 

            case 1:
                return '<h4 class="alert alert-success"> پرداخت شده </h4>';
            break; 

            
        }
    }

 
    public function status(){
        switch($this->status){
            case 0:
                return '<h4 class="alert alert-warning"> در حال پردازش </h4>';
            break; 

            case 1:
                return '<h4 class="alert alert-primary"> در حال ارسال </h4>';
            break; 

            case 2:
                return '<h4 class="alert alert-info"> تحویل داده شده </h4>';
            break; 

            case 3:
                return '<h4 class="alert alert-danger"> مرجوعی </h4>';
            break;
        }
    }

}