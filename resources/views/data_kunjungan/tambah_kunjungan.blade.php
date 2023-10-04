@extends('template')
@section('content')
<div class="content">
    <h1> Tambah Data Kunjungan Pasien </h1>
    <div class="card">
        <div class="card-header">
            Tambah Data Kunjungan Pasien
        </div>
        <div class="card-body">
            <form action="{{route('data_kunjungan.store',$id_pasien)}}" method="POST">
                @csrf
                <div class="form-group">
                    
                    <input type="text" class="form-control d-none" id="id_pasien" placeholder="id_pasien"
                        value="@if($update){{$DataPasien->id}}@endif" name="id_pasien" >
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputNCM">NCM</label>
                    <input type="text" class="form-control" id="exampleInputNCM" placeholder="Nomor Catatan Medis"
                        value="@if($update){{$DataPasien->ncm}}@endif" name="ncm" readonly>
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="exampleInputNama">NAMA</label>
                    <input type="text" class="form-control" id="exampleInputNama" placeholder="Nama Pasien"
                        value="@if($update){{$DataPasien->nama_pasien}}@endif" readonly>
                </div>
                <div class="form-group">
                    <label for="exampleInputTanggal">Tanggal Lahir</label>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Tanggal" readonly>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Bulan" readonly>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Tahun" readonly>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputBerat">Berat Badan</label>
                    <input type="text" class="form-control" name='berat' id="exampleInputBerat"
                        placeholder="Berat Badan" value="@if($update){{$DataPasien->berat_badan}}@endif">
                </div>
                <div class="form-group">
                    <label for="exampleInputTinggi">Tinggi Badan</label>
                    <input type="text" class="form-control" name='tinggi' id="exampleInputTinggi"
                        placeholder="Tinggi Badan" value="@if($update){{$DataPasien->tinggi_badan}}@endif">
                </div>
                <div class="form-group">
                    <label for="exampleInputIMT">IMT</label>
                    <input type="text" class="form-control" name='imt' id="exampleInputIMT"
                        placeholder="Index Massa Tubuh" value="@if($update){{$DataPasien->imt}}@endif">
                </div>
                <!-- <div class="form-group">
                        <label for="exampleInputKeluhan">Keluhan</label>
                        <select class="form-control select2keluhan" name="keluhan[]" multiple>
                            <option value="">-- Pilih --</option>
                        </select> -->
                <div class="form-group">
                    <label for="exampleInputTanggalKunjungan">Tanggal Kunjungan</label>
                    <input type="date" class="form-control" id="exampleInputTanggalKunjungan" placeholder="Tanggal Kunjungan" name="tanggal_kunjungan">
                </div>
                <div class="form-group">
                    <label for="exampleInputSuspect">Suspect</label>
                    <select class="form-control select2suspect" name="suspect[]" multiple>
                        <option value="">-- Pilih --</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputDiagnosa">Diagnosa</label>
                    <select class="form-control select2diagnosa" name="diagnosa[]" multiple>
                        <option value="">-- Pilih --</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputRequest">Request Bubur</label>
                    <select class="form-control " name="bubur">
                    <option value="0">tidak</option>
                        <option value="1">ya</option>
                        
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputDiet">Diet</label>
                    <input type="text" class="form-control" id="exampleInputDiet" placeholder="Diet" readonly>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
</div>
</div>

@push('js')
<script>
    // Fungsi untuk menghitung IMT
    function hitungIMT() {
        var berat = parseFloat(document.getElementById('exampleInputBerat').value);
        var tinggi = parseFloat(document.getElementById('exampleInputTinggi').value);
        console.log(tinggi);
        if (!isNaN(berat) && !isNaN(tinggi) && tinggi > 0) {
            var imt = berat / Math.pow(tinggi / 100, 2);
            document.getElementById('exampleInputIMT').value = imt.toFixed(2);
        } else {
            document.getElementById('exampleInputIMT').value = 0;
        }
    }

    // Event listener untuk memanggil fungsi hitungIMT saat berat atau tinggi berubah
    document.getElementById('exampleInputBerat').addEventListener('input', hitungIMT);
    document.getElementById('exampleInputTinggi').addEventListener('input', hitungIMT);
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var today = new Date().toISOString().slice(0, 10);
        document.getElementById('exampleInputTanggalKunjungan').value = today;
    });
</script>

@endpush('js')

@endsection