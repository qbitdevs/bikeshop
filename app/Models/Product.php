<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = [ 'active', 'brand', 'cost', 'description', 'gender', 'is_offer', 'name', 'quantity', 'category_id', 'created_at', 'updated_at' ];

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }
}
