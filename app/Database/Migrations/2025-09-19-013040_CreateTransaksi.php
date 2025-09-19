<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTransaksi extends Migration
{
    public function up()
    {
        /**
         * Table: transaksi
         */
        $this->forge->addField([
            'id_transaksi' => ['type' => 'BIGINT', 'unsigned' => true, 'auto_increment' => true],
            'tgl_transaksi'=> ['type' => 'DATETIME'],
            'id_barang'    => ['type' => 'VARCHAR', 'constraint' => 50],
            'id_dokumen'   => ['type' => 'BIGINT', 'unsigned' => true, 'null' => true],
            'type'         => ['type' => "ENUM('IN','OUT')"],
            'jumlah'       => ['type' => 'INT'],
            'harga'        => ['type' => 'DECIMAL', 'constraint' => '12,2', 'null' => true],
            'id_user'      => ['type' => 'BIGINT', 'unsigned' => true, 'null' => true],
        ]);
        $this->forge->addKey('id_transaksi', true);
        $this->forge->createTable('transaksi');
    }

    public function down()
    {
        $this->forge->dropTable('transaksi');
    }
}
