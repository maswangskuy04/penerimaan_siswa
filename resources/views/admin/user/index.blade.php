@extends('layout.app')

@section('title', 'User Page')

@section('content')
    <div class="col-12">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-2">Table User</h6>
            <a href="{{ route('user.create') }}" class="btn btn-outline-info btn-sm my-2">Tambah Level</a>
            <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th class="col-1">No</th>
                            <th scope="col">Nama User</th>
                            <th scope="col">Email</th>
                            <th scope="col">Level</th>
                            <th class="col-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $user)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->levels->nama_level }}</td>
                                <td>
                                    <a href="" class="btn btn-outline-warning btn-sm">Update</a> |
                                    <a href="" class="btn btn-outline-danger btn-sm">Danger</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
