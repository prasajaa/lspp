<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use App\Models\Jadwal;
use App\Models\JenisSampah;
use App\Models\Kursus;
use App\Models\Penarikan;
use App\Models\Sampah;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KursusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kursus = Kursus::with('Jadwal')->get();
        $jadwal = Jadwal::all();
        return view('pages.Admin.kursus.index',[
            'kursus' => $kursus,
            'jadwal' => $jadwal,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */
    public function store(Request $request ,Kursus $sampah)
    {
        $data = $request->all();
        $data ['slug'] = Str::slug($request->title);

       $kursus= Kursus::create($data);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = $request->all();
        $data ['slug'] = Str::slug($request->title);

        $sampah = Kursus::findOrFail($id);
        $sampah->title = $data['title'];
        $sampah->keterangan = $data['keterangan'];

        $sampah->save();

        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sampah = Kursus::findOrFail($id);
        $sampah->delete();

        return back();
    }
}
