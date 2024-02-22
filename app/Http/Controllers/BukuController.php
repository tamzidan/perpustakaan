<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use App\Models\Kategori;
use App\Models\kategoribukurelasi;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku = buku::all();
        $kategori = kategoribukurelasi::all();
        return view('buku.buku', compact('buku', 'kategori'));
    }

    public function create()
    {
        $kategori = kategori::distinct()->get();
        return view('buku.buku_create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|integer',
            'kategori_id' => 'required'
        ]);

        Buku::create([
            'judul' => $request->judul,
            'pengarang' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'kategori_id' => $request->kategori_id
        ]);

        return redirect('/buku')->with('success', 'Buku berhasil ditambahkan!');

    }

}