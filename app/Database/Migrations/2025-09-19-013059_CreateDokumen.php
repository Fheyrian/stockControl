<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDokumen extends Migration
{
    public function up()
    {
       /**
         * Table: dokumen
         */
        $this->forge->addField([
            'id_dokumen' => ['type' => 'BIGINT', 'unsigned' => true, 'auto_increment' => true],
            'doc_type'   => ['type' => "ENUM('PO','INVOICE','BON')"],
            'no_dokumen' => ['type' => 'VARCHAR', 'constraint' => 100],
            'title'      => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'file_nama'  => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'file_path'  => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'create_at'  => ['type' => 'DATETIME', 'null' => true],
            'update_at'  => ['type' => 'DATETIME', 'null' => true],
            'id_user'    => ['type' => 'BIGINT', 'unsigned' => true, 'null' => true],
        ]);
        $this->forge->addKey('id_dokumen', true);
        $this->forge->createTable('dokumen');
    }

    public function down()
    {
        $this->forge->dropTable('dokumen');
    }
}
