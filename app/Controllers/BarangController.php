<?php 

namespace App\Controllers;

use App\Models\BarangModel;
use CodeIgniter\Controller;

class BarangController extends Controller
{
    public function index()
    {
        $model = new BarangModel();
        $data = [
            'barang' => $model->getStokBarang()  // wrap into key
        ];
        return view("/barang/index", $data);
    }
}