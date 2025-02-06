@extends('layout.main')

@section('content')
    <!-- ======= Content ======= -->
    <main id="main" class="main">
        <div class="pagetitle">
          <h1>Dashboard</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Permintaan Peserta Sub Devisi Jakarta</h5>
              <!-- List group with custom content -->
                <ol class="list-decimal pl-5">
                    @foreach ($data as $d)
                        <li class="d-flex list-item mb-3 p-3 border border-gray-300 rounded-lg shadow-md flex justify-between items-center">
                            <div class="flex flex-col space-y-1">
                                <div><strong>Nama Lengkap:</strong> {{$d->fullname}}</div>
                                <div><strong>Email:</strong> {{$d->email}}</div>
                            </div>

                            {{-- Action buttons --}}
                            <div class="ms-auto">
                                <!-- Info button -->
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#verticalycentered{{$d->id}}">
                                    <i class="bi bi-exclamation-triangle"></i>
                                </button>
                                <!-- Vertically centered Modal -->
                                <div class="modal fade" id="verticalycentered{{$d->id}}" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Informasi Data Peserta</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" value="{{$d->fullname}}" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-3 col-form-label">Nickname</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" value="{{$d->nickname}}" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-3 col-form-label">Akun Plataran</label>
                                                        <div class="col-sm-9">
                                                            <input type="email" class="form-control" value="{{$d->email}}" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-3 col-form-label">NIK</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" value="{{$d->nik}}" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-3 col-form-label">No HP</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" value="{{$d->no_hp}}" disabled>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Vertically centered Modal-->

                                <!-- Action button -->
                                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#smallModal{{$d->id}}">
                                    <i class="bi bi-info-circle"></i>
                                </button>
                                <div class="modal fade" id="smallModal{{$d->id}}" tabindex="-1">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Action</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected disabled>Select...</option>
                                                    <option value="1">Accept</option>
                                                    <option value="2">Reject</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-success">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Small Modal-->
                            </div>
                        </li>
                    @endforeach
                </ol><!-- End with custom content -->
            </div>
          </div>
    </main><!-- End Content -->
@endsection
