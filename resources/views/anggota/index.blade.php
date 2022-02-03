@extends('anggota.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="Margin-top: 2%; text-align: center">Pendaftaran Ekstrakulikuler Terbaik SMKN 1 Boyolangu</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('anggota.create') }}"  style="margin-bottom: 20px;">Daftar</a>
            </div>
        </div>
    </div>
   
    @if ($m = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $m }}</p>
        </div>
    @endif
    
    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>    
            <strong>{{ $message }}</strong>
        </div>
    @endif
   
    <table class="table table-bordered mt-3">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th> 
            <th>Agama</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($anggota as $A)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $A->nama }}</td>
            <td>{{ $A->kelas }}</td>
            <td>{{ $A->agama }}</td>
            <td>{{ $A->alamat }}</td>
            <td>{{ $A->no_hp }}</td>
            <td> 
                <a class="btn btn-primary" href="{{ route('anggota.edit',$A->id) }}">Edit</a>
                <form action="{{ route('anggota.destroy',$A->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
      
@endsection
