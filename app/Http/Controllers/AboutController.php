<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $people = [
            'zhangsan',
            'lisi',
            'wangermazi'
        ];
        return view('about', compact('people'));
    }

    public function contact(){
        return view('contact');
    }
}
