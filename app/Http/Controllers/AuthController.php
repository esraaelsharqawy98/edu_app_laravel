<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Handle user registration.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function register(Request $request):JsonResponse{
        $validated = Validator::make($request->all(),
            [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
            ]);

            if ($validated->fails()) {
                return response()->json(['error' => $validated->errors()], 422);
            }

            try {
                // create the user
                $user =  User::create(
                    [
                        'name' => $request->name,
                        'email' => $request->email,
                        'password' => Hash::make($request->password),
                    ]
                );
                // create token
                $token = $user->createToken('auth_token')->plainTextToken;
                return response()->json([
                    'message' => 'User registered successfully',
                    'access_token' => $token,
                    'user' => $user
                ], 201);
            }
            catch (\Exception $e) {
                return response()->json([
                    'error' => 'Error registering user',
                    'message' => $e->getMessage()
                    ],500);
            }
      
    }
}
