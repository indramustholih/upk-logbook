<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SaranPengembangan;

class SaranPengembanganController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index()
    {
        return view('master.saran.index');
    }

    public function listData()
    {
        $saran = SaranPengembangan::orderBy('nama_saran_pengembangan', 'desc')->get();
        $no = 0;
        $data = array();

        foreach ($saran as $list) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $list->nama_saran_pengembangan;
            $row[] = $list->keterangan;
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

    public function store(Request $request)
    {
        $saran = new SaranPengembangan;
        $saran->kode = $request['kode'];
        $saran->nama_saran_pengembangan = $request['nama_saran_pengembangan'];
        $saran->keterangan = $request['keterangan'];
        $saran->save();
    }

    public function edit($id)
    {
        $saran = SaranPengembangan::find($id);
        echo json_encode($saran);
    }

    public function update(Request $request, $id)
    {
        $saran = SaranPengembangan::find($id);
        $saran->kode = $request['kode'];
        $saran->nama_saran_pengembangan = $request['nama_saran_pengembangan'];
        $saran->keterangan = $request['keterangan'];
        $saran->update();
    }

    public function destroy($id)
    {
        $saran = SaranPengembangan::find($id);
        $saran->delete();
    }
}
