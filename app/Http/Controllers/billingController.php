<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class billingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $data=DB::table('transaksi')
        ->select('transaksi.*');
        // ->leftjoin('pasien','pasien.no_rm','=','kunjungan.no_rm')
        // ->leftjoin('poli','poli.kode_poli','=','kunjungan.poli')
        // ->leftjoin('dokter','dokter.kode_dokter','=','kunjungan.kode_dokter')
        // ->leftjoin('penjamin','penjamin.id','=','kunjungan.penjamin_id');

        if($request->has('q')){
            $data=$data->where('transaksi.no_transaksi','like','%'.$request->q.'%');
            $data=$data->orwhere('transaksi.no_registrasikunjungan','like','%'.$request->q.'%');
        }

        $data=$data->orderby('id','desc')
        ->paginate(2);

        return view('billing.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kunjungan =DB::table('kunjungan')
        ->select('kunjungan.*','pasien.nama_pasien','poli.nama_poli','dokter.nama_dokter','penjamin.nama_penjamin')
        ->leftjoin('pasien','pasien.no_rm','=','kunjungan.no_rm')
        ->leftjoin('poli','poli.kode_poli','=','kunjungan.poli')
        ->leftjoin('dokter','dokter.kode_dokter','=','kunjungan.kode_dokter')
        ->leftjoin('penjamin','penjamin.id','=','kunjungan.penjamin_id')
        ->get();

        return view('billing.create',compact('kunjungan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $kode = $this->generatekode();
        $data_detail = [];
        $total=0;

        for ($i=0; $i < count($request->tindakan); $i++) { 
            $data_detail[]=[
                'no_transaksi'=>$kode,
                'nama_tindakan'=>$request->tindakan[$i],
                'harga'=>$request->harga[$i],
                'qty'=>$request->qty[$i],
                'subtotal'=>$request->subtotal[$i],
            ];
            $total=$total+$request->subtotal[$i];
        }

        DB::table('detail_transaksi')->insert($data_detail);
        DB::table('transaksi')
        ->insert([
            'no_transaksi'=>$kode,
            'no_registrasikunjungan'=>$request->registrasi,
            'total_harga'=>$total,
        ]);
            return redirect('/billing')->with('status','Berhasil Menyimpan Data');
    }

    public function generatekode() {
        $get_last = DB::table('transaksi')
        ->select(DB::raw('max(no_transaksi) as terbesar'))
        ->get();

        if(count($get_last)<=0){
            $kode= 'TRX000001';
        }else{
            foreach ($get_last as $row_get_last) {
            $old_kode = $row_get_last->terbesar;
            }
            $num= substr($old_kode,3);
            $num =intval($num)+1;
            $kode = 'TRX'.sprintf('%06d', $num);
        }
        return $kode;
    }

    public function show($id)
    {
        $kunjungan =DB::table('kunjungan')
        ->select('kunjungan.*','pasien.nama_pasien','poli.nama_poli','dokter.nama_dokter','penjamin.nama_penjamin')
        ->leftjoin('pasien','pasien.no_rm','=','kunjungan.no_rm')
        ->leftjoin('poli','poli.kode_poli','=','kunjungan.poli')
        ->leftjoin('dokter','dokter.kode_dokter','=','kunjungan.kode_dokter')
        ->leftjoin('penjamin','penjamin.id','=','kunjungan.penjamin_id')
        ->get();
        $data_detail=[];
        $data=DB::table('transaksi')->where('id',$id)->first();
        if($data){
            $data_detail=DB::table('detail_transaksi')
            ->where('no_transaksi',$data->no_transaksi)
            ->get();
        }
        return view('billing.show',compact('kunjungan','data','data_detail'));
    }

    public function edit($id)
    {
        $kunjungan =DB::table('kunjungan')
        ->select('kunjungan.*','pasien.nama_pasien','poli.nama_poli','dokter.nama_dokter','penjamin.nama_penjamin')
        ->leftjoin('pasien','pasien.no_rm','=','kunjungan.no_rm')
        ->leftjoin('poli','poli.kode_poli','=','kunjungan.poli')
        ->leftjoin('dokter','dokter.kode_dokter','=','kunjungan.kode_dokter')
        ->leftjoin('penjamin','penjamin.id','=','kunjungan.penjamin_id')
        ->get();
        $data_detail=[];
        $data=DB::table('transaksi')->where('id',$id)->first();
        if($data){
            $data_detail=DB::table('detail_transaksi')
            ->where('no_transaksi',$data->no_transaksi)
            ->get();
        }
        return view('billing.edit',compact('kunjungan','data','data_detail'));
    }

    public function update(Request $request, $id)
    {
        $data=DB::table('transaksi')->where('id',$id)->first();
        if($data){
            DB::table('detail_transaksi')
            ->where('no_transaksi',$data->no_transaksi)
            ->delete();

            $kode=$data->no_transaksi;
            $data_detail = [];
            $total=0;

            for ($i=0; $i < count($request->tindakan); $i++) { 
                $data_detail[]=[
                    'no_transaksi'=>$kode,
                    'nama_tindakan'=>$request->tindakan[$i],
                    'harga'=>$request->harga[$i],
                    'qty'=>$request->qty[$i],
                    'subtotal'=>$request->subtotal[$i],
                ];
                $total=$total+$request->subtotal[$i];
            }

        DB::table('detail_transaksi')->insert($data_detail);
        DB::table('transaksi')
        ->where('id',$id)
        ->update([
            'no_registrasikunjungan'=>$request->registrasi,
            'total_harga'=>$total,
        ]);
            return redirect('/billing')->with('status','Berhasil Memperbarui Data');
        }else{
            return redirect('/billing')->with('statuserror','Mengedit Data Gagal');   
        }
    }

    public function destroy($id)
    {
        $data=DB::table('transaksi')->where('id',$id)->first();
        if($data){
            DB::table('transaksi')
            ->where('no_transaksi',$data->no_transaksi)
            ->delete();
            DB::table('detail_transaksi')
            ->where('no_transaksi',$data->no_transaksi)
            ->delete();
            return redirect('/billing')->with('status','Berhasil Menghapus Data');
        }else{
            
            return redirect('/billing')->with('statuserror','Menghapus Data Gagal');
        }
    }
}
