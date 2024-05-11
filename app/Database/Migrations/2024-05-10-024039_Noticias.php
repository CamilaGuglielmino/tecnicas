<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Noticias extends Migration
{
    public function up() {
        $this-> forge ->addField([
            'id' =>[
                'type' => 'INT', 
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'id_usuario' =>[
                'type' => 'INT', 
                'constraint' => 5,
                'unsigned' => true,
            ],

            'titulo' =>[
                'type' => 'VARCHAR', 
                'constraint' => 50,
            ],
            'descripcion' =>[
                'type' => 'TINYTEXT', 
                'null' => true,
            ],
            'fecha' =>[
                'type' => 'DATE', 
            ],
            'estado' =>[
                'type' => 'VARCHAR', 
                'constraint' => 10,
            ],
            'categoria' =>[
                'type' => 'VARCHAR', 
                'constraint' => 20,
            ],
            'imagen' =>[
                'type' => 'VARCHAR', 
                'constraint' => 100,
            ],

        ]);
        $this -> forge -> addKey('id', true);
        $this -> forge -> addForeignKey('id_usuario', 'usuario', 'id');
        $this -> forge ->createTable('noticias');
    }


    public function down()
    {
        $this -> forge ->dropTable('noticias');

    }
}
