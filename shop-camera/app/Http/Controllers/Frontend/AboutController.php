<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController as Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AboutController extends Controller
{
  public function index()
  {
    $category = Category::get();
    $listProducts = Product::get();
    $brands = Brand::get();
    return view('frontend.about.index',[
      'category' => $category,
      'products' =>$listProducts,
      'brand' => $brands
    ]);
  }
}