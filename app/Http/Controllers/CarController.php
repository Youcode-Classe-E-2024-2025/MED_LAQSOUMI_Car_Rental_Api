<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $Car = Car::paginate(5);
        return response()->json($Car);
    }

    public function store(Request $request)
    {
        $car = Car::create($request->all());
        return response()->json($car, 201);
    }

    public function show($id)
    {
        $car = Car::find($id);
        return response()->json($car);
    }

    
    public function update(Request $request, $id)
    {
        $car = Car::find($id);
        $car->update($request->all());
        return response()->json($car);
    }
    public function destroy($id)
    {
        Car::destroy($id);
        return response()->json(null, 204);
    }
}