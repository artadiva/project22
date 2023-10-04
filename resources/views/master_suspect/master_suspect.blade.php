@extends('template')
@section('content')
<div class="content">
<h1> Master Suspect </h1>

<td><a href="{{route('master_suspect.create')}}" class="btn btn-info" role="button">Tambah Suspect</a></td>
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
         
            @foreach($MasterSuspects as $MasterSuspect)
            <tr>
                <td>{{ $MasterSuspect->kode_suspect }}</td>
                <td>{{ $MasterSuspect->nama_suspect }}</td>
                <td>{{ $MasterSuspect->keterangan_suspect }}</td>
                <td><a href="{{route('master_suspect.edit',$MasterSuspect->id)}}" class="btn btn-info" role="button">Update</a></td>
                <td><a href="{{route('master_suspect.destroy',$MasterSuspect->id)}}" class="btn btn-info" role="button">Delete</a></td>
                <!-- Tambahkan kolom lain yang ingin ditampilkan -->
            </tr>
            @endforeach

        </tbody>
      </table>

</div>

@endsection