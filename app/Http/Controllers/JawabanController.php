<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Str;
use App\Pertanyaan;
use App\Tag;
use App\Jawaban;

class JawabanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function tambahJawab(Request $request, Jawaban $jawaban){
        $jawab = new Jawaban;
        $jawab->user_id = Auth::user()->id;
        $jawab->jawab = $request->jawab;

        $pertanyaan->jawabans()->save($jawab);
        return redirect('/pertanyaan');

    }
}
