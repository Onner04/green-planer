<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderDetail extends Model
{
    use HasFactory;

    protected $table = 'orderDetails';
    
    protected $fillable = ['id_product', 'id_order', 'quantity', 'price', 'color', 'size'];

    public function product()
    {
        return $this->belongsTo(products::class, 'id_product');
    }
}
