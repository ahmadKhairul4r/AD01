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

                  <!-- Table with stripped rows -->
                    <div class="table-responsive">
                        <table class="table table-striped table-fixed">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Nickname</th>
                                    <th scope="col">Akun Plataran</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col">NoHP</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Ukuran</th>
                                    <th scope="col">TTL</th>
                                    <th scope="col">Tahun Lulus</th>
                                    <th scope="col">Tahun Lulus Sps</th>
                                    <th scope="col">Jenis Sps</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">FC Ijazah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
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
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
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
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
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
                                </tr>
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
