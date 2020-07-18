<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CartController extends Controller
{
    public function index()
    {
        $response = Http::get('https://islampurbackend.islampurmarket.com/api/products/');
        $cart = Http::get('https://islampurbackend.islampurmarket.com/api/cart/');
        $results = json_decode($response);
        $carts = json_decode($cart);

        $totalproduct = $results->totalproduct;

        $age = session('user');
        if ($age !== 2) {
            session(['user' => 1]);
            $age = session('user');
        }
        if($age==1)
        {
            $totalproduct = 0;
            $abc = $this->abc ='Login';
            $def = 'login';

            return view('userInterface.index',compact('carts','totalproduct','abc','def'));
        }else if ($age==2) {

            $user_id = $_COOKIE['user'];
            $userresponse = Http::get('https://islampurbackend.islampurmarket.com/api/userdata/'.$user_id);
            $user = json_decode($userresponse);
            $abc= $user->data->name;
            $def = 'profile';
            
            return view('cart.index',compact('carts','totalproduct','abc','def'));
        }
        //return view('cart.index', compact('totalproduct', 'carts'));
    }

    public function update(Request $request, $id)
    {
        $response = Http::post('https://islampurbackend.islampurmarket.com/api/cart_item_update', [
            'id' => $id,
            'product_quantity' => $request->product_quantity,
        ]);
        
        return back();
    }

    public function destroy($id)
    {
        $response = Http::post('https://islampurbackend.islampurmarket.com/api/cart_item_delete', [
            'id' => $id,
        ]);
        
        return back();
    }
}
