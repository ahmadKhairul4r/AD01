@extends('layout.main')

@section('content')
    <!-- ======= Content ======= -->
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Tambah Data Event</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route("home")}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route("data.event")}}">Event</a></li>
                    <li class="breadcrumb-item active">Tambah Event</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Isi Form Event Pelatihan</h5>
                            <!-- Horizontal Form -->
                                <form class="row g-3">
                                    <div class="col-md-6 mb-3">
                                        <label for="idevent" class="form-label">ID Event</label>
                                        <input type="text" class="form-control" placeholder="IE001" id="idevent" disabled>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="inputtipe" class="form-label">Tipe Event</label>
                                        <select id="inputtipe" class="form-select">
                                            <option selected>Choose...</option>
                                            <option>Offline</option>
                                            <option>Online</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="inputStartDate" class="form-label">Start Date</label>
                                        <input type="date" class="form-control" id="inputStartDate">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="inputEndDate" class="form-label">End Date</label>
                                        <input type="date" class="form-control" id="inputEndDate">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="inputJudul" class="form-label">Isi Judul</label>
                                        <input type="text" class="form-control" id="inputJudul">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="basic-url" class="form-label">Lokasi URL</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon3">https://maps.com..</span>
                                            <input type="text" class="form-control" id="basic-url">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="inputmax" class="form-label">Maksimal Peserta</label>
                                        <input type="number" class="form-control" id="inputmax">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="inputtipe" class="form-label">Pilih Instruktur</label>
                                        <select id="inputtipe" class="form-select">
                                            <option selected>Choose...</option>
                                            <option>dr. contoh1</option>
                                            <option>dr. contoh2</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="biaya" class="form-label">Harga Event</label>
                                        <input type="text" placeholder="Rp....." class="form-control" id="biaya">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="benefit" class="form-label">Benefit / Deskripsi</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" style="height: 100px"></textarea>
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
                                </form><!-- Vertical Form -->
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>
    <!-- End Content -->

@endsection
