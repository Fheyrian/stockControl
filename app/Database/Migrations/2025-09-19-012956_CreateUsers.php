<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsers extends Migration
{
    public function up()
    {
        /**
         * Table: users
         */
        $this->forge->addField([
            'id_user'  => ['type' => 'BIGINT', 'unsigned' => true, 'auto_increment' => true],
            'username' => ['type' => 'VARCHAR', 'constraint' => 100],
            'password' => ['type' => 'VARCHAR', 'constraint' => 255],
            'kontak'   => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'role'     => ['type' => "ENUM('user','customer','supplier','admin')"],
        ]);
        $this->forge->addKey('id_user', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
