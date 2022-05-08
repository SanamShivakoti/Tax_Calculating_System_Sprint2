<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class admin_control extends Controller
{
    function showform(){
        return view('admin(control)');
    }

    function submitform(Request $req) {
    
        $data= $req->input('news');
        print_r("News added");
        DB::insert('insert into news (news) values (?)',[$data]);
        return view('admin(control)');
    }

}