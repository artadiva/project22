@extends('template')
@section('content')
<div class="content">
<h1> Master Diagnosa </h1>

<td><a href="input_master_diagnosa" class="btn btn-info" role="button">Tambah Diagnosa</a></td>
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
              <td>Kode</td>
              <td>Nama </td>
              <td>Keterangan </td>
              <td><a href="{{route('tambah_kunjungan',1)}}" class="btn btn-info" role="button">Update</a></td>
              <td><a href="{{route('tambah_kunjungan',1)}}" class="btn btn-info" role="button">Delete</a></td>
        </tbody>
      </table>

</div>
@endsection