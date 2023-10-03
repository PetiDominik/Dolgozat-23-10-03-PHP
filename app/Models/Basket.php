<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected  $primaryKey = 'basket_id';

    protected $fillable = [
        'item',
        'user',
    ];

    public function user() {
        return $this->hasMany(User::class);
    }

    public function product() {
        return $this->hasMany(Product::class);
    }
}
