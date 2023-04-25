<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'foods';
    protected $primaryKey = 'id';
    protected $fillable = ['name','category','price'];

    public function drink()
    {
        return $this->belongsTo(Drink::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
