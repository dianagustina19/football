<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tim;
use App\Models\Pemain;

class HomeController extends Controller
{
    //TIM
    public function index()
    {
        return view('index');
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

        return view('tim.detail',compact('tim'));
    }

    public function deletetim($id)
    {
        Tim::where('id',$id)->delete();
            
        return redirect('tim');
    }

    //PEMAIN
    public function indexpemain()
    {
        $pemain = Pemain::all();

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
