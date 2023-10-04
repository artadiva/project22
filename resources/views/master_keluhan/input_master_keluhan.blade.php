@extends('template')
@section('content')
<div class="content">
<h1> Input Keluhan Baru </h1>
    <div class="card">
        <div class="card-header">
        Input Keluhan Baru
        </div>
        <div class="card-body">
            <form action="{{route('master_keluhan.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputNCM">Kode</label>
                    <input name="kode_keluhan" type="text" class="form-control" id="exampleInputNCM" placeholder="Kode Keluhan" >
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="exampleInputNama">NAMA</label>
                    <input name="nama_keluhan" type="text" class="form-control" id="exampleInputNama"  placeholder="Nama Keluhan">
                </div>
                <div class="form-group">
                    <label for="exampleInputKeterangan">Keterangan</label>
                    <input name="keterangan_keluhan" type="text" class="form-control" id="exampleInputKeterangan"  placeholder="Keterangan" >
                </div>
                    <button class="btn btn-info" role="button" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection