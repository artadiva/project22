<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterDiet;

class MasterDietController extends Controller
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
        $MasterDiets = MasterDiet::all();

        return view('master_diet.master_diet', compact('MasterDiets'));
    }

    public function create()
    {
        return view('master_diet.input_master_diet');
    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            //unique : nama tabel
            'kode_diet' => 'required|unique:master_diets',
            'nama_diet' => 'required|unique:master_diets',
            'keterangan_diet' => '',
            // Validasi lainnya untuk kolom lain
        ]);


        MasterDiet::create($validatedData);

        return redirect()->route('master_diet.index')->with('success', 'MasterDiets created successfully.');
    }

    public function edit(Request $request, $id)
    {
        $MasterDiets = MasterDiet::find($id);
        $update = true;
        return view('master_diet.edit_master_diet', compact('MasterDiets','update'));
    }

    public function update(Request $request, $id)
    {
        
        $MasterDiets = MasterDiet::find($id);
        
        $validatedData = [
            'kode_diet' => $request->kode_diet,
            'nama_diet' => $request->nama_diet,
            'keterangan_diet' => $request->keterangan_diet,
        ];
        // dd($validatedData);
        $MasterDiets->update($validatedData);

        return redirect()->route('master_diet.index')->with('success', 'MasterDiets updated successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $MasterDiets = MasterDiet::find($id);
        $MasterDiets->delete();

        return redirect()->route('master_diet.index')->with('success', 'MasterDiets deleted successfully.');
    }
    public function select2Options(Request $request)
    {
        $searchTerm = $request->input('q');

        $query = MasterDiet::query();
        if ($searchTerm) {
            $query->where('nama_diet', 'LIKE', '%' . $searchTerm . '%');
        }

        $options = $query->select('id', 'nama_diet as text')->get();

        return response()->json(['results' => $options]);
    }
}
