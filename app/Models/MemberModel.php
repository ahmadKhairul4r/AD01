<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberModel extends Model
{
    /** @use HasFactory<\Database\Factories\MemberModelFactory> */
    use HasFactory;
    // Gunakan koneksi database tertentu
    protected $connection = 'DB_LP_Kontrasia';

    // Nama tabel (jika tidak sesuai dengan nama model)
    protected $table = 'members';

    // protected $fillable = [
    //     'fullname', 'nickname', 'akun_plataran_sehat', 'nik', 'ukuran_baju',
    //     'tempat_lahir', 'tanggal_lahir', 'usia', 'jenis_kelamin', 'agama',
    //     'no_hp', 'tahun_lulus_dokter', 'universitas', 'tahun_lulus_spesialis',
    //     'jenis_spesialis', 'universitas_spesialis', 'alamat', 'email',
    //     'password', 'nama_kantor', 'alamat_kantor', 'jabatan_pekerjaan',
    //     'nama_foto', 'nama_fc_ijazah'
    // ];
}
