@extends('template')
@section('content')
<div class="content">
<h1> Data Kunjungan Pasien </h1>

<!-- <button type="button" class="btn btn-warning">Tambah</button> -->
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
          <th>Tanggal Kunjungan </th>
              <th>NCM </th>
              <th>Nama </th>
              
              <th>Berat Badan</th>
              <th>Tinggi Badan</th>
              <th>Suspect</th>
              <th>Diagnosa</th>
              <th>Diet</th>
              <th>CF</th>
              
              <th>Update</th>
          </tr>
        </thead>
        <tbody>
        
        @foreach($DataKunjungans as $DataKunjungan)
        <tr>    <td>{{ \Carbon\Carbon::parse($DataKunjungan->created_at)->format('d F Y') }}</td>
                <td>{{ $DataKunjungan->id_pasien }}</td>
                <td>{{ $DataKunjungan->pasien->nama_pasien }}</td>
                
                <td>{{ $DataKunjungan->berat }}</td>
                <td>{{ $DataKunjungan->tinggi }}</td>
                <td>{{ $DataKunjungan->suspect }}</td>
                <td>{{ $DataKunjungan->diagnosa }}</td>
                <td>{{ $DataKunjungan->diet }}</td>
                <td>{{ $DataKunjungan->cf }} <br> @if($DataKunjungan->cf >= 0.8) Tinggi @else Rendah @endif</td>
                
                <td><a href="{{route('data_pasien.edit',$DataKunjungan->id)}}" class="btn btn-info" role="button">Update</a></td>
                <!-- Tambahkan kolom lain yang ingin ditampilkan -->
            </tr>
            @endforeach
              
        </tbody>
      </table>

</div>
<script>
$(document).ready(function() {
    $('#dataTable').DataTable({
        "order": [[2, 'desc']],
        "columnDefs": [
            { "orderable": false, "targets": 0 } // This disables sorting for the first column (index 0)
        ]
    });
});
</script>
@endsection