<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio(){
    	return view('welcome');
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
