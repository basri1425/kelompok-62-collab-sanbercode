<?php

namespace App\Http\Controllers;

use App\Pertanyaan;
use App\Tag;
use Illuminate\Http\Request;
use Auth;
use Str;

class PertanyaanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diskusi = Pertanyaan::All();
        return view ('pertanyaan.index', compact('diskusi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('pertanyaan.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $diskusi = new Pertanyaan;
        $diskusi->user_id = Auth::user()->id;
        $diskusi->judulPertanyaan = $request->judulPertanyaan;
        $diskusi->isiPertanyaan = $request->isiPertanyaan;
        $diskusi->slug = Str::slug($request->judulPertanyaan);
  
        $diskusi->save();
        $diskusi->tags()->sync($request->tags);
        
        return redirect('/pertanyaan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shows = Pertanyaan::find($id);
        return view('pertanyaan.show', compact('shows'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        return view('pertanyaan.edit', compact('pertanyaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $diskusi = Pertanyaan::find($id);
        $diskusi->user_id = Auth::user()->id;
        $diskusi->judulPertanyaan = $request->judulPertanyaan;
        $diskusi->isiPertanyaan = $request->isiPertanyaan;
        $diskusi->slug = Str::slug($request->judulPertanyaan);
  
        $diskusi->save();
        
        return redirect('/pertanyaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pertanyaan $pertanyaan)
    {
        //
    }
}
