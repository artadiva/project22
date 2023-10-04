@extends('template')
@section('content')
<div class="content">
    <h1> Input Data Pasien </h1>
    <div class="card">
        <div class="card-header">
            Input Data Pasien
        </div>
        <div class="card-body">
            <form action="{{route('data_pasien.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputNCM">NCM</label>
                    <input name="ncm" type="text" class="form-control" id="exampleInputNCM"
                        placeholder="Nomor Catatan Medis">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="exampleInputNama">NAMA</label>
                    <input name="nama_pasien" type="text" class="form-control" id="exampleInputNama"
                        placeholder="Nama Pasien">
                </div>
                <div class="form-group">
                    <label for="exampleInputNama">NIK</label>
                    <input name="nik" type="text" class="form-control" id="exampleInputNama" placeholder="NIK">
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
                <div class="row">
                        <div class="col">
                        <label for="exampleInputTanggal">Berat Badan</label>
                        <input name="berat_badan" type="text" class="form-control" placeholder="Berat Badan">
                        </div>
                        <div class="col">
                        <label for="exampleInputTanggal">Tinggi Badan</label>
                        <input name="tinggi_badan" type="text" class="form-control" placeholder="Tinggi Badan">
                        </div>
                        <div class="col">
                        <label for="exampleInputTanggal">IMT</label>
                        <input type="text" class="form-control" placeholder="Index Massa Tubuh">
                        </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputNoHP">No HP</label>
                    <input name="no_hp" type="text" class="form-control" id="exampleInputTinggi" placeholder="No HP">
                </div>
                <div class="form-group">
                    <label for="exampleInputNoHP">Alamat</label>
                    <input name="alamat" type="text" class="form-control" id="exampleInputTinggi" placeholder="Alamat">
                </div>
                <button class="btn btn-info" role="button" type="submit">Submit</button>
        </div>
        </form>
    </div>
</div>
</div>
@endsection