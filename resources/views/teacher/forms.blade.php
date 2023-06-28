{{-- modal add data --}}
<div class="modal fade modal-borderless" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action={{ route('teacher.store') }} method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Hari</label>
                        <input type="hidden" name="days_id" id="" value="{{ $day->id }}">
                        {{ $day->name }}
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label"> Nama Guru</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder=""
                            name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Jam Awal</label>
                        <input type="time" class="form-control" placeholder="" name="hour_start" autocomplete="off"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Jam Akhir</label>
                        <input type="time" class="form-control" placeholder="" name="hour_end" autocomplete="off"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Mapel</label>
                        <input type="text" class="form-control" placeholder="" name="subject" autocomplete="off"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Ruangan</label>
                        <select name="room_id" class="dataTable-selector form-select" required>
                            <option value="" selected="" disabled>-- Pilih --</option>
                            @foreach ($room as $r)
                                <option value="{{ $r->id }}">{{ $r->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Jurusan</label>
                        <select name="major_id" class="dataTable-selector form-select" required>
                            <option value="" selected="" disabled>-- Pilih --</option>
                            @foreach ($major as $m)
                                <option value="{{ $m->id }}">{{ $m->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-primary">Tambah Guru </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- modal show data --}}
@foreach ($teach as $t)
    <div class="modal fade modal-borderless" id="modalEditTeach{{ $t->id }}" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action={{ route('teacher.store') }} method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Hari</label>
                            <input type="hidden" name="days_id" id="" value="{{ $day->id }}">
                            {{ $day->name }}
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label"> Nama Guru</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder=""
                                name="name" value="{{ $t->name }}" disabled>
                        </div>
                        {{-- <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Jam Awal</label>
                            <input type="time" class="form-control" placeholder="" name="hour_start"
                                autocomplete="off" value="{{ $t->hour_start }}" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Jam Akhir</label>
                            <input type="time" class="form-control" placeholder="" name="hour_end"
                                autocomplete="off" value="{{ $t->hour_end }}" disabled>
                        </div> --}}
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Mapel</label>
                            <input type="text" class="form-control" placeholder="" name="subject"
                                autocomplete="off" value="{{ $t->subject }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Ruangan</label>
                            <select name="rooms_id" class="dataTable-selector form-select" disabled>
                                {{-- <option value="" selected="" disabled>-- Pilih --</option> --}}
                                @foreach ($room as $r)
                                    <option value="{{ $r->id }}">{{ $r->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Jurusan</label>
                            <select name="majors_id" class="dataTable-selector form-select" disabled>
                                {{-- <option value="" selected="" disabled>-- Pilih --</option> --}}
                                @foreach ($major as $m)
                                    <option value="{{ $m->id }}">{{ $m->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach

@foreach ($teach as $t)
    <div class="modal fade" id="modalDeleteTeach{{ $t->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action={{ url('/teacher/delete/' . $t->id) }} method="POST" enctype="multipart/form-data">
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
