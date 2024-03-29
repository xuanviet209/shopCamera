<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController as Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use App\Models\User;
use App\Models\Comment;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Mail;
use App\Models\Order;
use App\Models\OrderDetail;
use Session;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
  public function index(Request $request) //Category $category
  {
    $searchProduct["key"] = $request->key ??  "";
    // if($searchProduct != "")
    // {
    //     $dataProduct->where('name','like','%'.$searchProduct["key"].'%');
    // }
    if (isset($_GET['sort_by'])) {
      $sort_by = $_GET['sort_by'];

      if ($sort_by == 'giam_dan') {

        $product_by_id = Product::where('name', 'like', '%' . $searchProduct["key"] . '%')->orderBy('price', 'DESC')->paginate(config("constant.paginate"))->appends($searchProduct);
      } elseif ($sort_by == 'tang_dan') {

        $product_by_id = Product::where('name', 'like', '%' . $searchProduct["key"] . '%')->orderBy('price', 'ASC')->paginate(config("constant.paginate"))->appends($searchProduct);
      } elseif ($sort_by == 'kytu_za') {

        $product_by_id = Product::where('name', 'like', '%' . $searchProduct["key"] . '%')->orderBy('name', 'DESC')->paginate(config("constant.paginate"))->appends($searchProduct);
      } elseif ($sort_by == 'kytu_az') {

        $product_by_id = Product::where('name', 'like', '%' . $searchProduct["key"] . '%')->orderBy('name', 'ASC')->paginate(config("constant.paginate"))->appends($searchProduct);
      }
    } else {
      $product_by_id = Product::where('name', 'like', '%' . $searchProduct["key"] . '%')->orderBy('id', 'DESC')->paginate(config("constant.paginate"))->appends($searchProduct);
    }

    // $product_by_id=Product::getProducts($searchProduct);
    return view('frontend.home.index', [
      'products' => $product_by_id
    ]);
  }

  public function logout()
  {
    Auth::guard('cus')->logout();
    return redirect()->route('fr.home');
  }
  
  public function login()
  {
    return view('frontend.home.login');
  }

  public function postLogin(Request $request)
  {
    $this->validate($request, [
      'email' => 'required',
      'password' => 'required',
    ], [
      'email.required' => ' Vui lòng nhập địa chỉ Email xv',
      'password.required' => 'Vui lòng nhập Password',
    ]);

    if (Auth::guard('cus')->attempt($request->only('email', 'password'), $request->has('remember'))) {
      return redirect()->route('fr.home');
    } else {
      return redirect()->back();
    }
  }
  //lọc theo danh mục
  public function view($id)
  {
    $category = Category::where('id', $id)->first();
    $dataProduct = DB::table('products');
    return view('frontend.home.product', [
      'category' => $category,
      'products' => $dataProduct
    ]);
  }

  public function contact()
  {
    return view('frontend.contact');
  }

  public function postContact(Request $request)
  {
    Mail::send('frontend.email.send', [
      'name' => $request->name,
      'email' => $request->email,
      'content' => $request->content,
      'phone' => $request->phone,
    ], function ($mail) use ($request) {
      $mail->to('vietd8k11@gmail.com');
      $mail->from($request->email);
      $mail->subject('Thông tin liên hệ');
    });
    return redirect()->back()->with('message', 'Gửi thông tin liên hệ thành công');
  }

  public function detailProduct(Request $request)
  {
    $products = Product::where('slug', $request->slug)->first();
    // $category = Category::where('status',1)->get();
    return view('frontend.detail.index', [
      'products' => $products
      // 'category'=> $category
    ]);
  }

  public function load_comment(Request $request)
  {
    $id = $request->id;
    $comment = Comment::where('comment_products_id',$id)->where('comment_status',0)->get();
    $output = '';
    foreach($comment as $key => $item){
        $output.= '
          <div class="row style_comment">
            <div class="col-md-3">
                <img width="60%" src="frontend/assets/img/avarta.png" alt="">
            </div>
            <div class="col-md-9">
                <p style="color:green;">@'.$item->comment_name.'</p>
                <p style="color:blue;">'.$item->comment_date.'</p>
                <p>'.$item->comment.'</p>
            </div>
          </div>
          <p></p>';
          
          foreach($comment as $key => $value) {
            if($value->comment_parent_comment == $item->comment_id ){
              $output.='
                <div class="row style_comment" style="margin: 5px 40px; background:white">
                  <div class="col-md-3">
                      <img width="30%" src="frontend/assets/img/VCamera.png" alt="">
                  </div>
                  <div class="col-md-9">
                      <p style="color:blue;">@VCamera</p>
                      <p style="color:black;">'.$value->comment.'</p>
                      <p></p>
                  </div>
                </div>
                <p></p>';
            }
          }
    }
    echo $output;
  }
  
  public function send_comment(Request $request)
  {
    $id = $request->id;
    $comment_name = $request->comment_name;
    $comment_content = $request->comment_content;
    $comment = new Comment();
    $comment->comment_products_id = $id;
    $comment->comment_name = $comment_name;
    $comment->comment = $comment_content;
    $comment->comment_status = 1;
    $comment->save();
  }
  
  public function show()
  {
    return view('frontend.home.show');
  }
  
  public function detailCustomer()
  {
    $getOrder = Order::where('customer_id',Auth::guard('cus')->user()->id)->orderby('id','DESC')->get();
    $product = Product::get();
      return view('frontend.home.detail',[
        'getOrder'=>$getOrder,
        'product' =>$product
      ]);
  }
  
  public function getProductHot()
  {
    $hotProduct = Product::orderBy('quantity','ASC')->limit(5)->get();
    return view('frontend.home.hot',[
      'hotProducts' => $hotProduct
    ]);
  }
}
