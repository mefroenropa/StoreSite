<?php

namespace App;

use System\Database\ORM\Model;
use System\Database\Traits\HasSoftDelete;

class Product extends Model
{

    use HasSoftDelete;

    protected $table = "products";
    protected $fillable = ['title', 'body', 'attr', 'amount', 'discount', 'cat_id', 'user_id', 'brand_id'];
    protected $casts = ['attr' => 'array'];
    protected $deletedAt = 'deleted_at';

    public function galleries()
    {
        return $this->hasMany("\App\Gallery", 'product_id', 'id');
    }

    public function photo()
    {
        foreach ($this->galleries()->get() as $photo) {
            if ($photo->isFirst == 1) {
                return $photo;
            } else {
                continue;
            }
        }
    }

    public function user()
    {
        return $this->belongsTo("\App\User", "user_id", "id");
    }

    public function brand()
    {
        return $this->belongsTo("\App\Brand", "brand_id", "id");
    }

    public function category()
    {
        return $this->belongsTo("\App\Category", "cat_id", "id");
    }

    public function comments()
    {
        return $this->hasMany("\App\Comment", 'product_id', 'id')->where('isConfirm', 1);
    }

    public function store()
    {
        return $this->hasOne('\App\Store', 'product_id', 'id');
    }

    public function storeCount()
    {
        return $this->store() != null ? (int)$this->store()->firstCount - (int)$this->store()->count : 0;
    }

    public function view()
    {
        return $this->hasMany('\App\View', 'product_id', 'id');
    }

    public function viewCount()
    {
        $viewCount = 0;
        foreach ($this->view()->get() as $view) {
            $viewCount += $view->view_count;
        }
        return $viewCount;
    }

    public function stars()
    {
        $sum = 0;
        $lenght = count($this->comments()->get());
        foreach ($this->comments()->get() as $comment) {
            $sum += $comment->star_count;
        }
        if ($sum != 0) {

            return (int)$sum / (int)$lenght;
        } else {
            return 0;
        }
    }

    public function countCommentOrderByStar($star)
    {
        $count = 0;
        foreach ($this->comments()->get() as $comment) {
            if ($comment->star_count == $star) {
                $count++;
            } else {
                continue;
            }
        }
        return $count;
    }

    public function commentPercent($star)
    {
        $count = 0;
        foreach ($this->comments()->get() as $comment) {
            if ($comment->star_count == $star) {
                $count++;
            } else {
                continue;
            }
        }
  

        $all = count($this->comments()->get());
        return ($count * 100) / $all; 
    }
}
