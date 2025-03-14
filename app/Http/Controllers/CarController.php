<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        return response()->json(Car::all());
    }

    public function store(Request $request)
    {
        $validated =$request->validate([
            'name' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'year' => 'required',
            'color' => 'required',
            'seats' => 'required',
            'price_per_day' => 'required',
            'available' => 'required',
        ]);
        $car = Car::create($validated);
        return response()->json($car);

    }

    public function show($id)
    {
        return response()->json(Car::find($id));
    }



    public function delete(Request $request, $id)
    {
        $car = Car::findOrFail($id);
        $car->delete();
        return response()->json(null, 204);
    }
}
