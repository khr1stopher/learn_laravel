<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    // POST

    public function crear(Request $request)
    {
        // return $request->all();

        $newNote = new App\Nota;
        $newNote->nombre = $request->nombre;
        $newNote->description = $request->description;

        $newNote->save();

        return back()->with('mensaje', '!Add Note');
    }

    // GET
    public function inicio(){
        $notas = App\Nota::all();
    	return view('welcome', compact('notas'));
    }

    public function detalle($id)
    {
        // $nota = App\Nota::find($id); si no existe tirara un error

        $nota = App\Nota::findOrFail($id);
        // sino existe redirije al 404

        return view('notas.detalle', compact('nota'));
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
