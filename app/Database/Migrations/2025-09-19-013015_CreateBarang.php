<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBarang extends Migration
{
    public function up()
    {
        /**
         * Table: barang
         */
        $this->forge->addField([
            'id_barang'      => ['type' => 'VARCHAR', 'constraint' => 50],
            'nama'           => ['type' => 'VARCHAR', 'constraint' => 255],
            'harga_default'  => ['type' => 'DECIMAL', 'constraint' => '12,2', 'null' => true],
            'deskripsi'      => ['type' => 'TEXT', 'null' => true],
        ]);
        $this->forge->addKey('id_barang', true);
        $this->forge->createTable('barang');
    }

    public function down()
    {
        $this->forge->dropTable('barang');
    }
}
