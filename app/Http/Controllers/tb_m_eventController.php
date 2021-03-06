<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tb_m_event;
use App\tb_s_sekolah;
use App\tb_m_pengajar;
use App\tb_m_mata_pelajaran;
use File;
use Session;
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
          $tb_m_mata_pelajaran=tb_m_mata_pelajaran::all();
       
        return view('event.index',compact('tb_m_event','sekolahs','tb_m_mata_pelajaran'));

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
          $tb_m_pengajar=tb_m_pengajar::all();
          $tb_m_mata_pelajaran=tb_m_mata_pelajaran::all();
       
        return view('event.create',compact('tb_m_event','sekolahs','tb_m_pengajar','tb_m_mata_pelajaran'));

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
            
        'judul' => 'required|max:255',
        'foto' => 'required',
        'waktu' => 'required|max:255',
        'id_pengajar' => 'required',


           ]);
        $tb_m_event = new tb_m_event;
        $tb_m_event->judul = $request->judul;
        $tb_m_event->foto = $request->foto;
        $tb_m_event->waktu = $request->waktu;
        $tb_m_event->id_pengajar = $request->id_pengajar;

        $tb_m_event->save();
         if ($request->hasFile('foto')) {
            $file =$request->file('foto');
            $filename =str_random(6).'_'.$file->getClientOriginalName();
            $destinationPath =public_path().'/img/Fotoevent/';
            $uploadSucces =$file->move($destinationPath, $filename);
            $tb_m_event->foto =$filename;

            }
        $tb_m_event->save();
return redirect()->route('event.index');
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
        $tb_m_pengajar =tb_m_pengajar::all();
        return view('event.edit',compact('tb_m_event','sekolahs','tb_m_pengajar'));  

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
            
        'judul' => 'required|max:255',
        'foto' => 'required',
        'waktu' => 'required|max:255',
        'id_pengajar' => 'required',


           ]);
        $tb_m_event =tb_m_event::findOrFail($id);
        $tb_m_event->judul = $request->judul;
        $tb_m_event->foto = $request->foto;
        $tb_m_event->waktu = $request->waktu;
        $tb_m_event->id_pengajar = $request->id_pengajar;

        $tb_m_event->save();
        if ($request->hasFile('foto')) {
            // menambil foto yang diupload berikut ekstensinya
            $filename = null;
            $uploaded_foto = $request->file('foto');
            $extension = $uploaded_foto->getClientOriginalExtension();
            // membuat nama file random dengan extension
            $filename = md5(time()) . '.' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . '/img/Fotoevent';
            // memindahkan file ke folder public//img/Fotoevent
            $uploaded_foto->move($destinationPath, $filename);
            // hapus foto lama, jika ada
            if ($tb_m_event->foto) {
                $old_foto = $tb_m_event->foto;
                $filepath = public_path() . DIRECTORY_SEPARATOR . '/img/Fotoevent'
                . DIRECTORY_SEPARATOR . $tb_m_event->foto;
                try {
                File::delete($filepath);
                } catch (FileNotFoundException $e) {
                // File sudah dihapus/tidak ada
                    }
                }
            $tb_m_event->foto = $filename;
            $tb_m_event->save();
        }
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan $tb_m_event->nama_lengkap"
        ]);

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
        $tb_m_event = tb_m_event::findOrFail($id);
        $tb_m_event->delete();
        return redirect()->route('event.index')->with('success','Pengajar Deleted');
    }
    function deleteEventRecord($id){
        tb_m_event::where('id',$id)->delete();
    }
}
