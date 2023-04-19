@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Laporan</h1>

        <form action="{{ route('laporans.update', $laporan->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul', $laporan->judul) }}">
                @error('judul')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="form-control@error('deskripsi') is-invalid @enderror">{{ old('deskripsi', $laporan->deskripsi) }}</textarea>
                @error('deskripsi')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" value="{{ old('type', $laporan->type) }}">
                @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal', $laporan->tanggal) }}">
                @error('tanggal')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="lokasi">Lokasi</label>
                <input type="text" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror" value="{{ old('lokasi', $laporan->lokasi) }}">
                @error('lokasi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="pihak_terkait">Pihak Terkait</label>
                <input type="text" name="pihak_terkait" class="form-control @error('pihak_terkait') is-invalid @enderror" value="{{ old('pihak_terkait', $laporan->pihak_terkait) }}">
                @error('pihak_terkait')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror">
                @error('gambar')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="secret">Secret</label>
                <input type="text" name="secret" class="form-control @error('secret') is-invalid @enderror" value="{{ old('secret', $laporan->secret) }}">
                @error('secret')
                    <div class="invalid-feedback">{{ $message}}</div>
                @error('secret')
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" name="status" class="form-control @error('status') is-invalid @enderror" value="{{ old('status', $laporan->status) }}">
                @error('status')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection

