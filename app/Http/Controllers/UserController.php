<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function showUser(){
        $users =[
        [
            'id' => 1,
            'name' => 'Nguyen'
            
        ],
        [
            'id' => 2,
            'name' => 'Nguyen'
           
        ],
    ];
       return view('list-user')->with([
        'users' => $users
       ]);
    }
    function getUser($id,$name =''){
        echo $id;
        echo $name;
    }
    function updateUser(Request $request ){
           echo $request ->id;
           echo $request ->name;
    }
    function thongtinSV(){
                $id = "1";
                $name = "Dung";
                $age ="20";
                $diachi = "Ha Noi";
                $khoa = "CNTT";
                
          
            return view('TTSV',compact('id','name','age','diachi','khoa'));
        }
}