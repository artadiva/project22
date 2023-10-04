@extends('template')
@section('content')
<div class="content">
<h1> Master Rule </h1>

<td><a href="{{route('master_rule.create')}}" class="btn btn-info" role="button">Tambah Rule</a></td>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th>Kode Diagnosa </th>
              <th>Nama Diagnosa </th>
              <th>Kode Diet </th>
              <th>Nama Diet </th>
              
              <th>Keterangan </th>
              <th>CF </th>
              <th>Update </th>
              <th>Delete </th>
          </tr>
        </thead>
        <tbody>
            
        @foreach($MasterRules as $MasterRule)
            <tr>
            <td>{{ @$MasterRule->masterDiagnosa->kode_diagnosa }}</td>
            <td>{{ @$MasterRule->masterDiagnosa->nama_diagnosa }}</td>
                <td>{{ @$MasterRule->masterDiet->kode_diet }}</td>
                <td>{{ @$MasterRule->masterDiet->nama_diet }}</td>
                <td>{{ @$MasterRule->keterangan }}</td>
                <td>{{ @$MasterRule->cf }}</td>
                <td><a href="{{route('master_rule.edit',$MasterRule->id_rule)}}" class="btn btn-info" role="button">Update</a></td>
                <td><a href="{{route('master_rule.destroy',$MasterRule->id_rule)}}" class="btn btn-info" role="button">Delete{{ $MasterRule->id_rule }}</a></td>
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