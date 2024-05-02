@extends('admin/layouts/index') @section('content')

<div class="w-full px-[1rem] md:px-[2rem] my-2">
    <div class="flex justify-between items-center font-semibold">
        <h1 class="uppercase">Car</h1>
        <a
            href="{{ route('admin.car.tambah') }}"
            class="w-[60px] h-[30px] bg-blue-500 hover:text-white duration-150 flex justify-center items-center rounded-md"
            >Tambah</a
        >
    </div>
    <div class="relative overflow-x-auto border shadow-md sm:rounded-lg mt-3">
        <table class="w-full border text-center text-[14px]">
            <thead class="border-b">
                <tr>
                    <th class="px-6 py-3">No</th>
                    <th class="px-6 py-3">Model</th>
                    <th class="px-6 py-3">Merek</th>
                    <th class="px-6 py-3">Deskriptsi</th>
                    <th class="px-6 py-3">No Plat</th>
                    <th class="px-6 py-3">Tarif</th>
                    <th class="px-6 py-3">Image</th>
                    <th class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody class="border-b">
                @php $no=1 @endphp @forelse($data as $datas)
                <tr>
                    <th class="px-6 py-3">
                        {{$no++}}
                    </th>
                    <th scope="row" class="px-6 py-3">
                        {{$datas->model}}
                    </th>
                    <td class="px-6 py-3">
                        {{$datas->merek}}
                    </td>
                    <td class="px-6 py-1 line-clamp-2">
                        {{$datas->description}}
                    </td>
                    <td class="px-6 py-3">
                        {{$datas->no_plat}}
                    </td>
                    <td class="px-6 py-3">
                        {{$datas->tarif}}
                    </td>
                    <td class="px-8 py-3">
                        <img
                            class="w-[35px] h-[30px] mx-auto"
                            src="{{ asset('storage/'.$datas->image) }}"
                            alt="{{$datas->model}}"
                        />
                    </td>
                    <td class="px-6 py-3 flex items-center justify-center">
                        <div class="flex">
                            <a
                                href="{{route('admin.car.edit', ['id' => $datas->id])}}"
                                class="font-medium text-white hover:underline w-[45px] h-[25px] bg-yellow-300 rounded-sm mr-2 flex justify-center items-center"
                                >Edit</a
                            >
                            <a
                                href="{{route('admin.car.delete', ['id' => $datas->id])}}"
                                class="font-medium text-white hover:underline w-[45px] h-[25px] bg-red-500 rounded-sm flex justify-center items-center"
                                >Delete</a
                            >
                        </div>
                    </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="7" class="py-4">No Data Available</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-3 px-2">
        {{$data->links()}}
    </div>
</div>

@endsection
