<?php

namespace App\Http\Controllers;
use DB;
use App\games_model;

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
        

       

      
        $key=true;
       while($key){
        $number1=rand(1,4);
        $number2=rand(1,4);
        if($number1!==$number2) $key = false;
    }
     $newgame= new games_model;
     $newgame->oppo_1=$number1;
     $newgame->oppo_2=$number2;
    
     $newgame->save();
     $newgame_id=$newgame->id;

       $pic1 = DB::table('imgtable')->where('id',$number1)->get();
       $pic2 = DB::table('imgtable')->where('id',$number2)->get();

       
       

       return view('welcome', ['pic1' =>$pic1,'pic2'=> $pic2,'newgame'=>$newgame_id,]);
       
    }

    public function vote ($won_id, $lost_id,$war_id)
    
    
    {
        
        DB::table('vote_table')->where('id','=',$war_id)->update(
            ['won' => $won_id, 'lost' => $lost_id]
        );
        //cal the ranking
        return back();
    }
}
