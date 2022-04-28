<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Form;
use GrahamCampbell\ResultType\Success;

class FormController extends Controller
{
  public function store(Request $request){
   $validatedData = $request->validate([
      'name' => ['required', 'min:2'],
      'email' => 'required|email:rfc,dns|unique:forms',
      'pesan' => 'required|max:255'
    ]);
    
    Form::create($validatedData);
    return redirect('/')->with('status','Terima Kasih');
    // return back()->with('succes', 'Terima Kasih');
  }



}