<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Biodata;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // query builder
        // $biodata = DB::table('biodatas')->get();

        //model::class 
        $biodata = Biodata::all();

        //dump($biodata);

        //folder.namaFile, ['tampungan data'=>nama variable yang mau dikirim]
        return view('biodata.index', ['biodata'=>$biodata]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('biodata.create');
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
            //unique:namaTableDatabase,namaFieldDatabase
            'nama_bio' => 'required',
            'umur_bio' => 'required|max:3',
            'alamat_bio' => 'required',
        ],
        [
            //'namaField.unique'=>'';
            'nama_bio.required'=>'Nama Tidak Boleh Kosong! Mohon Diisi!',
            'umur_bio.required'=>'Umur Tidak Boleh Kosong! Mohon Diisi!',
            'alamat_bio.required'=>'Alamat Tidak Boleh Kosong! Mohon Diisi!',
    ]);
        /* 
        *note $biodata->namaDatabase = $request->namaForm*

        $biodata = new Biodata;
        $biodata->nama_bio = $request->nama_bio;
        $biodata->umur_bio = $request->umur_bio;
        $biodata->alamat_bio = $request->alamat_bio;

        $biodata->save();
        */
        
        //atau

        /*
        *note $biodata->namaDatabase = $request->namaForm*

        Biodata::create([
            'nama_bio'=> $request->nama_bio,
            'umur_bio'=> $request->umur_bio,
            'alamat_bio'=> $request->alamat_bio,
        ]);
        */

        //atau

        //nama variable dalam form dan yang ada di database harus sama
        Biodata::create($request->all());

        return redirect('/biodata')->with('status','Biodata Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Biodata $biodata)
    {
        
        return view('biodata.retrieve', compact('biodata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Biodata $biodata)
    {
        return view('biodata.edit', compact('biodata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Biodata $biodata)
    {

        $request->validate([
            //unique:namaTableDatabase,namaFieldDatabase
            'nama_bio' => 'required',
            'umur_bio' => 'required|max:3',
            'alamat_bio' => 'required',
        ],
        [
            //'namaField.unique'=>'';
            'nama_bio.required'=>'Nama Tidak Boleh Kosong! Mohon Diisi!',
            'umur_bio.required'=>'Umur Tidak Boleh Kosong! Mohon Diisi!',
            'alamat_bio.required'=>'Alamat Tidak Boleh Kosong! Mohon Diisi!',
        ]);

        Biodata::where('id', $biodata->id)
                ->update([
                    'nama_bio'=>$request->nama_bio,
                    'umur_bio'=>$request->umur_bio,
                    'alamat_bio'=>$request->alamat_bio,
                ]);
        return redirect('/biodata')->with('status','Biodata Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Biodata $biodata)
    {
        Biodata::destroy($biodata->id);
        //untuk menulis query
        //mereset auto increment setelah menghapus salah satu data
        DB::statement("ALTER TABLE biodatas AUTO_INCREMENT = 1");

        return redirect('/biodata')->with('status','Biodata Berhasil Dihapus');
    }
}
