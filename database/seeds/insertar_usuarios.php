<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class insertar_usuarios extends Seeder
{

    public function run()
    {
        DB::table('Poet')->insert([
            'nombre' => 'asd',
            'snombre' => 'asd',
            'direccion' => 'asd',
            'cp' => 'asd',
            'tel' => 'asd'
        ]);
    }
}
