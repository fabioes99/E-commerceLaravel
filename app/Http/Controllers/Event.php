<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Event extends Controller
{
    public function index(){
        $nome = "Fabio";
        return view('welcome', ['nome' => $nome]);
    }

    public function create(){
        return view('events.create');
    }

    public function contact(){
        return view('contato');
    }

    public function produto($id){
        return view('produto', ['id' => $id]);
    }
}
