<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rentals;

class RentalController extends Controller
{
    public function index()
    {
        $rentals = Rentals::all();
        return response()->json($rentals);
    }

    public function store(Request $request)
    {
        $rental = Rentals::create($request->all());
        return response()->json($rental, 201);
    }

    
    public function show(string $id)
    {
        $rental = Rentals::find($id);
        return response()->json($rental);
    }

    public function update(Request $request, string $id)
    {
        $rental = Rentals::find($id);
        $rental->update($request->all());
        return response()->json($rental);
    }

    
    public function destroy(string $id)
    {
        Rentals::destroy($id);
        return response()->json(null, 204);
    }
}