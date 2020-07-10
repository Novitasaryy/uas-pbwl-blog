<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Photos;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $album['album'] = Album::all();
        return view('album.index')->with($album);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('album.add');
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
            'album_name' => 'required'
        ],
        [
            'album_name.required' => 'Nama wajib diisi'
        ]);

        Album::create([
            'album_name' => $request->album_name,
            'album_text' => $request->album_text,
            'photo_id' => $request->photo_id
        ]);

        return redirect('album');
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
        $row = Album::findOrFail($id);
        return view('album.edit', compact('row'));
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
            'album_name' => 'required'
        ],
        [
            'album_name.required' => 'Nama wajib diisi'
        ]);

        $row = Album::findOrFail($id);
        $row->update([
            'album_name' => $request->album_name,
            'album_text' => $request->album_text,
            'photo_id' => $request->photo_id
        ]);

        return redirect('album');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Album::findOrFail($id);
        $row->delete();

        return redirect('album');
    }
}
