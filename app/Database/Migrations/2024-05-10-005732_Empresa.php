<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Empresa extends Migration
{
    public function up() {
        $this-> forge ->addField([
            'id' =>[
                'type' => 'INT', 
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nombre' =>[
                'type' => 'VARCHAR', 
                'constraint' => 20,
            ],
            'contrasena' =>[
                'type' => 'VARCHAR', 
                'constraint' => 10,
            ],
            'tipo' =>[
                'type' => 'VARCHAR', 
                'constraint' => 20,
            ],

        ]);
        $this -> forge -> addKey('id', true);
        $this -> forge ->createTable('usuario');
    }


    public function down()
    {
        $this -> forge ->dropTable('usuario');

    }
}
