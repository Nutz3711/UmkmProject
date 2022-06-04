<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
      * @OA\Post(
      *     path="/login",
      *     tags={"Projects UMKM"},
      *     summary="Login Admin,for admin i guess",
      *     description="Login Admin,for admin i guess",
      *     operationId="login",
      *     @OA\RequestBody(
      *         @OA\JsonContent(
      *               type="object",
      *               @OA\Property(property="email"),
      *               @OA\Property(property="password"),
      *     ),
      *         @OA\Schema(
      *               type="object",
      *               @OA\Property(property="email", type="text"),
      *               @OA\Property(property="password", type="password"),
      *
      *         ),
      *     ),
      *     @OA\Response(
      *         response="default",
      *         description="successful operation"
      *     )
      *)
      *
        */

    public function __invoke(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'email'=>'email|required',
            'password'=>'required|min:8'
        ]);

        if($validate->fails()){
            return response()->json([
                'status'=>false,
                'message'=>$validate->errors()
            ]);
        }

        if($token = auth()->attempt($request->all())){
            return response()->json([
                'token'=> $token,
                'status'=>true,
                'message'=>'Login Success',
            ]);
        }else{
            return response()->json([
                'status'=>false,
                'message'=>'Kesalahan Email Atau Password'
            ]);
        }
    }
}
