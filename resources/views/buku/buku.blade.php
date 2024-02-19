@extends('layouts.template')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <div class="mb-4">
                        <a href="{{ route('buku.create') }}" class="bg-blue-500 hover:bg-blue-700 text-black border font-bold py-2 px-4 rounded">
                            + Tambah Data Buku
                        </a>
                    </div>
                    <table class="mx-auto min-w-full border rounded-md overflow-hidden">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="py-2 px-4">Judul</th>
                                <th class="py-2 px-4">Penulis</th>
                                <th class="py-2 px-4">Penerbit</th>
                                <th class="py-2 px-4">Tahun</th>
                                <th class="py-2 px-4">Kategori</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($buku as $b)
                                <tr class="hover:bg-gray-50">
                                    <td class="py-2 px-4">{{ $b->judul }}</td>
                                    <td class="py-2 px-4">{{ $b->penulis }}</td>
                                    <td class="py-2 px-4">{{ $b->penerbit }}</td>
                                    <td class="py-2 px-4">{{ $b->tahun_terbit }}</td>
                                    <td class="py-2 px-4">
                                        @foreach ($b->kategoribukurelasi as $kategoribuku)
                                            @if ($kategoribuku->kategori)
                                                {{ $kategoribuku->kategori->nama_kategori }}<br>
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>