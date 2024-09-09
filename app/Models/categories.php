<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;
    
    protected $fillable = ['name','status','link'];

    public function categoryChild(){
        return $this->hasMany(categoryChilds::class,'category_id');
    }
}
