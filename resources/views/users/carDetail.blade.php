@extends('users/layouts/app') @section('content')
<div class="w-full p-7 px-[2rem] md:px-[3rem] font-primary">
    <div class="">
        <div class="border-b border-gray-400">
            <a
                href="{{ route('user.welcome') }}"
                class="hover:text-blue-500 hover:underline transition duration-500"
                >Home</a
            ><span>/Car Detail</span>
        </div>
    </div>
    <div
        class="grid grid-cols-1 md:grid-cols-2 gap-[30px] max-w-sm md:max-w-none mx-auto md:mx-0 mt-5"
    >
        <div
            class="max-w-[180px] h-full flex justify-center items-center mx-auto"
        >
            <img src="{{asset('storage/'. $data->image)}}" alt="" />
        </div>
        <div class="leading-6 flex flex-col justify-center text-justify">
            <p class="pb-1 font-semibold">{{$data->model}}</p>
            <p class="pb-1">{{$data->merek}}</p>
            <p class="pb-1">{{$data->no_plat}}</p>
            <p class="pb-1 text-gray-700">{{$data->deskripsi}}</p>
            <p class="pb-1">{{$data->statusCar->name}}</p>
            <p>Rp.{{$data->tarif}}</p>
            <div>
                <form action="{{ route('user.car.store') }}" method="post">
                    @csrf @if(Route::has('login')) @auth
                    <input
                        type="hidden"
                        name="user_id"
                        value="{{ Auth::user()->id }}"
                    />
                    @endauth @endif

                    <input
                        type="hidden"
                        name="car_id"
                        value="{{ $data->id }}"
                    />
                    <input type="hidden" name="total" id="total" />
                    <div
                        class="mt-3 w-[20rem] flex justify-center items-center"
                    >
                        <div class="">
                            <label
                                for="exampleInputUsername1"
                                class="block text-sm font-medium"
                                >Tanggal Mulai</label
                            >
                            <input
                                required
                                type="date"
                                class="border w-full border-gray-400 bg-gray-200 rounded-md"
                                id="tgl_mulai"
                                name="tgl_mulai"
                                placeholder="Tanggal Mulai"
                            />
                        </div>
                        <span class="mx-4 text-black">-</span>
                        <div class="">
                            <label
                                for="exampleInputUsername1"
                                class="block text-sm font-medium"
                                >Tanggal Selesai</label
                            >
                            <input
                                required
                                type="date"
                                id="tgl_selesai"
                                class="border w-full border-gray-400 bg-gray-200 rounded-md"
                                onchange="selisih()"
                                name="tgl_selesai"
                                placeholder="Tanggal Selesai"
                            />
                        </div>
                    </div>
                    <button
                        class="w-[7rem] h-[2rem] bg-slate-400 mt-3 rounded-md"
                    >
                        Booking
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function selisih(){

        var tglMulai = new Date(document.getElementById("tgl_mulai").value);
        var tglSelesai = new Date(document.getElementById("tgl_selesai").value);
        var selisihWaktu = tglSelesai.getTime() - tglMulai.getTime();
        var selisihHari = selisihWaktu / (1000 * 3600 * 24);
        var price = <?php echo "$data->tarif"; ?>;
        var total = Number(price) * selisihHari;
        document.getElementById("total").value = total;
    }
</script>
@endsection
