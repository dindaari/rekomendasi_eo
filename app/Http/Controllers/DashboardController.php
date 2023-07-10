<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use App\Models\Perusahaan;


class DashboardController extends Controller {

    public function index() {
        
        $perusahaan= Perusahaan::count();
        $kriteria= Kriteria::count();
        $alternatif= Alternatif::count();
        

        return view('main',[
            'title' => 'Dashboard'
        ], compact('perusahaan','kriteria','alternatif'))
        ;

        

        
    }
    
}
