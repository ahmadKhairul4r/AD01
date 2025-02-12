<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\MemberModel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function dashboard() {
        return view('home');
    }

    // public function index(Request $request){
    //     $data = new MemberModel; // Kirim data Member ke dashboard

    //     if($request->get('search')){
    //         $data = $data->where('fullname','LIKE','%'.$request->get('search').'%')
    //         ->orWhere('nik','LIKE','%'.$request->get('search').'%');
    //     }
    //     $data = $data->get();

    //     return view('data-peserta', compact('data','request'));
    // }
    public function index(Request $request)
    {
        $data = new MemberModel;

        if ($request->get('search')) {
            $data = $data->where('fullname', 'LIKE', '%' . $request->get('search') . '%')
                ->orWhere('nik', 'LIKE', '%' . $request->get('search') . '%');
        }

        $data = $data->get();

        if ($request->ajax()) {
            return view('data_peserta_tbody.blade', compact('data')); // Mengembalikan hanya baris tabel
        }
        return view('data-peserta', compact('data', 'request'));
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
        return redirect()->route('data-peserta')->with('success', 'Data member berhasil ditambahkan!');
    }
    public function delete(Request $request, $id){
        $data = MemberModel::find($id);
        if($data){
            $data->delete();
        }
        return redirect()->route('data-peserta');
    }

    // tambah data peserte
    public function create(){
        return view('create-peserta');
    }

    // proses data peserta
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required',
            'nickname' => 'required',
            'akun_plataran_sehat' => 'required',
            'nik' => 'required',
            'ukuran_baju' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'usia' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'no_hp' => 'required',
            'tahun_lulus_dokter' => 'required',
            'universitas' => 'required',
            'tahun_lulus_spesialis' => 'nullable|integer', // Ubah menjadi nullable dan integer
            'jenis_spesialis' => 'required',
            'universitas_spesialis' => 'required',
            'alamat' => 'required',
            'email' => 'required|email', // Ubah menjadi members,email
            'password' => 'required|min:6',
            'nama_kantor' => 'required',
            'alamat_kantor' => 'required',
            'jabatan_pekerjaan' => 'required',
            'nama_foto' => 'nullable|image|mimes:png,jpg,jpeg|max:2048', // Ubah validasi
            'nama_fc_ijazah' => 'nullable|image|mimes:png,jpg,jpeg|max:3072', // Ubah validasi
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $path_nama_foto = null;
        $path_nama_fc_ijazah = null;

        // Proses Upload nama_foto
        if ($request->hasFile('nama_foto')) {
            $photo = $request->file('nama_foto');
            $filename = date('Y-m-d') . '_' . Str::random(10) . '_' . $photo->getClientOriginalName(); // Nama file unik
            $filename = preg_replace('/\s+/', '_', $filename); // Ganti spasi dengan underscore
            $path = 'photo-peserta/' . $filename;

            Storage::disk('public')->put($path, file_get_contents($photo));
            $path_nama_foto = $path; // Simpan path untuk database
        }

        // Proses Upload nama_fc_ijazah
        if ($request->hasFile('nama_fc_ijazah')) {
            $fc_ijazah = $request->file('nama_fc_ijazah');
            $filename = date('Y-m-d') . '_' . Str::random(10) . '_' . $fc_ijazah->getClientOriginalName(); // Nama file unik
            $filename = preg_replace('/\s+/', '_', $filename); // Ganti spasi dengan underscore
            $path = 'fc-ijazah/' . $filename; // Folder terpisah

            Storage::disk('public')->put($path, file_get_contents($fc_ijazah));
            $path_nama_fc_ijazah = $path; // Simpan path untuk database
        }


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
        $data['password'] = Hash::make($request->password);
        $data['nama_kantor'] = $request->nama_kantor;
        $data['alamat_kantor'] = $request->alamat_kantor;
        $data['jabatan_pekerjaan'] = $request->jabatan_pekerjaan;
        $data['nama_foto'] = $path_nama_foto; // Simpan path file
        $data['nama_fc_ijazah'] = $path_nama_fc_ijazah; // Simpan path file

        // Simpan ke database
        MemberModel::create($data);

        // Redirect ke halaman lain dengan notifikasi sukses
        return redirect()->route('data-peserta')->with('success', 'Data member berhasil ditambahkan!');
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
