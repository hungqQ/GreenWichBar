<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $fillable = ['order_id','drink_id','customer_id'];
    public function drink()
    {
        return $this->belongsTo(Drink::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}