<?php

namespace App\Http\Controllers;

use App\Models\JabatanKerja;
use Illuminate\Http\Request;

class JabatanKerjaController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
    }
    public function index()
    {
        return view('master.jabatan.index');
    }
    public function listData()
    {
        $jenis = JabatanKerja::orderBy('nama_jabatan', 'asc')->get();
        $no = 0;
        $data = array();

        foreach ($jenis as $list) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $list->nama_jabatan;
            $row[] = '<div class = "btn-group">
                <a onclick = "editForm(' . $list->id . ')" class = "btn btn-primary btn-sm" >
                    <i class = "fa fa-pencil"></i>
                </a>
                <a onclick = "deleteData(' . $list->id . ')" class = "btn btn-danger btn-sm" >
                    <i class = "fa fa-trash"></i>
                </a>
            </div>';
            $data[] = $row;
        }
        $output = array("data" => $data);
        return response()->json($output);
    }
}
