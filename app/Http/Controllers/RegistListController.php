<?php

namespace App\Http\Controllers;

use App\Models\RegistList;
use App\Models\Period;
use App\Models\Years;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class RegistListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function gaunamos()
    {
        $userID = Auth::user()->id;        
        $data = DB::table('regist_lists')->LeftJoin('years','years.id','=',"regist_lists.year_id")
        ->LeftJoin('periods','periods.id','=',"regist_lists.period_id")
        ->select('regist_lists.id','regist_lists.period_id', 'regist_lists.year_id', 'regist_lists.updated_at','years.metai as metai', "periods.periodas as periodas")
        ->where('user_id', $userID)->where('saraso_type_id', 1)->latest('regist_lists.created_at')->paginate(5);
		
        return view('gaunamos',compact("data"))->with('i',(request()->input('page',1)-1)*5);
    }

    public function israsomos()
    {
        $userID = Auth::user()->id;        
        $data = DB::table('regist_lists')->LeftJoin('years','years.id','=',"regist_lists.year_id")
        ->LeftJoin('periods','periods.id','=',"regist_lists.period_id")
        ->select('regist_lists.id','regist_lists.period_id', 'regist_lists.year_id', 'regist_lists.updated_at','years.metai as metai', "periods.periodas as periodas")
        ->where('user_id', $userID)->where('saraso_type_id', 2)->latest('regist_lists.created_at')->paginate(5);
		
        return view('israsomos',compact("data"))->with('i',(request()->input('page',1)-1)*5);
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
    public function store1(Request $request)
    {
        $request -> validate([
            "period_name" => "required",
            "metai"=>"required",
        ]);

        RegistList::create([            
            'user_id' => Auth::user()->id,            
            'saraso_type_id'=>"1",
            'period_id'=>$request->period_name,
            'year_id'=>$request->metai,          
        ]);    
        return redirect('/gaunamos')->with('success','Sukurtas naujas sąrašas');
    }

    public function store2(Request $request)
    {
        $request -> validate([
            "period_name" => "required",
            "metai"=>"required",
        ]);

        RegistList::create([            
            'user_id' => Auth::user()->id,            
            'saraso_type_id'=>'2',
            'period_id'=>$request->period_name,
            'year_id'=>$request->metai,          
        ]);    
        return redirect('/israsomos')->with('success','Sukurtas naujas sąrašas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegistList  $registList
     * @return \Illuminate\Http\Response
     */
    public function show(RegistList $registList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegistList  $registList
     * @return \Illuminate\Http\Response
     */
    public function keisti1($id)
    {
        $periods = Period::all();
        $years = Years::all();
        $data = DB::table('regist_lists')->where('id', $id)->first();
        
        return view('keistiGaun',compact("data"))->with('periods',$periods)
        ->with('years',$years);
    }

    public function keisti2($id)
    {
        
        $periods = Period::all();
        $years = Years::all();
        $data = DB::table('regist_lists')->where('id', $id)->first();
        return view('keistiIsras',compact("data"))->with('periods',$periods)
        ->with('years',$years);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegistList  $registList
     * @return \Illuminate\Http\Response
     */
    public function update1(Request $request)
    {
        
        $request -> validate([
            "period_name" => "required",
            "metai"=>"required",
        ]);        
        $id = $request->id;

        RegistList::where('id','=', $id)->update([            
                       
            
            'period_id'=>$request->period_name,
            'year_id'=>$request->metai,          
        ]); 
        return redirect('/gaunamos')->with('success','Pakeistas sąrašas sėkmingai');
    }

    public function update2(Request $request)
    {
        
        $request -> validate([
            "period_name" => "required",
            "metai"=>"required",
        ]);               
         
        $id = $request->id;
        RegistList::where('id','=', $id)->update([            
         
            'period_id'=>$request->period_name,
            'year_id'=>$request->metai,          
        ]); 
        return redirect('/israsomos')->with('success','Pakeistas sąrašas sėkmingai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegistList  $registList
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RegistList::where('id','=', $id)->delete();
    
        return redirect('/dashboard');
    }
}
