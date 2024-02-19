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
                    <div class="container mx-auto py-4">
                        <div class="flex justify-center">
                            <div class="w-full md:w-1/2">
                                <div class="bg-white rounded-lg shadow-md">
                                    <div class="p-6">
                                        @if(session('success'))
                                        <p class="text-success">{{ session('success') }}</p>
                                        @endif

                                        <form action="{{ route('buku.store') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf

                                            <div class="mb-4">
                                                <label for="judul"
                                                    class="block text-sm font-semibold mb-2">Judul:</label>
                                                <input type="text" name="judul" class="w-full border p-2" required>
                                            </div>

                                            <div class="mb-4">
                                                <label for="penulis"
                                                    class="block text-sm font-semibold mb-2">Penulis:</label>
                                                <input type="text" name="penulis" class="w-full border p-2" required>
                                            </div>

                                            <div class="mb-4">
                                                <label for="penerbit"
                                                    class="block text-sm font-semibold mb-2">Penerbit:</label>
                                                <input type="text" name="penerbit" class="w-full border p-2" required>
                                            </div>

                                            <div class="mb-4">
                                                <label for="tahun_terbit" class="block text-sm font-semibold mb-2">Tahun
                                                    Terbit:</label>
                                                <input type="number" name="tahun_terbit" class="w-full border p-2"
                                                    required>
                                            </div>

                                            <div class="mb-4">
                                                <label for="kategori_id"
                                                    class="block text-sm font-semibold mb-2">Kategori:</label>
                                                <select name="kategori_id" class="w-full border p-2" required>
                                                    @foreach($kategori as $k)
                                                    <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                                                    @endforeach
                                                </select>
                                            </div>


                                            <button type="submit"
                                                class="bg-blue-500 text-black border py-2 px-4 rounded">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>