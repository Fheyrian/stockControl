<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = "barang";
    protected $primaryKey = "id_barang";
    protected $allowedFields = ["nama", "harga_default", "deskripsi"];

    // get all stok barang
    public function getStokBarang()
    {
        return $this->select('barang.nama, barang.harga_default AS harga, barang.deskripsi, stok.jumlah, stok.satuan')
            ->join('stok', 'barang.id_barang = stok.id_barang')
            ->findAll();
    }
}
