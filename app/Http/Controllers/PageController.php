<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function salutation($salutation,$name){
        return "$salutation $name";
    }
}
