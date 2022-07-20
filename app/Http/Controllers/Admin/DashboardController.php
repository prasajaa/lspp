<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use App\Models\Jadwal;
use App\Models\Kursus;
use App\Models\Penarikan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $kursus = Kursus::with('Jadwal')->get();
        $jadwal = Jadwal::all();
        return view('pages.Admin.kursus.index',[
            'kursus' => $kursus,
            'jadwal' => $jadwal,
        ]);
    }

}
