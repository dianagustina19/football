<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Tim;
use App\Models\Pemain;
use App\Models\Pertandingan;
use App\Models\Gol;
use DB;
use Carbon\Carbon;


class HomeController extends Controller
{
    //TIM
    public function index()
    {
        $pertandingan = Pertandingan::orderBy('tanggal_pertandingan','desc')
        ->limit(2)
        ->get();

        return view('index',compact('pertandingan'));
    }

    public function indextim()
    {
        $tim = Tim::all();

        return view('tim.tim',compact('tim'));
    }

    public function timcreate()
    {
        return view('tim.timcreate');
    }

    public function timcreatePost(Request $request)
    {
        $nama_tim = $request->nama_tim;

        $logo_tim = $request->logo_tim;
        $nama_file = time()."_".$logo_tim->getClientOriginalName();
		$tujuan_upload = 'data_foto';
		$logo_tim->move($tujuan_upload,$nama_file);
        $tahun_berdiri = $request->tahun_berdiri;
        $alamat = $request->alamat;
        $kota = $request->kota;

        $tim= Tim::insert([
            'nama_tim' => $nama_tim,
            'logo_tim' => $nama_file,
            'tahun_berdiri' => $tahun_berdiri,
            'alamat' => $alamat,
            'kota' => $kota
        ]);
    
        return redirect('tim');
    }
    
    public function edittim($id)
    {
        $tim = Tim::where('id',$id)->first();

        return view('tim.edittim',compact('tim'));
    }

    public function timupdate(Request $request)
    {
        $id = $request->id;
        $nama_tim = $request->nama_tim;
        $logo_tim_baru = $request->logo_tim_baru;
        $logo_tim_lama = $request->logo_tim_lama;
        $tahun_berdiri = $request->tahun_berdiri;
        $alamat = $request->alamat;
        $kota = $request->kota;

        if($logo_tim_baru != '')
        {
            $nama_file = time()."_".$logo_tim_baru->getClientOriginalName();
            $tujuan_upload = 'data_foto';
            $logo_tim_baru->move($tujuan_upload,$nama_file);
        }else
        {
            $nama_file = $logo_tim_lama;
        }

        Tim::where('id',$id)
        ->update([
            'nama_tim' => $nama_tim,
            'logo_tim' => $nama_file,
            'tahun_berdiri' => $tahun_berdiri,
            'alamat' => $alamat,
            'kota' => $kota
        ]);
        
        return redirect()->to('tim');
    }

    public function detail($id)
    {
        $tim = Tim::where('id',$id)->first();
        $pemain = Pemain::where('tim',$id)->get();

        return view('tim.detail',compact('tim','pemain'));
    }

    public function deletetim($id)
    {
        Tim::where('id',$id)->delete();
            
        return redirect('tim');
    }

    //PEMAIN
    public function indexpemain()
    {
        $pemain = DB::table('pemain_tim')
        ->leftjoin('tim','tim.id','=','pemain_tim.tim')
        ->get();

        return view('pemain.pemain',compact('pemain'));
    }

    public function pemaincreate()
    {
        $tim=Tim::all();

        return view('pemain.pemaincreate',compact('tim'));
    }

    public function pemaincreatePost(Request $request)
    {
        $nama_pemain = $request->nama_pemain;
        $tinggi_badan = $request->tinggi_badan;
        $berat_badan = $request->berat_badan;
        $posisi_pemain = $request->posisi_pemain;
        $nomor_punggung = $request->nomor_punggung;
        $tim_asal = $request->tim_asal;

        $cek = Pemain::where('tim',$tim_asal)
        ->where('nomor_punggung',$nomor_punggung)
        ->count();

        if ($cek == 1) {
         
            $data = ['status'=>false,'message'=>'Ups, Terjadi Kesalahan. Nomor Punggung Sudah Terpakai , Silakan Gunakan Nomor lain '];
            return \Redirect::back()->withErrors(['Ups, Terjadi Kesalahan. Nomor Punggung Sudah Terpakai , Silakan Gunakan Nomor lain']);
         }
         else
         {
            $pemain= Pemain::insert([
                'nama_pemain' => $nama_pemain,
                'tinggi_badan' => $tinggi_badan,
                'berat_badan' => $berat_badan,
                'posisi_pemain' => $posisi_pemain,
                'nomor_punggung' => $nomor_punggung,
                'tim' => $tim_asal
            ]);
        
            return redirect('pemain');
         }

      
    }

    //PERTANDINGAN
    public function pertandingan()
    {
        $pertandingan = Pertandingan::orderBy('tanggal_pertandingan','desc')->get();

        return view('pertandingan.pertandingan',compact('pertandingan'));
    }

    public function pertandingancreate()
    {
        $tim = Tim::all();
        $tim1 = Tim::all();

        return view('pertandingan.pertandingancreate',compact('tim','tim1'));
    }

    public function pertandingancreatePost(Request $request)
    {
        $waktu_pertandingan = $request->waktu_pertandingan;
        $tanggal_pertandingan = $request->tanggal_pertandingan;
        $tuan_rumah = $request->tuan_rumah;
        $tamu = $request->tamu;
        $logo_tamu = $request->logo_tamu;
        $nama_file = time()."_".$logo_tamu->getClientOriginalName();
		$tujuan_upload = 'data_foto';
		$logo_tamu->move($tujuan_upload,$nama_file);

        $pertandingan= Pertandingan::insert([
            'tanggal_pertandingan' => $tanggal_pertandingan,
            'waktu_pertandingan' => $waktu_pertandingan,
            'tuan_rumah' => $tuan_rumah,
            'tamu' => $tamu,
            'logo_tamu' => $nama_file,
            'status' => 1
        ]);
    
        return redirect('pertandingan');
    }

    public function pertandingandetail($id)
    {
        $pertandingan = Pertandingan::join('gol','gol.pertandingan_id','=','pertandingan.id')
        ->join('tim','tim.id','=','pertandingan.tuan_rumah')
        ->where('pertandingan.id',$id)
        ->first();

        $gol = Pertandingan::join('gol','gol.pertandingan_id','=','pertandingan.id')
        ->where('pertandingan.id',$id)
        ->get();

        return view('pertandingan.pertandingandetail',compact('pertandingan','gol'));
    }

    public function pertandinganedit($id)
    {
        $tim = Pemain::all();
        $pp = Tim::join('pertandingan','tuan_rumah','=','tim.id')
        ->where('pertandingan.id',$id)
        ->first();
        
        return view('pertandingan.pertandinganedit',compact('pp','tim'));
    }

    public function pertandinganeditPost(Request $request)
    {
        $pertandingan = Pertandingan::where('id',$request->pertandingan_id)
        ->update([
            'status' => 0,
            'skor_akhir' => $request->skor_akhir
        ]);

        $pemain_pencetak = $request->pemain_pencetak;
        $waktu_gol = $request->waktu_gol;
        $product = array();
        $count = count($pemain_pencetak);
        for($i = 0; $i < $count; $i++){ 
            $product[]  = array(
                'pemain_pencetak'=> $pemain_pencetak[$i],
                'waktu_gol' => $waktu_gol[$i],
                'pertandingan_id'=> $request->pertandingan_id );
            }
            DB::table('gol')->insert($product);

        return redirect('pertandingan');
    }

}
