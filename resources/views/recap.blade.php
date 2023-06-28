<title>Laporan Kunjungan</title>
<style>
    .center {
        margin-left: auto;
        margin-right: auto;
    }

    .left {
        margin-left: 50px;
    }

    table {
      font-family: arial, sans-serif;
      font-size: 10px;
      border-collapse: collapse;
      width: 85%;
      
    }
    
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    
    </style>

<div class="row">
  <div style="clear:both; position:relative;">
    <div style="position:absolute; left:37px; top:15px; width:200px;">
    {{-- <img src="{{ asset('assets/images/default.png') }}" width="35%" class="" alt="" style=/> --}}
    </div>
    <div style="margin-left:11px; text-align:center; font-family:sans-serif">
      <h2>JA 377 Snow Wash</h2>
        <p style="font-size: 11px">
          Alamat : Jl.Raya Jati Asih No 377 Bekasi Selatan
        </p>
    </div>
</div>

    <hr>
    <br/>

    <h3 style="text-align: center; font-family:sans-serif;"><span class="border border-dark">LAPORAN KUNJUNGAN</span></h3>
    {{-- @foreach($visitor as $t)
    <form class="row g-3">
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Tanggal Kedatangan</label>
              <input type="email" class="form-control" id="inputEmail4" value="{{ $t->created_at->format('d-m-Y ') }}" readonly>
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Nama</label>
              <input type="text" class="form-control" id="inputPassword4" value="{{ $t->name }}" readonly>
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Alamat</label>
              <input type="text" class="form-control" id="inputAddress" value="{{ $t->address }}" readonly>
            </div>
            <div class="col-12">
              <label for="inputAddress2" class="form-label">Alamat Instansi</label>
              <input type="text" class="form-control" id="inputAddress2" value="{{ $t->instance }}" readonly>
            </div>
            <div class="col-12">
              <label for="inputCity" class="form-label">Nomor Telepon</label>
              <input type="text" class="form-control" id="inputCity" value="{{ $t->phone_number }}" readonly>
            </div>
            <div class="col-md-6">
              <label for="inputZip" class="form-label">Bertemu Dengan</label>
              <input type="text" class="form-control" id="inputZip" value="{{ $t->meet->meet_with }}">
            </div> 
            <div class="col-md-6">
                <label for="inputZip" class="form-label">Kepentingan</label>
                <input type="text" class="form-control" id="inputZip" value="{{ $t->utility->utilities }}">
              </div> 
              <div class="col-12">
                <label for="inputZip" class="form-label">Keterangan</label>
                <input type="textarea" class="form-control" id="inputZip" value="{{ $t->desc }}">
              </div>                    
          </form>
    </div>
    @endforeach --}}
  
    <table class='table table-bordered center' >
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Tanggal Kehadiran</th>
                <th>Plat Nomor</th>
                <th>Merk Motor</th>
                <th>Nomor Telepon</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($visitors as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->name }}</td>
                    <td>{{ \Carbon\Carbon::parse($p->created_at)->format('d-m-Y H:i:s') }}</td>
                    <td>{{ $p->plat_nomor }}</td>
                    <td>{{ $p->merk_motor }}</td>
                    <td>{{ $p->phone_number }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    