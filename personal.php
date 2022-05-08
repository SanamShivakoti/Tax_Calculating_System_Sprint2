<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class personal extends Controller
{
    function showform() {
        $value = DB::select('select * from news ORDER BY user DESC LIMIT 1');
        return view('personal',['values'=>$value]);
        
    }

    function submitform(Request $req) {
        //dd($req);

        $input = $req->input();

        $validate = $req ->validate([
            'moum' => ['required'],
            'msalary' => ['required','numeric'],
            'nom' => ['required','numeric'],
            'bonus' => ['required','numeric'],
        ]);


        $a= $req->input('msalary');
        $b= $req->input('nom');
        $c= $req->input('bonus');
        $d=$req->input('moum');

        $total = ($a*$b)+$c;

        $tax = $this-> caltax($d,$total);

        DB::insert('insert into personal (moum, msalary, nom, bonus, totaltax) values (?,?,?,?,?)',[$d,$a,$b,$c,$tax]);

        $value = DB::select('select * from personal ORDER BY user DESC LIMIT 1');
        $news = DB::select('select * from news ORDER BY user DESC LIMIT 1');


        return view('personal(result)',['values'=>$value,'values2'=>$news]); 

    }

    function caltax($d,$total){
        if ($d==1){
            if($total >= 4000000){
                $tax = (0.36*$total);
                }

            else if($total >= 2000000){
            $tax = (0.30*$total);   
            }

            else if($total >= 700000){
            $tax = (0.20*$total);
            }
        
            else if($total >= 500000){
            $tax = (0.10*$total);  
            }

            else if($total >= 400000){  
            $tax = (0.01*$total);  
            }

            else if($total <400000){  
            $tax = (0.01*$total);  
            }

        }
          
          else if ($d==2){
              if($total >= 4000000){
                  $tax = (0.36*$total);
                  }
  
              else if($total >=  2000000){
                  $tax = (0.30*$total);    
                  }
  
              else if($total >= 750000){
                  $tax = (0.20*$total); 
                  }
  
              else if($total >= 550000){
                  $tax = (0.10*$total);
                  }
  
              else if($total >= 450000){
                  $tax = (0.01*$total);
                  }

              else if($total < 450000){
                  $tax = (0.01*$total);
                 }
                  
              }
              return $tax;
    }

}


