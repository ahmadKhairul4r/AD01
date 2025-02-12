@foreach ($data as $d)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $d->fullname }}</td>
    <td>{{ $d->nickname }}</td>
    <td>{{ $d->akun_plataran_sehat }}</td>
    <td>{{ $d->nik }}</td>
    <td>{{ $d->ukuran_baju }}</td>
    <td>{{ $d->tempat_lahir . ' ' . $d->tanggal_lahir }}</td>
    <td>{{ $d->usia }}</td>
    <td>{{ $d->jenis_kelamin }}</td>
    <td>{{ $d->agama }}</td>
    <td>{{ $d->no_hp }}</td>
    <td>{{ $d->tahun_lulus_dokter }}</td>
    <td>{{ $d->universitas }}</td>
    <td>{{ $d->tahun_lulus_spesialis }}</td>
    <td>{{ $d->jenis_spesialis }}</td>
    <td>{{ $d->universitas_spesialis }}</td>
    <td>{{ $d->alamat }}</td>
    <td>{{ $d->email }}</td>
    <td>{{ $d->alamat_kantor }}</td>
    <td>{{ $d->nama_foto }}</td>
    <td class="d-flex gap-2">
        <a href="" class="btn btn-danger text-dark" data-bs-toggle="modal" data-bs-target="#modal-hapus{{ $d->id }}">
            <i class="bi bi-trash"></i>
        </a>
        <div class="modal fade" id="modal-hapus{{ $d->id }}" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Perhatian!!!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Konfirmasi apakah kamu yakin ingin menghapus data peserta <b>{{ $d->fullname }}</b>
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('delete-peserta', ['id' => $d->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Hapus Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- End Vertically centered Modal-->
        <a href="{{ route('edit-peserta', ['id' => $d->id]) }}" class="btn btn-warning text-dark">
            <i class="bi bi-exclamation-triangle"></i>
        </a>
        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#verticalycentered">
            <i class="bi bi-info-circle"></i>
        </button>
    </td>
</tr>
@endforeach
