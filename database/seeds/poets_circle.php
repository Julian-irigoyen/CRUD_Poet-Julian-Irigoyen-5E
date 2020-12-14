<?php

use Illuminate\Database\Seeder;

class poets_circle extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('poem')->insert([
            'Nombre' => 'CUANDO POR FIN SE ENCUENTRAN DOS ALMAS',
            'contenido_poema' => 'Cuando por fin se encuentran dos almas,
            Que durante tanto tiempo se han buscado una a otra entre el gentío,
            Cuando advierten que son parejas,
            Que se comprenden y corresponden,
            En una palabra, que son semejantes,
            surge entonces para siempre una unión vehemente y pura como ellas mismas,
            una unión que comienza en la tierra y perdura en el cielo.
            Esa unión es amor,
            amor auténtico, como en verdad muy pocos hombres pueden concebir,
            amor que es una religión,
            Que deifica al ser amado cuya vida emana
            Del fervor y de la pasión y para el que los sacrificios
            Más grandes son los gozos más dulces.',
            'c_poeta' => '1'
        ]);
    }
}
