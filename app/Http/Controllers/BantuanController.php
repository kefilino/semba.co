<?php

namespace App\Http\Controllers;

use App\Models\Bantuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class BantuanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('is_admin')->only(['store', 'edit', 'update', 'destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Bantuan::all();
        return Inertia::render('Bantuan', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return Inertia::render('CreateBantuan');
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
        $request->validate([
            'nama_bantuan' => 'required',
            'keterangan' => 'required',
            'persediaan' => 'required',
            'foto' => 'required'
        ]);

        Bantuan::create($request->all());

        return redirect()->back()
            ->with('message', 'Bantuan Berhasil Ditambahkan!');
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
        return Inertia::render('Bantuan');
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
        return Inertia::render('EditBantuan');
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
        $request->validate([
            'nama_bantuan' => 'required',
            'keterangan' => 'required',
            'persediaan' => 'required',
            'foto' => 'required'
        ]);
        Bantuan::update($request->all());

        return redirect()->back()
            ->with('message', 'Bantuan Berhasil Diupdate!');
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
        Bantuan::delete();

        return redirect()->back()
            ->with('message', 'Bantuan Berhasil Dihapus!');
    }
}
