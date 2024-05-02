@extends('users/layouts/app')
@section('content')
<!-- <div
    class="w-full h-[30rem] bg-[url('../../../public/img/library.webp')] bg-cover bg-no-repeat bg-center"
></div> -->
<div class="w-full p-7 md:px-[3rem] font-primary">
    <div class="flex justify-center items-center">
        <div class="flex-grow h-px bg-gray-400"></div>
        <span class="uppercase font-semibold text-gray-500 mx-2"
            >Recently added books to our store</span
        >
        <div class="flex-grow h-px bg-gray-400"></div>
    </div>
    <div class="w-full">
        <div
            class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-[30px] max-w-sm mx-auto md:max-w-none md:mx-0 mt-3"
        >
            @forelse($data as $car)
            <div>
                <div
                    class="border shadow-md rounded-sm h-[200px] mb-3 overflow-hidden relative group transition"
                >
                    <div
                        class="w-[170px] h-full flex justify-center items-center mx-auto"
                    >
                        <a
                            href="{{route('user.carDetail', ['id' => $car->id])}}"
                            class="w-[130px] h-full flex justify-center items-center mx-auto"
                        >
                            <img
                                src="{{ asset('storage/'.$car->image) }}"
                                alt=""
                                class="max-w-[80px] group-hover:scale-110 duration-300"
                            />
                        </a>
                    </div>
                </div>
                <div>
                    <a href="">{{$car->model}}</a>
                    <div class="">{{$car->merek}}</div>
                    <div>{{$car->tarif}}</div>
                </div>
            </div>
            @empty
            <div class="text-center">
                <h1>No Data Available</h1>
            </div>
            @endforelse
        </div>
    </div>

</div>
@endsection
