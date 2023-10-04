@extends('template')
@section('content')
<div class="content">
<h1> Master Diagnosa </h1>

<td><a href="{{route('master_diagnosa.create')}}" class="btn btn-info" role="button">Tambah Diagnosa</a></td>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th>Kode </th>
              <th>Nama </th>
              <th>Keterangan </th>
              <th>Update </th>
              <th>Delete </th>
          </tr>
        </thead>
        <tbody>
        @foreach($MasterDiagnosas as $MasterDiagnosa)
            <tr>
                <td>{{ $MasterDiagnosa->kode_diagnosa }}</td>
                <td>{{ $MasterDiagnosa->nama_diagnosa }}</td>
                <td>{{ $MasterDiagnosa->keterangan_diagnosa }}</td>
                <td><a href="{{route('master_diagnosa.edit',$MasterDiagnosa->id)}}" class="btn btn-info" role="button">Update</a></td>
                <td><a href="{{route('master_diagnosa.destroy',$MasterDiagnosa->id)}}" class="btn btn-info" role="button">Delete{{ $MasterDiagnosa->id }}</a></td>
                <!-- Tambahkan kolom lain yang ingin ditampilkan -->
            </tr>
            @endforeach

        </tbody>
      </table>

</div>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>
@endsection