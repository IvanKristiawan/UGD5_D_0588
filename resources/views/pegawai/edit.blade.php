@extends('dashboard')
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Editing Pegawai</h1>
 
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
        <form method="post" action="{{ route('pegawai.update', $pegawai->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
                <label for="stock_name">Id Departmen:*</label>
                <input type="text" class="form-control" name="id_departemen" value="{{ $pegawai->id_departemen }}" />
            </div>

            <div class="form-group">
                <label for="stock_name">Nomor Induk Pegawai:*</label>
                <input type="text" class="form-control" name="nomor_induk_pegawai" value="{{ $pegawai->nomor_induk_pegawai }}" />
            </div>

            <div class="form-group">
                <label for="stock_name">Nama Departmen:*</label>
                <input type="text" class="form-control" name="nama_pegawai" value="{{ $pegawai->nama_pegawai }}" />
            </div>
 
            <div class="form-group">
                <label for="ticket">Email:*</label>
                <input type="email" class="form-control" name="email" value="{{ $pegawai->email }}" />
            </div>

            <div class="form-group">
                <label for="ticket">Telepon:*</label>
                <input type="text" class="form-control" name="telepon" value="{{ $pegawai->telepon }}" />
            </div>

            <div class="form-group">
                <label for="ticket">Gender:*</label>
                <input type="text" class="form-control" name="gender" value="{{ $pegawai->gender }}" />
            </div>

            <div class="form-group">
                <label for="ticket">Status:*</label>
                <input type="text" class="form-control" name="status" value="{{ $pegawai->status }}" />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection