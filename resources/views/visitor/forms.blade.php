{{-- MODAL SHOW --}}
@foreach ($tdata as $t)
    <div class="modal fade" id="exampleModal{{ $t->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Informasi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Tanggal Kedatangan</label>
                            <input type="email" class="form-control" id="inputEmail4"
                                value="{{ $t->created_at->format('d-m-Y ') }}" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="inputPassword4" value="{{ $t->name }}"
                                readonly>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Plat Nomor</label>
                            <input type="text" class="form-control" id="inputAddress" value="{{ $t->plat_nomor }}"
                                readonly>
                        </div>
                        {{-- <div class="col-12">
                            <label for="inputAddress2" class="form-label">Alamat Instansi</label>
                            <input type="text" class="form-control" id="inputAddress2" value="{{ $t->instance }}"
                                readonly>
                        </div> --}}
                        <div class="col-12">
                            <label for="inputCity" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="inputCity" value="{{ $t->phone_number }}"
                                readonly>
                        </div>
                        {{-- <div class="col-md-6">
                            <label for="inputZip" class="form-label">Bertemu Dengan</label>
                            <input type="text" class="form-control" id="inputZip" value="{{ $t->meet->meet_with }}"readonly>
                        </div> --}}
                        {{-- <div class="col-md-6">
                            <label for="inputZip" class="form-label">Kepentingan</label>
                            <input type="text" class="form-control" id="inputZip"
                                value="{{ $t->utility->utilities }}"readonly>
                        </div> --}}
                        <div class="col-12">
                            <label for="inputZip" class="form-label">Merk Motor</label>
                            <input type="textarea" class="form-control" id="inputZip" value="{{ $t->merk_motor }}"readonly>
                        </div>
                        <div class="col-12">
                            <label for="inputZip" class="form-label">Keterangan</label>
                            <input type="textarea" class="form-control" id="inputZip" value="{{ $t->desc }}"readonly>
                        </div>
                    </form>
                    <table>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

{{-- Modal Delete --}}
@foreach ($tdata as $t)
    <div class="modal fade" id="delete-visitor{{ $t->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action={{ url('/visitor/delete/' . $t->id) }} method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        <center class="mt-3">
                            <h5>
                                apakah anda yakin ingin menghapus data ini?
                            </h5>
                        </center>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                        <button type="submit" class="btn btn-danger">Hapus!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach

{{-- MODAL ADD --}}
<div class="modal fade modal-borderless" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Pelanggan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action={{ route('visitor.store') }} method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="formGroupExampleInput2" placeholder=""
                            name="date" value="{{ date('Y-m-d') }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder=""
                            name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Plat Nomor</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder=""
                            name="plat_nomor" required>
                    </div>
                    {{-- <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Instansi (Jika berasal dari
                            Instansi)</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder=""
                            name="instance">
                    </div> --}}
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Nomor Telepon</label>
                        <input type="number" min="0" class="form-control" placeholder=""
                            name="phone_number" autocomplete="off">
                    </div>
                    {{-- <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Ingin bertemu dengan</label>
                        <select name="meet_id" class="dataTable-selector form-select" required>
                            <option value="" selected="" disabled>-- Pilih --</option>
                            @foreach ($meet as $m)
                                <option value="{{ $m->id }}">{{ $m->meet_with }}</option>
                            @endforeach
                        </select>
                    </div> --}}
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Merk Motor</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder=""
                            name="merk_motor" >
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder=""
                            name="desc" >
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModals" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Pilih Tanggal</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form method="get" action="{{ route('visitor.pdf') }}">
                    <label for="date">Tanggal Untuk Mencetak Laporan</label>
                    <div class="row">
                        <div class="col">
                            <input type="date" id="date" name="tanggal_awal" class="form-control">
                        </div>
                        <div class="col">
                            <input type="date" id="date" name="tanggal_akhir" class="form-control">
                        </div>
                    </div>




            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" target="_blank">Buat PDF</button>
                </form>
            </div>


        </div>
    </div>
</div>
