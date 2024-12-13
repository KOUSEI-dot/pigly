<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PiglyController extends Controller
{
    public function index(){
          $item = [
             'content' => 'パラメータを渡す',
         ];
         return view('step1', $item);
    }
       
    public function showStep2(Request $request)
    {
        return view('step2'); 
    }

    
}

