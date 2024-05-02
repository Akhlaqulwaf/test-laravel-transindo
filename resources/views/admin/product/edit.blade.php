@extends('admin/layouts/index')
@section('content')

<div class="w-full px-[1rem] md:px-[2rem] my-3 text-[14px]">
    <h1 class="uppercase font-semibold">Edit Car</h1>
    <form method="POST" enctype="multipart/form-data" action="{{ route('admin.car.update', ['id' => $data->id]) }}">
        @csrf
        <div class="mb-6 mt-5">
            <label for="nama" class="block mb-2 font-medium text-gray-900">Model</label>
            <input type="text" name="model" id="nama" class="border w-full border-gray-400 bg-gray-200 rounded-md focus:ring-0 focus:border-gray-600" value="{{$data->model}}" required>
        </div>
        <div class="mb-6">
            <label for="kategori" class="block mb-2 font-medium text-gray-900">Merek</label>
            <input type="text" name="merek" id="kategori" class="border w-full border-gray-400 bg-gray-200 rounded-md focus:ring-0 focus:border-gray-600" value="{{$data->merek}}"  required>
        </div>
        <div class="mb-6">
            <label for="deskripsi" class="block mb-2 font-medium text-gray-900">Deskripsi</label>
            <textarea name="description" id="deskripsi" cols="3" rows="4" class="border w-full border-gray-400 bg-gray-200 rounded-md focus:ring-0 focus:border-gray-600" required>{{$data->description}}</textarea>
        </div>
        <div class="mb-6">
            <label for="stok" class="block mb-2 font-medium text-gray-900">No Plat</label>
            <input type="text" name="no_plat" id="deskripsi" class="border w-full border-gray-400 bg-gray-200 rounded-md focus:ring-0 focus:border-gray-600" value="{{$data->no_plat}}"  required>
        </div>
        <div class="mb-6">
            <label for="harga" class="block mb-2 font-medium text-gray-900">Tarif</label>
            <input type="number" name="tarif" id="harga" class="border w-full border-gray-400 bg-gray-200 rounded-md focus:ring-0 focus:border-gray-600" value="{{$data->tarif}}" required>
        </div>
        <div class="mb-6">
            <label for="gambar" class="block mb-2 font-medium text-gray-900">Gambar</label>
            <input type="file" id="gambar" name="image" class="border w-full border-gray-400 bg-gray-200 rounded-md focus:ring-0 focus:border-gray-600" value="{{$data->image}}">
        </div>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>

</div>





@endsection
