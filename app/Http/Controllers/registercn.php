<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class registercn extends Controller
{
    //register user 
    function registercn(Request $req){
        
        $req->post('username');
        $req->post('password');
        $req->post('confirm_password');
        $req->post('address');
        $req->post('city');
        $req->post('zip');

        $myuser = DB::table('users')->insert([
            'Username' => $req->post('username'),
            'Password' =>  $req->post('password'),
            'Address' =>  $req->post('confirm_password'),
            'City' =>$req->post('city') ,
            'State' => 'Null',
            'Zip' =>  $req->post('zip'),
            'Date'=>date('m/d/Y'),
            'Useritoken'=>$req->post('_token'),
        ]);
        session()->flash('sucessmsg', 'Your Register successfully.');
        return Redirect('/register');
        
    }

    function logincn(Request $req){
        $req->post('email');
        $req->post('password');
        $myuser = DB::table('users')->where([
            'Username' => $req->post('email'),
            'Password' => $req->post('password'),
        ])->get();
        $wordCount = $myuser->count();
       if ($wordCount==1){
        session(['userlogin' => 'true']);
        return Redirect('/welcome');

       }else{
        session()->flash('erorrmsg', 'Your Id Or password incrorect');
        return Redirect('/login');

       } 
       
      

    }

    function allusers(){

        $myusers= DB::table('users')->get();
        return view("admin/users", ['myusers'=>$myusers]);

    }


}
