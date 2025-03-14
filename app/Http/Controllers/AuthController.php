<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthController extends Controller
{
	
	public function register(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    if ($validator->fails()) {
        return response()->json($validator->errors(), 422);
    }

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'email_verified_at' => now(),
        'password' => Hash::make($request->password),
        'remember_token' => Str::random(10),
    ]);

    return response()->json([
        'message' => 'User registered successfully',
        'user' => $user,
        'token' => $this->createToken($user)
    ], 201);
}

	public function login(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'email' => 'required|email',
			'password' => 'required|string',
		]);

		if ($validator->fails()) {
			return response()->json($validator->errors(), 422);
		}

		if (!Auth::attempt($request->only('email', 'password'))) {
			return response()->json([
				'message' => 'Invalid login credentials'
			], 401);
		}

		$user = User::where('email', $request->email)->firstOrFail();

		return response()->json([
			'message' => 'User logged in successfully',
			'user' => $user,
			'token' => $this->createToken($user)
		], 200);
	}

    public function logout(Request $request)
	{
		$request->user()->currentAccessToken()->delete();

		return response()->json([
			'message' => 'Successfully logged out'
		]);
	}

	protected function createToken(User $user)
	{
		return $user->createToken('auth_token')->plainTextToken;
	}

	public function profile(Request $request)
	{
		return response()->json($request->user());
	}
}
