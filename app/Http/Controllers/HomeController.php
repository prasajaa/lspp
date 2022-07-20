<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Penarikan;
use App\Models\Sampah;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(){

        return view('pages.welcome');
    }

    public function dashboard()
    {
        switch (Auth::user()->roles) {
            case 'admin':
                return redirect(route('admin.kursus.index'));
                break;

            default:
            return redirect(route('user.dashboard'));
                break;
        }
    }
}
