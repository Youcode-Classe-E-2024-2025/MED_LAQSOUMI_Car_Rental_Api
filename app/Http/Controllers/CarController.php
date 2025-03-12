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
