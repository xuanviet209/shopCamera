<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Comment extends Model
{
    use HasFactory;
    public $timestamps = false; //dùng khi ko cần trường updated_at
    protected $fillable = [
        'comment',
        'comment_name',
        'comment_date',
        'comment_products_id',
        'comment_parent_comment',
        'comment_status'
    ];
    protected $primaryKey = 'comment_id';
    protected $table = 'comment';
    
    public function product()
    {
        return $this->belongsTo(Product::class,'comment_products_id');
    }
}
