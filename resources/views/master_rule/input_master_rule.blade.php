@extends('template')
@section('content')
<div class="content">
<h1> Input Rule Baru </h1>
    <div class="card">
        <div class="card-header">
        Input Rule Baru
        </div>
        <div class="card-body">
            <form action="{{route('master_rule.store')}}" method="POST">
            @csrf
                <div class="form-group">
                    <label for="exampleInputNCM">Nama Rule</label>
                    <input type="text" name="rule_name" class="form-control" id="exampleInputNCM" placeholder="">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="exampleInputDiagnosa">Diagnosa</label>
                    <select class="form-control select2diagnosa" name="diagnosa">
                        
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputNama">Nama Diet</label>
                    <select  name="diet" class="form-control select2diet" id="exampleInputNama"  placeholder="Nama Diet"></select>
                </div>
                <div class="form-group">
                    <label for="exampleInputKeterangan">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" id="exampleInputKeterangan"  placeholder="Keterangan">
                </div>
                <div class="form-group">
                    <label for="exampleInputKeterangan">Nilai CF</label>
                    <input type="text" name="cf" class="form-control" id="exampleInputKeterangan"  placeholder="">
                </div>
                <button class="btn btn-info" role="button" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection