<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;                                                                                                                        
use App\models\Product;

class ProductController extends Controller
{
    //
     
    function index(){
        $prod= Product::all();
        return view('product.index',['products'=>$prod] ); //niptict is name database
    }
    function addForm(){
        return view('product.add');
    }

    function postAdd(Request $request){
        $product = new Product;
        $product ->name =$request->input('name');
        $product ->code =$request->input('code');
        $product ->exp =$request->input('exp');
        $product ->price = $request->price;
     //   print_r($request->input('name'));
     if($request->file('imgs')){
         $file = $request->file('imgs');
         $fname= $file->getClientOriginalName();
         $file->move ('images',$fname);
         $product->path=$fname;
         echo "fill upload".$fname;
     }

       $product->save();
        return "<br> success";
    }
    Function editForm(Request $request,$id){
        $product=Product::find(id);
        return view('product.edit',['product'=>$product]);
    }

    
    Function saveEdit(Request $request, $id){
        $id = $request->input('id',$id);
        $product=Producut::find($id);
        $product->name=$request->input('name',"abc");
        $product->code=$request->input('code');
        $product->exp=$request->input('exp');
        $product->price=$request->price;
        if ($request->file('imgs')){
            $file = $product->file('imgs');
            $fname=$file->getClientOriginalName();
            $file->move('images',$fname);
            $product->path= "/image/".$fname;
            echo "fill upload".$fname;

        }
        $product->save();
        return redirect('/products');
        
    }
    function destroy(Request $request){
        $id =$request->input('id');
        $res =Product::destroy($id);
        return redirect('/products');
    }
}
