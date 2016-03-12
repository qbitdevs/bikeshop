<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $fillable = [ 'amount', 'delivery_date', 'state', 'user_id', 'created_at', 'updated_at' ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
