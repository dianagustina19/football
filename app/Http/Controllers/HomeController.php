<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tim;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function indextim()
    {
        $tim = Tim::all();

        return view('tim',compact('tim'));
    }

    public function timcreate()
    {
        return view('timcreate');
    }

    public function timcreatePost(Request $request)
    {
        $nama_tim = $request->nama_tim;
        $logo_tim = $request->logo_tim;
        $tahun_berdiri = $request->tahun_berdiri;
        $alamat = $request->alamat;
        $kota = $request->kota;


        $tim= Tim::insert([
            'nama_tim' => $nama_tim,
            'logo_tim' => $logo_tim,
            'tahun_berdiri' => $tahun_berdiri,
            'alamat' => $alamat,
            'kota' => $kota
        ]);
    
        return redirect('tim');
    }
    
    public function edittim($id)
    {
        $tim = Tim::where('id',$id)->first();

        return view('edittim',compact('tim'));
    }

    public function deletetim($id)
    {
        Tim::where('id',$id)->delete();
            
        return redirect('/tim');
    }

}
