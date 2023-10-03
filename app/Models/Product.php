<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'item_id';

    protected $fillable = [
        'type',
        'date',
    ];

    public function productType() {
        return $this->hasMany(ProductType::class);
    }

    public function basket() {
        return $this->belongsTo(Basket::class);
    }
}
