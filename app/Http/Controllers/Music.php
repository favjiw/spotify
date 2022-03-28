<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spotify;

class Music extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spotify = Spotify::all(); 
        return view('list', ['spotifys'=>$spotify]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $spotify = Spotify::create($input);

        
        if($request->hasFile('audio')){
            $request->file('audio')->move('audio/', $request->file('audio')->getClientOriginalName());
            $input->audio = $request->file('audio')->getClientOriginalName();
            $input->save();
        }

        
        return redirect('/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $spotify = Spotify::find($id);
        return view('detail', ['spotifys'=>$spotify]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $spotify = Spotify::find($id);
        return view('edit', ['spotifys'=>$spotify]);
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
        $spotify = Spotify::find($id)->update($request->all());
        return redirect('list')->with('success', ' Data has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $spotify = Spotify::find($id);
        $spotify->delete();
        return back();
    }
}
