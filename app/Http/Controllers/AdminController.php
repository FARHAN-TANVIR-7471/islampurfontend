<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
use Session;


class AdminController extends Controller
{
    /*login get request*/
    public function login(){
        return view('admin.login');
    }

    /*login post request*/
    public function adminLogin(Request $request){
        $user = $request->input('user');
        $password = $request->input('password');
        
        $response = Http::post('http://127.0.0.1:8081/api/login',[
                      'email'=>$user,
                      'password'=>$password
        ]); 
        
        $staCode = $response->status(); 

        if($staCode == 200){
            return redirect('/dashboard');
        }
        else {
            return back()->with('error', 'Wrong Login Details');
        }
        //return redirect('/dashboard');
    }

    /*Product Controller*/
    public function product(){

        $response = Http::get("http://127.0.0.1:8081/api/products/");
        $results = json_decode($response);
        //dd($results);

    	return view('admin.product',  compact('results')); 
    }

    /*product Input*/ 
    /*product Input*/ 
    public function productinsert(Request $request){
        //dd($request);
        
            $image = "";
            $imagetwo = "";
            $imagethree = "";
            $imagefour = "";
            $imagefive = "";
            $imagesix = "";
            $imageseven = "";
            $imageeight = "";
            $imagenine = "";
            $imageten = "";


        $brand = $request->input('brand');
        $product_type_id = $request->input('product_type_id');

        $price =$request->input('price');
        
        $number =$request->input('number');
        $discount =$request->input('discount');
        $description =$request->input('description');

        $color =$request->input('color');
        $colortwo =$request->input('colortwo');
        $colorthree =$request->input('colorthree');
        $colorfour =$request->input('colorfour');
        $colorfive =$request->input('colorfive');
        $colorsix =$request->input('colorsix');
        $colorseven =$request->input('colorseven');
        $coloreight =$request->input('coloreight');
        $colornine =$request->input('colornine');
        $colorten =$request->input('colorten');

   $destinationPath = 'images/';
        
        if($request->file('image') !==null){
            $file = $request->file('image');
            $image ='/images/'.$file->getClientOriginalName();

            $file->move($destinationPath,$file->getClientOriginalName());
        }
        if($request->file('imagetwo') !==null){
            $filetwo = $request->file('imagetwo');
            $imagetwo ='/images/'.$filetwo->getClientOriginalName();
            $filetwo->move($destinationPath,$filetwo->getClientOriginalName());
        }
        if($request->file('imagethree') !==null){
            $filethree = $request->file('imagethree');
            $imagethree ='/images/'.$filethree->getClientOriginalName();
            $filethree->move($destinationPath,$filethree->getClientOriginalName());
        }
        if($request->file('imagefour') !==null){
            $filefour = $request->file('imagefour');
            $imagefour ='/images/'.$filefour->getClientOriginalName();
            $filefour->move($destinationPath,$filefour->getClientOriginalName());
            
        }
        if($request->file('imagefive') !==null){
            $filefive = $request->file('imagefive');
            $imagefive ='/images/'.$filefive->getClientOriginalName();
            $filefive->move($destinationPath,$filefive->getClientOriginalName());
        }
        if($request->file('imagesix') !==null){
            $filesix = $request->file('imagesix');
            $imagesix ='/images/'.$filesix->getClientOriginalName();
            $filesix->move($destinationPath,$filesix->getClientOriginalName());
        }
        if($request->file('imageseven') !==null){
            $fileseven = $request->file('imageseven');
            $imageseven ='/images/'.$fileseven->getClientOriginalName();
            $fileseven->move($destinationPath,$fileseven->getClientOriginalName());
        }
        if($request->file('imageeight') !==null){
            $fileeight = $request->file('imageeight');
            $imageeight ='/images/'.$fileeight->getClientOriginalName();
            $fileeight->move($destinationPath,$fileeight->getClientOriginalName());
        }
        if($request->file('imagenine') !==null){
            $filenine = $request->file('imagenine');
            $imagenine ='/images/'.$filenine->getClientOriginalName();
            $filenine->move($destinationPath,$filenine->getClientOriginalName());
        }
        if($request->file('imageten') !==null){
            $fileten = $request->file('imageten');
            $imageten ='/images/'.$fileten->getClientOriginalName();
            $fileten->move($destinationPath,$fileten->getClientOriginalName());
        }


        $response = Http::post('http://127.0.0.1:8081/api/productadd',[
                      'name'=>$brand,
                      'product_type_id' => $product_type_id,
                      'price'=>$price,
                      'discount'=>$discount, 
                      'number'=>$number, 
                      'description'=>$description,
                      
                      'image'=>$image,
                      'image_2'=>$imagetwo,
                      'image_3'=>$imagethree,
                      'image_4'=>$imagefour,
                      'image_5'=>$imagefive,
                      'image_6'=>$imagesix,
                      'image_7'=>$imageseven,
                      'image_8'=>$imageeight,
                      'image_9'=>$imagenine,
                      'image_10'=>$imageten,
                      'color'=>$color,
                      'color_2'=>$colortwo,
                      'color_3'=>$colorthree,
                      'color_4'=>$colorfour,
                      'color_5'=>$colorfive,
                      'color_6'=>$colorsix,
                      'color_7'=>$colorseven,
                      'color_8'=>$coloreight,
                      'color_9'=>$colornine,
                      'color_10'=>$colorten,
                      'trend'=>'yes',
                      'sell'=> "0",
                      'remain'=> "0",
                      'amount'=> "0",
                      'status'=> null

        ]);      
        return back();
    }
    

