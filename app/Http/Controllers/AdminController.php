<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_s_sekolah;
use App\tb_m_pengajar;
use App\tb_m_siswa;
use App\tb_m_mata_pelajaran;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $tb_s_sekolah =  tb_s_sekolah::all();
       $jumlahguru= tb_m_pengajar::where('id')->count();
       $jumlahsiswa= tb_m_siswa::where('id')->count();
        return view('layouts.admin',compact('tb_s_sekolah','jumlahguru','jumlahsiswa'));
    }



public function dashboard()
    {

            $tb_m_pengajar = [];
         $tb_m_mata_pelajaran = [];
        foreach (tb_m_pengajar::all() as $pengajar) {
        array_push($tb_m_pengajar, $pengajar->nama);
        array_push($tb_m_mata_pelajaran, $pengajar->tb_m_mata_pelajaran->count());
                                                                }
       $sekolahs =  tb_s_sekolah::all();
       $jumlahguru= tb_m_pengajar::all()->count();
       $jumlahsiswa= tb_m_siswa::all()->count();
      
        return view('dashboard.index',compact('sekolahs','jumlahguru','jumlahsiswa','tb_m_mata_pelajaran','tb_m_pengajar'));
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
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
