<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\JenisBarang;
use App\Models\Barang;
use App\Models\DataJenisAset;
use App\Models\DataAsalPerolehan;
use App\Models\DetailPeminjaman;
use App\Models\Peminjaman;
use App\Models\StatusPeminjaman;
use App\Models\StatusKonfirmasi;
use App\Models\Satuan;
use App\Models\User;
use Barryvdh\DomPDF\Facade\PDF;

class PinjamController extends Controller
{
    //MENAMPILKAN DATA MASTER KE FORM //STAFF
    public function index($id)
    {
        $dataasalperolehan = DataAsalPerolehan::all();
        $datajenisaset = DataJenisAset::all();
        $jenisbarang = JenisBarang::all();
        $datasatuan = Satuan::all();
        $inputbarang = Barang::all();
        $jenisbarang = JenisBarang::all();
        $inputbarang = Barang::find($id);
        return view('pinjam.formulir', [
            "title" => "riwayat",
            "jenisbarang" => $jenisbarang,
            "jenisaset" => $datajenisaset,
            "dataasalperolehan" => $dataasalperolehan,
            "datasatuan" => $datasatuan,
            "inputbarang" => $inputbarang,
            "jenisbarang" => $jenisbarang

        ]);
    }
}
