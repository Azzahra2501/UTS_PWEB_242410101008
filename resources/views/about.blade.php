@extends('layouts.app')

@section('content')

<div class="card">

    <h2>{{ $judul }}</h2>

    <p style="line-height:1.6;">
        {{ $deskripsi }}
        Sistem ini membantu pengelolaan operasional kantor Stationify agar lebih efisien dan terstruktur.
    </p>

    <h3 style="margin-top:20px;">Cabang Stationify di Jember</h3>

    <ul style="text-align:left; margin-top:10px;">
        <li>1. Kaliwates</li>
        <li>2. Sumbersari</li>
        <li>3. Patrang</li>
        <li>4. Ajung</li>
        <li>5. Arjasa</li>
        <li>6. Balung</li>
        <li>7. Bangsalsari</li>
        <li>8. Gumukmas</li>
        <li>9. Jelbuk</li>
        <li>10. Jenggawah</li>
        <li>11. Kencong</li>
        <li>12. Ledokombo</li>
        <li>13. Mayang</li>
        <li>14. Mumbulsari</li>
        <li>15. Panti</li>
        <li>16. Rambipuji</li>
        <li>17. Sukorambi</li>
        <li>18. Silo</li>
        <li>19. Tanggul</li>
        <li>20. Tempurejo</li>
    </ul>

</div>

@endsection