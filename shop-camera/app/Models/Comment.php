<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment',
        'comment_name',
        'comment_date',
        'comment_products_id'
    ];
    protected $primaryKey = 'comment_id';
    protected $table = 'comment';
}
