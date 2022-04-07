<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\contact;

class headercn extends Controller
{
    //

    function contactcn(Request $req){
    $dbcontact=new contact;
    $dbcontact->First_Name=$req->input('firstname');
    $dbcontact->LastName=$req->input('lastname');
    $dbcontact->Country=$req->input('country');
    $dbcontact->Subject=$req->input('subject');
    $dbcontact->save();
    return view('home');
        
      
    }

    function fetchcn(){
        $dbcontact=new contact;
       $data= $dbcontact::all();
        return view('welcome')->with($data);
     

    }
}
