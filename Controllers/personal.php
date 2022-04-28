<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class personal extends Controller
{
    function showform() {
        print_r("get method");
        return view('personal');
        
    }

    function submitform(Request $req) {
        print_r("post method");
        //dd($req);

        $input = $req->input();

        $validate = $req ->validate([
            'moum' => ['required'],
            'msalary' => ['required','numeric'],
            'nom' => ['required','numeric'],
            'bonus' => ['required','numeric'],
        ]);

        print_r('Form Validated');

        $a= $req->input('msalary');
        $b= $req->input('nom');
        $c= $req->input('bonus');
        $d=$req->input('moum');

        $total = ($a*$b)+$c;
        print_r($total);
        
        
        
            if ($d==1){
                print_r("unmarried");
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
        
            }
           
            else if ($d==2){
                print_r("married");
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
                
            }
            
        DB::insert('insert into personal (moum, msalary, nom, bonus, totaltax) values (?,?,?,?,?)',[$d,$a,$b,$c,$tax]);
    
        
        $value = DB::select('select * from personal ORDER BY user DESC LIMIT 1');

        print_r($value);
        return view('personal',['value'=>$value]); 

    }

    
    function showform1() {
        print_r("get method");
        return view('corporate');
    }

    function submitform1(Request $req) {
        print_r("post method");
        $input = $req->input();

        $validate = $req ->validate([
            'businesstype' => ['required'],
            'R.O.L.Y' => ['required','numeric'],
            'R.O.T.Y' => ['required','numeric'],
            'N.P.O.T.Y' => ['required','numeric'],
        ]);

        print_r('Form Validated');

        $a= $req->input('R.O.L.Y');
        $b= $req->input('R.O.T.Y');
        $c= $req->input('N.P.O.T.Y');
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
    
        $value1 = DB::select('select * from corporate');
        print_r($value1);
        return view('corporate',['value1'=>$value1]);
        //return view('corporate');
   
        

        

    }
}
