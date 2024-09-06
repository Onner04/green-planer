<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    
    protected $fillable = ['name','quantity','price','sale_price','category_id','image','description','status'];

    public function category()
    {
        return $this->belongsTo(categoryChilds::class,'category_id');
    }

    public function images()
    {
        return $this->hasMany(productImgs::class);
    }
}
