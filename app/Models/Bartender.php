<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bartender extends Model
{
    use HasFactory;
    protected $table = 'bartenders';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'age', 'phone','image'];
    public function drink()
    {
        return $this->hasMany(drink::class);
    }
}