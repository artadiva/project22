@extends('template')
@section('content')
<div class="content">
<h1> Master Diet </h1>

<td><a href="{{route('master_diet.create')}}" class="btn btn-info" role="button">Tambah Diet</a></td>

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
        @foreach($MasterDiets as $MasterDiet)
            <tr>
                <td>{{ $MasterDiet->kode_diet }}</td>
                <td>{{ $MasterDiet->nama_diet }}</td>
                <td>{{ $MasterDiet->keterangan_diet }}</td>
                <td><a href="{{route('master_diet.edit',$MasterDiet->id)}}" class="btn btn-info" role="button">Update</a></td>
                <td><a href="{{route('master_diet.destroy',$MasterDiet->id)}}" class="btn btn-info" role="button">Delete{{ $MasterDiet->id }}</a></td>
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