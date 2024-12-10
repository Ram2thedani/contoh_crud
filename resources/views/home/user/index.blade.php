@extends('layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <a href="/user/tambah" class="btn btn-success">Tambah</a>
            <div class="card">
                <div class="card-body">
                    <div
                        class="table-responsive"
                    >
                        <table
                            class="table table-primary"
                        >
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user as $user)
                                <tr class="">
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->nama}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <a href="/user/edit/{{$user->id}}" class="btn btn-primary">edit</a>
                                        <a href="/user/hapus/{{$user->id}}" class="btn btn-primary">hapus</a>
                                
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection