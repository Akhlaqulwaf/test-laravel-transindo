@extends('admin/layouts/index') @section('content')

<div class="w-full px-[1rem] md:px-[2rem] my-3 text-[14px]">
    <h1 class="uppercase font-semibold">Tambah Car</h1>
    <form
        method="POST"
        enctype="multipart/form-data"
        action="{{ route('admin.car.store') }}"
    >
        @csrf
        <div class="mb-6 mt-5">
            <label
                for="nama"
                class="block mb-2 text-sm font-medium text-gray-900"
                >Model</label
            >
            <input
                type="text"
                spellcheck="false"
                name="model"
                id="nama"
                class="border w-full placeholder-gray-700 placeholder:text-[13px] border-gray-400 bg-gray-200 rounded-md focus:ring-0 focus:border-gray-600"
                placeholder="Nama Model"
            />
            @error('model')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label
                for="kategori"
                class="block mb-2 text-sm font-medium text-gray-900"
                >merek</label
            >
            <input
                type="text"
                name="merek"
                spellcheck="false"
                id="kategori"
                class="border w-full placeholder-gray-700 border-gray-400 bg-gray-200 rounded-md focus:ring-0 focus:border-gray-600"
                placeholder="Merek"
            />
            @error('merek')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label
                for="deskripsi"
                class="block mb-2 text-sm font-medium text-gray-900"
                >Deskripsi</label
            >
            <textarea
                name="description"
                id="deskripsi"
                cols="2"
                rows="2"
                spellcheck="false"
                class="border w-full placeholder-gray-700 border-gray-400 bg-gray-200 rounded-md focus:ring-0 focus:border-gray-600"
                placeholder="Deskripsi"
            ></textarea>
            @error('description')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label
                for="stok"
                class="block mb-2 text-sm font-medium text-gray-900"
                >No Plat</label
            >
            <input
                type="text"
                spellcheck="false"
                name="no_plat"
                id="stok"
                class="border w-full placeholder-gray-700 border-gray-400 bg-gray-200 rounded-md focus:ring-0 focus:border-gray-600"
                placeholder="Stok"
            />
            @error('no_plat')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label
                for="harga"
                class="block mb-2 text-sm font-medium text-gray-900"
                >Tarif</label
            >
            <input
                type="number"
                spellcheck="false"
                name="tarif"
                id="harga"
                class="border w-full placeholder-gray-700 border-gray-400 bg-gray-200 rounded-md focus:ring-0 focus:border-gray-600"
                placeholder="Harga"
            />
            @error('tarif')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-6">
            <label
                for="gambar"
                class="block mb-2 text-sm font-medium text-gray-900"
                >Gambar</label
            >
            <input
                type="file"
                id="gambar"
                name="image"
                class="border w-full placeholder-gray-700 border-gray-400 bg-gray-200 rounded-md focus:ring-0 focus:border-gray-600"
            />
            @error('image')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <button
            type="submit"
            class="text-black bg-pink-400 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
        >
            Submit
        </button>
    </form>
</div>

@endsection
