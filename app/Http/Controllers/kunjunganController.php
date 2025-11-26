<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class kunjunganController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $data=DB::table('kunjungan')
        ->select('kunjungan.*','pasien.nama_pasien','poli.nama_poli','dokter.nama_dokter','penjamin.nama_penjamin')
        ->leftjoin('pasien','pasien.no_rm','=','kunjungan.no_rm')
        ->leftjoin('poli','poli.kode_poli','=','kunjungan.poli')
        ->leftjoin('dokter','dokter.kode_dokter','=','kunjungan.kode_dokter')
        ->leftjoin('penjamin','penjamin.id','=','kunjungan.penjamin_id')
        ;

        if($request->has('q')){
            $data=$data->where('kunjungan.no_registrasikunjungan','like','%'.$request->q.'%');
            // $data=$data->orwhere('pasien.nama_pasien','like','%'.$request->q.'%');
        }

        $data=$data->orderby('id','desc')
        ->paginate(10);

        return view('kunjungan.index',compact('data'));
    }

    //================================================================================================
    public function create()
    {
        $pasien = DB::table('pasien')->orderby('id','desc')->get();
        $dokter = DB::table('dokter')->orderby('id','desc')->get();
        $poli = DB::table('poli')->orderby('id','desc')->get();
        $penjab = DB::table('penjamin')->orderby('id','desc')->get();

        return view('kunjungan.create',compact('pasien','dokter','poli','penjab'));
    }

    public function blank() {
        
        return view('kunjungan.blank');
    }

    //================================================================================================
    public function store(Request $request)
    {
        $kode = $this->generatekode();
        
        DB::table('kunjungan')
        ->insert([
            'no_registrasikunjungan'=>$kode,
            'no_rm'=>$request->pasien,
            'tanggal_kunjungan'=>$request->tanggal,
            'kode_dokter'=>$request->dokter,
            'poli'=>$request->poli,
            'instalasi'=>$request->instalasi,
            'penjamin_id'=>$request->penjamin,
        ]);
            return redirect('/kunjungan')->with('status','Berhasil Menyimpan Data');
    }

    public function generatekode() {
        $get_last = DB::table('kunjungan')
        ->select(DB::raw('max(no_registrasikunjungan) as terbesar'))
        ->get();

        if(count($get_last)<=0){
            $kode= 'REG000001';
        }else{
            foreach ($get_last as $row_get_last) {
            $old_kode = $row_get_last->terbesar;
            }
            $num= substr($old_kode,3);
            $num =intval($num)+1;
            $kode = 'REG'.sprintf('%06d', $num);
        }
        return $kode;
    }

    //================================================================================================
    public function show($id)
    {
        $pasien = DB::table('pasien')->orderby('id','desc')->get();
        $dokter = DB::table('dokter')->orderby('id','desc')->get();
        $poli = DB::table('poli')->orderby('id','desc')->get();
        $penjab = DB::table('penjamin')->orderby('id','desc')->get();
        $data = DB::table('kunjungan')->where('id',$id)->first();
        $data_billing=[];
        if($data){

        $data_billing = DB::table('detail_transaksi')
        ->select(DB::raw('detail_transaksi.*,transaksi.no_registrasikunjungan'))
        ->leftjoin('transaksi','transaksi.no_transaksi','=','detail_transaksi.no_transaksi')
        ->where('transaksi.no_registrasikunjungan',$data->no_registrasikunjungan)
        ->get();
        }
        return view('kunjungan.show',compact('pasien','dokter','poli','penjab','data','data_billing'));
    }

    //================================================================================================
    public function edit($id)
    {
        $pasien = DB::table('pasien')->orderby('id','desc')->get();
        $dokter = DB::table('dokter')->orderby('id','desc')->get();
        $poli = DB::table('poli')->orderby('id','desc')->get();
        $penjab = DB::table('penjamin')->orderby('id','desc')->get();
        $data = DB::table('kunjungan')->where('id',$id)->first();
        return view('kunjungan.edit',compact('pasien','dokter','poli','penjab','data'));
    }

    //================================================================================================
    public function update(Request $request, $id)
    {
         DB::table('kunjungan')
         ->where('id',$id)
        ->update([
            'no_rm'=>$request->pasien,
            'tanggal_kunjungan'=>$request->tanggal,
            'kode_dokter'=>$request->dokter,
            'poli'=>$request->poli,
            'instalasi'=>$request->instalasi,
            'penjamin_id'=>$request->penjamin,
        ]);
            return redirect('/kunjungan')->with('status','Berhasil Memperbarui Data');
    }

    //================================================================================================
    public function destroy($id)
    {
        DB::table('kunjungan')
        ->where('id',$id)
        ->delete();
        return redirect('/kunjungan')->with('status','Berhasil Menghapus Data');
    }

    //================================================================================================
    public function inputRm($id) {
        return view('kunjungan.create_rm');
    }
}
