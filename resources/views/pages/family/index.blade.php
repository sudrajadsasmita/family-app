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
        <h1>CRUD Data Keluarga</h1>
        <a href="{{ route('family.create') }}" class="btn btn-primary">Tambah Data</a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $iterate = 1;
                @endphp
                @foreach ($items as $item)
                    <tr>
                        <th scope="row">{{ $iterate }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->gender }}</td>
                        <td>{{ $item->level }}</td>
                        <td>
                            <a href="{{ route('family.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('family.destroy', $item->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @php
                        $iterate++;
                    @endphp
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
@push('before-script')
@endpush
@push('after-script')
@endpush
