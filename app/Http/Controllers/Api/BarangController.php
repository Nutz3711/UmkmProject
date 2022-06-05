<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    /**
      * @OA\Get(
      *      security={{
      *        "bearerAuth":{}
      *      }},
      *     path="/barang",
      *     tags={"Projects UMKM"},
      *     summary="Looking Data Barang",
      *     description="Looking Data Barang",
      *     operationId="getBarang",
      *
      *     @OA\Response(
      *         response="default",
      *         description="successful operation"
      *     )
      *)
      *
        */

        public function get(){
            $barang = Barang::all();
            return response()->json([
                'status'=>true,
                'data' => $barang
            ],200);
        }

        /**
          * @OA\Post(
          *      security={{
          *        "bearerAuth":{}
          *      }},
          *     path="/barang",
          *     tags={"Projects UMKM"},
          *     summary="Insert Data Barang Admin",
          *     description="Insert Data Barang Admin",
          *     operationId="insertBarang",
          *     @OA\RequestBody(
          *         @OA\JsonContent(
          *               type="object",
          *               @OA\Property(property="nama_barang"),
          *               @OA\Property(property="harga_barang"),
          *               @OA\Property(property="toko"),
          *
          *     ),
          *         @OA\Schema(
          *               type="object",
          *               @OA\Property(property="nama_barang", type="text"),
          *               @OA\Property(property="harga_barang", type="text"),
          *               @OA\Property(property="toko", type="text"),
          *
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

        public function save(Request $request){
            $validate = Validator::make($request->all(),[
                'nama_barang'=>'required|min:1',
                'harga_barang'=> 'required',
                'toko'=> 'required',
            ]);

            if($validate->fails()){
                return response()->json([
                    'status'=>false,
                    'message'=>$validate->errors()
                ]);
            }

            Barang::create([
                'nama_barang'=>$request->nama_barang,
                'harga_barang'=>$request->harga_barang,
                'toko'=>$request->toko,
            ]);

            return response()->json([
                'status'=>true,
                'message'=>'Tambah Barang Berhasil'
            ]);

        }

        /**
          * @OA\Put(
          *      security={{
          *        "bearerAuth":{}
          *      }},
          *     path="/barang/{id}",
          *     tags={"Projects UMKM"},
          *     summary="Update Data Barang Admin",
          *     description="Update Data Barang Admin",
          *     operationId="updateBarang",
          *     @OA\Parameter(
          *         name="id",
          *         in="path",
          *         description="Enter Id Data For Update",
          *         required=true,
          *     ),
          *     @OA\RequestBody(
          *         @OA\JsonContent(
          *               type="object",
          *               @OA\Property(property="nama_barang"),
          *               @OA\Property(property="harga_barang"),
          *               @OA\Property(property="toko"),
          *
          *     ),
          *         @OA\Schema(
          *               type="object",
          *               @OA\Property(property="nama_barang", type="text"),
          *               @OA\Property(property="harga_barang", type="text"),
          *               @OA\Property(property="toko", type="text"),
          *
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

        public function update($id,Request $request){
            if(!Barang::find($id)){
                return response()->json([
                    'status'=>false,
                    'message'=>'Data Tidak Ditemukan'
                ]);
            }
            $validate = Validator::make($request->all(),[
                'nama_barang'=>'required|min:1',
                'harga_barang'=> 'required',
                'toko'=> 'required',
            ]);

            if($validate->fails()){
                return response()->json([
                    'status'=>false,
                    'message'=>$validate->errors()
                ]);
            }

            Barang::where('id',$id)->update([
                'nama_barang'=>$request->nama_barang,
                'harga_barang'=>$request->harga_barang,
                'toko'=>$request->toko,
            ]);

            return response()->json([
                'status'=>true,
                'message'=>'Edit Barang Berhasil'
            ]);
        }

        /**
          * @OA\Delete(
          *      security={{
          *        "bearerAuth":{}
          *      }},
          *     path="/barang/{id}",
          *     tags={"Projects UMKM"},
          *     summary="Delete Data Barang Admin",
          *     description="Delete Data Barang Admin",
          *     operationId="deleteBarang",
          *     @OA\Parameter(
          *         name="id",
          *         in="path",
          *         description="Enter Id Data For Delete",
          *         required=true,
          *     ),
          *     @OA\Response(
          *         response="default",
          *         description="successful operation"
          *     )
          *)
          *
            */
        public function erase($id){
            if(!Barang::find($id)){
                return response()->json([
                    'status'=>false,
                    'message'=>'Data Tidak Ditemukan'
                ]);
            }
            Barang::where('id',$id)->delete();
            return response()->json([
                'status'=>true,
                'message'=>'Hapus Barang Berhasil'
            ]);
        }
}
