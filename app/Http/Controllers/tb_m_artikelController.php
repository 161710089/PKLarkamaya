<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_m_artikel;
use App\tb_s_sekolah;

class tb_m_artikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $tb_m_artikel =  tb_m_artikel::all();
          $sekolahs =  tb_s_sekolah::all();
       
        return view('artikel.index',compact('tb_m_artikel','sekolahs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $tb_m_artikel =  tb_m_artikel::all();
          $sekolahs =  tb_s_sekolah::all();
       
        return view('artikel.index',compact('tb_m_artikel','sekolahs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            
        'judul' => 'required|max:255|unique:tb_m_artikel',
        'foto' => 'required',
        'deskripsi' => 'required',
        'waktu' => 'required|max:255',
        'slug' => 'required|max:255',


           ]);
        $tb_m_artikel = new tb_m_artikel;
        $tb_m_artikel->judul = $request->judul;
        $tb_m_artikel->foto = $request->foto;
        $tb_m_artikel->deskripsi = $request->deskripsi;
        $tb_m_artikel->waktu = $request->waktu;
        $tb_m_artikel->slug = $request->slug;
        $tb_m_artikel->id_user = $request->id_user;

        $tb_m_artikel->save();
        
    

        return redirect()->route('artikel.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sekolahs =  tb_s_sekolah::all();
        $tb_m_artikel = tb_m_artikel::findOrFail($id);
        return view('artikel.show',compact('tb_m_artikel','sekolahs'));  

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sekolahs =  tb_s_sekolah::all();
        $tb_m_artikel = tb_m_artikel::findOrFail($id);
        return view('artikel.edit',compact('tb_m_artikel','sekolahs'));  

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
        $request->validate([
            
        'judul' => 'required|max:255|unique:tb_m_artikel',
        'foto' => 'required',
        'deskripsi' => 'required',
        'waktu' => 'required|max:255',
        'slug' => 'required|max:255',


           ]);
        $tb_m_artikel =tb_m_artikel::findOrFail($id);
        $tb_m_artikel->judul = $request->judul;
        $tb_m_artikel->foto = $request->foto;
        $tb_m_artikel->deskripsi = $request->deskripsi;
        $tb_m_artikel->waktu = $request->waktu;
        $tb_m_artikel->slug = $request->slug;
        $tb_m_artikel->id_user = $request->id_user;

        $tb_m_artikel->save();
        
    

        return redirect()->route('artikel.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tb_m_artikel = tb_m_artikel::findOrFail($id);
        $tb_m_artikel->delete();
        return redirect()->route('artikel.index')->with('success','Pengajar Deleted');      

    }
}
