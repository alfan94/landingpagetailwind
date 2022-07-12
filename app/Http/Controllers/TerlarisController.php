<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Terlaris;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
class TerlarisController extends Controller
{
    public function index()
    {
        $laris=Terlaris::paginate(10);
        return view('jefan.indexterlaris',compact('laris'));
    }
    public function create()
    {
        return view("jefan.terlariscreate");
    }
    public function store(Request $request)
    {
        $ter=new Terlaris;

        if($request->hasFile('foto'))
        
        {
            $file= $request->file('foto');
            $file->move(public_path().'/jefan/terlaris',$file->getClientOriginalName());
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
    $bordir=Terlaris::find($id);
    return view('jefan.editterlaris',compact('bordir'));
}
public function update(Request $request, $id)
{
     $tru=Terlaris::find($id);
     if($request->hasFile('foto'))
     {
        


        if( $tru->foto !=='')
        {
           
             //hapus f
             $exist =Storage::disk('foto')->exists($tru->foto);
             if(isset($tru->foto) && $exist)
             {
                $delete=Storage::disk('foto')->delete($tru->foto);
             }

             
         //tambhakn foto baru
            $file= $request->file('foto');
            $file->move(public_path().'/jefan/terlaris',$file->getClientOriginalName());
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
        $tr=Terlaris::find($id);
       $pty=public_path(). '/jefan/terlaris/' .$tr->foto;
       unlink($pty);
        $tr->delete();
        alert()->success('Sukses','Produk Bordir Terbaru Berhasil Dihapus');
        return redirect()->back();
     }
}
