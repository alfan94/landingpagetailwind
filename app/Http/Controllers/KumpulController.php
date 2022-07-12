<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tentang;
use App\Models\Baru;
use App\Models\Populer;
use RealRashid\SweetAlert\Facades\Alert;
class KumpulController extends Controller
{
    public function tentangtampil()
    {
         $ten=Tentang::all();
         return view('jefan.isi.tentang',compact('ten'));
    }
    public function tentangedit($id)
    {
        $ter=Tentang::find($id);
        return view('jefan.isi.edittentang',compact('ter'));
    }
    public function tentangupdate(Request $request,$id)
    {
        $valid=$request->validate([
            'judul'=>'required',
            'keterangan'=>'required',
            'isi'=>'required',
            'isi1'=>'required',
            'isi2'=>'required',
            'isi3'=>'required',
        ]);

        $tery=Tentang::find($id);
        $tery->judul=$request->judul;
        $tery->keterangan=$request->keterangan;
        $tery->isi=$request->isi;
        $tery->isi1=$request->isi1;
        $tery->isi2=$request->isi2;
        $tery->isi3=$request->isi3;
        $tery->update();
        alert()->success('Succes','Tentang Jefan Berhasil Diupdate');
        return redirect()->back();
    }


    //populer
    public function populertampil()
    {
         $ten=Populer::all();
         return view('jefan.isi.populer',compact('ten'));
    }
    public function populeredit($id)
    {
        $ter=Populer::find($id);
        return view('jefan.isi.editpopuler',compact('ter'));
    }
    public function populerupdate(Request $request,$id)
    {
        $valid=$request->validate([
            'judul'=>'required',
            'keterangan'=>'required',
            'isi'=>'required',
        ]);

        $tery=Populer::find($id);
        $tery->judul=$request->judul;
        $tery->keterangan=$request->keterangan;
        $tery->isi=$request->isi;
        $tery->isi1=$request->isi1;
        $tery->isi2=$request->isi2;
        $tery->isi3=$request->isi3;
        $tery->update();
        alert()->success('Succes','Produk Populer Jefan Berhasil Diupdate');
        return redirect()->back();
    }




    //baru


    public function barutampil()
    {
         $ten=Baru::all();
         return view('jefan.isi.baru',compact('ten'));
    }
    public function baruedit($id)
    {
        $tere=Populer::find($id);
        return view('jefan.isi.editbaru',compact('tere'));
    }
    public function baruupdate(Request $request,$id)
    {
        $valid=$request->validate([
            'judul'=>'required',
            'keterangan'=>'required',
            'isi'=>'required',
        ]);

        $tery=Baru::find($id);
        $tery->judul=$request->judul;
        $tery->keterangan=$request->keterangan;
        $tery->isi=$request->isi;
        $tery->update();
        alert()->success('Succes','Produk Populer Jefan Berhasil Diupdate');
        return redirect()->back();
    }
}
