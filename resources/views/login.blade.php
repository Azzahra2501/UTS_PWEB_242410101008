@extends('layouts.app')

@section('content')

<div class="card">
    <h2>Login Stationify</h2>

    <form method="POST" action="/dashboard">
        @csrf
        <input type="text" name="username" placeholder="Masukkan Username" required>
        <br><br>
        <button class="btn btn-pink">Masuk</button>
    </form>
</div>

@endsection