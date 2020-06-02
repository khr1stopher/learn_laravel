<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function inicio(){
        $notas = App\Nota::all();
    	return view('welcome', compact('notas'));
    }

    public function welcome()
    {
    	return 'welcome route';
    }
    public function blog(){
    	return view('blog');
    }

    public function Nosotros($nombre = null){
    	$users = ['khristopher','alisson','archie'];

    	return view('nosotros', compact('users','nombre'));
    }
}
