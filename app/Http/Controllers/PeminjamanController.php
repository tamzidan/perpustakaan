<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\peminjaman;
use App\Models\User;


class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = peminjaman::with('user', 'buku')->get();
        return view('peminjaman.peminjaman', compact('peminjaman'));
    }

    public function tambahPeminjaman(){
        $user = User::all();
        $buku = Buku::all();

        return view('peminjaman.create_peminjaman', compact('users', 'buku'));
    }

    public function storePeminjaman(Request $request){
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'buku_id' => 'required|exists:buku,id',
            'tanggal_peminjaman' => 'required|date',
            'tanggal_pengembalian' => 'required|date',
        ]);

        peminjaman::create([
            'user_id' => $request -> user_id,
            'buku_id' => $request -> buku_id,
            'tanggal_peminjaman' => $request -> tanggal_peminjaman,
            'tanggal_pengembalian' => $request -> tanggal_pengembalian,
            'status' => 'Dipinjam'
        ]);

        return redirect('/peminjaman');

    }

    public function kembalikanBuku($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman -> tanggal_pengembalian = now();
        $peminjaman -> status = 'Dikembalikan';
        $peminjaman -> save();
    }
}
