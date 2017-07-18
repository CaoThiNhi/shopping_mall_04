<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = [
    'content',
    'unit_price',
    'quality',
    ]

 	public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function oder()
    {
        return $this->belongsTo(Order::class);
    }
}
