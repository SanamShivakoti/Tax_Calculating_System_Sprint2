<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class corporate extends Controller
{
    function showform(){
        $value = DB::select('select * from news ORDER BY user DESC LIMIT 1');
        return view('corporate',['values'=>$value]);
    }

    function submitform(Request $req) {
        $input = $req->input();

        $validate = $req ->validate([
            'businesstype' => ['required'],
            'ROLY' => ['required','numeric'],
            'ROTY' => ['required','numeric'],
            'NPOTY' => ['required','numeric'],
        ]);

        $a= $req->input('ROLY');
        $b= $req->input('ROTY');
        $c= $req->input('NPOTY');
        $d=$req->input('businesstype');

        $total = $c;
        
    
            if ($d==1){
                //normal business conditions
                $tax = (0.25*$total);
            }
                
             else if ($d==2){
                //General Insurance (Non-Life Insurance)
                $atax=(0.30*$total);
             }
    
             else if ($d==3){
               // Telecom and Internet Services
                 $tax=(0.30*$total);
             }
             
            else if ($d==4){
              // Money transfer
                $tax=(0.30*$total);
            }
    
            
            
        DB::insert('insert into corporate (businesstype, NPOTY, ROTY, ROLY, totaltax) values (?,?,?,?,?)',[$d,$c,$b,$a,$tax]);
    
        $value1 = DB::select('select * from corporate ORDER BY user DESC LIMIT 1');
        $news = DB::select('select * from news ORDER BY user DESC LIMIT 1');
        return view('corporate(result)',['value1'=>$value1,'values2'=>$news]);
   
}
}
