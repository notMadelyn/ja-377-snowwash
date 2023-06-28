@extends('layouts.master')

@section('main')
    @include('student.forms')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Data Pelanggan</h3>
                    </div>
                </div>
            </div>
            <section class="section" >
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Tambah Data 
                        </button>
                    </div>
                    <div class="card-body" style="background: #FFFDEC;">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Plat Nomor</th>
                                    <th>Merk Motor</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($student as $s)
                                {{-- @dd($s) --}}
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $s->name }}</td>
                                        <td>{{ $s->plat_nomor }}</td>
                                        <td>{{ $s->merk_motor }}</td>
                                        <td style="width: 100px;">
                                            <!-- Button trigger modal -->
                                            <button class="btn btn-outline-success btn-sm" type="button"
                                                data-bs-toggle="modal"
                                                data-bs-target="#modalShow{{ $s->id }}"><i
                                                    class="bi bi-eye-fill"></i></button>
                                            <a class="btn shadow btn-outline-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#modalDelete{{ $s->id }}"><i
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
    </div>
@endsection
