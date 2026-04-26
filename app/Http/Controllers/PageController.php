<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        $username = $request->username;
        $nama = ucfirst($username);

        return view('dashboard', compact('username', 'nama'));
    }

    public function profile($username)
    {
        $nama = ucfirst($username);
        $email = $username . '@gmail.com';

        return view('profile', compact('username', 'nama', 'email'));
    }

    public function pengelolaan($username)
    {
        $barang = [
            ['nama'=>'Pensil','stok'=>50,'harga'=>'10.000 / pax'],
            ['nama'=>'Pulpen','stok'=>30,'harga'=>'15.000 / pax'],
            ['nama'=>'Buku Tulis','stok'=>20,'harga'=>'20.000 / pax'],
            ['nama'=>'Penghapus','stok'=>25,'harga'=>'10.500 / pax'],
            ['nama'=>'Spidol','stok'=>15,'harga'=>'25.000 / pax'],
            ['nama'=>'Kertas HVS','stok'=>100,'harga'=>'13.000 / pax'],
            ['nama'=>'Map Folder','stok'=>45,'harga'=>'35.000 / pax'],
            ['nama'=>'Sticky Notes','stok'=>60,'harga'=>'7.000 / pax'],
            ['nama'=>'Tipe-X','stok'=>20,'harga'=>'35.000 / pax'],
            ['nama'=>'Stabilo','stok'=>35,'harga'=>'27.000 / pax'],
            ['nama'=>'Binder','stok'=>18,'harga'=>'45.000 / pax'],
            ['nama'=>'Amplop','stok'=>70,'harga'=>'10.000 / pax'],
            ['nama'=>'Lem','stok'=>22,'harga'=>'15.500 / pax'],
            ['nama'=>'Penggaris','stok'=>40,'harga'=>'30.500 / pax'],
            ['nama'=>'Kalkulator','stok'=>10,'harga'=>'75.000 / pax'],
            ['nama'=>'Clip Kertas','stok'=>90,'harga'=>'27.500 / pax'],
            ['nama'=>'Stapler','stok'=>12,'harga'=>'47.000 / pax'],
            ['nama'=>'Isi Stapler','stok'=>55,'harga'=>'12.000 / pax'],
            ['nama'=>'Buku Agenda','stok'=>16,'harga'=>'50.000 / pax'],
            ['nama'=>'Flashdisk','stok'=>8,'harga'=>'100.000 / pax'],
        ];

        return view('pengelolaan', compact('barang', 'username'));
    }

    public function about($username = null)
    {
        $judul = "Tentang Stationify";
        $deskripsi = "Sistem Stationify dibuat untuk mengelola operasional kantor Stationify secara efisien, terstruktur, dan mudah digunakan.";

        return view('about', compact('judul', 'deskripsi', 'username'));
    }
}