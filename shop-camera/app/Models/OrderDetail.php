<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 'order_detail';
    protected $fillable = [
        'orders_id',
        'products_id',
        'price',
        'quantity',
    ];
    
    public static function getDetailDb($searchData)
    {
        $details = self::select("*");
        if (!empty($searchData["key"]) && $searchData["selectChoose"] == "orders_id") {
            $details->where('orders_id', 'like', '%' . $searchData["key"] . '%');
        }
        return $details->paginate(config("constant.paginate"));
    }
    
    public function product()
    {
        return $this->belongsTo(Product::class,'products_id','id');
    }
}
