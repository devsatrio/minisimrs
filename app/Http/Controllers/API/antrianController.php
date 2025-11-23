<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class antrianController extends Controller
{

    public function getdokter() {
        $data = DB::table('dokter')
        ->get();
        
        return response()->json(['sts'=>true,'msg' => 'Data retrieved', 'data' => $data]);
    }


    public function getdokterjadwal(Request $request) {
        if($request->has('tgl') && $request->has('kdpoli')){
            $tanggal = $request->tgl;
            $kdpoli = $request->kdpoli;
            $hari_ini='';

            $timestamp = strtotime($tanggal);
            $dayOfWeek = date('D', $timestamp);

            switch($dayOfWeek){
                case 'Sun':
                    $hari_ini = "minggu";
                break;
        
                case 'Mon':			
                    $hari_ini = "senin";
                break;
        
                case 'Tue':
                    $hari_ini = "selasa";
                break;
        
                case 'Wed':
                    $hari_ini = "rabu";
                break;
        
                case 'Thu':
                    $hari_ini = "kamis";
                break;
        
                case 'Fri':
                    $hari_ini = "jumat";
                break;
        
                case 'Sat':
                    $hari_ini = "sabtu";
                break;
                
                default:
                    $hari_ini = "Tidak di ketahui";		
                break;
	        }

            $data = DB::table('jadwal_dokter')
            ->select(DB::raw('jadwal_dokter.*,dokter.nama_dokter,poli.nama_poli'))
            ->leftjoin('dokter','dokter.kode_dokter','=','jadwal_dokter.kode_dokter')
            ->leftjoin('poli','poli.kode_poli','=','jadwal_dokter.kode_poli')
            ->where('jadwal_dokter.hari_praktek','=',$hari_ini)
            ->where('jadwal_dokter.kode_poli','=',$kdpoli)
            ->groupby('jadwal_dokter.kode_dokter')
            ->get();
        
            return response()->json(['sts'=>true,'msg' => 'Data retrieved', 'data' => $data]);
        }else{
            return response()->json(['sts'=>false,'msg' => 'Tidak menemukan jadwal']);
        }
    }

    public function getjampraktek(Request $request) {
        if($request->has('tgl') && $request->has('kdpoli') && $request->has('kddokter')){
            $tanggal = $request->tgl;
            $kdpoli = $request->kdpoli;
            $kddokter = $request->kddokter;
            $hari_ini='';

            $timestamp = strtotime($tanggal);
            $dayOfWeek = date('D', $timestamp);

            switch($dayOfWeek){
                case 'Sun':
                    $hari_ini = "minggu";
                break;
        
                case 'Mon':			
                    $hari_ini = "senin";
                break;
        
                case 'Tue':
                    $hari_ini = "selasa";
                break;
        
                case 'Wed':
                    $hari_ini = "rabu";
                break;
        
                case 'Thu':
                    $hari_ini = "kamis";
                break;
        
                case 'Fri':
                    $hari_ini = "jumat";
                break;
        
                case 'Sat':
                    $hari_ini = "sabtu";
                break;
                
                default:
                    $hari_ini = "Tidak di ketahui";		
                break;
	        }

            $data = DB::table('jadwal_dokter')
            ->select(DB::raw('jadwal_dokter.*,dokter.nama_dokter,poli.nama_poli'))
            ->leftjoin('dokter','dokter.kode_dokter','=','jadwal_dokter.kode_dokter')
            ->leftjoin('poli','poli.kode_poli','=','jadwal_dokter.kode_poli')
            ->where('jadwal_dokter.hari_praktek','=',$hari_ini)
            ->where('jadwal_dokter.kode_poli','=',$kdpoli)
            ->where('jadwal_dokter.kode_dokter','=',$kddokter)
            ->get();
        
            return response()->json(['sts'=>true,'msg' => 'Data retrieved', 'data' => $data]);
        }else{
            return response()->json(['sts'=>false,'msg' => 'Tidak menemukan jadwal']);
        }
    }
    public function getpoli() {
        $data = DB::table('poli')
        ->get();
        
        return response()->json(['sts'=>true,'msg' => 'Data retrieved', 'data' => $data]);
    }

    public function getpenjab() {
        $data = DB::table('penjamin')
        ->get();
        
        return response()->json(['sts'=>true,'msg' => 'Data retrieved', 'data' => $data]);
    }

    public function jadwal(Request $request) {
        $final_data=[];
        $arr_hari = ['senin','selasa','rabu','kamis','jumat','sabtu','minggu'];
        $data = DB::table('jadwal_dokter')
        ->select(DB::raw('jadwal_dokter.*,dokter.nama_dokter,poli.nama_poli'))
        ->leftjoin('dokter','dokter.kode_dokter','=','jadwal_dokter.kode_dokter')
        ->leftjoin('poli','poli.kode_poli','=','jadwal_dokter.kode_poli');
        if($request->has('kdpoli')){
            if($request->kdpoli!=''){
                if($request->kdpoli!='semua'){
                    $data = $data->where('jadwal_dokter.kode_poli',$request->kdpoli);
                }
            }
        }
        $data=$data->orderby('jadwal_dokter.kode_dokter','asc')
        ->get();
        
        for ($i=0; $i < count($arr_hari); $i++) {
            foreach ($data as $row) {
                if($row->hari_praktek==$arr_hari[$i]){
                    $final_data[]=[
                        "id"=>$row->id,
                        "kode_dokter"=>$row->kode_dokter,
                        "kode_poli"=>$row->kode_poli,
                        "hari_praktek"=>$row->hari_praktek,
                        "jam_prakter"=>$row->jam_prakter,
                        "nama_dokter"=>$row->nama_dokter,
                        "nama_poli"=>$row->nama_poli
                    ];
                }
            }
        }
        
        return response()->json(['sts'=>true,'msg' => 'Data retrieved', 'data' => $final_data]);
    }

    public function getkunjungan($norm) {
        $data=DB::table('kunjungan')
        ->select('kunjungan.*','pasien.nama_pasien','poli.nama_poli','dokter.nama_dokter','penjamin.nama_penjamin')
        ->leftjoin('pasien','pasien.no_rm','=','kunjungan.no_rm')
        ->leftjoin('poli','poli.kode_poli','=','kunjungan.poli')
        ->leftjoin('dokter','dokter.kode_dokter','=','kunjungan.kode_dokter')
        ->leftjoin('penjamin','penjamin.id','=','kunjungan.penjamin_id')
        ->where('kunjungan.no_rm',$norm)
        ->orderby('kunjungan.id','desc')
        ->get();
        return response()->json(['sts'=>true,'msg' => 'Data retrieved', 'data' => $data]);

    }


    public function addkunjungan(Request $request)
    {
        $kode = $this->generatekode();
        $nomor_antrian=1;
        $nama_dokter='';
        $nama_poli='';
        $cari_nomor_antri = DB::table('kunjungan')
        ->where('poli',$request->poli)
        ->where('tanggal_kunjungan',$request->tanggal)
        ->where('jam_kunjungan',$request->jam_praktek)
        ->where('kode_dokter',$request->dokter)
        ->orderby('no_antrian','desc')
        ->limit(1)
        ->get();

        if(count($cari_nomor_antri)>0){
            foreach ($cari_nomor_antri as $row_cari_nomor_antri) {
            $nomor_antrian = $row_cari_nomor_antri->no_antrian+1;
            }
        }

        $data_poli = DB::table('poli')
        ->where('kode_poli',$request->poli)
        ->first();

        $data_dokter = DB::table('dokter')
        ->where('kode_dokter',$request->dokter)
        ->first();

        if($data_poli){
            $nama_poli=$data_poli->nama_poli;
        }

        if($data_dokter){
            $nama_dokter=$data_dokter->nama_dokter;
        }

        $data = DB::table('kunjungan')
        ->insert([
            'no_registrasikunjungan'=>$kode,
            'no_rm'=>$request->no_rm,
            'tanggal_kunjungan'=>$request->tanggal,
            'jam_kunjungan'=>$request->jam_praktek,
            'kode_dokter'=>$request->dokter,
            'poli'=>$request->poli,
            'no_antrian'=>$nomor_antrian,
            'instalasi'=>'Rawat Jalan',
            'penjamin_id'=>$request->penjamin,
        ]);
        $res = [
            'no_antri'=>$nomor_antrian,
            'dokter'=>$nama_dokter,
            'poli'=>$nama_poli,
            'tanggal'=>$request->tanggal,
            'jam'=>$request->jam_praktek,
        ];
        if($data){
            return response()->json(['sts'=>true,'msg' => 'Data Berhasil Disimpan','data'=>$res]);
        }
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

    public function detailkunjungan($kode){
        $data =DB::table('kunjungan')
        ->select('kunjungan.*','pasien.nama_pasien','poli.nama_poli','dokter.nama_dokter','penjamin.nama_penjamin')
        ->leftjoin('pasien','pasien.no_rm','=','kunjungan.no_rm')
        ->leftjoin('poli','poli.kode_poli','=','kunjungan.poli')
        ->leftjoin('dokter','dokter.kode_dokter','=','kunjungan.kode_dokter')
        ->leftjoin('penjamin','penjamin.id','=','kunjungan.penjamin_id')
        ->where('kunjungan.no_registrasikunjungan',$kode)
        ->orderby('kunjungan.id','desc')
        ->first();
        $data_billing=[];
        if($data){
            $data_billing = DB::table('detail_transaksi')
            ->select(DB::raw('detail_transaksi.*,transaksi.no_registrasikunjungan'))
            ->leftjoin('transaksi','transaksi.no_transaksi','=','detail_transaksi.no_transaksi')
            ->where('transaksi.no_registrasikunjungan',$data->no_registrasikunjungan)
            ->get();
        }
        return response()->json(['sts'=>true,'msg' => 'Data retrieved', 'data' => $data, 'data_billing' => $data_billing]);
    }
}
