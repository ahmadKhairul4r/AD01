@extends('layout.main')

@section('content')
    <!-- ======= Content ======= -->
    <main id="main" class="main">
        <div class="pagetitle">
          <h1>Edit Peserta</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Form Edit Peserta</h5>
                            <p>Silahkan Edit peserta sesuai dengan perubahan yang diinginkan</p>
                            <!-- Browser Default Validation -->
                            <form class="row g-3" action="{{ route('update-peserta', ['id' => $data->id]) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="col-md-4">
                                    <label for="validationFullname" class="form-label">Fullname</label>
                                    <input type="text" class="form-control" id="validationFullname" name="fullname" value="{{ $data->fullname }}" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="validationNickname" class="form-label">Nickname</label>
                                    <input type="text" class="form-control" id="validationNickname" name="nickname" value="{{ $data->nickname }}" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="validationAkunplataran" class="form-label">Akun plataran sehat</label>
                                    <input type="text" class="form-control" id="validationAkunplataran" name="akun_plataran_sehat" value="{{ $data->akun_plataran_sehat }}" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="validationNik" class="form-label">Nik</label>
                                    <input type="number" class="form-control" id="validationNik" name="nik" value="{{ $data->nik }}" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="validationUkuran" class="form-label">Ukuran</label>
                                    <select class="form-select" id="validationUkuran" name="ukuran_baju" required>
                                        <option disabled value="">Choose...</option>
                                        <option value="S" {{ $data->ukuran_baju == 'S' ? 'selected' : '' }}>S</option>
                                        <option value="M" {{ $data->ukuran_baju == 'M' ? 'selected' : '' }}>M</option>
                                        <option value="L" {{ $data->ukuran_baju == 'L' ? 'selected' : '' }}>L</option>
                                        <option value="XL" {{ $data->ukuran_baju == 'XL' ? 'selected' : '' }}>XL</option>
                                        <option value="XXL" {{ $data->ukuran_baju == 'XXL' ? 'selected' : '' }}>XXL</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label for="validationTempat" class="form-label">Tempat TL</label>
                                    <input type="text" class="form-control" id="validationTempat" name="tempat_lahir" value="{{ $data->tempat_lahir }}" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="validationTanggal" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="validationTanggal" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="validationUsia" class="form-label">Usia</label>
                                    <input type="number" class="form-control" id="validationUsia" name="usia" value="{{ $data->usia }}" readonly>

                                </div>

                                <div class="col-md-4">
                                    <label for="validationJenisKelamin" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" id="validationJenisKelamin" name="jenis_kelamin" required>
                                        <option disabled value="">Choose...</option>
                                        <option value="Laki-laki" {{ $data->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                        <option value="Perempuan" {{ $data->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label for="validationAgama" class="form-label">Agama</label>
                                    <input type="text" class="form-control" id="validationAgama" name="agama" value="{{$data->agama}}" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="validationNohp" class="form-label">No Hp</label>
                                    <input type="text" class="form-control" id="validationNohp" name="no_hp" value="{{$data->no_hp}}" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="validationAlamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="validationAlamat" name="alamat" value="{{$data->alamat}}" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="validationEmail" name="email" value="{{$data->email}}" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="validationTahunLulus" class="form-label">Tahun Lulus Dr</label>
                                    <input type="text" class="form-control" id="validationTahunLulus" name="tahun_lulus_dokter" value="{{ $data->tahun_lulus_dokter}}" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="validationUnivDr" class="form-label">Universitas Dr</label>
                                    <input type="text" class="form-control" id="validationUnivDr" name="universitas" value="{{ $data->universitas}}" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="validationTahunLulussps" class="form-label">Tahun Lulus Spesialis</label>
                                    <input type="text" class="form-control" id="validationTahunLulussps" name="tahun_lulus_spesialis" value="{{$data->tahun_lulus_spesialis}}" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationJenisSps" class="form-label">Jenis Sps</label>
                                    <input type="text" class="form-control" id="validationJenisSps" name="jenis_spesialis" value="{{$data->jenis_spesialis}}" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationUnivSps" class="form-label">Univ Sps</label>
                                    <input type="text" class="form-control" id="validationUnivSps" name="universitas_spesialis" value="{{$data->universitas_spesialis}}" required>
                                </div>


                                <div class="col-md-4">
                                    <label for="validationNamaDepart" class="form-label">Nama Departemen</label>
                                    <input type="text" class="form-control" id="validationNamaDepart" name="nama_kantor" value="{{$data->nama_kantor}}" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationAlamatDepart" class="form-label">Alamat Departemen</label>
                                    <input type="text" class="form-control" id="validationAlamatDepart" name="alamat_kantor" value="{{$data->alamat_kantor}}" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationJabatanDepart" class="form-label">Jabatan Pekerjaan</label>
                                    <input type="text" class="form-control" id="validationJabatanDepart" name="jabatan_pekerjaan" value="{{$data->jabatan_pekerjaan}}" required>
                                </div>


                                {{-- <div class="col-md-8">
                                    <label for="validationFoto" class="form-label">Foto</label>
                                    <div class="col">
                                        <input class="form-control" type="file" name="nama_foto" id="validationFoto" value="{{ $data->nama_foto}}">
                                    </div>
                                </div> --}}

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
