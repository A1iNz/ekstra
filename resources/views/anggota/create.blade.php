@extends('anggota.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="Margin-top: 2%; text-align: center">Daftar Anggota Ekstra Terbaik</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('anggota.index') }}" style="margin-bottom: 20px;"> Back</a>
        </div>
    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Upsss!</strong>Terdapat Kesalahan Saat Mendaftar, Silahkan Cek Kembali data Anda !<br><br>
        <ul>
            @foreach ($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('anggota.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama : </strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kelas : </strong>
                <input type="text" class="form-control" name="kelas" placeholder="Kelas">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Agama : </strong>
                <input type="text" class="form-control" name="agama" placeholder="Agama">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat : </strong>
                <input type="text" class="form-control" name="alamat" placeholder="Alamat">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Hp : </strong>
                <input type="text" class="form-control" name="no_hp" placeholder="No HP">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
    </div>
</form>
@endsection