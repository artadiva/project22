@extends('template')
@section('content')
<div class="content">
<h1> Tambah Data Kunjungan Pasien </h1>
    <div class="card">
        <div class="card-header">
        Tambah Data Kunjungan Pasien
        </div>
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <label for="exampleInputNCM">NCM</label>
                    <input type="text" class="form-control" id="exampleInputNCM" placeholder="Nomor Catatan Medis">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="exampleInputNama">NAMA</label>
                    <input type="text" class="form-control" id="exampleInputNama"  placeholder="Nama Pasien">
                </div>
                <div class="form-group">
                    <label for="exampleInputTanggal">Tanggal Lahir</label>
                    <div class="row">
                        <div class="col">
                        <input type="text" class="form-control" placeholder="Tanggal">
                        </div>
                        <div class="col">
                        <input type="text" class="form-control" placeholder="Bulan">
                        </div>
                        <div class="col">
                        <input type="text" class="form-control" placeholder="Tahun">
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputBerat">Berat Badan</label>
                    <input type="text" class="form-control" id="exampleInputBerat"  placeholder="Berat Badan">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputTinggi">Tinggi Badan</label>
                    <input type="text" class="form-control" id="exampleInputTinggi"  placeholder="Tinggi Badan">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputIMT">IMT</label>
                    <input type="text" class="form-control" id="exampleInputTinggi"  placeholder="Index Massa Tubuh">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputSuspect">Suspect</label>
                    <input type="text" class="form-control" id="exampleInputSuspect"  placeholder="Suspect">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputDiagnosa">Diagnosa</label>
                    <input type="text" class="form-control" id="exampleInputDiagnosa"  placeholder="Diagnosa">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputDiet">Diet</label>
                    <input type="text" class="form-control" id="exampleInputDiet"  placeholder="Diet">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputTanggalKunjungan">Tanggal Kunjungan</label>
                    <input type="text" class="form-control" id="exampleInputDiet"  placeholder="Tanggal Kunjungan">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection