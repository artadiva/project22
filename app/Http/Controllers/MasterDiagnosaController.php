<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterDiagnosa;

class MasterDiagnosaController extends Controller
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
        $MasterDiagnosas = MasterDiagnosa::all();

        return view('master_diagnosa.master_diagnosa', compact('MasterDiagnosas'));
    }

    public function create()
    {
        return view('master_diagnosa.input_master_diagnosa');
    }

    public function store(Request $request)
    {
    // dd($request->all());
        $validatedData = $request->validate([
            //unique : nama tabel
            'kode_diagnosa' => 'required|unique:master_diagnosas',
            'nama_diagnosa' => 'required|unique:master_diagnosas',
            'keterangan_diagnosa' => '',
            // Validasi lainnya untuk kolom lain
        ]);
        // $validatedData = [
        //     'kode_diagnosa' => $request->kode_diagnosa,
        //     'nama_diagnosa' => $request->nama_diagnosa,
        //     'keterangan_diagnosa' => $request->keterangan_diagnosa,
        // ];
      

        MasterDiagnosa::create($validatedData);

        return redirect()->route('master_diagnosa.index')->with('success', 'MasterDiagnosas created successfully.');
    }

    public function edit(Request $request, $id)
    {
        $MasterDiagnosas = MasterDiagnosa::find($id);
        $update = true;
        return view('master_diagnosa.edit_master_diagnosa', compact('MasterDiagnosas','update'));
    }

    public function update(Request $request, $id)
    {
        
        $MasterDiagnosas = MasterDiagnosa::find($id);
        
        $validatedData = [
            'kode_diagnosa' => $request->kode_diagnosa,
            'nama_diagnosa' => $request->nama_diagnosa,
            'keterangan_diagnosa' => $request->keterangan_diagnosa,
        ];
        // dd($validatedData);
        $MasterDiagnosas->update($validatedData);

        return redirect()->route('master_diagnosa.index')->with('success', 'MasterDiagnosas updated successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $MasterDiagnosas = MasterDiagnosa::find($id);
        $MasterDiagnosas->delete();

        return redirect()->route('master_diagnosa.index')->with('success', 'MasterDiagnosas deleted successfully.');
    }
    public function select2Options(Request $request)
    {
        $searchTerm = $request->input('q');

        $query = MasterDiagnosa::query();
        if ($searchTerm) {
            $query->where('nama_diagnosa', 'LIKE', '%' . $searchTerm . '%');
        }

        $options = $query->select('id', 'nama_diagnosa as text')->get();

        return response()->json(['results' => $options]);
    }
}
