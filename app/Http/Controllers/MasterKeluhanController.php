<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterKeluhan;

class MasterKeluhanController extends Controller
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
        $MasterKeluhans = MasterKeluhan::all();

        return view('master_keluhan.master_keluhan', compact('MasterKeluhans'));
    }

    public function create()
    {

        return view('master_keluhan.input_master_keluhan');
    }

    public function store(Request $request)
    {
    // dd($request->all());
        $validatedData = $request->validate([
            //unique : nama tabel
            'kode_keluhan' => 'required|unique:master_keluhans',
            'nama_keluhan' => 'required|unique:master_keluhans',
            'keterangan_keluhan' => '',
            // Validasi lainnya untuk kolom lain
        ]);
        // $validatedData = [
        //     'kode_keluhan' => $request->kode_keluhan,
        //     'nama_keluhan' => $request->nama_keluhan,
        //     'keterangan_keluhan' => $request->keterangan_keluhan,
        // ];
      

        MasterKeluhan::create($validatedData);

        return redirect()->route('master_keluhan.index')->with('success', 'MasterKeluhans created successfully.');
    }

    public function edit(Request $request, $id)
    {
        $MasterKeluhans = MasterKeluhan::find($id);
        $update = true;
        return view('master_keluhan.edit_master_keluhan', compact('MasterKeluhans','update'));
    }

    public function update(Request $request, $id)
    {
        
        $MasterKeluhans = MasterKeluhan::find($id);
        
        $validatedData = [
            'kode_keluhan' => $request->kode_keluhan,
            'nama_keluhan' => $request->nama_keluhan,
            'keterangan_keluhan' => $request->keterangan_keluhan,
        ];
        // dd($validatedData);
        $MasterKeluhans->update($validatedData);

        return redirect()->route('master_keluhan.index')->with('success', 'MasterKeluhans updated successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $MasterKeluhans = MasterKeluhan::find($id);
        $MasterKeluhans->delete();

        return redirect()->route('master_keluhan.index')->with('success', 'MasterKeluhans deleted successfully.');
    }
    public function select2Options(Request $request)
    {
        $searchTerm = $request->input('q');

        $query = MasterKeluhan::query();
        if ($searchTerm) {
            $query->where('nama_keluhan', 'LIKE', '%' . $searchTerm . '%');
        }

        $options = $query->select('id', 'nama_keluhan as text')->get();

        return response()->json(['results' => $options]);
    }
}
