<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_m_event;
use App\tb_s_sekolah;
class tb_m_eventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $tb_m_event =  tb_m_event::all();
          $sekolahs =  tb_s_sekolah::all();
       
        return view('event.index',compact('tb_m_event','sekolahs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           $tb_m_event =  tb_m_event::all();
          $sekolahs =  tb_s_sekolah::all();
       
        return view('event.index',compact('tb_m_event','sekolahs'));

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
            
        'judul' => 'required|max:255|unique:tb_m_event',
        'foto' => 'required',
        'deskripsi' => 'required',
        'waktu' => 'required|max:255',
        'slug' => 'required|max:255',


           ]);
        $tb_m_event = new tb_m_event;
        $tb_m_event->judul = $request->judul;
        $tb_m_event->foto = $request->foto;
        $tb_m_event->deskripsi = $request->deskripsi;
        $tb_m_event->waktu = $request->waktu;
        $tb_m_event->slug = $request->slug;
        $tb_m_event->id_user = $request->id_user;

        $tb_m_event->save();
        
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
        $tb_m_event = tb_m_event::findOrFail($id);
        return view('event.show',compact('tb_m_event','sekolahs'));  

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
        $tb_m_event = tb_m_event::findOrFail($id);
        return view('event.edit',compact('tb_m_event','sekolahs'));  

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
            
        'judul' => 'required|max:255|unique:tb_m_event',
        'foto' => 'required',
        'deskripsi' => 'required',
        'waktu' => 'required|max:255',
        'slug' => 'required|max:255',


           ]);
        $tb_m_event =tb_m_event::findOrFail($id);
        $tb_m_event->judul = $request->judul;
        $tb_m_event->foto = $request->foto;
        $tb_m_event->deskripsi = $request->deskripsi;
        $tb_m_event->waktu = $request->waktu;
        $tb_m_event->slug = $request->slug;
        $tb_m_event->id_user = $request->id_user;

        $tb_m_event->save();
        
    

        return redirect()->route('event.index');

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
