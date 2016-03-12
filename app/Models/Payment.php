<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payment';
    protected $fillable = [ 'amount', 'number_transaction', 'is_deposit', 'state', 'payment_date', 'bank_id', 'order_id', 'user_id', 'created_at', 'updated_at' ];

    public function bank() {
        return $this->hasOne('App\Models\Bank');
    }

    public function order() {
        return $this->belongsTo('App\Models\Order');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

}
