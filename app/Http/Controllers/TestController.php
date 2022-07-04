<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testfunction($id){
        echo Crypt::decryptString($id);
    }

    public function changePassword(){
        return view('changepassword');
    }
}
