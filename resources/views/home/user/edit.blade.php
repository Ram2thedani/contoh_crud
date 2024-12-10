@extends('layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col">
           
            <div class="card">
                <div class="card-body">
                    <form action="/user/update/{{$user->id}}" method="post">
                        @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Nama</label>
                        <input
                            type="text"
                            class="form-control"
                            name="nama"
                            id=""
                            aria-describedby="helpId"
                            placeholder="Masukkan nama anda"
                            Value="{{$user->nama}}"
                        />
                       
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">email</label>
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            id=""
                            aria-describedby="helpId"
                            placeholder="Masukkan email anda"
                            Value="{{$user->email}}"

                        />
                       
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">password</label>
                        <input
                            type="password"
                            class="form-control"
                            name="password"
                            id=""
                            aria-describedby="helpId"
                            placeholder="Masukkan password anda"
                            Value="{{$user->password}}"

                        />
                       
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection