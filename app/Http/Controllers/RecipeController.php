<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Recipe;

class RecipeController extends Controller
{
    public function index(){

        return Recipe::all();
   
    }
}
