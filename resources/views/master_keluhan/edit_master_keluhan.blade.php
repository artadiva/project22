@extends('template')
@section('content')
<div class="content">
<h1> Input Keluhan Baru </h1>
    <div class="card">
        <div class="card-header">
        Input Keluhan Baru
        </div>
        <div class="card-body">
            <form action="{{route('master_keluhan.update',$MasterKeluhans->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputNCM">Kode</label>
                    <input name="kode_keluhan" type="text" class="form-control" id="exampleInputNCM" placeholder="Kode Keluhan" value="@if($update){{$MasterKeluhans->kode_keluhan}}@endif">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group"
                    <label for="exampleInputNama">NAMA</label>
                    <input name="nama_keluhan" type="text" class="form-control" id="exampleInputNama"  placeholder="Nama Keluhan" value="@if($update){{$MasterKeluhans->nama_keluhan}}@endif">
                </div>
                <div class="form-group">
                    <label for="exampleInputKeterangan">Keterangan</label>
                    <input name="keterangan_keluhan" type="text" class="form-control" id="exampleInputKeterangan"  placeholder="Keterangan" value="@if($update){{$MasterKeluhans->keterangan_keluhan}}@endif">
                </div>
                    <button class="btn btn-info" role="button" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection