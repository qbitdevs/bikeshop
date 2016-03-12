<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_product_detail extends Model
{
    protected $table = 'order_product_detail';
    protected $fillable = [ 'cost', 'quantity', 'product_id', 'order_id', 'created_at', 'updated_at' ];

    public function products() {
        return $this->hasMany('App\Models\Product');
    }

    public function orders() {
        return $this->hasMany('App\Models\Order');
    }

}
