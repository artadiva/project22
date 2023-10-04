@extends('template')
@section('content')
<div class="content">
<h1> Master Keluhan </h1>

<td><a href="{{route('master_keluhan.create')}}" class="btn btn-info" role="button">Tambah Keluhan</a></td>

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
        @foreach($MasterKeluhans as $MasterKeluhan)
            <tr>
                <td>{{ $MasterKeluhan->kode_keluhan }}</td>
                <td>{{ $MasterKeluhan->nama_keluhan }}</td>
                <td>{{ $MasterKeluhan->keterangan_keluhan }}</td>
                <td><a href="{{route('master_keluhan.edit',$MasterKeluhan->id)}}" class="btn btn-info" role="button">Update</a></td>
                <td><a href="{{route('master_keluhan.destroy',$MasterKeluhan->id)}}" class="btn btn-info" role="button">Delete{{ $MasterKeluhan->id }}</a></td>
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