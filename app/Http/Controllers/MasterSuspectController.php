<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterSuspect;

class MasterSuspectController extends Controller
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
        $MasterSuspects = MasterSuspect::all();
        return view('master_suspect.master_suspect', compact('MasterSuspects'));
    }

    public function create()
    {
        return view('master_suspect.input_master_suspect');
    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'kode_suspect' => 'required|unique:master_suspects',
            'nama_suspect' => 'required|unique:master_suspects',
            'keterangan_suspect' => '',
            // Validasi lainnya untuk kolom lain
        ]);

        MasterSuspect::create($validatedData);

        return redirect()->route('master_suspect.index')->with('success', 'MasterSuspects created successfully.');
    }

    public function edit(Request $request, $id)
    {
        $MasterSuspects = MasterSuspect::find($id);
        $update = true;
        return view('master_suspect.edit_master_suspect', compact('MasterSuspects','update'));
    }

    public function update(Request $request, $id)
    {
        
        $MasterSuspects = MasterSuspect::find($id);
        
        $validatedData = [
            'kode_suspect' => $request->kode_suspect,
            'nama_suspect' => $request->nama_suspect,
            'keterangan_suspect' => $request->keterangan_suspect,
        ];
        // dd($validatedData);
        $MasterSuspects->update($validatedData);

        return redirect()->route('master_suspect.index')->with('success', 'MasterSuspects updated successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $MasterSuspects = MasterSuspect::find($id);
        $MasterSuspects->delete();

        return redirect()->route('master_suspect.index')->with('success', 'MasterSuspects deleted successfully.');
    }

    public function select2Options(Request $request)
{
    $searchTerm = $request->input('q');

    $query = MasterSuspect::query();
    if ($searchTerm) {
        $query->where('nama_suspect', 'LIKE', '%' . $searchTerm . '%');
    }

    $options = $query->select('id', 'nama_suspect as text')->get();

    return response()->json(['results' => $options]);
}
}
