@extends('layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col">
           
            <div class="card">
                <div class="card-body">
                    <form action="/user/simpan" method="post">
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
                        />
                       
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection