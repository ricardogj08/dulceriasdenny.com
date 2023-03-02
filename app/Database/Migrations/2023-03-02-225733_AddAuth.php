<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Migración que crea la tabla de autenticaciones.
 */
class AddAuth extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type'     => 'bigint',
                'unsigned' => true,
            ],
            'secret' => [
                'type'       => 'varchar',
                'constraint' => 256,
            ],
            'expires_at' => [
                'type' => 'datetime',
            ],
            'created_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('user_id');
        $this->forge->addForeignKey('user_id', 'users', 'id', 'restrict', 'restrict');

        $this->forge->createTable('auth', true);
    }

    public function down()
    {
        $this->forge->dropTable('auth', true);
    }
}
