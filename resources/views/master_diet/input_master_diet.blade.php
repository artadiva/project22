@extends('template')
@section('content')
<div class="content">
<h1> Input Diet Baru </h1>
    <div class="card">
        <div class="card-header">
        Input Diet Baru
        </div>
        <div class="card-body">
            <form action="{{route('master_diet.store')}}" method="POST">
            @csrf
                <div class="form-group">
                    <label for="exampleInputNCM">Kode</label>
                    <input type="text" name="kode_diet" class="form-control" id="exampleInputNCM" placeholder="Nomor Catatan Medis">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="exampleInputNama">NAMA</label>
                    <input type="text" name="nama_diet" class="form-control" id="exampleInputNama"  placeholder="Nama Diet">
                </div>
                <div class="form-group">
                    <label for="exampleInputKeterangan">Keterangan</label>
                    <input type="text" name="keterangan_diet" class="form-control" id="exampleInputKeterangan"  placeholder="Keterangan">
                </div>
                <button class="btn btn-info" role="button" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection