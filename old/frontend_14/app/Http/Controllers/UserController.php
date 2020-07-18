<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

class UserController extends Controller
{
    public $cookie_value;
    /*userLogin*/
    public $abc;

    public function userLoginget(){
        return view('userInterface.login');
    }
    public function userLogin(Request $request){

        $email = $request->input('email');
        $password = $request->input('password');
        
        $response = Http::post('https://islampurbackend.islampurmarket.com/api/login',[
                      'email'=>$email,
                      'password'=>$password
        ]);
        session(['user' => 2]);
        $this->abc ='Farhan';
        //dd();
        $staCode = $response->status(); 
        if($staCode == 200){
            //user cookie
            $data = $response->body();
            $results = json_decode($data);
            $data = $results->data;

            $cookie_name = "user";
            $cookie_value = $results->data->id;
            setcookie($cookie_name,$cookie_value, time() + (86400 * 30), "/");

            return redirect('/profile');
        }
        else {
            return back()->with('error', 'Wrong Login Details');
        }
    }

    public function userprofileget(){

        $response = Http::get('https://islampurbackend.islampurmarket.com/api/products/');
        $results = json_decode($response);
        $totalproduct = $results->totalproduct;

        $response = Http::get("https://islampurbackend.islampurmarket.com/api/order");
        $order = json_decode($response);

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
            return view('userInterface.index',compact('results','totalproduct','abc','def'));
        }else if ($age==2) {

            $user_id = $_COOKIE['user'];
            $userresponse = Http::get('https://islampurbackend.islampurmarket.com/api/userdata/'.$user_id);
            $user = json_decode($userresponse);
            $abc= $user->data->name;
            $def = 'profile';
            return view('userprofile.userprofile',compact('user','results','order','totalproduct','abc','def'));
        }

