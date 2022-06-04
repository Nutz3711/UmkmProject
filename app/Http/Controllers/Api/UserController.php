<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
      * @OA\Get(
      *      security={{
      *        "bearerAuth":{}
      *      }},
      *     path="/users",
      *     tags={"Projects UMKM"},
      *     summary="Looking Account Admin",
      *     description="Look
      ing For Account Admin Login",
      *     operationId="users",
      *     @OA\Response(
      *         response="default",
      *         description="successful operation"
      *     ),
      *)
      *
    */

    public function getUser(Request $request){
        $user = User::all();
        return response()->json([
            'status'=>true,
            'data'=>$user,
            'token'=>$request->bearerToken()
        ]);
    }
}
