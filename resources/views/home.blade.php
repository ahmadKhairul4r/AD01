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
                <ol class="list-group list-group-numbered">
                    <li class="list-group-item d-flex justify-content-between align-items-start gap-3">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Nama Peserta</div>
                            example@mail.com
                        </div>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#verticalycentered"><i class="bi bi-exclamation-triangle"></i></button>
                        {{-- <span class="badge bg-danger rounded-pill">Check</span> --}}

                        <!-- Vertically centered Modal -->
                            <div class="modal fade" id="verticalycentered" tabindex="-1">
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
                                                        <input type="text" class="form-control" value="Nama Lengkap" disabled>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-form-label">Nickname</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" value="Nickname" disabled>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-form-label">Akun Plataran</label>
                                                    <div class="col-sm-9">
                                                        <input type="email" class="form-control" value="email@mail.com" disabled>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-form-label">NIK</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" value="65xxxxxxxxxx" disabled>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-form-label">No HP</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" value="08xxxxxxxxxx" disabled>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Vertically centered Modal-->
                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#smallModal"><i class="bi bi-info-circle" ></i></button>
                        <div class="modal fade" id="smallModal" tabindex="-1">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Action</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select...</option>
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
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start gap-3">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Nama Peserta</div>
                            example@mail.com
                        </div>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#verticalycentered"><i class="bi bi-exclamation-triangle"></i></button>
                        {{-- <span class="badge bg-danger rounded-pill">Check</span> --}}

                        <!-- Vertically centered Modal -->
                            <div class="modal fade" id="verticalycentered" tabindex="-1">
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
                                                        <input type="text" class="form-control" value="Nama Lengkap" disabled>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-form-label">Nickname</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" value="Nickname" disabled>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-form-label">Akun Plataran</label>
                                                    <div class="col-sm-9">
                                                        <input type="email" class="form-control" value="email@mail.com" disabled>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-form-label">NIK</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" value="65xxxxxxxxxx" disabled>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-form-label">No HP</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" value="08xxxxxxxxxx" disabled>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Vertically centered Modal-->
                        <button type="button" class="btn btn-info" ><i class="bi bi-info-circle"></i></button>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start gap-3">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Nama Peserta</div>
                            example@mail.com
                        </div>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#verticalycentered"><i class="bi bi-exclamation-triangle"></i></button>
                        {{-- <span class="badge bg-danger rounded-pill">Check</span> --}}

                        <!-- Vertically centered Modal -->
                            <div class="modal fade" id="verticalycentered" tabindex="-1">
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
                                                        <input type="text" class="form-control" value="Nama Lengkap" disabled>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-form-label">Nickname</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" value="Nickname" disabled>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-form-label">Akun Plataran</label>
                                                    <div class="col-sm-9">
                                                        <input type="email" class="form-control" value="email@mail.com" disabled>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-form-label">NIK</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" value="65xxxxxxxxxx" disabled>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-form-label">No HP</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" value="08xxxxxxxxxx" disabled>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Vertically centered Modal-->
                        <button type="button" class="btn btn-info" ><i class="bi bi-info-circle"></i></button>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start gap-3">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Nama Peserta</div>
                            example@mail.com
                        </div>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#verticalycentered"><i class="bi bi-exclamation-triangle"></i></button>
                        {{-- <span class="badge bg-danger rounded-pill">Check</span> --}}

                        <!-- Vertically centered Modal -->
                            <div class="modal fade" id="verticalycentered" tabindex="-1">
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
                                                        <input type="text" class="form-control" value="Nama Lengkap" disabled>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-form-label">Nickname</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" value="Nickname" disabled>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-form-label">Akun Plataran</label>
                                                    <div class="col-sm-9">
                                                        <input type="email" class="form-control" value="email@mail.com" disabled>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-form-label">NIK</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" value="65xxxxxxxxxx" disabled>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-form-label">No HP</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" value="08xxxxxxxxxx" disabled>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Vertically centered Modal-->
                        <button type="button" class="btn btn-info" ><i class="bi bi-info-circle"></i></button>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start gap-3">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Nama Peserta</div>
                            example@mail.com
                        </div>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#verticalycentered"><i class="bi bi-exclamation-triangle"></i></button>
                        {{-- <span class="badge bg-danger rounded-pill">Check</span> --}}

                        <!-- Vertically centered Modal -->
                            <div class="modal fade" id="verticalycentered" tabindex="-1">
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
                                                        <input type="text" class="form-control" value="Nama Lengkap" disabled>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-form-label">Nickname</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" value="Nickname" disabled>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-form-label">Akun Plataran</label>
                                                    <div class="col-sm-9">
                                                        <input type="email" class="form-control" value="email@mail.com" disabled>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-form-label">NIK</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" value="65xxxxxxxxxx" disabled>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-sm-3 col-form-label">No HP</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" value="08xxxxxxxxxx" disabled>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Vertically centered Modal-->
                        <button type="button" class="btn btn-info" ><i class="bi bi-info-circle"></i></button>
                    </li>
                </ol><!-- End with custom content -->
            </div>
          </div>
    </main>

    <!-- End Content -->
@endsection
