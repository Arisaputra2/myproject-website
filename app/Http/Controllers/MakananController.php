<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function index(){
        return view('/makanan');
    }
}
