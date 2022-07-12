<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
class PesanController extends Controller
{
    public function create(Request $request)
    {
        $valida=$request->validate([
            'email'=>'required|email|min:14|max:30|unique:pesans',
            
            'name'=>'required|min:3|max:15',
            'pesan'=>'required|min:10|max:100',
            
        ]);

        $pes= new Pesan;
        $pes->name=$request->name;
        $pes->email=$request->email;
        $pes->pesan=$request->pesan;
      
        $pes->save();
        alert()->success('Terkirim','Kami Akan Membalas Pesan Kakak Secepanya Pastikan Email yang Kakak Masukkan Valid');
        return redirect()->back();
    }

    public function index()
    {
        $pesan=pesan::paginate(10);
        return view('jefan.pesan',compact('pesan'));
    }
    
}
