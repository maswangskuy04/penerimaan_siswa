@extends('layout.app')

@section('title', 'Tambah User Page')

@section('content')
    <div class="col-sm-12 col-xl-4">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Form Tambah User</h6>
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Level</label>
                    <select name="id_level" id="" class="form-select">
                        <option value=""></option>
                        @foreach ($levels as $level)
                            <option value="{{ $level->id }}">{{ $level->nama_level }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-outline-success btn-sm">Simpan</button>
            </form>
        </div>
    </div>
@endsection
