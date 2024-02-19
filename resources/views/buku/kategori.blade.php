@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="">
                    <div class="card-header">
                        <div class="mb-4">
                            <a href="#" class="btn btn-primary">
                                +Tambah Data
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="pxx-4 py-2">Nama Kategori</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($kategori as $k)
                                    <tr>
                                        <td class="px-4 py-2">{{  $k->nama_kategori }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="px-4 py-2 text-center">Tidak Ada Data Kategori.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
    
@endsection





{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="min-w-full border rounded-md overflow-hidden">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="py-2 px-4">Nama Kategori</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategori as $k)
                                <tr class="hover:bg-gray-50">
                                    <td class="py-2 px-4">{{ $k->nama_kategori }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}