    /*product update*/
    public function productUpdateGet($id){

      $response = Http::get("http://127.0.0.1:8081/api/products/$id");
      $results = json_decode($response);
      //dd($results);
      return view('admin.productupdate',compact('results'));
    }

    /*product update*/ 
    public function productupdate(Request $request){
        
        $image = "";
        $imagetwo = "";
        $imagethree = "";
        $imagefour = "";
        $imagefive = "";
        $imagesix = "";
         $imageseven = "";
        $imageeight = "";
        $imagenine = "";
        $imageten = "";

        $id = $request->input('id');

        $brand = $request->input('brand');
        $product_type_id = $request->input('product_type_id');

        $price =$request->input('price');
        
        $number =$request->input('number');
        $discount =$request->input('discount');
        $description =$request->input('description');

        $color =$request->input('color');
        $colortwo =$request->input('colortwo');
        $colorthree =$request->input('colorthree');
        $colorfour =$request->input('colorfour');
        $colorfive =$request->input('colorfive');
        $colorsix =$request->input('colorsix');
        $colorseven =$request->input('colorseven');
        $coloreight =$request->input('coloreight');
        $colornine =$request->input('colornine');
        $colorten =$request->input('colorten');

   $destinationPath = 'images/';
        
        if($request->file('image') !==null){
            $file = $request->file('image');
            $image ='/images/'.$file->getClientOriginalName();

            $file->move($destinationPath,$file->getClientOriginalName());
        }
        if($request->file('imagetwo') !==null){
            $filetwo = $request->file('imagetwo');
            $imagetwo ='/images/'.$filetwo->getClientOriginalName();
            $filetwo->move($destinationPath,$filetwo->getClientOriginalName());
        }
        if($request->file('imagethree') !==null){
            $filethree = $request->file('imagethree');
            $imagethree ='/images/'.$filethree->getClientOriginalName();
            $filethree->move($destinationPath,$filethree->getClientOriginalName());
        }
        if($request->file('imagefour') !==null){
            $filefour = $request->file('imagefour');
            $imagefour ='/images/'.$filefour->getClientOriginalName();
            $filefour->move($destinationPath,$filefour->getClientOriginalName());
            
        }
        if($request->file('imagefive') !==null){
            $filefive = $request->file('imagefive');
            $imagefive ='/images/'.$filefive->getClientOriginalName();
            $filefive->move($destinationPath,$filefive->getClientOriginalName());
        }
        if($request->file('imagesix') !==null){
            $filesix = $request->file('imagesix');
            $imagesix ='/images/'.$filesix->getClientOriginalName();
            $filesix->move($destinationPath,$filesix->getClientOriginalName());
        }
        if($request->file('imageseven') !==null){
            $fileseven = $request->file('imageseven');
            $imageseven ='/images/'.$fileseven->getClientOriginalName();
            $fileseven->move($destinationPath,$fileseven->getClientOriginalName());
        }
        if($request->file('imageeight') !==null){
            $fileeight = $request->file('imageeight');
            $imageeight ='/images/'.$fileeight->getClientOriginalName();
            $fileeight->move($destinationPath,$fileeight->getClientOriginalName());
        }
        if($request->file('imagenine') !==null){
            $filenine = $request->file('imagenine');
            $imagenine ='/images/'.$filenine->getClientOriginalName();
            $filenine->move($destinationPath,$filenine->getClientOriginalName());
        }
        if($request->file('imageten') !==null){
            $fileten = $request->file('imageten');
            $imageten ='/images/'.$fileten->getClientOriginalName();
            $fileten->move($destinationPath,$fileten->getClientOriginalName());
        }


        $response = Http::post('http://127.0.0.1:8081/api/updateproduct',[
                      'id'=>$id,
                      'name'=>$brand,
                      'product_type_id' => $product_type_id,
                      'price'=>$price,
                      'discount'=>$discount, 
                      'number'=>$number, 
                      'description'=>$description,
                      
                      'image'=>$image,
                      'image_2'=>$imagetwo,
                      'image_3'=>$imagethree,
                      'image_4'=>$imagefour,
                      'image_5'=>$imagefive,
                      'image_6'=>$imagesix,
                      'image_7'=>$imageseven,
                      'image_8'=>$imageeight,
                      'image_9'=>$imagenine,
                      'image_10'=>$imageten,
                      'color'=>$color,
                      'color_2'=>$colortwo,
                      'color_3'=>$colorthree,
                      'color_4'=>$colorfour,
                      'color_5'=>$colorfive,
                      'color_6'=>$colorsix,
                      'color_7'=>$colorseven,
                      'color_8'=>$coloreight,
                      'color_9'=>$colornine,
                      'color_10'=>$colorten,
                      'trend'=>'yes',
                      'sell'=> "0",
                      'remain'=> "0",
                      'amount'=> "0",
                      'status'=> null

        ]);
             
        return redirect('/admin/product');
    }

    //product Delete
    public function productDelete(Request $request){
      $id = $request->input('id');
      $response = Http::post('http://127.0.0.1:8081/api/deleteproduct',[
        'id' => $id
      ]);
      
      return redirect('/admin/product');
    }


    /*productType*/
    public function productinventory(){
        return view('admin.productinventory'); 
    }

    /*Order*/
    public function order(){

        $response = Http::get("http://127.0.0.1:8081/api/order");
        $results = json_decode($response);
        
        return view('admin.order', compact('results'));  
    }

        /*order details*/
    public function orderdetails($id){

        $data['order_id'] = $id;

        $response = Http::get("http://127.0.0.1:8081/api/order");
        $results = json_decode($response);

        return view('admin.orderDetails',compact('results'),$data); 
    }

    /*Product Controller*/
    public function contact(){

        $response = Http::get("http://127.0.0.1:8081/api/contruct");
        $results = json_decode($response);
        
        return view('admin.contact', compact('results'));  
    }

    public function others(){
    	return view('admin.others'); 
    }

    public function gender(){

    	return view('admin.gender'); 
    } 

    public function cart(){
    	return view('admin.cart'); 
    } 

    /*productType*/
    public function productType(){

    	return view('admin.product_type'); 
    }
}
