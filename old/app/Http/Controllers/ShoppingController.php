<?php

namespace App\Http\Controllers;

use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Response;
use App\Userid;
//use Illuminate\Foundation\Auth\Userlogin;
//use Melihovv\ShoppingCart\Facades\ShoppingCart as Cart;

class ShoppingController extends Controller
{

	/*public function cart(){
    	return view('userInterface.checkout'); 
    	//return Cart::getCountent();
    }*/

    protected $except = [
		'user'
	];

    public function add_to_cart(Request $request){
    	try {
    		
    		$age = session('user');
    		if ($age !== 2) {
    			session(['user' => 1]);
				$age = session('user');
    		}
			if($age==1)
			{
				session(['user' => 2]);
				
				return redirect('/login');
			}
			else if($age==2){

				$user_id = $_COOKIE['user'];
				$response = Http::post('https://islampurbackend.islampurmarket.com/api/cart', [
					'ip_address' => request()->ip(),
					'user_id' => $user_id,
					'product_id' => request()->pdtId,
					'product_quantity' => request()->qty,
				]);
				return redirect('/');
			}
	    } catch (Exception $exception) {
	        return redirect('/login');
	    }
	}

	public function setFoo($value) {
		parent::__set('foo', $value);
		return $this;
		}

		public function getFoo() {
		return parent::__get('foo');
	}
	
	
}


