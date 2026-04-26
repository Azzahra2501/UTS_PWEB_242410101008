@extends('layouts.app')

@section('content')

<div class="card">
    <h2>Manajemen Barang</h2>

    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Stok</th>
            <th>Harga</th>
        </tr>

        @foreach($barang as $i => $b)
        <tr>
            <td>{{ $i+1 }}</td>
            <td>{{ $b['nama'] }}</td>
            <td>{{ $b['stok'] }}</td>
            <td>{{ $b['harga'] }}</td>
        </tr>
        @endforeach
    </table>
</div>

@endsection