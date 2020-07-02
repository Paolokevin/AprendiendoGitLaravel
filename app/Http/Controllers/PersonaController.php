<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;

class PersonaController extends Controller
{

    public function formPersonaShow(){
        return view('formPersona');
    }

    public function registrarPersonas(Request $data){
        return $data;
    }


}
