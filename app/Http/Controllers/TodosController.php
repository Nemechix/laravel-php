<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller
{
    /*
    index mostrar todos
    store guardan un todo
    update actualizar todo
    destroy eliminar todo
    edit editar todo */

    public function store(Request $request){

        $request->validate([
            'title'=> 'required|min:3'
        ]);
        $todo = new Todo;
        $todo ->title = $request ->title;
        $todo->save();

        return redirect()->route('todos')->with('success','Creado correctamente');
    }
}
