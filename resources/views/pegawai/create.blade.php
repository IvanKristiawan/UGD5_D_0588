@extends('dashboard')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah Pegawai</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="#">Pegawai</a>
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
                        <form action="{{ route('pegawai.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="font-weightbold">Nomor Induk Pegawai</label>
                                    <input style="width: 70%; display: block;" type="text"
                                        class="formcontrol @error('nomor_induk_pegawai') is-invalid @enderror"
                                        name="nomor_induk_pegawai" value="{{ old('nomor_induk_pegawai') }}"
                                        placeholder="Masukkan Nomor Induk Pegawai">
                                    @error('nomor_induk_pegawai')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="font-weightbold">Nama Pegawai</label>
                                    <input style="width: 70%; display: block;" maxLength="15" type="text"
                                        class="formcontrol @error('nama_pegawai') is-invalid @enderror"
                                        name="nama_pegawai" value="{{ old('nama_pegawai') }}"
                                        placeholder="Masukkan Nama Pegawai">
                                    @error('nama_pegawai')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="font-weightbold">Id Departemen</label>
                                    <input style="width: 70%; display: block;" type="text"
                                        class="formcontrol @error('id_departemen') is-invalid @enderror"
                                        name="id_departemen" value="{{ old('id_departemen') }}"
                                        placeholder="Masukkan Id Departemen">
                                    @error('id_departemen')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="font-weightbold">Email</label>
                                    <input style="width: 70%; display: block;" type="email"
                                        class="formcontrol @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" placeholder="Masukkan Email">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="font-weightbold">Telepon</label>
                                    <input style="width: 70%; display: block;" type="text"
                                        class="formcontrol @error('telepon') is-invalid @enderror" name="telepon"
                                        value="{{ old('telepon') }}" placeholder="Masukkan Telepon">
                                    @error('telepon')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="font-weightbold">Gender</label>
                                    <input style="width: 70%; display: block;" type="text"
                                        class="formcontrol @error('gender') is-invalid @enderror" name="gender"
                                        value="{{ old('gender') }}" placeholder="Masukkan Gender">
                                    @error('gender')
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