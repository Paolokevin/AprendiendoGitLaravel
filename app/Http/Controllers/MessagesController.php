<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{

    public function ShowForm(){
        return view('contact');
    }

    public function store(Request $request){

        $request -> validate([
            'name' => 'required',
            'email' => 'required',
            'edad' => 'required'
        ]);

        return $request-> only(['name', 'email']);
    }

  public function ShowFromPortfolio(){
        return view('portfolio');
    }

    public function procesarPortfolio( Request $data){
        $data -> validate([
            'titulo' => 'required|max:10',
            'autor'  => 'required'
        ]);
        
        return back()->with('mensage', 'Successfully registered');
    }
}
