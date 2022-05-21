<?php

namespace App\Models;

use Database\Seeders\ProductSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillable = [
        'rating_id',
        'products_id',
        'rating'
    ];
    protected $primaryKey = "rating_id";
    protected $table = "rating";
}
