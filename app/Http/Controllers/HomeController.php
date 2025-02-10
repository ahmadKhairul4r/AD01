<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\MemberModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function dashboard() {
        return view('home');
    }

    public function peserta(){
        $data = MemberModel::get(); // Kirim data Member ke dashboard
        return view('data-peserta', compact('data'));
    }
    public function search_peserta(Request $request){
        $keyword= $request->input('Search');
        $data = MemberModel:: where('nickname', 'like', "%".$keyword."%")->paginate(2);
        return view('data-peserta', compact('data'));
    }

    public function edit(Request $request, $id)
    {
        $data = MemberModel::find($id);

        return view('edit-peserta', compact('data')); // Kirim data ke view
    }
    public function update(Request $request, $id)
    {

        // Isi data dengan input dari form
            $data['fullname'] = $request->fullname;
            $data['nickname'] = $request->nickname;
            $data['akun_plataran_sehat'] = $request->akun_plataran_sehat;
            $data['nik'] = $request->nik;
            $data['ukuran_baju'] = $request->ukuran_baju;
            $data['tempat_lahir'] = $request->tempat_lahir;
            $data['tanggal_lahir'] = $request->tanggal_lahir;
            $data['usia'] = $request->usia;
            $data['jenis_kelamin'] = $request->jenis_kelamin;
            $data['agama'] = $request->agama;
            $data['no_hp'] = $request->no_hp;
            $data['tahun_lulus_dokter'] = $request->tahun_lulus_dokter;
            $data['universitas'] = $request->universitas;
            $data['tahun_lulus_spesialis'] = is_numeric($request->tahun_lulus_spesialis) ? $request->tahun_lulus_spesialis : null;
            $data['jenis_spesialis'] = $request->jenis_spesialis;
            $data['universitas_spesialis'] = $request->universitas_spesialis;
            $data['alamat'] = $request->alamat;
            $data['email'] = $request->email;
            $data['nama_kantor'] = $request->nama_kantor;
            $data['alamat_kantor'] = $request->alamat_kantor;
            $data['jabatan_pekerjaan'] = $request->jabatan_pekerjaan;
            // Simpan ke database
            MemberModel::whereId($id)->update($data);

            // Redirect ke halaman lain dengan notifikasi sukses
            return redirect()->route('data.peserta')->with('success', 'Data member berhasil ditambahkan!');
    }
    public function delete(Request $request, $id){
        $data = MemberModel::find($id);
        if($data){
            $data->delete();
        }
        return redirect()->route('data.peserta');
    }



    public function instruktur(){
        return view('data-instruktur');
    }
    public function importdata_instruktur(){
        return view('importDataInstruktur');
    }
    public function data_event(){
        return view('data-event');
    }
    public function tambahdata_event(){
        return view('tambahDataEvent');
    }
}
