<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class pasienController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $data=DB::table('pasien');

        if($request->has('q')){
            $data=$data->where('pasien.no_rm','like','%'.$request->q.'%');
            $data=$data->orwhere('pasien.nama_pasien','like','%'.$request->q.'%');
        }

        $data=$data->orderby('id','desc')
        ->paginate(20);

        return view('pasien.index',compact('data'));
    }

    public function create() {
        return view('pasien.create');
    }

    public function store(Request $request)
    {
        $get_pasien = DB::table('pasien')
        ->where('no_rm',$request->no_rm)
        ->count();

        if($get_pasien>0){

            return back()->with('statuserror','No.RM sudah pernah digunakan');
        }else{
            DB::table('pasien')
            ->insert([
                'no_rm'=>$request->no_rm,
                'nama_pasien'=>$request->nama,
                'tanggal_lahir'=>$request->tanggal,
                'jenis_kelamin'=>$request->jk,
                'alamat'=>$request->alamat,
            ]);

            return redirect('/pasien')->with('status','Berhasil Menyimpan Data');
        }
    }

    public function show($id)
    {
        $data_kunjungan=[];
        $data = DB::table('pasien')->where('id',$id)->first();
        if($data){
            $data_kunjungan=DB::table('kunjungan')->select('kunjungan.*','pasien.nama_pasien','poli.nama_poli','dokter.nama_dokter','penjamin.nama_penjamin')
            ->leftjoin('pasien','pasien.no_rm','=','kunjungan.no_rm')
            ->leftjoin('poli','poli.kode_poli','=','kunjungan.poli')
            ->leftjoin('dokter','dokter.kode_dokter','=','kunjungan.kode_dokter')
            ->leftjoin('penjamin','penjamin.id','=','kunjungan.penjamin_id')
            ->where('kunjungan.no_rm',$data->no_rm)
            ->get();
        }
        return view('pasien.show',compact('data','data_kunjungan'));
    }

    public function edit($id)
    {
        $data = DB::table('pasien')->where('id',$id)->first();
        return view('pasien.edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
        if($request->no_rm!=$request->old_no_rm){
            $get_pasien = DB::table('pasien')
            ->where('no_rm',$request->no_rm)
            ->count();

            if($get_pasien>0){
                return back()->with('statuserror','No.RM sudah pernah digunakan');
            }else{
                DB::table('pasien')
            ->where('id',$id)
            ->update([
                'no_rm'=>$request->no_rm,
                'nama_pasien'=>$request->nama,
                'tanggal_lahir'=>$request->tanggal,
                'jenis_kelamin'=>$request->jk,
                'alamat'=>$request->alamat,
            ]);

            return redirect('/pasien')->with('status','Berhasil Memperbarui Data');
        
        }
        }else{
            DB::table('pasien')
            ->where('id',$id)
            ->update([
                'no_rm'=>$request->no_rm,
                'nama_pasien'=>$request->nama,
                'tanggal_lahir'=>$request->tanggal,
                'jenis_kelamin'=>$request->jk,
                'alamat'=>$request->alamat,
            ]);

            return redirect('/pasien')->with('status','Berhasil Memperbarui Data');
        
        }
    }
    public function destroy($id)
    {
        DB::table('pasien')
        ->where('id',$id)
        ->delete();
            return redirect('/pasien')->with('status','Berhasil Menghapus Data');
    }

}
