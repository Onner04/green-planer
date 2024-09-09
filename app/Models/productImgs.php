<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productImgs extends Model

{
    protected $table = 'images';
    use HasFactory;
    
    protected $fillable = ['images','product_id'];
}
