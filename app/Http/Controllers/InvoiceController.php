<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Models\PVM_type;
use App\Models\Sask_type;
use Illuminate\Support\Facades\DB;
use Auth;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pateikti($id)
    {
        $regist_list_id = ['regist_list_id'=>$id];
        $userID = Auth::user()->id;        
        $data = DB::table('invoices')        
        ->where('regist_list_id', $id)->latest()->paginate(5);

        return view('VisosSask',compact("data"))->with('i',(request()->input('page',1)-1)*5);
    }

    public function gautiParametrus($id)
    {
        
        		
        return ;
    }

    public function index()
    {

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
        
        $request -> validate([
            "Sask_nr" => "required|max:255",
            "Data"=>"required|date",
            "Sask_type"=>"required|max:20",
            "Antosios_salies_pav"=>"required|max:255",
            "Antosios_salies_PVM_kodas"=>"required|max:255",
            "Visa_suma"=>"required|numeric",
            "PVM_type"=>"required|integer",
            "PVM_proc"=>"required|integer|min:0|max:100",
            "PVM_suma"=>"required|numeric"            
        ]);

        Invoice::create([ 
            'regist_list_id'=>$request->id,           
            'Sask_nr'=>$request->Sask_nr,
            'Sask_data'=>$request->Data,
            'Sask_type_id'=>$request->Sask_type,
            'Amtrosios_salies_pav'=>$request->Antosios_salies_pav,
            'Amtrosios_salies_PVM_kodas'=>$request->Antosios_salies_PVM_kodas,
            'Visa_suma'=>$request->Visa_suma,
            'p_v_m_type_id'=>$request->PVM_type,  
            'PVM_proc'=>$request->PVM_proc, 
            'PVM_suma'=>$request->PVM_suma  
        ]);    
        return redirect('/dashboard')->with('success','Sukurta naujas saskaita');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function keisti($id)
    {
        $PVM_t = PVM_type::all();
        $Sask = Sask_type::all();
        $data = DB::table('invoices')->where('id', $id)->first();
        
        return view('keistiSask',compact("data"))->with('PVM_types',$PVM_t)->with('Sask_types',$Sask);;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request -> validate([
            "Sask_nr" => "required|max:255",
            "Data"=>"required|date",
            "Sask_type"=>"required|max:20",
            "Antosios_salies_pav"=>"required|max:255",
            "Antosios_salies_PVM_kodas"=>"required|max:255",
            "Visa_suma"=>"required|numeric",
            "PVM_type"=>"required|integer",
            "PVM_proc"=>"required|integer|min:0|max:100",
            "PVM_suma"=>"required|numeric"            
        ]);

        $id = $request->id;
        Invoice::where('id','=', $id)->update([            
            'Sask_nr'=>$request->Sask_nr,
            'Sask_data'=>$request->Data,
            'Sask_type_id'=>$request->Sask_type,
            'Amtrosios_salies_pav'=>$request->Antosios_salies_pav,
            'Amtrosios_salies_PVM_kodas'=>$request->Antosios_salies_PVM_kodas,
            'Visa_suma'=>$request->Visa_suma,
            'p_v_m_type_id'=>$request->PVM_type,  
            'PVM_proc'=>$request->PVM_proc, 
            'PVM_suma'=>$request->PVM_suma        
        ]); 
        return redirect('/dashboard')->with('success','Saskaita pakeista sėkmingai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Invoice::where('id','=', $id)->delete();
    
        return redirect('/dashboard');
    }
}
