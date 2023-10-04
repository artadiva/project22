<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPasien;

class DataPasienController extends Controller
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
        $DataPasiens = DataPasien::all();

        return view('data_pasien.data_pasien', compact('DataPasiens'));
    }

    public function create()
    {
        return view('data_pasien.input_pasien_baru');
    }

    public function store(Request $request)
    {
    // dd($request->all());
        $validatedData = $request->validate([
            //unique : nama tabel
            'ncm' => 'required|unique:pasiens',
            'nama_pasien' => 'required',
            'nik' => 'required|unique:pasiens',
            'tgl_lahir' => '',
            'berat_badan' => '',
            'tinggi_badan' => '',
            'no_hp' => '',
            'alamat' => '',
            // Validasi lainnya untuk kolom lain
        ]);
        // $validatedData = [
        //     'kode_diagnosa' => $request->kode_diagnosa,
        //     'nama_diagnosa' => $request->nama_diagnosa,
        //     'keterangan_diagnosa' => $request->keterangan_diagnosa,
        // ];
      

        DataPasien::create($validatedData);

        return redirect()->route('data_pasien.index')->with('success', 'DataPasiens created successfully.');
    }

    public function edit(Request $request, $id)
    {
        $DataPasiens = DataPasien::find($id);
        $update = true;
        return view('data_pasien.edit_pasien', compact('DataPasiens','update'));
    }

    public function update(Request $request, $id)
    {
        
        $DataPasiens = DataPasien::find($id);
        
        $validatedData = [
            'ncm' => $request->ncm,
            'nama_pasien' => $request->nama_pasien,
            'nik' => $request->nik,
            'tgl_lahir' =>  $request->tgl_lahir,
            'berat_badan' => $request->berat_badan,
            'tinggi_badan' => $request->tinggi_badan,
            'no_hp' => $request->no_hp,
            'alamat' =>  $request->alamat,
        ];
        // dd($validatedData);
        $DataPasiens->update($validatedData);

        return redirect()->route('data_pasien.index')->with('success', 'DataPasiens updated successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $DataPasiens = DataPasien::find($id);
        $DataPasiens->delete();

        return redirect()->route('data_pasien.index')->with('success', 'DataPasiens deleted successfully.');
    }
}
