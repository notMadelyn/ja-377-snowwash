@extends('layouts.master')

@section('main')
    @include('visitor.forms')
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
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <section class="section">
                {{-- @include('visitor.forms') --}}
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-secondary" style="background: #224761" type="button" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Tambah Data
                        </button>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModals">
                            Cetak Laporan
                        </button>

                    </div>

                    <div class="card-body" style="background: #FFFDEC;">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama</th>
                                    <th>Plat Nomor</th>
                                    <th>Nomor HP</th>
                                    <th>Merk Motor</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tdata as $t)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $t->date }}</td>
                                        <td>{{ $t->name }}</td>
                                        <td>{{ $t->plat_nomor }}</td>
                                        {{-- <td>{{ $t->instance }}</td> --}}
                                        <td>{{ $t->phone_number }}</td>
                                        <td>{{ $t->merk_motor }}</td>

                                        {{-- <td>{{ $t->meet->meet_with }}</td> --}}
                                        {{-- <td>{{ $t->utility->utilities }}</td> --}}
                                        {{-- @dd($t->id) --}}
                                        <td style="width: 100px;">
                                            <!-- Button trigger modal -->
                                            <button class="btn btn-outline-success btn-sm" type="button"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal{{ $t->id }}"><i
                                                    class="bi bi-eye-fill"></i></button>
                                            <a class="btn shadow btn-outline-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#delete-visitor{{ $t->id }}"><i
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
