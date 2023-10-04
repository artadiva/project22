<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterDiet;
use App\Models\MasterRule;

class MasterRuleController extends Controller
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
        $MasterRules = MasterRule::with('masterDiet','masterDiagnosa')->get();

        return view('master_rule.master_rule', compact('MasterRules'));
    }

    public function create()
    {
        return view('master_rule.input_master_rule');
    }

    public function store(Request $request)
    {
        
        // $validatedData = $request->validate([
        //     //unique : nama tabel
        //     // 'kode_diet' => 'required|unique:master_rules',
        //     // 'nama_diet' => 'required|unique:master_rules',
        //     // 'keterangan_diet' => '',
        //     // Validasi lainnya untuk kolom lain
        // ]);

        $data = [
                    'rule_name'=> $request->rule_name,
                    'kode_diagnosa'=> $request->diagnosa,
                    'diet'=> $request->diet,
                    'keterangan'=> $request->keterangan,
                    'cf'=> $request->cf,
                ];
        MasterRule::create($data);

        return redirect()->route('master_rule.index')->with('success', 'MasterRules created successfully.');
    }

    public function edit(Request $request, $id)
    {
        $MasterRules = MasterRule::where('id_rule',$id)->with('masterDiet','masterDiagnosa')->first();
        $update = true;
        return view('master_rule.edit_master_rule', compact('MasterRules','update'));
    }

    public function update(Request $request, $id)
    {
        
        $MasterRules = MasterRule::where('id_rule',$id)->first();
        $MasterRules->rule_name = $request->rule_name;
            $MasterRules->kode_diagnosa = $request->diagnosa;
            $MasterRules->diet = $request->diet;
            $MasterRules->keterangan = $request->keterangan;
            $MasterRules->cf = $request->cf;

         $MasterRules->save();

        return redirect()->route('master_rule.index')->with('success', 'MasterRules updated successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $MasterRules = MasterRule::where('id_rule',$id)->first();
        $MasterRules->delete();

        return redirect()->route('master_rule.index')->with('success', 'MasterRules deleted successfully.');
    }
}
