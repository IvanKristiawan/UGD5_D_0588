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
        <form method="post" action="{{ route('proyek.update', $proyek->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
                <label for="stock_name">Nama Proyek :*</label>
                <input type="text" class="form-control" name="nama_proyek" value="{{ $proyek->nama_proyek }}" />
            </div>

            <div class="form-group">
                <label for="stock_name">Departmen Id:*</label>
                <input type="text" class="form-control" name="departemen_id" value="{{ $proyek->departemen_id }}" />
            </div>

            <div class="form-group">
                <label for="stock_name">Waktu Mulai:*</label>
                <input type="date" class="form-control" name="waktu_mulai" value="{{ $proyek->waktu_mulai }}" />
            </div>
 
            <div class="form-group">
                <label for="ticket">Waktu Selesai:*</label>
                <input type="date" class="form-control" name="waktu_selesai" value="{{ $proyek->waktu_selesai }}" />
            </div>

            <div class="form-group">
                <label for="ticket">Status:*</label>
                <input type="text" class="form-control" name="status" value="{{ $proyek->status }}" />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection