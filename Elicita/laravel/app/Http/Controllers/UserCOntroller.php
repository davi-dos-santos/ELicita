<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCOntroller extends Controller
{
    public function show(){
        return view('user'
        ,
        [
             'name' => 'Davi dos Santos'
        ]
    );
    }
}
