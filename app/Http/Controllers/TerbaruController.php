<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Terbaru;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class TerbaruController extends Controller
{
    public function index()
    {
        $tert=Terbaru::paginate(5);
        return view('jefan.indexterbaru',compact('tert'));
    }
    public function create()
    {
        return view("jefan.terbarucreate");
    }
    public function store(Request $request)
    {
        $ter=new Terbaru;

        if($request->hasFile('foto'))
        
        {
            $file= $request->file('foto');
            $file->move(public_path().'/jefan/images',$file->getClientOriginalName());
            $bordir_iamge=$file->getClientOriginalName();
            $ter->foto=$bordir_iamge;
        }
        $ter->judul=$request->judul;
        $ter->isi=$request->isi;

       

        $ter->save();
        alert()->success('Sukses','Produk Bordir Terbaru Berhasil Disimpan');
        return redirect()->back();
    }
public function edit(Request $request, $id)
{
    $bordir=Terbaru::find($id);
    return view('jefan.editterbaru',compact('bordir'));
}
public function update(Request $request, $id)
{
     $tru=Terbaru::find($id);
     if($request->hasFile('foto'))
     {
        


        if( $tru->foto !=='')
        {
           
             //hapus foto lama
             $exist =Storage::disk('foto')->exists($tru->foto);
             if(isset($tru->foto) && $exist)
             {
                
                $delete=Storage::disk('foto')->delete($tru->foto);
             }

             
         //tambahakan foto baru
            $file= $request->file('foto');
            $file->move(public_path().'/jefan/images',$file->getClientOriginalName());
            $bordir_iamge=$file->getClientOriginalName();
            $tru->foto=$bordir_iamge;
            }
        }
        $tru->judul=$request->judul;
        $tru->isi=$request->isi;
        
        $tru->update();
        alert()->success('Sukses','Produk Bordir Terbaru Berhasil Diupdate');
        return redirect()->back();
     }

     public function hapus($id)
     {
        $tr=Terbaru::find($id);
       $pty=public_path(). '/jefan/images/' .$tr->foto;
       unlink($pty);
        $tr->delete();
        alert()->success('Sukses','Produk Bordir Terbaru Berhasil Dihapus');
        return redirect()->back();
     }
}


