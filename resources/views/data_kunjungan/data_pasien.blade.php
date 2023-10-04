@extends('template')
@section('content')
<div class="content">
<h1> Data Pasien </h1>
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
          </tr>
        </thead>
        <tbody>
        @foreach($DataPasiens as $DataPasien)
        <tr>
                <td>{{ $DataPasien->ncm }}</td>
                <td>{{ $DataPasien->nama_pasien }}</td>
                <td>{{ $DataPasien->nik }}</td>
                <!-- <td>{{ $DataPasien->tgl_lahir }}</td> -->
                <td>{{ $DataPasien->berat_badan }}</td>
                <td>{{ $DataPasien->tinggi_badan }}</td>
                <td>{{ $DataPasien->no_hp }}</td>
                <td><a href="{{route('data_pasien.edit',$DataPasien->id)}}" class="btn btn-info" role="button">Update</a></td>
                <td><a href="{{route('data_pasien.destroy',$DataPasien->id)}}" class="btn btn-info" role="button">Tambah Kunjungan</a></td>
                <!-- Tambahkan kolom lain yang ingin ditampilkan -->
            </tr>
            @endforeach
              <!-- <td>NCM </td>
              <td>Nama </td>
              <td>Tanggal Lahir </td>
              <td>Berat Badan</td>
              <td>Tinggi Badan</td>
              <td>No HP</td>
              <td><button type="button" class="btn btn-warning">Update</button></td>
              <td><a href="{{route('tambah_kunjungan',1)}}" class="btn btn-info" role="button">Tambah</a></td> -->
        </tbody>
      </table>
</div>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>
@endsection