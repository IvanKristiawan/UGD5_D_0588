@extends('dashboard')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah Proyek</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="#">Proyek</a>
                    </li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('proyek.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="font-weightbold">Nama Proyek</label>
                                    <input style="width: 70%; display: block;" type="text"
                                        class="formcontrol @error('nama_proyek') is-invalid @enderror"
                                        name="nama_proyek" value="{{ old('nama_proyek') }}"
                                        placeholder="Masukkan Nama Proyek">
                                    @error('nama_proyek')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="font-weightbold">Departemen Id</label>
                                    <input style="width: 70%; display: block;" maxLength="15" type="text"
                                        class="formcontrol @error('departemen_id') is-invalid @enderror"
                                        name="departemen_id" value="{{ old('departemen_id') }}"
                                        placeholder="Masukkan Departemen Id">
                                    @error('departemen_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="font-weightbold">Waktu Mulai</label>
                                    <input style="width: 70%; display: block;" type="date"
                                        class="formcontrol @error('waktu_mulai') is-invalid @enderror"
                                        name="waktu_mulai" value="{{ old('waktu_mulai') }}"
                                        placeholder="Masukkan Waktu Mulai">
                                    @error('waktu_mulai')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="font-weightbold">Waktu Selesai</label>
                                    <input style="width: 70%; display: block;" type="date"
                                        class="formcontrol @error('waktu_selesai') is-invalid @enderror" name="waktu_selesai"
                                        value="{{ old('waktu_selesai') }}" placeholder="Masukkan Waktu Selesai">
                                    @error('waktu_selesai')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="font-weightbold">Status</label>
                                    <input style="width: 70%; display: block;" type="text"
                                        class="formcontrol @error('status') is-invalid @enderror" name="status"
                                        value="{{ old('status') }}" placeholder="Masukkan Status">
                                    @error('status')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection