@extends('template')
@section('content')
<div class="content">
<h1> Input Diagnosa Baru </h1>
    <div class="card">
        <div class="card-header">
        Input Diagnosa Baru
        </div>
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <label for="exampleInputNCM">Kode</label>
                    <input type="text" class="form-control" id="exampleInputNCM" placeholder="Kode Diagnosa">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="exampleInputNama">NAMA</label>
                    <input type="text" class="form-control" id="exampleInputNama"  placeholder="Nama Diagnosa">
                </div>
                <div class="form-group">
                    <label for="exampleInputKeterangan">Keterangan</label>
                    <input type="text" class="form-control" id="exampleInputKeterangan"  placeholder="Keterangan">
                </div>
                    <a href="#" class="btn btn-info" role="button">Submit</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection