<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InitialSeeder extends Seeder
{
    public function run()
    {
        /**
         * Seed users
         */
        $this->db->table('users')->insertBatch([
            [
                'username' => 'admin',
                'password' => 'admin123',
                'kontak'   => 'admin@company.com',
                'role'     => 'admin',
            ],
            [
                'username' => 'supplier1',
                'password' => password_hash('supplier123', PASSWORD_DEFAULT),
                'kontak'   => 'supplier@mail.com',
                'role'     => 'supplier',
            ],
            [
                'username' => 'customer1',
                'password' => 'customer123',
                'kontak'   => '08123456789',
                'role'     => 'customer',
            ],
        ]);

        /**
         * Seed barang
         */
        $this->db->table('barang')->insertBatch([
            [
                'id_barang'     => 'BRG001',
                'nama'          => 'Laptop Lenovo',
                'harga_default' => 8500000,
                'deskripsi'     => 'Laptop untuk keperluan kantor',
            ],
            [
                'id_barang'     => 'BRG002',
                'nama'          => 'Printer Canon',
                'harga_default' => 2500000,
                'deskripsi'     => 'Printer inkjet warna',
            ],
        ]);

        /**
         * Seed stok
         */
        $this->db->table('stok')->insertBatch([
            [
                'id_barang'   => 'BRG001',
                'jumlah'      => 10,
                'last_update' => date('Y-m-d H:i:s'),
            ],
            [
                'id_barang'   => 'BRG002',
                'jumlah'      => 5,
                'last_update' => date('Y-m-d H:i:s'),
            ],
        ]);

        /**
         * Seed dokumen
         */
        $this->db->table('dokumen')->insertBatch([
            [
                'doc_type'   => 'PO',
                'no_dokumen' => 'PO-2025-001',
                'title'      => 'Purchase Order Laptop',
                'file_nama'  => 'po-laptop.pdf',
                'file_path'  => '/uploads/docs/po-laptop.pdf',
                'create_at'  => date('Y-m-d H:i:s'),
                'update_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'doc_type'   => 'INVOICE',
                'no_dokumen' => 'INV-2025-001',
                'title'      => 'Invoice Printer',
                'file_nama'  => 'invoice-printer.pdf',
                'file_path'  => '/uploads/docs/invoice-printer.pdf',
                'create_at'  => date('Y-m-d H:i:s'),
                'update_at'  => date('Y-m-d H:i:s'),
            ],
        ]);

        /**
         * Seed transaksi
         */
        $this->db->table('transaksi')->insertBatch([
            [
                'tgl_transaksi' => date('Y-m-d H:i:s'),
                'id_barang'     => 'BRG001',
                'id_dokumen'    => 1, // PO-2025-001
                'type'          => 'IN',
                'jumlah'        => 5,
                'harga'         => 8500000,
            ],
            [
                'tgl_transaksi' => date('Y-m-d H:i:s'),
                'id_barang'     => 'BRG002',
                'id_dokumen'    => 2, // INV-2025-001
                'type'          => 'OUT',
                'jumlah'        => 1,
                'harga'         => 2500000,
            ],
        ]);
    }
}