        //return view('userprofile.userprofile',compact('data','totalproduct','order'));
    }

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
                $abc='Login';
                return view('userprofile.userprofile',compact('data','$abc','order'));
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

    public function usercreate(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $password = $request->input('password');

        $response = Http::post('https://islampurbackend.islampurmarket.com/api/usersignin',[
                      'name'=>$name,
                      'email'=>$email,
                      'phone'=>$phone, 
                      'message'=>$password 
        ]);          
        return redirect('/login');
    }

	/*user home page*/
    public function userHome(){

        $response = Http::get('https://islampurbackend.islampurmarket.com/api/products/');
        $results = json_decode($response);
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
            return view('userInterface.index',compact('results','totalproduct','abc','def'));
        }else if ($age==2) {

            $user_id = $_COOKIE['user'];
            $userresponse = Http::get('https://islampurbackend.islampurmarket.com/api/userdata/'.$user_id);
            $user = json_decode($userresponse);
            $abc= $user->data->name;
            $def = 'profile';
            return view('userInterface.index',compact('results','totalproduct','abc','def'));
        }
    }

    /*productDescription*/
    public function productDescription($id){

        $response = Http::get("https://islampurbackend.islampurmarket.com/api/products/$id");
        $results = json_decode($response);
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

            return view('userInterface.singleproduct',compact('results','totalproduct','abc','def'));
        }else if ($age==2) {

            $user_id = $_COOKIE['user'];
            $userresponse = Http::get('https://islampurbackend.islampurmarket.com/api/userdata/'.$user_id);
            $user = json_decode($userresponse);
            $abc= $user->data->name;
            $def = 'profile';
            return view('userInterface.singleproduct',compact('results','totalproduct','abc','def'));
        }

        //return view('userInterface.singleproduct',compact('results','totalproduct')); 
    }

    /*productDescription*/
    public function productshow(Request $request){
        $name = $request->input('name');

        $response = Http::post('https://islampurbackend.islampurmarket.com/api/showproducts',['name'=>$name ]);
        //dd($response);

        $data = $response->body();
        $results = json_decode($data);
        $resp = $results->data;
        //dd($data);

 
       



        $totalproduct = $results->totalproduct;;

        if ($results->data== null) {
            return redirect('/');
        }
        else{
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

                return view('userInterface.singleproduct',compact('results','totalproduct','abc','def'));
            }else if ($age==2) {

                $user_id = $_COOKIE['user'];
                $userresponse = Http::get('https://islampurbackend.islampurmarket.com/api/userdata/'.$user_id);
                $user = json_decode($userresponse);
                $abc= $user->data->name;
                $def = 'profile';
                return view('userInterface.singleproduct',compact('results','totalproduct','abc','def'));
            }
        }

        //return view('userInterface.singleproduct',compact('results','totalproduct')); 
    }

    /*product*/
    public function product($id){

        $data = $id;
        //dd($data);
        $response = Http::get('https://islampurbackend.islampurmarket.com/api/products/');
        $results = json_decode($response);
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

            return view('userInterface.index',compact('results','totalproduct','abc','def'));
        }else if ($age==2) {
            $user_id = $_COOKIE['user'];
            $userresponse = Http::get('https://islampurbackend.islampurmarket.com/api/userdata/'.$user_id);
            $user = json_decode($userresponse);
            $abc= $user->data->name;
            $def = 'profile';
            return view('userInterface.product',compact('results','totalproduct','abc','def','data'));
        }

        //return view('userInterface.product',compact('results','totalproduct'),$data); 
    } 
    /*allproduct*/
    public function allproduct(){

        $response = Http::get('https://islampurbackend.islampurmarket.com/api/products/');
        $results = json_decode($response);
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
            return view('userInterface.index',compact('results','totalproduct','abc','def'));
        }else if ($age==2) {

            $user_id = $_COOKIE['user'];
            $userresponse = Http::get('https://islampurbackend.islampurmarket.com/api/userdata/'.$user_id);
            $user = json_decode($userresponse);
            $abc= $user->data->name;
            $def = 'profile';
            return view('userInterface.allproduct',compact('results','totalproduct','abc','def'));
        }

        //return view('userInterface.allproduct',compact('results','totalproduct')); 
    } 
    /*about*/
    public function about(){
        $response = Http::get('https://islampurbackend.islampurmarket.com/api/products/');
        $results = json_decode($response);
        $totalproduct = $results->totalproduct;

        return view('userInterface.about',compact('totalproduct')); 
    }

    /*contact*/
    public function contact(){
        $response = Http::get('https://islampurbackend.islampurmarket.com/api/products/');
        $results = json_decode($response);
        $totalproduct = $results->totalproduct;

        return view('userInterface.contact',compact('totalproduct')); 
    }

    public function usercontact(Request $request){

        $contactusername = $request->input('contactusername');
        $contactemail = $request->input('contactemail');
        $contactnumber = $request->input('contactnumber');
        $contactcomment = $request->input('contactcomment');

        $response = Http::post('https://islampurbackend.islampurmarket.com/api/contructinsert/',[
                      'name'=>$contactusername,
                      'email'=>$contactemail,
                      'phone'=>$contactnumber, 
                      'message'=>$contactcomment 
        ]);      
        return back();
    }

    /*searchproduct*/
    public function searchproduct(Request $request){
        
        $product_type = $request->category;
        $data['product_type'] = $product_type;
        $response = Http::get('https://islampurbackend.islampurmarket.com/api/products/');
        $results = json_decode($response);
        $totalproduct = $results->totalproduct;

        return view('userInterface.search',compact('results','totalproduct'),$data); 
        //return redirect('/user/search')->with(compact('results','totalproduct'),$data);
    }
    
    /*payment*/
    public function payment(){
        $response = Http::get('https://islampurbackend.islampurmarket.com/api/products/');
        $results = json_decode($response);
        $totalproduct = $results->totalproduct;

        return view('userInterface.payment',compact('totalproduct')); 
    }

    /*shipping*/

    public function shipping(){
        $response = Http::get('https://islampurbackend.islampurmarket.com1/api/products/');
        $results = json_decode($response);
        $totalproduct = $results->totalproduct;

        return view('userInterface.shipping',compact('totalproduct')); 
    }

   /* returnpolicy*/
   public function returnpolicy(){
        $response = Http::get('https://islampurbackend.islampurmarket.com/api/products/');
        $results = json_decode($response);
        $totalproduct = $results->totalproduct;

        return view('userInterface.returnpolicy',compact('totalproduct')); 
    }
    
}
