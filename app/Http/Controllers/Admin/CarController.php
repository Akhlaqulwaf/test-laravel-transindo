<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarRequest;
use App\Models\Car;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index() {
        $data = Car::paginate(10);
        return view('admin.car.products', ['data' => $data]);
    }

    public function tambah(){
        return view('admin.car.tambah');
    }

    public function store(CarRequest $request){
        $data = $request->validated();


        $image = $request->file('image');
        $fileName = Str::random(32) . '.' . $image->getClientOriginalExtension();
        $filePath = $image->storeAs('imageCar', $fileName, 'public');

        $car = new Car($data);
        $car->image = $filePath;
        $car->status_car_id = 2;
        $car->save();

        return redirect()->route('admin.car');
    }

    public function edit($id){
        $data = Car::findOrFail($id);

        return view('admin.car.edit', ['data' => $data]);
    }

    public function update($id, Request $request){
        $data = Car::findOrFail($id);

        if($request->file('image')){
            Storage::delete('public/'.$data->image);

            $file = $request->file('image')->store('imageCar', 'public');

            $data->image = $file;
        }
        $data->model = $request->model;
        $data->merek = $request->merek;
        $data->description = $request->description;
        $data->no_plat = $request->no_plat;
        $data->tarif = $request->tarif;

        $data->save();

        return redirect()->route('admin.car');
    }

    public function delete($id){
        $data = Car::findOrFail($id);
        Car::destroy($id);
        Storage::delete('public/'.$data->image);

        return redirect()->route('admin.car');
    }
}
