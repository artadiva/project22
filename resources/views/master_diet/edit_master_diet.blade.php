@extends('template')
@section('content')
<div class="content">
<h1> Input Diet Baru </h1>
    <div class="card">
        <div class="card-header">
        Input Diet Baru
        </div>
        <div class="card-body">
            <form action="{{route('master_diet.update',$MasterDiets->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputNCM">Kode</label>
                    <input name="kode_diet" type="text" class="form-control" id="exampleInputNCM" placeholder="Kode Diet" value="@if($update){{$MasterDiets->kode_diet}}@endif">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="exampleInputNama">NAMA</label>
                    <input name="nama_diet" type="text" class="form-control" id="exampleInputNama"  placeholder="Nama Suspect" value="@if($update){{$MasterDiets->nama_diet}}@endif">
                </div>
                <div class="form-group">
                    <label for="exampleInputKeterangan">Keterangan</label>
                    <input name="keterangan_diet" type="text" class="form-control" id="exampleInputKeterangan"  placeholder="Keterangan" value="@if($update){{$MasterDiets->keterangan_diet}}@endif">
                </div>
                    <button class="btn btn-info" role="button" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection