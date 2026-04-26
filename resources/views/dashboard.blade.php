@extends('layouts.app')

@section('content')

<div class="card">
    <h2>Dashboard</h2>

    <p>Selamat datang, {{ $nama }}</p>

    <x-button href="/profile/{{ $username }}">Profil</x-button>
    <x-button href="/pengelolaan/{{ $username }}">Pengelolaan</x-button>
    <x-button href="/about/{{ $username }}">Tentang Stationify</x-button>
</div>

@endsection