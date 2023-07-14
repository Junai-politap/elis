<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Usulanbaru;
use Illuminate\Http\Request;

class UsulanbaruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_usulanbaru = Usulanbaru::latest()->get();
        return view('admin.penelitian.usulanbaru.index', compact('list_usulanbaru'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $penelitian_usulanbaru = new UsulanBaru();
        $penelitian_usulanbaru->nidn = request('nidn');
		$penelitian_usulanbaru->status_pegawai = request('status_pegawai');
		$penelitian_usulanbaru->tanggung_jawab = request('tanggung_jawab');
		$penelitian_usulanbaru->tahun_usulan = request('tahun_usulan');
		$penelitian_usulanbaru->tahun_pelaksanaan = request('tahun_pelaksanaan');
        
        $penelitian_usulanbaru->save();
		
		return redirect('dosen/lanjutan');
    }
    
    public function lanjutanProses(UsulanBaru $penelitian_usulanbaru){
        $penelitian_usulanbaru->judul_penelitian = request('judul_penelitian');
        $penelitian_usulanbaru->tkt_new = request('tkt_new');
        $penelitian_usulanbaru->end_tkt = request('end_tkt');
        $penelitian_usulanbaru->save();
        return back();
    }

    public function lanjutanAnggota1(UsulanBaru $penelitian_usulanbaru){
        $penelitian_usulanbaru->nama_gelar1 = request('nama_gelar1');
        $penelitian_usulanbaru->bidang_keahlian1 = request('bidang_keahlian1');
        $penelitian_usulanbaru->peran1 = request('peran1');
        $penelitian_usulanbaru->tugas_penelitian1 = request('tugas_penelitian1');
        $penelitian_usulanbaru->save();
        return back();
    }

    public function lanjutanAnggota2(UsulanBaru $penelitian_usulanbaru){
        $penelitian_usulanbaru->nama_gelar2 = request('nama_gelar2');
        $penelitian_usulanbaru->bidang_keahlian2 = request('bidang_keahlian2');
        $penelitian_usulanbaru->peran2 = request('peran2');
        $penelitian_usulanbaru->tugas_penelitian2 = request('tugas_penelitian2');
        $penelitian_usulanbaru->save();
        return back();
    }

    public function lanjutanProposal(UsulanBaru $penelitian_usulanbaru){
        $penelitian_usulanbaru->handleUploadFile('dokumen');
        $penelitian_usulanbaru->save();
        return back();
    }

    public function lanjutanRab(UsulanBaru $penelitian_usulanbaru){
        $penelitian_usulanbaru->handleUploadFile('dokumen2');
        $penelitian_usulanbaru->save();
        return back();
    }

    public function lanjutanMitra(UsulanBaru $penelitian_usulanbaru){
        $penelitian_usulanbaru->nama_mitra = request('nama_mitra');
        $penelitian_usulanbaru->bidang_mitra = request('bidang_mitra');
        $penelitian_usulanbaru->alamat_mitra = request('alamat_mitra');
        $penelitian_usulanbaru->handleUploadFile('dokumen_mitra');
        $penelitian_usulanbaru->save();
        return back();
    }

    public function storeKirim(UsulanBaru $penelitian_usulanbaru)
    {
        $penelitian_usulanbaru->judul_penelitian = request('judul_penelitian');
        $penelitian_usulanbaru->tkt_new = request('tkt_new');
        $penelitian_usulanbaru->end_tkt = request('end_tkt');
        $penelitian_usulanbaru->nama_gelar1 = request('nama_gelar1');
        $penelitian_usulanbaru->bidang_keahlian1 = request('bidang_keahlian1');
        $penelitian_usulanbaru->peran1 = request('peran1');
        $penelitian_usulanbaru->tugas_penelitian1 = request('tugas_penelitian1');
        $penelitian_usulanbaru->nama_gelar2 = request('nama_gelar2');
        $penelitian_usulanbaru->bidang_keahlian2 = request('bidang_keahlian2');
        $penelitian_usulanbaru->peran2 = request('peran2');
        $penelitian_usulanbaru->tugas_penelitian2 = request('tugas_penelitian2');
        $penelitian_usulanbaru->handleUploadFile('dokumen');
        $penelitian_usulanbaru->handleUploadFile('dokumen2');
        $penelitian_usulanbaru->nama_mitra = request('nama_mitra');
        $penelitian_usulanbaru->bidang_mitra = request('bidang_mitra');
        $penelitian_usulanbaru->alamat_mitra = request('alamat_mitra');
        $penelitian_usulanbaru->handleUploadFile('dokumen_mitra');
        $penelitian_usulanbaru->status = 1;
       
        $penelitian_usulanbaru->save();

        return redirect('dosen/usulanbaru');

    }

    public function setuju($id)
    {
        $penelitian_usulanbaru = UsulanBaru::find($id);
        $penelitian_usulanbaru->status = 2;
        $penelitian_usulanbaru->save();
        return redirect('admin/penelitian/usulanbaru')->with('success', 'Data Didanai');
    }

    public function ditolak($id)
    {
        $penelitian_usulanbaru = UsulanBaru::find($id);
        $penelitian_usulanbaru->status = 3;
        $penelitian_usulanbaru->save();
        return redirect('admin/penelitian/usulanbaru')->with('danger', 'Data Ditolak');
    }


    public function lanjutan()
    {
        return view('dosen.penelitian.usulanbaru.lanjutan.index');
    }

}
