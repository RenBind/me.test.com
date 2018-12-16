<?php

namespace App\Http\Controllers;

use App\Lucky;
use App\Users;
use Illuminate\Http\Request;

class GetLuckyController extends Controller
{
    public function show(Request $request){
        if(strtolower($request->method()) != 'post'){
            return view('get_lucky');
        }else{
            $username = $request->input('username');
            if(!empty($username)){
                $username = trim($username);
                Users::insert([
                    'username'=> $username,
                ]);
            }
            $lucky = Lucky::find(1);
            return view('show_lucky', compact('username', 'lucky'));
        }
    }
}
