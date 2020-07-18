<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CheckoutController extends Controller
{
    public function index()
    {
        $response = Http::get('https://islampurbackend.islampurmarket.com/api/products/');
        $cart = Http::get('https://islampurbackend.islampurmarket.com/api/cart/');
        $results = json_decode($response);
        $carts = json_decode($cart);

        //$totalproduct = $results->data[0]->totalproduct;
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

            return view('userInterface.index',compact('carts','totalproduct','def'));
        }else if ($age==2) {

            $user_id = $_COOKIE['user'];
            $userresponse = Http::get('https://islampurbackend.islampurmarket.com/api/userdata/'.$user_id);
            $user = json_decode($userresponse);
            $abc= $user->data->name;
            $def = 'profile';
            return view('checkout.index',compact('carts','totalproduct','abc','def'));
        }
        //return view('checkout.index', compact('totalproduct', 'carts'));
    }

    public function store(Request $request)
    {
        $response = Http::post('https://islampurbackend.islampurmarket.com/api/order', [
            'user_id' => $_COOKIE['user'],
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'ip_address' =>  request()->ip(),
        ]);
        
        return redirect('/');
    }
}