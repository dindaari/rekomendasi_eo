<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;

class PerusahaanController extends Controller {

    public function index() {
        return view('dataperusahaan', [
            'users' => Perusahaan::all(), 
            'title' => 'Data perusahaan'
        ]);
    }
    
    public function add() {
        return view('adddataperusahaan',[
            'title' => 'Tambah Data perusahaan'
        ]);
    }
    public function edit($id){
        
        $perusahaan = Perusahaan::where('id', $id)->first();

        return view('editdataperusahaan', [
            'perusahaan' => $perusahaan,
            'title' => 'Edit Data perusahaan'
        ]);

    }

    public function update(Request $request, $id) {
        $kode_alternatif  = $request->input('kode_alternatif');
        $nama_perusahaan  = $request->input('nama_perusahaan');
        $alamat       = $request->input('alamat');
        // $tahun_berdiri   = $request->input('tahun_berdiri');
        // $lokasi = $request->input('lokasi');
        // $kualitas = $request->input('kualitas');
        // $total_pelanggan = $request->input('total_pelanggan');
        
        $perusahaan = Perusahaan::where('id', $id)->first();
        $perusahaan->kode_alternatif    = $kode_alternatif;
        $perusahaan->nama_perusahaan    = $nama_perusahaan;
        $perusahaan->alamat     = $alamat;
        // $perusahaan->tahun_berdiri = $tahun_berdiri;
        // $perusahaan->lokasi = $lokasi;
        // $perusahaan->kualitas = $kualitas;
        // $perusahaan->total_pelanggan = $total_pelanggan;

        $perusahaan->save();

        return redirect()->to('/perusahaan');
    }


    public function dashboard(){
        $perusahaan= Perusahaan::count();

        return view('main', compact('perusahaan'));

    }

    public function store(Request $request) {
        $kode_alternatif       = $request->input('kode_alternatif');
        $nama_perusahaan      = $request->input('nama_perusahaan');
        $alamat       = $request->input('alamat');
        // $tahun_berdiri   = $request->input('tahun_berdiri');
        // $kualitas = $request->input('kualitas');
        // $lokasi = $request->input('lokasi');
        // $kualitas = $request->input('kualitas');
        // $total_pelanggan = $request->input('total_pelanggan');

        $perusahaan           = new Perusahaan;
        $perusahaan->kode_alternatif    = $kode_alternatif;
        $perusahaan->nama_perusahaan    = $nama_perusahaan;
        $perusahaan->alamat     = $alamat;
        // $perusahaan->tahun_berdiri = $tahun_berdiri;
        // $perusahaan->kualitas = $kualitas;
        // $perusahaan->lokasi = $lokasi;
        // $perusahaan->kualitas = $kualitas;
        // $perusahaan->total_pelanggan = $total_pelanggan;

        $perusahaan->save();

        return redirect()->to('/perusahaan');
    }
    public function delete($id) {
        $perusahaan = Perusahaan::where('id', $id)->first();
        $perusahaan->delete();
        return redirect()->back();
    }

    public function search(Request $request){
        if($request->has('search')){
            $perusahaan = Perusahaan::where('kode_alternatif','nama','alamat','%',$request->search.'%')->get();
        }else{
            $perusahaan = Perusahaan::all();
        }
        return view('dataperusahaan',['Perusahaan' => $perusahaan]);
    }
}
