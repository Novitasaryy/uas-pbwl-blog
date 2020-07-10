<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photos;
use App\Post;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos['photos'] = Photos::all();
        return view('photos.index')->with($photos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photos.add');
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
            'photo_title' => 'required'
        ],
        [
            'photo_title.required' => 'Title wajib diisi'
        ]);

        Photos::create([
            'photo_date' => $request->photo_date,
            'photo_title' => $request->photo_title,
            'photo_text' => $request->photo_text,
            'post_id' => $request->post_id
        ]);

        return redirect('photos');
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
        $row = Photos::findOrFail($id);
        return view('photos.edit', compact('row'));
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
            'photo_title' => 'required'
        ],
        [
            'photo_title.required' => 'Title wajib diisi'
        ]);

        $row = Photos::findOrFail($id);
        $row->update([
            'photo_date' => $request->photo_date,
            'photo_title' => $request->photo_title,
            'photo_text' => $request->photo_text,
            'post_id' => $request->post_id
        ]);

        return redirect('photos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Photos::findOrFail($id);
        $row->delete();

        return redirect('photos');
    }
}
