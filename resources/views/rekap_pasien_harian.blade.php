@extends('template')
@section('content')
<div class="content">
<h1> Update Data Pasien </h1>

<button type="button" class="btn btn-warning">Tambah Pasien Harian</button>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th>NCM </th>
              <th>Nama </th>
              <th>Tanggal Lahir </th>
              <th>Berat Badan</th>
              <th>Tinggi Badan</th>
              <th>Diagnosa</th>
              <th>Diet</th>
              <th>Update</th>
              <th>Delete</th>
          </tr>
        </thead>
        <tbody>
              <td>NCM </td>
              <td>Nama </td>
              <td>Tanggal Lahir </td>
              <td>Berat Badan</td>
              <td>Tinggi Badan</td>
              <td>Diagnosa</td>
              <td>Diet</td>
              <td><button type="button" class="btn btn-warning">Update</button></td>
              <td><button type="button" class="btn btn-danger">Delete</button></td>
        </tbody>
      </table>

</div>
@endsection