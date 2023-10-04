@extends('template')
@section('content')
<div class="content">
<h1> Input Suspect Baru </h1>
    <div class="card">
        <div class="card-header">
        Input Suspect Baru
        </div>
        <div class="card-body">
            <form action="{{route('master_suspect.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputNCM">Kode</label>
                    <input name="kode_suspect" type="text" class="form-control" id="exampleInputNCM" placeholder="Kode Suspect">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="exampleInputNama">NAMA</label>
                    <input name="nama_suspect" type="text" class="form-control" id="exampleInputNama"  placeholder="Nama Suspect">
                </div>
                <div class="form-group">
                    <label for="exampleInputKeterangan">Keterangan</label>
                    <input name="keterangan_suspect" type="text" class="form-control" id="exampleInputKeterangan"  placeholder="Keterangan">
                </div>
                    <button class="btn btn-info" role="button" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection