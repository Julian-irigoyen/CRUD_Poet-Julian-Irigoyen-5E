<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CRUD extends Controller

{
    public function index(){
        $user = DB::table('Poeta')
            ->orderBy('idPoeta')
            ->get();

        return view('crud.showUsuarios', [
            'nombre' => $user
        ]);
    }

    public function create(){
        return view('crud.altaUsuario');
    }

    public function store(Request $request)
    {
        $user = DB::table('Poeta')
        ->insert([
            'nombre' => $request->input('nombre'),
            'snombre' => $request->input('snombre'),
            'direccion' => $request->input('direccion'),
            'cp' => $request->input('cp'),
            'tel' => $request->input('tel')
        ]);

    return redirect()->action('CRUD@index')
        ->with('status', 'Usuario Creado Exitosamente');
}

    public function show($id)
    {
        $user = DB::table('Poeta')
            ->where('idPoeta', '=', $id)
            ->first();

        return view('crud.altaUsuario', ['nombre' => $user]);
    }

    public function update(Request $request)
    {
        $user = DB::table('Poeta')
            ->where('idPoeta', '=', $request->input('id'))
            ->update([
                'nombre' => $request->input('nombre'),
                'snombre' => $request->input('snombre'),
                'direccion' => $request->input('direccion'),
                'cp' => $request->input('cp'),
                'tel' => $request->input('tel')
            ]);

        return redirect()->action('CRUD@index')
            ->with('status', 'Poeta Modificado Exitosamente');
    }

    public function destroy($id)
    {
        $user = DB::table('Poeta')
            ->where('idPoeta', '=', $id)
            ->delete();

        return redirect()->action('CRUD@index')
            ->with('status', 'Poeta Eliminado Exitosamente');
    }

}
