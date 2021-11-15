@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Pengaduan siswa</h1>
            </div>
            <form class="user" method="POST" action="{{ route('login')}}">
                @csrf
                <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                        aria-describedby="emailHelp" placeholder="Enter Email Address...">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-user"
                        id="exampleInputPassword" placeholder="Password">
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                        <input type="checkbox" name="remember" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Ingatkan saya</label>
                    </div>
                </div>
                <button class="btn btn-primary btn-user btn-block" type="submit">
                    Login
                </button>
            </form>
            <hr>
            <div class="text-center">
                <a class="small" href="{{ route('register')}}">Daftar akun</a>
            </div>
        </div>
    </div>
</div>
@endsection
