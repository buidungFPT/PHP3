<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

 class LAB2 extends Controller {
     public function listUser (){
        $listUser = DB::table('product')->join('category','category.id',"=" ,'product.category_id')
        ->select('product.id','product.name','product.category_id','product.price','product.view','category.name_dm')
        ->orderBy('view','desc')
        ->get();
        return view('lab2/listUser')->with([
              'listUser' => $listUser
        ]);
     }
     public function addUser(){
        $category = DB::table('category')->select('id','name_dm')->get();
        return view('lab2/addUser')->with([
            'category' => $category
      ]);
     }
     public function postUser(Request $req){
        $data=[
                'name' => $req->nameproduct,
                'price' => $req->priceproduct,
                'category_id' => $req->categoryproduct,
                'view' => $req->viewproduct,
                'create_at' => Carbon::now(),
                'update_at' => Carbon::now(),
        ];
        DB::table('product')->insert($data);
        return redirect()->route('product.listUser');

}
public function deleteUser($idUser){
    DB::table('product')->where('id',$idUser)->delete();
    return redirect()->route('product.listUser');
 }
 public function editUser($idUser){
    $category = DB::table('category')->select('id','name_dm')->get();
    $product = DB::table('product')->where('id',$idUser)->first();
    return view('lab2/editUser')->with([
        'category' => $category,
        'product' => $product
    ]);
}
public function updateUser(Request $req ,$idUser){
    $data=[
            'name' => $req->nameproduct,
            'price' => $req->priceproduct,
            'category_id' => $req->categoryproduct,
            'view' => $req->viewproduct,
            
            'update_at' => Carbon::now(),
    ];
    DB::table('product')->where('id',$idUser)->update($data);
    return redirect()->route('product.listUser');

}
public function searchProduct(Request $req){
    $search = $req->search;
    $listProduct = DB::table('product')
    ->join('category','category.id','=','product.category_id')
    -> select('product.id','product.name','product.price','product.view','product.category_id','category.name_dm')
    ->where('product.name','like','%'.$search.'%')
    ->get();
    return view('lab2/listUser')->with(['listUser' => $listProduct]);
}
 }
?>