<?php

namespace App\Http\Controllers;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $number1= rand(1,4);
       $number2=rand(1,4);
        $key=true;
       while($key){
        $number1=rand(1,4);
        $number2=rand(1,4);
        if($number1!==$number2) $key = false;
    }
       
       $pic1 = DB::table('imgtable')->where('id',$number1)->get();
       $pic2 = DB::table('imgtable')->where('id',$number2)->get();



       return view('welcome', ['pic1' =>$pic1,'pic2'=> $pic2, ]);
       
    }
}
