@extends('layout.utama')

@section('konten')
    <div class="w-50 center border rounded px-3 py-3 mx-auto">
        <h1>Login</h1>
        <form action="/sesi/login" method="post">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ Session::get('email') }}">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-info btn-mb-2">Login</button>
            </div>
            <div class="mb-3 d-grid">
                <a href="/sesi/register" name="submit" type="submit" class="btn btn-success">Register</a>
            </div>
        </form>
    </div>
@endsection