<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return "สวัสดี";
    }

    public function greeting($name){

        return "สวัสดี $name";
    }
    public function calculator($num1,$num2,$num3){
        return "ผลรวมของเลข คือ  $num1+$num2+$num3 =" . ($num1+$num2+$num3). "นะจ่ะ" ;

    }
}
