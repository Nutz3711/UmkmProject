<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TokoController extends Controller
{
    /**
      * @OA\Get(
      *      security={{
      *        "bearerAuth":{}
      *      }},
      *     path="/toko",
      *     tags={"Projects UMKM"},
      *     summary="Looking Data Toko",
      *     description="Looking Data Toko",
      *     operationId="getToko",
      *
      *     @OA\Response(
      *         response="default",
      *         description="successful operation"
      *     )
      *)
      *
        */

    public function get(){
        $toko = Toko::all();
        return response()->json([
            'status'=>true,
            'data' => $toko
        ],200);
    }

        /**
      * @OA\Get(
      *      security={{
      *        "bearerAuth":{}
      *      }},
      *     path="/toko/{id}",
      *     tags={"Projects UMKM"},
      *     summary="Get By Id Data Toko Admin",
      *     description="Get By Id Data Toko Admin",
      *     operationId="getByIdToko",
      *     @OA\Parameter(
      *         name="id",
      *         in="path",
      *         description="Enter Id Data For Get Data And Relation",
      *         required=true,
      *     ),
      *     @OA\Response(
      *         response="default",
      *         description="successful operation"
      *     )
      *)
      *
        */

    public function getById($id){
        if(!Toko::find($id)){
            return response()->json([
                'status'=>false,
                'message'=>'Data Tidak Ditemukan'
            ]);
        }

        $dataBarang = Barang::where('toko',$id)->get();
        $toko = Toko::where('id',$id)->get();

        return response()->json([
            'status'=>true,
            'toko' => $toko,
            'barang'=> $dataBarang
        ]);
    }

    /**
      * @OA\Post(
      *      security={{
      *        "bearerAuth":{}
      *      }},
      *     path="/toko",
      *     tags={"Projects UMKM"},
      *     summary="Insert Data Toko Admin",
      *     description="Insert Data Toko Admin",
      *     operationId="insertToko",
      *     @OA\RequestBody(
      *         @OA\JsonContent(
      *               type="object",
      *               @OA\Property(property="nama_toko"),
      *               @OA\Property(property="daerah"),
      *               @OA\Property(property="pemilik"),
      *               @OA\Property(property="jenis_toko"),
      *
      *     ),
      *         @OA\Schema(
      *               type="object",
      *               @OA\Property(property="nama_toko", type="text"),
      *               @OA\Property(property="daerah", type="text"),
      *               @OA\Property(property="pemilik", type="text"),
      *               @OA\Property(property="jenis_toko", type="text"),
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
            'nama_toko'=>'required|min:1',
            'daerah'=> 'required',
            'pemilik'=> 'required',
            'jenis_toko'=> 'required'
        ]);

        if($validate->fails()){
            return response()->json([
                'status'=>false,
                'message'=>$validate->errors()
            ]);
        }

        Toko::create([
            'nama_toko'=>$request->nama_toko,
            'daerah'=>$request->daerah,
            'pemilik'=>$request->pemilik,
            'jenis_toko'=>$request->jenis_toko
        ]);

        return response()->json([
            'status'=>true,
            'message'=>'Tambah Toko Berhasil'
        ]);

    }

    /**
      * @OA\Put(
      *      security={{
      *        "bearerAuth":{}
      *      }},
      *     path="/toko/{id}",
      *     tags={"Projects UMKM"},
      *     summary="Update Data Toko Admin",
      *     description="Update Data Toko Admin",
      *     operationId="updateToko",
      *     @OA\Parameter(
      *         name="id",
      *         in="path",
      *         description="Enter Id Data For Update",
      *         required=true,
      *     ),
      *     @OA\RequestBody(
      *         @OA\JsonContent(
      *               type="object",
      *               @OA\Property(property="nama_toko"),
      *               @OA\Property(property="daerah"),
      *               @OA\Property(property="pemilik"),
      *               @OA\Property(property="jenis_toko"),
      *
      *     ),
      *         @OA\Schema(
      *               type="object",
      *               @OA\Property(property="nama_toko", type="text"),
      *               @OA\Property(property="daerah", type="text"),
      *               @OA\Property(property="pemilik", type="text"),
      *               @OA\Property(property="jenis_toko", type="text"),
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
        if(!Toko::find($id)){
            return response()->json([
                'status'=>false,
                'message'=>'Data Tidak Ditemukan'
            ]);
        }
        $validate = Validator::make($request->all(),[
            'nama_toko'=>'required|min:1',
            'daerah'=> 'required',
            'pemilik'=> 'required',
            'jenis_toko'=> 'required'
        ]);

        if($validate->fails()){
            return response()->json([
                'status'=>false,
                'message'=>$validate->errors()
            ]);
        }

        Toko::where('id',$id)->update([
            'nama_toko'=>$request->nama_toko,
            'daerah'=>$request->daerah,
            'pemilik'=>$request->pemilik,
            'jenis_toko'=>$request->jenis_toko
        ]);

        return response()->json([
            'status'=>true,
            'message'=>'Edit Toko Berhasil'
        ]);
    }

    /**
      * @OA\Delete(
      *      security={{
      *        "bearerAuth":{}
      *      }},
      *     path="/toko/{id}",
      *     tags={"Projects UMKM"},
      *     summary="Delete Data Toko Admin",
      *     description="Delete Data Toko Admin",
      *     operationId="deleteToko",
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
        if(!Toko::find($id)){
            return response()->json([
                'status'=>false,
                'message'=>'Data Tidak Ditemukan'
            ]);
        }
        Toko::where('id',$id)->delete();
        return response()->json([
            'status'=>true,
            'message'=>'Hapus Toko Berhasil'
        ]);
    }

}
