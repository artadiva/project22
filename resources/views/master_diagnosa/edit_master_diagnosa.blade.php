@extends('template')
@section('content')
<div class="content">
<h1> Input Diagnosa Baru </h1>
    <div class="card">
        <div class="card-header">
        Input Diagnosa Baru
        </div>
        <div class="card-body">
            <form action="{{route('master_diagnosa.update',$MasterDiagnosas->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputNCM">Kode</label>
                    <input name="kode_diagnosa" type="text" class="form-control" id="exampleInputNCM" placeholder="Kode Diagnosa" value="@if($update){{$MasterDiagnosas->kode_diagnosa}}@endif">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="exampleInputNama">NAMA</label>
                    <input name="nama_diagnosa" type="text" class="form-control" id="exampleInputNama"  placeholder="Nama Diagnosa" value="@if($update){{$MasterDiagnosas->nama_diagnosa}}@endif">
                </div>
                <div class="form-group">
                    <label for="exampleInputKeterangan">Keterangan</label>
                    <input name="keterangan_diagnosa" type="text" class="form-control" id="exampleInputKeterangan"  placeholder="Keterangan" value="@if($update){{$MasterDiagnosas->keterangan_diagnosa}}@endif">
                </div>
                    <button class="btn btn-info" role="button" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection