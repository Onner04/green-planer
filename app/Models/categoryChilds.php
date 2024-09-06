<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoryChilds extends Model
{
    use HasFactory;

    protected $fillable = ['name','category_id','status'];

    public function Category(){
        return $this->belongsTo(categories::class,'category_id');
    }
}
