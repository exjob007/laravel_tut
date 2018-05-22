<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class checklogin extends Controller
{
    //
    public function check()
    {
        $name = $_POST['username'];
        $password = $_POST['password'];
        
        if($name == "admin" && $password == "0163"){
            return view("Login.login")."login success. ". " username : ".$name . " password : ". $password;
        }
        else
        {
            return view("Login.login")."login fail". " username : ".$name . " password : ". $password;
        }

    }
}
