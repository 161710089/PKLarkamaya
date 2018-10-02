<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_s_sekolah;
use App\tb_m_siswa;
use App\tb_m_pengajar;
use App\tb_m_mata_pelajaran;
use App\tb_m_artikel;
use App\tb_m_event;
class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tb_m_mata_pelajaran=tb_m_mata_pelajaran::all();
        $tb_m_siswa=tb_m_siswa::all();
        $tb_s_sekolah=tb_s_sekolah::all();
        $tb_m_pengajar=tb_m_pengajar::all();
        $jumlahguru= tb_m_pengajar::all();
        $tb_m_artikel=tb_m_artikel::orderBy('created_at','desc')->paginate(6);
         $tb_m_event =tb_m_event::orderBy('waktu','desc')->get();
       
        return view('frontend.index' ,compact('tb_m_siswa','tb_m_pengajar','tb_s_sekolah','tb_m_mata_pelajaran','jumlahguru','tb_m_artikel','tb_m_event'));
    }

    public function contact()
    {
        $tb_m_mata_pelajaran=tb_m_mata_pelajaran::all();
        $tb_m_siswa=tb_m_siswa::all();
        $tb_s_sekolah=tb_s_sekolah::all();
        $tb_m_pengajar=tb_m_pengajar::all();
        $jumlahguru= tb_m_pengajar::all();
        $tb_m_event =tb_m_event::all();
        
        return view('frontend.contact' ,compact('tb_m_siswa','tb_m_pengajar','tb_s_sekolah','tb_m_mata_pelajaran','jumlahguru','tb_m_event'));
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
