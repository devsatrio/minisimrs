<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class pasienController extends Controller
{
    
    public function getall() {
        $data=DB::table('pasien')
        ->orderby('id','desc')
        ->get();
        return response()->json(['msg' => 'Data retrieved', 'data' => $data], 200);
    }

    public function getdetail($id) {
        $data=DB::table('pasien')
        ->where('id',$id)
        ->get();
        return response()->json(['msg' => 'Data retrieved', 'data' => $data], 200);
    }

    public function adddata(Request $request) {
        $get_pasien = DB::table('pasien')
        ->where('no_rm',$request->no_rm)
        ->count();

        if($get_pasien>0){

            return response()->json(['msg' => 'Error saved, No. RM sudah di pakai'], 500);
        }else{
            DB::table('pasien')
            ->insert([
                'no_rm'=>$request->no_rm,
                'nama_pasien'=>$request->nama,
                'tanggal_lahir'=>$request->tanggal,
                'jenis_kelamin'=>$request->jk,
                'alamat'=>$request->alamat,
            ]);
            return response()->json(['msg' => 'Data saved'], 201);
        }
    }
}
