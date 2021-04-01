<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
	public function __construct()
	{
		$brands = Catalog::Where('brand', 1)->get();
		view()->share('brands', $brands);
	}
	/* -- Cart --*/
	public function cart(Request $request, $action = null, $id = null)
	{
		switch ($action) {
			case 'update':
				foreach (array_keys(session('cart')) as $key) {
					session([
						"cart.$key.number" => $request->input($key . "number")
					]);
				}
				return redirect("cart");
				break;

			case 'add':
				if (session("cart.$id.number")) {
					session(["cart.$id.number" => session("cart.$id.number") + 1]);
				} else {
					session(["cart.$id.number" => 1]);
					// session(["cart.qty"=>session("cart.qty")+1]);
				}
				return redirect("cart");
				break;

			case 'delete':
				session()->forget("cart.$id");
				// session(["cart.qty"=>session("cart.qty")-1]);
				return redirect('cart');
				break;
			case 'deleteall':
				session()->forget("cart");
				return redirect('cart');
				break;
			default:
				if (session("cart")) {
					$products = Product::whereIn('id', array_keys(session('cart')))->get();
					return view('page.cart', compact('products'));
				} else {
					return view('page.cart');
				}
				break;
		}
	}
	/*-- end cart --*/
}
