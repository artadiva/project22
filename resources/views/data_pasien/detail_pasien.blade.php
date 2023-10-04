@extends('template')
@section('content')
<div class="content">
<h1> Input Data Pasien </h1>
    <div class="card">
        <div class="card-header">
        Input Data Pasien
        </div>
        <div class="card-body">
        <form action="{{route('data_pasien.update',$DataPasiens->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputNCM">NCM</label>
                    <input name="ncm" type="text"  class="form-control" id="exampleInputNCM" placeholder="Nomor Catatan Medis" value="@if($update){{$DataPasiens->ncm}}@endif">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="exampleInputNama">NAMA</label>
                    <input name="nama_pasien" type="text" class="form-control" id="exampleInputNama"  placeholder="Nama Pasien" value="@if($update){{$DataPasiens->nama_pasien}}@endif">
                </div>
                <div class="form-group">
                    <label for="exampleInputNama">NIK</label>
                    <input name="nik" type="text" class="form-control" id="exampleInputNama"  placeholder="NIK" value="@if($update){{$DataPasiens->nik}}@endif">
                </div>
                <div class="form-group">
                    <label for="exampleInputTanggal">Tanggal Lahir</label>
                    <div class="row">
                        <div class="col">
                        <input  type="text" class="form-control" placeholder="Tanggal">
                        </div>
                        <div class="col">
                        <input type="text" class="form-control" placeholder="Bulan">
                        </div>
                        <div class="col">
                        <input type="text" class="form-control" placeholder="Tahun">
                        </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <label for="exampleInputTanggal">Berat Badan</label>
                        <input name="berat_badan" type="text" class="form-control" placeholder="Berat Badan" value="@if($update){{$DataPasiens->berat_badan}}@endif">
                        </div>
                        <div class="col">
                        <label for="exampleInputTanggal">Tinggi Badan</label>
                        <input name="tinggi_badan" type="text" class="form-control" placeholder="Tinggi Badan" value="@if($update){{$DataPasiens->tinggi_badan}}@endif">
                        </div>
                        <div class="col">
                        <label for="exampleInputTanggal">IMT</label>
                        <input type="text" class="form-control" placeholder="Index Massa Tubuh" value="@if($update){{$DataPasiens->imt}}@endif">
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputNoHP">No HP</label>
                    <input name="no_hp" type="text" class="form-control" id="exampleInputTinggi"  placeholder="No HP" value="@if($update){{$DataPasiens->no_hp}}@endif">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputNoHP">Alamat</label>
                    <input name="alamat" type="text" class="form-control" id="exampleInputTinggi"  placeholder="Alamat" value="@if($update){{$DataPasiens->alamat}}@endif">
                    </div>
                    <button class="btn btn-info" role="button" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <div class="content">
<h1> Detail Pasien </h1>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th>Suspect</th>
              <th>Diagnosa </th>
              <th>Tanggal Masuk </th>
              <th>Tanggal Keluar </th>
              <th>Berat Badan</th>
              <th>Tinggi Badan</th>
          </tr>
        </thead>
        <!-- <tbody>
        @foreach($DataPasiens as $DataPasien)
        <tr>
                <td>{{ $DataPasien->ncm }}</td>
                <td>{{ $DataPasien->nama_pasien }}</td>
                <td>{{ $DataPasien->nik }}</td>
                <td>{{ $DataPasien->tgl_lahir }}</td>
                <td>{{ $DataPasien->berat_badan }}</td>
                <td>{{ $DataPasien->tinggi_badan }}</td>
                <td>{{ $DataPasien->no_hp }}</td>
                <td><a href="{{route('data_pasien.edit',$DataPasien->id)}}" class="btn btn-info" role="button">Update</a></td>
                <td><a href="{{route('data_kunjungan.create',$DataPasien->id)}}" class="btn btn-info" role="button">Tambah Kunjungan</a></td>
                <td><a href="" class="btn btn-info" role="button">Detail Pasien</a></td>
                 Tambahkan kolom lain yang ingin ditampilkan -->
            </tr>
            @endforeach
              
        </tbody> 
      </table>
</div>
    </div>
</div>
@endsection