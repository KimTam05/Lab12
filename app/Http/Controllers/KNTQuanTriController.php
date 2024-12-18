<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KNTQuanTriController extends Controller
{
    public function login(){
        return view("KNTadmin.login");
    }
    public function loginSubmit(Request $request){
        $request->validate([

        ]);
    }
}
