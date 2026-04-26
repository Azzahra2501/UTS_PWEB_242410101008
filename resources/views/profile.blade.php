@extends('layouts.app')

@section('content')

<div class="card">
    <h2>Profil</h2>

    <p>Username: {{ $username }}</p>
    <p>Nama: {{ $nama }}</p>
    <p>Email: {{ $email }}</p>

    <a href="/dashboard"
       onclick="event.preventDefault(); document.getElementById('backDash').submit();"
       class="btn btn-pink">
        Kembali
    </a>

    <form id="backDash" method="POST" action="/dashboard" style="display:none;">
        @csrf
        <input type="hidden" name="username" value="{{ $username }}">
    </form>
</div>

@endsection