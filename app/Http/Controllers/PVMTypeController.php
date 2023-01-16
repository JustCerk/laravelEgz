<?php

namespace App\Http\Controllers;

use App\Models\PVM_type;
use App\Models\Sask_type;
use Illuminate\Http\Request;

class PVMTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function gautiPVMtypes($id)
    {
        $PVM_t = PVM_type::all();
        $Sask = Sask_type::all();
        
        return view('newinvoice')->with('PVM_types',$PVM_t)->with('Sask_types',$Sask);
            
    }
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PVM_type  $pVM_type
     * @return \Illuminate\Http\Response
     */
    public function show(PVM_type $pVM_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PVM_type  $pVM_type
     * @return \Illuminate\Http\Response
     */
    public function edit(PVM_type $pVM_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PVM_type  $pVM_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PVM_type $pVM_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PVM_type  $pVM_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(PVM_type $pVM_type)
    {
        //
    }
}
