<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $table = 'coupon';
    protected $fillable = [
        'coupon_name',
        'coupon_time',
        'coupon_condition',
        'coupon_number',
        'coupon_code',
    ];

    public static function getCouponDb($searchData)
    {
        $coupons = self::select("*");
        if (!empty($searchData["key"]) && $searchData["selectChoose"] == "coupon_name") {
            $coupons->where('coupon_name', 'like', '%' . $searchData["key"] . '%');
        }
        if (!empty($searchData["key"]) && $searchData["selectChoose"] == "coupon_code") {
            $coupons->where('coupon_code', 'like', '%' . $searchData["key"] . '%');
        }
        return $coupons->paginate(config("constant.paginate"));
    }
}
