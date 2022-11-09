@extends('layouts.default')
@section('title')
    Data Keluarga
@endsection
@push('before-style')
@endpush
@push('after-style')
@endpush
@section('content')
    <div class="container">
        <h1>Update Data {{ $item->name }} </h1>
        <form action="{{ route('family.update', $item->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}">
                @error('name')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Jenis Kelamin</label>
                <select class="form-select" name="gender" id="gender">
                    <option value="{{ $item->gender }}" selected>{{ $item->gender }}</option>
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                @error('gender')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="level" class="form-label">Keterangan</label>
                <select class="form-select" name="level" id="level">
                    <option value="{{ $item->level }}" selected>{{ $item->level }}</option>
                    <option value="">Pilih Keterangan</option>
                    <option value="kakek">kakek</option>
                    <option value="anak">anak</option>
                    <option value="cucu">cucu</option>
                </select>
                @error('level')
                    <div class="form-text text-danger">The keterangan field is required.</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
@push('before-script')
@endpush
@push('after-script')
@endpush
