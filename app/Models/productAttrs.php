<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productAttrs extends Model
{
    use HasFactory;

    protected $fillable = ['id_product','id_attr'];
}
