@extends('layout.main')

@section('content')
    <!-- ======= Content ======= -->
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Data Event</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route("home")}}">Home</a></li>
                    <li class="breadcrumb-item active">Event</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="my-4">
            <button type="button" class="btn btn-primary"><a href="{{route("tambahData.event")}}" class="text-white"><i class="bi bi-bookmark-plus"></i> Tambah Data</a></button>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Kelola Data Event</h5>
                            <p>Add lightweight datatables to your project with using the </p>

                            <!-- Table with stripped rows -->
                            <div class="table-responsive" >
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>
                                                <b>J</b>udul
                                            </th>
                                            <th>Harga</th>
                                            <th>Kapasitas</th>
                                            <th data-type="date" data-format="YYYY/DD/MM">StartDate</th>
                                            <th data-type="date" data-format="YYYY/DD/MM">End Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>
                                                Advanced Trauma Life Suopport (ATLS) Tanggal 1-2 Januari 2025
                                            </th>
                                            <th>RP 6.000.000</th>
                                            <th>34</th>
                                            <th>2025/01/01</th>
                                            <th>2025/01/02</th>
                                            <th>
                                                <div class="d-flex gap-2">
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#verticalycentered"><i class="bi bi-trash"></i></button>
                                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#verticalycentered"><i class="bi bi-pencil"></i></button>
                                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#smallModal"><i class="bi bi-info-circle" ></i></button>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                Advanced Trauma Life Suopport (ATLS) Tanggal 1-2 Maret 2025
                                            </th>
                                            <th>RP 6.000.000</th>
                                            <th>34</th>
                                            <th>2025/01/01</th>
                                            <th>2025/01/02</th>
                                            <th>
                                                <div class="d-flex gap-2">
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#verticalycentered"><i class="bi bi-trash"></i></button>
                                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#verticalycentered"><i class="bi bi-pencil"></i></button>
                                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#smallModal"><i class="bi bi-info-circle" ></i></button>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                Advanced Trauma Life Suopport (ATLS) Tanggal 1-2 Februari 2025
                                            </th>
                                            <th>RP 6.000.000</th>
                                            <th>34</th>
                                            <th>2025/01/01</th>
                                            <th>2025/01/02</th>
                                            <th>
                                                <div class="d-flex gap-2">
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#verticalycentered"><i class="bi bi-trash"></i></button>
                                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#verticalycentered"><i class="bi bi-pencil"></i></button>
                                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#smallModal"><i class="bi bi-info-circle" ></i></button>
                                                </div>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End Content -->

@endsection
