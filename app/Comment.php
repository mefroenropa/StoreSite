<?php

namespace App;


use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

class Comment extends Model
{

    use HasSoftDelete;

    protected $table = "comments";
    protected $fillable = ['comment', 'like', 'user_id', 'product_id', 'report_count', 'parent_id', 'star_count', 'isConfirm'];
    protected $deletedAt = 'deleted_at';

    public function user()
    {
        return $this->belongsTo('\App\User', 'user_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo('\App\Category', 'parent_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo('\App\Product', 'product_id', 'id');
    }
    public function status()
    {
        switch ($this->isConfirm) {
            case 0:
                return '<h4 class="alert alert-warning"> در انتظار تایید </h4>';
                break;

            case 1:
                return '<h4 class="alert alert-success"> تایید شده </h4>';
                break;

            case 2:
                return '<h4 class="alert alert-danger"> رد شده </h4>';
                break;
        }
    }
}
