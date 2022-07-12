<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Terbaru;
use App\Models\Terlaris;
use App\Models\Tentang;
use App\Models\Baru;
use App\Models\Populer;
class LandingController extends Controller
{
    public function index()
    { 
        $baru=Terbaru::paginate(6);
        $laris=Terlaris::paginate(4);
        $tent=Tentang::all();
        $barutu=Baru::all();
        $popu=Populer::all();
        return view('landingpage' ,compact('baru','laris','tent','barutu','popu'));
    }
}
