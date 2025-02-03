@extends('layout.main')

@section('content')
    <!-- ======= Content ======= -->
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Kelola Data Instruktur</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route("home")}}">Home</a></li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>
        </div>
        <div class="my-4">
            <button type="button" class="p-3 border rounded-3" style="background-color: #4874e3"><i class="bi bi-bookmark-plus" style="color: white"></i><a href="{{route("importdata.instruktur")}}" class="fw-bold text-white"> Import Data Instruktur</a></button>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Instruktur</h5>
                            <p>Cek Data Kembali</p>
                                <!-- Table with stripped rows -->
                            <div class="table-responsive" >
                                <table class="table datatable table-fixed">
                                    <thead>
                                        <tr>
                                            <th>
                                                <b>N</b>ame
                                            </th>
                                            <th>Nickname</th>
                                            <th>Akun Plataran</th>
                                            <th>NIK</th>
                                            <th>NoHP</th>
                                            <th>Alamat</th>
                                            <th>Ukuran</th>
                                            <th>TTL</th>
                                            <th>Tahun Lulus</th>
                                            <th>Tahun Lulus Sps</th>
                                            <th>Jenis Sps</th>
                                            <th>Foto</th>
                                            <th>FC Ijazah</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Brandon Jacob</td>
                                            <td>Designer</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#verticalycentered"><i class="bi bi-trash"></i></button>
                                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#verticalycentered"><i class="bi bi-pencil"></i></button>
                                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#smallModal"><i class="bi bi-info-circle" ></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Brodi</td>
                                            <td>Designer</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#verticalycentered"><i class="bi bi-trash"></i></button>
                                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#verticalycentered"><i class="bi bi-pencil"></i></button>
                                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#smallModal"><i class="bi bi-info-circle" ></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jamal</td>
                                            <td>Admin</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>08xxxxxxxxxx</td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#verticalycentered"><i class="bi bi-trash"></i></button>
                                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#verticalycentered"><i class="bi bi-pencil"></i></button>
                                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#smallModal"><i class="bi bi-info-circle" ></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End Content -->

@endsection
