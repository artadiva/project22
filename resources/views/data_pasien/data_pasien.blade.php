@extends('template')
@section('content')
<div class="content">
<h1> Data Pasien </h1>

@if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th>NCM </th>
              <th>Nama </th>
              <th>NIK </th>
              <th>Tanggal Lahir </th>
              <th>Berat Badan</th>
              <th>Tinggi Badan</th>
              <th>No HP</th>
              <th>Update</th>
              <th>Tambah Kunjungan</th>
              <th>Detail Pasien</th>
          </tr>
        </thead>
        <tbody>
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
                <td>
                  <!-- @if(is_null($DataPasien->tgl_pulang)) -->
                  <a href="{{route('data_kunjungan.create',$DataPasien->id)}}" class="btn btn-info" role="button">Tambah Kunjungan</a>
                  <!-- @else()
                  @endif -->
                </td>
                <td><a href="" class="btn btn-info" role="button">Detail Pasien</a></td>
                <!-- Tambahkan kolom lain yang ingin ditampilkan -->
            </tr>
            @endforeach
              
        </tbody>
      </table>
</div>

@endsection