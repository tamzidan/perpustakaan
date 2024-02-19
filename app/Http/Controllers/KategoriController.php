<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;
use App\Models\kategoribukurelasi;

class KategoriController extends Controller
{
    public function index(){
        $kategori = Kategori::all();
        return view('buku.kategori', ['kategori' => $kategori]);
    }
}