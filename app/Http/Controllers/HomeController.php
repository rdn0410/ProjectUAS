<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect('/dosen');
    }

    public function dosen(){
        $dosen = \App\Models\dosen::paginate(5);
        //dd($dosen);
        return view('dosen.dosen', compact('dosen'));
    }

    public function create()
    {
        $mk = \App\Models\matkul::all();
        return view('dosen.createdosen', compact('mk'));
    }
    public function store(Request $request)
    {
        $post = new \App\Models\dosen;
        
        $post->matkul_id = $request->id_matkul;
        $post->nip = $request->nip;
        $post->slug = Str::slug($request->nip);
        $post->nama = $request->nama;
        $post->alamat = $request->alamat;

        $post->save();
        return redirect('/dosen');
    }

    public function detail(\App\Models\dosen $dosen)
    {
        $mk = \App\Models\matkul::all();
        return view('dosen.edit', compact('dosen', 'mk'));
    }

    public function update(\App\Models\dosen $dosen)
    {
        $dsn = request()->all();
        $dosen->update($dsn);
        return redirect('/dosen');
    }

    public function delete(\App\Models\dosen $dosen)
    {   
        $dosen->delete();
        return redirect('/dosen');
    }


}
