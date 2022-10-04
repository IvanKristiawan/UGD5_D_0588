@extends('dashboard')
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Editing Departemen</h1>
 
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('departemen.update', $departemen->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
 
                <label for="stock_name">Nama Departmen:*</label>
                <input type="text" class="form-control" name="nama_departemen" value="{{ $departemen->nama_departemen }}" />
            </div>
 
            <div class="form-group">
                <label for="ticket">Nama Manager:*</label>
                <input type="text" class="form-control" name="nama_manager" value="{{ $departemen->nama_manager }}" />
            </div>
 
            <div class="form-group">
                <label for="value">Jumlah Pegawai:</label>
                <input type="text" class="form-control" name="jumlah_pegawai" value="{{ $departemen->jumlah_pegawai }}" />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection