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
}