<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKunjungan;
use App\Models\DataPasien;
use App\Models\MasterSuspect;
use App\Models\MasterDiagnosa;
use App\Models\MasterRule;
use App\Models\Rule;
use Carbon\Carbon;

class DataKunjunganController extends Controller
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
        $DataKunjungans = DataKunjungan::with('pasien')
        ->orderByRaw('created_at DESC')->get();
        // dd($DataKunjungans);
        return view('data_kunjungan.data_kunjungan', compact('DataKunjungans'));
    }

    public function create($id_pasien)
    {
        $DataPasien = DataPasien::find($id_pasien);
        if ($DataPasien) {
            // Periksa apakah pasien memiliki kunjungan aktif
            $kunjunganAktif = DataKunjungan::where('id_pasien', $id_pasien)
                ->whereNull('tgl_pulang')
                ->exists();
    
            if (!$kunjunganAktif) {
                $update = true;
            return view('data_kunjungan.tambah_kunjungan',compact('id_pasien', 'update', 'DataPasien'));
            } else {
                return redirect()->back()->with('error', 'Pasien masih memiliki kunjungan aktif.');
            }
        } else {
            return redirect()->back()->with('error', 'Pasien tidak ditemukan.');
        }
        
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // $validatedData = $request->validate([
            // //unique : nama tabel
            // 'ncm' => 'required|unique:pasiens',
            // 'nama_pasien' => 'required',
            // 'nik' => 'required|unique:pasiens',
            // 'tgl_lahir' => '',
            // 'berat_badan' => '',
            // 'tinggi_badan' => '',
            // 'no_hp' => '',
            // 'alamat' => '',
            // Validasi lainnya untuk kolom lain
        // ]);
        // $validatedData = [
        //     'kode_diagnosa' => $request->kode_diagnosa,
        //     'nama_diagnosa' => $request->nama_diagnosa,
        //     'keterangan_diagnosa' => $request->keterangan_diagnosa,
        // ];
      

        // DataKunjungan::create($validatedData);
        //cek diet
        // dd($request->all());
        $data=[];
        $suspectString = null;
        if($request->suspect!==null){
            $suspectIds = $request->suspect;
        $suspects = MasterSuspect::whereIn('id', $suspectIds)->pluck('nama_suspect');
        $suspectString = implode(', ', $suspects->toArray());
            //jika request suspect diisi
            $jumlah_suspect = count($request->suspect);
            
            $suspect_sorted = MasterSuspect::whereIn('id',$request->suspect)->get()->toArray();
            
            $data = Rule:: with('diet')
                            ->where('request_bubur', $request->bubur)
                            ->where('kode_diagnosa',$suspect_sorted[0]['id'])
                            ->where('kd_diagnosa_and', isset($suspect_sorted[1]['id']) ? $suspect_sorted[1]['id'] : null)->get()->toArray();

            
            
        } else {
            
        }
        $diagnosaString = null;
        // jika null cek diagnosa
        if ($request->diagnosa!==null) {
            //jika diagnosa diisi
            $diagnosaIds = $request->diagnosa;
            $diagnosas = MasterDiagnosa::whereIn('id', $diagnosaIds)->pluck('nama_diagnosa');
            $diagnosaString = implode(', ', $diagnosas->toArray());
            $jumlah_diagnosa = count($request->diagnosa);
            
            $diagnosa_sorted = MasterDiagnosa::whereIn('id',$request->diagnosa)->get()->toArray();
            
            $data = Rule:: with('diet')
                            ->where('request_bubur', $request->bubur)
                            ->where('kode_diagnosa',$diagnosa_sorted[0]['id'])
                            ->where('kd_diagnosa_and', isset($diagnosa_sorted[1]['id']) ? $diagnosa_sorted[1]['id'] : null)->get()->toArray();
        }
        else {
            // jika diagnosa tidak diisi
        }
        
        $diet = 0;
        
        
        $bubur =9;
        if($request->bubur){
            $data[0]['diet']['nama_diet'] = 'Bubur';
            $data[0]['diet']['id'] = $bubur;
        }
        // $dataKunjungan = DataKunjungan::create([
        //                     'id_pasien' =>$request->id_pasien,
        //                     'suspect' =>"'".$suspectString."'",
        //                     'diagnosa' =>"'".$diagnosaString."'",
        //                     'diet' =>$data[0]['diet']['nama_diet'],
        //                     'tgl_kunjungan' =>$request->tanggal_kunjungan,
        //                     'request' =>$request->bubur,
        //                     'berat' =>$request->berat,
        //                     'tinggi' =>$request->tinggi,
        //                     'imt' =>$request->imt,
        //                     'keluhan' =>$request->keluhan,
        //                 ]);
        // cek diet
        
        //cf
        
        $kodeDiagnosa = $request->diagnosa[0]; // Ganti dengan kode diagnosa yang ingin Anda gunakan
        $kodeDiet = $data[0]['diet']['id']; // Ganti dengan kode diet yang ingin Anda gunakan

        $rule = MasterRule::where('kode_diagnosa',$kodeDiagnosa)
                            ->where('diet',$kodeDiet)
                            ->first();
        $CF = 0;             
        if ($rule) {
            $belief = $rule->cf; // Ganti dengan nama kolom di dalam tabel rule yang menyimpan nilai belief
            $plausibility = 1- $rule->cf; // Ganti dengan nama kolom di dalam tabel rule yang menyimpan nilai plausibility
             
            // Lakukan perhitungan CF
            $CF = $rule->calculateCF($belief, $plausibility);
            
            // Gunakan nilai CF sesuai kebutuhan
        } else {
            // Aturan tidak ditemukan, beri nilai default atau lakukan tindakan lain sesuai kebutuhan.
        }
        //cf
        $dataKunjungan = DataKunjungan::create([
            'id_pasien' =>$request->id_pasien,
            'suspect' =>"'".$suspectString."'",
            'diagnosa' =>"'".$diagnosaString."'",
            'diet' =>$data[0]['diet']['nama_diet'],
            'tgl_kunjungan' =>$request->tanggal_kunjungan,
            'request' =>$request->bubur,
            'berat' =>$request->berat,
            'tinggi' =>$request->tinggi,
            'imt' =>$request->imt,
            'keluhan' =>$request->keluhan,
            'cf' =>$CF,
        ]);
        return redirect()->route('data_kunjungan.index')->with('success', 'DataKunjungans created successfully.');
    }

    public function edit(Request $request, $id)
    {
        $DataKunjungans = DataKunjungan::find($id);
        $update = true;
        return view('data_kunjungan.edit_kunjungan', compact('DataKunjungans','update'));
    }

    public function update(Request $request, $id)
    {
        
        $DataKunjungans = DataKunjungan::find($id);
        
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
        $DataKunjungans->update($validatedData);

        return redirect()->route('data_kunjungan.index')->with('success', 'DataKunjungans updated successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $DataKunjungans = DataKunjungan::find($id);
        $DataKunjungans->delete();

        return redirect()->route('data_kunjungan.index')->with('success', 'DataKunjungans deleted successfully.');
    }
    public function print()
    {
        

        $now = Carbon::now();
        $formattedDate = $now->format('Y-m-d');
        $DataKunjungans = DataKunjungan::with('pasien')
        ->where('tgl_kunjungan',$formattedDate)
        ->where('tgl_pulang',null)
        ->orderByRaw('created_at DESC')->get();
        // dd($DataKunjungans);
        return view('data_kunjungan.print', compact('DataKunjungans'));
    }
}
