<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DetailController extends Controller
{
    public function printOrder($checkout_code)
    {
        $pdf = PDF::make('dompdf.wrapper');
        $pdf->loadHTML($this->print_order_convert($checkout_code));
        return $pdf->stream();
    }
    
    public function print_order_convert($checkout_code)
    {
        return $checkout_code;
    }
    
    public function index()
    {   
        $listDetail = OrderDetail::paginate(config("constant.paginate"));
        $product = Product::get();
        // $listDetail = OrderDetail::with('product')->paginate(config("constant.paginate"));
        return view('backend.detail.index',[
            'order_detail' => $listDetail,
            'product' => $product
        ]);
    }
}
