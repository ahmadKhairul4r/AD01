@extends('layout.main')

@section('content')
    <!-- ======= Content ======= -->
    <main id="main" class="main">
        <div class="pagetitle">
          <h1>Tambah Peserta</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('data-peserta')}}">Data Peserta</a></li>
              <li class="breadcrumb-item active">Tambah</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->


        <section class="section">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Form Tambah Peserta</h5>
                            <p class=""><b>Note :</b> Isi sesuai dengan ketentuan dan silahkan cek kembali</p>
                            <!-- Browser Default Validation -->
                            <form class="row g-3 mt-3" action="{{route('ProsesPeserta')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-4">
                                    <label for="validationFullname" class="form-label">Fullname</label>
                                    <input type="text" class="form-control" id="validationFullname" name="fullname"  >
                                    @error('fullname')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="validationNickname" class="form-label">Nickname</label>
                                    <input type="text" class="form-control" id="validationNickname" name="nickname" >
                                    @error('nickname')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="validationAkunplataran" class="form-label">Akun plataran sehat</label>
                                    <input type="text" class="form-control" id="validationAkunplataran" name="akun_plataran_sehat">
                                    @error('akun_plataran_sehat')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="validationNik" class="form-label">Nik</label>
                                    <input type="number" class="form-control" id="validationNik" name="nik">
                                    @error('nik')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="validationUkuran" class="form-label">Ukuran</label>
                                    <select class="form-select" id="validationUkuran" name="ukuran_baju" >
                                        <option disabled value="">Choose...</option>
                                        <option value="S">S</option>
                                        <option value="M" >M</option>
                                        <option value="L" >L</option>
                                        <option value="XL" >XL</option>
                                        <option value="XXL" >XXL</option>
                                    </select>
                                    @error('ukuran_baju')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="validationTempat" class="form-label">Tempat TL</label>
                                    <input type="text" class="form-control" id="validationTempat" name="tempat_lahir">
                                    @error('tempat_lahir')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="validationTanggal" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="validationTanggal" name="tanggal_lahir"  >
                                    @error('tanggal_lahir')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="validationUsia" class="form-label">Usia</label>
                                    <input type="number" class="form-control" id="validationUsia" name="usia">
                                    @error('usia')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="validationJenisKelamin" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" id="validationJenisKelamin" name="jenis_kelamin" >
                                        <option disabled value="">Choose...</option>
                                        <option value="Laki-laki" >Laki-laki</option>
                                        <option value="Perempuan" >Perempuan</option>
                                    </select>
                                    @error('jenis_kelamin')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="validationAgama" class="form-label">Agama</label>
                                    <input type="text" class="form-control" id="validationAgama" name="agama"  >
                                    @error('agama')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="validationNohp" class="form-label">No Hp</label>
                                    <input type="text" class="form-control" id="validationNohp" name="no_hp"  >
                                    @error('no_hp')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="validationAlamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="validationAlamat" name="alamat"  >
                                    @error('alamat')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="validationEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="validationEmail" name="email"  >
                                    @error('email')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="validationpassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="validationpassword" name="password"  >
                                    @error('password')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="validationTahunLulus" class="form-label">Tahun Lulus Dr</label>
                                    <input type="text" class="form-control" id="validationTahunLulus" name="tahun_lulus_dokter"  >
                                    @error('tahun_lulus_dokter')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="validationUnivDr" class="form-label">Universitas Dr</label>
                                    <input type="text" class="form-control" id="validationUnivDr" name="universitas"  >
                                    @error('universitas')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="validationTahunLulussps" class="form-label">Tahun Lulus Spesialis</label>
                                    <input type="text" class="form-control" id="validationTahunLulussps" name="tahun_lulus_spesialis"  >
                                    @error('tahun_lulus_spesialis')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="validationJenisSps" class="form-label">Jenis Sps</label>
                                    <input type="text" class="form-control" id="validationJenisSps" name="jenis_spesialis"  >
                                    @error('jenis_spesialis')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="validationUnivSps" class="form-label">Univ Sps</label>
                                    <input type="text" class="form-control" id="validationUnivSps" name="universitas_spesialis" >
                                    @error('universitas_spesialis')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>


                                <div class="col-md-4">
                                    <label for="validationNamaDepart" class="form-label">Nama Departemen</label>
                                    <input type="text" class="form-control" id="validationNamaDepart" name="nama_kantor"  >
                                    @error('nama_kantor')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="validationAlamatDepart" class="form-label">Alamat Departemen</label>
                                    <input type="text" class="form-control" id="validationAlamatDepart" name="alamat_kantor"  >
                                    @error('alamat_kantor')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="validationJabatanDepart" class="form-label">Jabatan Pekerjaan</label>
                                    <input type="text" class="form-control" id="validationJabatanDepart" name="jabatan_pekerjaan"  >
                                    @error('jabatan_pekerjaan')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="col-md-8">
                                    <label for="validationFoto" class="form-label">Foto</label>
                                    <div class="col">
                                        <input class="form-control" type="file" name="nama_foto" id="validationFoto">
                                        @error('nama_foto')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationFotoIjazah" class="form-label">Foto Ijazah</label>
                                    <div class="col">
                                        <input class="form-control" type="file" name="nama_fc_ijazah" id="validationFotoIjazah">
                                    </div>
                                    @error('nama_fc_ijazah')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Agree to terms and conditions
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>
                            </form>
                            <!-- End Browser Default Validation -->

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End Content -->
@endsection
