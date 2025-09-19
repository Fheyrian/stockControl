<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStok extends Migration
{
    public function up()
    {
        /**
         * Table: stok
         */
        $this->forge->addField([
            'id_stok'     => ['type' => 'BIGINT', 'unsigned' => true, 'auto_increment' => true],
            'id_barang'   => ['type' => 'VARCHAR', 'constraint' => 50],
            'jumlah'      => ['type' => 'INT', 'default' => 0],
            'satuan'      => ['type' => 'VARCHAR', 'constraint'=> 50],
            'last_update' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id_stok', true);
        $this->forge->createTable('stok');
    }

    public function down()
    {
        $this->forge->dropTable('stok');
    }
}
