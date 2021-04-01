<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Payment;
use App\Models\Procata;
use App\Models\Product;
use App\Models\ProductSize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
	public function __construct()
	{
		$brands = Catalog::Where('brand', 1)->get();
		view()->share('brands', $brands);
	}

	public function getIndex()
	{
		return view('page.home');
	}

	public function search(Request $request, $type = null, $id = null)
	{
		if ($type == 'catalog') {
			$catalog = Procata::Where('catalog_id',$id)->get('product_id');
			$products = Product::WhereIn('id',$catalog)->paginate(6);
		} elseif ($type == 'keyword'){
			$products=Product::where('name','like','%'.$request->keyword.'%')->paginate(9);
			// }elseif ($type=='price'){
			// 	if($id=='10000000'){
			// 		$products = Product::Where('price','>=', $id)->orderBy('price','desc')->paginate(9);
			// 	}
			// 	elseif($id=='5000000'){
			// 		$products = Product::Where([['price','>=', $id],['price','<', 10000000]])->orderBy('price','desc')->paginate(9);
			// 	}
			// 	else{
			// 		$products = Product::Where([['price','>=', $id],['price','<', 5000000]])->orderBy('price','desc')->paginate(9);
			// 	}
			// 	$brands = Brand::Where('status',1)->get();
		} else {
			$products = Product::paginate(9);
		}
		return view('page.shop', compact('products'));
	}

	public function productDetail($id)
	{
		$product = Product::Where('id',$id)->first();
		$image_list = json_decode($product->image_list);
		$sizes = ProductSize::Where([['product_id',$id],['quantity','>',0]])->get();
		$catalog = Procata::Where('product_id',$id)->get('catalog_id');
		$pro_ids = Procata::WhereIn('catalog_id',$catalog)->get('product_id');
		$products = Product::WhereIn('id',$pro_ids)->get();
		return view('page.product-detail',compact('product','image_list','sizes','products'));
	}

	/*-- Checkout --*/
	public function checkout()
	{
		$payments = Payment::get();
		return view('page.checkout', compact('payments'));
	}

	/*-- end Checkout --*/
}
