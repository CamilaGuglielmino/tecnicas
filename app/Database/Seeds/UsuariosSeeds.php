<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuariosSeeds extends Seeder
{
    public function run()
    {
        $data =[
            [
                'nombre' => 'camila',
                'contrasena' => '1234',
                'tipo' => 'Editor',
            ],
            [
                'nombre' => 'sofia',
                'contrasena' => '5678',
                'tipo' => 'Publicador',
            ],     

        ];
        $this -> db -> table('usuario')-> insertBatch($data);
    }
}
