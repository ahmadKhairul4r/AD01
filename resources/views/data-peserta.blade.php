@extends('layout.main')

@section('content')
    <!-- ======= Content ======= -->
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Kelola Data Peserta</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


        <section class="section">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Data Peserta</h5>
                    <form action="{{ route('data-peserta') }}" method="GET">
                        <div class="input-group mb-5">
                            <div class="form-outline">
                                <input type="text" id="form1" name="cari" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-primary">
                            <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </form>

                  <!-- Table with stripped rows -->
                    <div class="table-responsive">
                        <table class="table table-fixed">
                            <thead>
                                <tr>
                                    <th scope="col" style="white-space: nowrap; width: 150px;">FullName</th>
                                    <th scope="col" style="white-space: nowrap; width: 100px;">Nickname</th>
                                    <th scope="col" style="white-space: nowrap; width: 200px;">Akun Plataran</th>
                                    <th scope="col" style="white-space: nowrap; width: 120px;">NIK</th>
                                    <th scope="col" style="white-space: nowrap; width: 120px;">Ukuran</th>
                                    <th scope="col" style="white-space: nowrap; width: 120px;">Tempat TL</th>
                                    <th scope="col" style="white-space: nowrap; width: 80px;">Usia</th>
                                    <th scope="col" style="white-space: nowrap; width: 150px;">Jenis Kl</th>
                                    <th scope="col" style="white-space: nowrap; width: 100px;">Agama</th>
                                    <th scope="col" style="white-space: nowrap; width: 120px;">No Hp</th>
                                    <th scope="col" style="white-space: nowrap; width: 120px;">Tahun Lulus Dr</th>
                                    <th scope="col" style="white-space: nowrap; width: 100px;">Univ Dr</th>
                                    <th scope="col" style="white-space: nowrap; width: 100px;">Tahun Lulus Sps</th>
                                    <th scope="col" style="white-space: nowrap; width: 100px;">Jenis Sps</th>
                                    <th scope="col" style="white-space: nowrap; width: 100px;">Univ Sps</th>
                                    <th scope="col" style="white-space: nowrap; width: 100px;">Alamat</th>
                                    <th scope="col" style="white-space: nowrap; width: 100px;">Email</th>
                                    <th scope="col" style="white-space: nowrap; width: 100px;">Nama Departemen</th>
                                    <th scope="col" style="white-space: nowrap; width: 100px;">Foto</th>
                                    <th scope="col" style="">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $d)
                                <tr >
                                    <td>{{$d->fullname}}</td>
                                    <td>{{$d->nickname}}</td>
                                    <td>{{$d->akun_plataran_sehat}}</td>
                                    <td>{{$d->nik}}</td>
                                    <td>{{$d->ukuran_baju}}</td>
                                    <td>{{ $d->tempat_lahir . ' ' . $d->tanggal_lahir }}</td>
                                    <td>{{$d->usia}}</td>
                                    <td>{{$d->jenis_kelamin}}</td>
                                    <td>{{$d->agama}}</td>
                                    <td>{{$d->no_hp}}</td>
                                    <td>{{$d->tahun_lulus_dokter}}</td>
                                    <td>{{$d->universitas}}</td>
                                    <td>{{$d->tahun_lulus_spesialis}}</td>
                                    <td>{{$d->jenis_spesialis}}</td>
                                    <td>{{$d->universitas_spesialis}}</td>
                                    <td>{{$d->alamat}}</td>
                                    <td>{{$d->email}}</td>
                                    <td>{{$d->alamat_kantor}}</td>
                                    <td>{{$d->nama_foto}}</td>
                                    <td class="d-flex gap-2">
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                        <a href="{{ route('edit.peserta', ['id' => $d->id]) }}" class="btn btn-warning text-dark">
                                            <i class="bi bi-exclamation-triangle"></i>
                                        </a>
                                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                                            <i class="bi bi-info-circle"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                  <!-- End Table with stripped rows -->
                </div>
            </div>
        </section>
    </main>
    <!-- End Content -->

@endsection
