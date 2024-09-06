<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    
    protected $fillable = ['name','phone','addrest','quantity','note','total_price','status','id_user'];

    public function orderDetail() {
        return $this->hasMany(orderDetail::class, 'id_order', 'id');
    }
}
