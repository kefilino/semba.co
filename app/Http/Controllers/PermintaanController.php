<?php

namespace App\Http\Controllers;

use App\Models\Permintaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class PermintaanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('is_admin')->only('');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->is_admin) {
            $data = DB::table('permintaan')->join('bantuan', 'permintaan.id_bantuan', '=', 'bantuan.id')
                    ->join('users', 'permintaan.id_peminta', '=', 'users.id')->get(
                        array('permintaan.id', 'nama_bantuan', 'pesan', 'status', 'name', 'kk') 
                    );
            return Inertia::render('Permintaan', ['data' => $data]);
        }
        $data = DB::table('permintaan')->join('bantuan', 'permintaan.id_bantuan', '=', 'bantuan.id')
                ->join('users', 'permintaan.id_peminta', '=', 'users.id')
                ->where('id_peminta', Auth::user()->id)
                ->get(array(
                    'permintaan.id',
                    'nama_bantuan',
                    'pesan',
                    'status',
                    'name',
                    'kk'
                ));
        return Inertia::render('Permintaan', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'id_bantuan' => ['required'],
        ])->validate();

        Permintaan::create($request->all());

        return redirect()->back()
            ->with('message', 'Permintaan berhasil dibuat.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if ($request->has('id')) {
            Permintaan::find($request->input('id'))->update($request->all());
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if ($request->has('id')) {
            Permintaan::find($request->input('id'))->delete();
            return redirect()->back();
        }
    }

    public function approve($id)
    {
        if (!is_null($id)) {
            Permintaan::where('id', $id)->update(['status' => true]);
            return redirect()->back();
        }
    }

    public function disapprove($id)
    {
        if (!is_null($id)) {
            Permintaan::where('id', $id)->update(['status' => false]);
            return redirect()->back();
        }
    }
}
