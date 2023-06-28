@extends('layouts.master')

@section('main')
        @include('teacher.forms')
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Data Guru / {{ $day->name }}</h3>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card" style="background: #FFFDEC;">
                    <div class="card-header">
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Tambah Data
                        </button>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Jam</th>
                                    <th>Mapel</th>
                                    <th>Ruangan</th>
                                    <th>Jurusan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teach as $t)
                                {{-- @dd($t->major->name) --}}
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $t->name }}</td>
                                        <td>{{ $t->hour_start }} - {{ $t->hour_end }}</td>
                                        <td>{{ $t->subject }}</td>
                                        @foreach ($t->room as $r)
                                        <td>{{ $r->name }}</td>
                                        @endforeach
                                        @foreach ($t->major as $m)
                                        <td>{{ $m->name }}</td>
                                        @endforeach
                                        <td style="width: 100px;">
                                            <!-- Button trigger modal -->
                                            <button class="btn btn-outline-success btn-sm" type="button"
                                                data-bs-toggle="modal"
                                                data-bs-target="#modalEditTeach{{ $t->id }}"><i
                                                    class="bi bi-eye-fill"></i></button>
                                            <a class="btn shadow btn-outline-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#modalDeleteTeach{{ $t->id }}"><i
                                                    class="bi bi-trash-fill"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
@endsection
