@extends('layouts.master')

@section('main')
@include('layouts.admin')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="row">
        <div class="col-9">
            <div class="page-heading">
                <h3>Data Pelanggan</h3>
            </div>
        </div>
        <div class="col-3">
            <div class="page-heading">
                <h3>Profil</h3>
            </div>
        </div>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="col-6 col-lg-6 col-md-6">
                        <div class="card" style="background: transparent; ">
                            <div class="card-body px-4 py-4"style="background: #FFFDEC; border-radius: 1rem;">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="mb-2 me-2">
                                            <img src="assets/images/gg_profile.png" alt="">
                                        </div>
                                        <div>
                                            <h6 class="font-semibold">Harian</h6>
                                            {{-- @foreach ($daily as $d)                                                     --}}
                                            <h6 class="font-extrabold mb-0">
                                                {{-- @foreach ($daily as $d)
                                                        {{ $d->created_at->format('d') }}
                                                    @endforeach</h6> --}}
                                                {{ $total }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-6 col-md-6">
                        <div class="card" style="background: transparent">
                            <div class="card-body px-4 py-4" style="background: #FFFDEC; border-radius: 1rem;">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="mb-2 me-2">
                                            <img src="assets/images/gg_profile.png" alt="">
                                        </div>
                                        <div>
                                            <h6 class="text-muted font-semibold">Bulanan</h6>
                                            <h6 class="font-extrabold mb-0">{{ $monthly->total_visitors }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card" style="background: #FFFDEC;">
                            <div class="m-3">
                                <h4>Kunjungan Profil</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-profile-visit"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="card" style="background: transparent">
                    <div class="card-body py-4 px-4" style="background: #FFFDEC; border-radius: 1rem;">
                        <div class="d-flex align-items-center">
                            <div class="mb-2 me-2">
                                <img src="assets/images/gg_profile.png" alt="">
                            </div>
                            <div class="dropdown">
                                <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    aria-expanded="false" >
                                    @foreach ($profile as $p)
                                        <h5 class="font-bold">{{ $p->name }}</h5>
                                    @endforeach
                                </button>
                                {{-- <ul class="dropdown-menu">
                                    <li><button class="dropdown-item" type="button" >Edit Profile</button></li>
                                </ul> --}}
                            </div>
                            {{-- <div class="ms-3 name">
                                    @foreach ($profile as $p)
                                    <h5 class="font-bold">{{ $p->name }}</h5>
                                    @endforeach
                                </div> --}}
                        </div>
                    </div>
                </div>
                <div class="card" style="background: #FFFDEC;">
                    <div class="m-3">
                        <h4>Merk Motor</h4>
                    </div>
                    <div class="card-body">
                        <div id="chart-visitors-profile"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Need: Apexcharts -->
    <script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script>
        var optionsProfileVisit = {
            annotations: {
                position: "back",
            },
            dataLabels: {
                enabled: false,
            },
            chart: {
                type: "bar",
                height: 300,
            },
            fill: {
                opacity: 1,
            },
            plotOptions: {},
            series: [{
                name: "Pengunjung",
                data: [
                    // isset($monthVisitor)
                    @foreach ($monthVisitor as $v)
                        {{ $v }},
                    @endforeach
                ],
            }, ],
            colors: "#224761",
            xaxis: {
                categories: [
                    "Jan",
                    "Feb",
                    "Mar",
                    "Apr",
                    "Mei",
                    "Jun",
                    "Jul",
                    "Agu",
                    "Sep",
                    "Okt",
                    "Nov",
                    "Des",
                ],
            },
        }
    </script>
    {{-- <script>
        let optionsVisitorsProfile = {
            series: [
                {{ $kepsek }}, {{ $tu }}, {{ $bp }}, {{ $staff_m }},
                {{ $staff_tu }}, {{ $guru }}, {{ $guru_piket }}, {{ $dll }}
            ],
            labels: ["Kepala Sekolah", "TU", 'BP', 'Staff Management', 'Staff TU', 'Guru', 'Guru Piket',
                'Dan lain-lain'],
            colors: ["#435ebe", "#55c6e8", "#CEE1EE", "#7591BB", "#224761", "#4189BB", "#4CAFF5", "#2097EA"],
            chart: {
                type: "donut",
                width: "100%",
                height: "350px",
            },
            legend: {
                position: "bottom",
            },
            plotOptions: {
                pie: {
                    donut: {
                        size: "30%",
                    },
                },
            },
        }
    </script> --}}
    <script src="assets/js/pages/dashboard.js"></script>
@endsection
