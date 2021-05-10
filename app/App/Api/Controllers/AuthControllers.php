<?php
namespace App\Api\Controllers;

use App\Core\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthControllers extends Controller
{

    public function store()
    {

    }

//    public function store(UserRequest $request)
//    {
//        dd($request);
//
//    }
    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */



    public function login(Request $request)
    {

        $credentials = $request->only(['email', 'password']);

        if (!$token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        //Bora lá que esse trem aqui é top
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }



}