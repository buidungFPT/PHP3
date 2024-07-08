<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    function ShowUser(){
// danh sách user  (select*from user )
    // $listUser = DB::table('users')->get();


 // thong tin users (select*from user where id =4 )
    // $result = DB::table('users')->where('id', '=', '4')->first();
    // $result = DB::table('users')->where('4'); chi dung voiw ID 


 // Lấy thuộc tính 'name' của user có id = 16
        //  $result = DB::table('users')->where('id', '=', '16')->value('name');
        //  dd($result);


//   4. Lấy danh sách id của phòng ban 'Ban giám hiệu'

        // $idphonban = DB::table('phongban')
        // ->where('ten_donvi', '=', 'Ban giám hiệu')
        // ->value('id');
            
        // // phong ban
        //  $result = DB::table('users')->where('phongban_id' , $idphonban)->pluck('id');
        //  dd($result);


//  5. Tìm user có độ tuổi lớn nhất trong công ty 
        //  $maxAge = DB::table('users')->max('tuoi');
        //     $result = DB::table('users')->where('tuoi', '=', $maxAge)->first();
        //     dd($result);


// 6. Tìm user có độ tuổi nhỏ nhất trong công ty
//  $minAge = DB::table('users')->min('tuoi');
//     $result = DB::table('users')->where('tuoi', '=', $minAge)->get();
//     dd($result);


// 7. Đếm xem phòng ban 'Ban giám hiệu' có bao nhiêu user 
   //  $idphonban = DB::table('phongban')an')
        // ->where('ten_donvi', '=', 'Ban giám hiệu')
        // ->value('id');
        // $countUser = DB::table('users')->where('phongban_id', '=', $idphonban)->count();
        // dd($countUser);

// 8. Lấy danh sách tuổi các user 
        // $result = DB::table('users')->distinct()->pluck('tuoi');
        // dd($result);

// 9. Tìm danh sách user có tên 'Khải' hoặc có tên 'Thanh'
        // $result = DB::table('users')->where('name', 'LIKE', '%Khải')->orWhere('name', 'LIKE', '%Thanh')->get();
        // dd($result);


//  10. Lấy danh sách user ở phòng ban 'Ban đào tạo'
                // $idphonban = DB::table('phongban')
                // ->where('ten_donvi', '=', 'Ban đào tạo')
                // ->value('id');
                // $result = DB::table('users')->where('phongban_id', '=', $idphonban)
                // ->select('id','name','phongban_id')
                // ->get();
                // dd($result);

//   11. Lấy danh sách user có tuổi lớn hơn hoặc bằng 30, danh sách sắp xếp tăng dần
            // $result = DB::table('users')->where('tuoi', '>=', '30')->orderBy('tuoi', 'asc')->get();
            // dd($result);

//12. Lấy danh sách 10 user sắp xếp giảm dần độ tuổi, bỏ qua 5 user đầu tiên
            //  $result = DB::table('users')->orderBy('tuoi', 'desc')->offset(5)->limit(10)->get();
            //  dd($result);
            
//  13. Thêm một user mới vào công ty
            //    $data =[
                    
            //         'name' => 'DUNG',
            //         'email' => 'ledung123rop@gmail.com',
            //         'tuoi' => 25,
            //         'phongban_id' => 1,
            //         'songaynghi' => '0',
            //         'created_at' => Carbon::now(),
            //         'updated_at' => Carbon::now(),
            //    ];
            //     DB::table('users')->insert($data);


// 14. Thêm chữ 'PĐT' sau tên tất cả user ở phòng ban 'Ban đào tạo' 
            //     $idphonban = DB::table('phongban')
            // ->where('ten_donvi', '=', 'Ban đào tạo')
            // ->value('id');
            // $result = DB::table('users')
            // ->where('phongban_id', '=', $idphonban)
            // ->get();
            // foreach($result as $value){
            //     DB::table('users')
            //     ->where('id', '=', $value->id)
            //     ->update(['name' => $value->name.' PDT']);
            // }
            // dd( $result);

//   15. Xóa user nghỉ quá 15 ngày
        //        DB::table('users')
        //     ->where('songaynghi', '>', '15')
        //     ->delete();
          


    //     $users =[
    //     [
    //         'id' => 1,
    //         'name' => 'Nguyen'
            
    //     ],
    //     [
    //         'id' => 2,
    //         'name' => 'Nguyen'
           
    //     ],
    // ];
    //    return view('list-user')->with([
    //     'users' => $users
    //    ]);
//     }
//     function getUser($id,$name =''){
//         echo $id;
//         echo $name;
//     }
//     function updateUser(Request $request ){
//            echo $request ->id;
//            echo $request ->name;
//     }
//     function thongtinSV(){
//                 $id = "1";
//                 $name = "Dung";
//                 $age ="20";
//                 $diachi = "Ha Noi";
//                 $khoa = "CNTT";
                
          
//             return view('TTSV',compact('id','name','age','diachi','khoa'));



    }
 public function listUsers(){
        $listUser = DB::table('users')->join('phongban','phongban.id',"=",'users.phongban_id')
        ->select('users.id','users.name','users.email','users.tuoi','users.phongban_id','phongban.ten_donvi')
        ->get();
        return view('users/listUsers')->with([
             'listUsers' => $listUser
        ]);
     }
public function addUsers(){
        $phongban = DB::table('phongban')->select('id','ten_donvi')->get();
 return view('users/addUser')->with([
        'phongBan' => $phongban
 ]);
}
public function postUsers(Request $req){
        $data=[
                'name' => $req->nameUsers,
                'email' => $req->emailUsers,
                'phongban_id' => $req->phongbanUser,
                'tuoi' => $req->tuoiUsers,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ];
        DB::table('users')->insert($data);
        return redirect()->route('users.listUsers');

}
public function deleteUser($idUser){
   DB::table('users')->where('id',$idUser)->delete();
   return redirect()->route('users.listUsers');
}
}