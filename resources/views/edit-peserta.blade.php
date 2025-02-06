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
                            <form class="row g-3">
                                <div class="col-md-4">
                                    <label for="validationFullname" class="form-label">Fullname</label>
                                    <input type="text" class="form-control" id="validationFullname" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationNickname" class="form-label">Nickname</label>
                                    <input type="text" class="form-control" id="validationNickname" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationAkunplataran" class="form-label">Akun plataran sehat</label>
                                    <input type="text" class="form-control" id="validationAkunplataran" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationNik" class="form-label">Nik</label>
                                    <input type="number" class="form-control" id="validationNik" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationUkuran" class="form-label">Ukuran</label>
                                    <select class="form-select" id="validationUkuran" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option>S</option>
                                        <option>M</option>
                                        <option>L</option>
                                        <option>XL</option>
                                        <option>XXL</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationTempat" class="form-label">Tempat TL</label>
                                    <input type="text" class="form-control" id="validationTempat" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationTanggal" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="validationTanggal" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationUsia" class="form-label">Usia</label>
                                    <input type="number" class="form-control" id="validationUsia" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationJenisKelamin" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" id="validationJenisKelamin" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option>Laki-laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationAgama" class="form-label">Agama</label>
                                    <input type="text" class="form-control" id="validationAgama" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationNohp" class="form-label">No Hp</label>
                                    <input type="text" class="form-control" id="validationNohp" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationTahunLukusDr" class="form-label">Tahun Lulus Dr</label>
                                    <input type="number" class="form-control" id="validationTahunLukusDr" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationUnivDr" class="form-label">Univ Dr</label>
                                    <input type="number" class="form-control" id="validationUnivDr" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationTahunLukusSps" class="form-label">Tahun Lulus Sps</label>
                                    <input type="number" class="form-control" id="validationTahunLukusSps" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationJenisSps" class="form-label">Jenis Sps</label>
                                    <input type="number" class="form-control" id="validationJenisSps" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationUnivSps" class="form-label">Univ Sps</label>
                                    <input type="number" class="form-control" id="validationUnivSps" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationAlamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="validationAlamat" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationEmail" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="validationEmail" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationNamaDepart" class="form-label">Nama Departemen</label>
                                    <input type="text" class="form-control" id="validationNamaDepart" required>
                                </div>
                                <div class="col-md-8">
                                    <label for="validationFoto" class="form-label">Foto</label>
                                    <div class="col">
                                        <input class="form-control" type="file" id="validationFoto">
                                    </div>
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
