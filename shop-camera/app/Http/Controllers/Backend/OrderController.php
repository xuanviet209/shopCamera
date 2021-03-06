<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $listOrder = Order::paginate(config("constant.paginate"));
        return view('backend.order.index',[
            'order' => $listOrder
        ]);
    }
}
