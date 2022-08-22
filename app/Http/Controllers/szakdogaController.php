<?php

namespace App\Http\Controllers;

use App\Models\szakdoga;
use Illuminate\Http\Request;

class szakdogaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /********************************************************/
    /********ÖSSZES SZAKDOGA JSON-BEN VALÓ MEGJELENÍTÉSE*****/
    public function index()
    { 
            $szakdogak = response()->json(Szakdoga::all());
            return $szakdogak;
        
    }
    /********************************************************/
    public function store(Request $request)
    {
        
        $szakdoga = new Szakdoga();
        $szakdoga->id = $request->id;
        $szakdoga->szakdoga_nev = $request->szakdoga_nev;
        $szakdoga->githublink = $request->githublink;
        $szakdoga->oldallink = $request->oldallink;
        $szakdoga->tagokneve = $request->tagokneve;
        $szakdoga->timestamp = $request->timestamp;
        $szakdoga->save();
        return Szakdoga::find($szakdoga->id);
    
    }
    public function update(Request $request, szakdoga $szakdoga)
    {
            $szakdoga = Szakdoga::find($id);
            $szakdoga->id = $request->id;
            $szakdoga->szakdoga_nev = $request->szakdoga_nev;
            $szakdoga->githublink = $request->githublink;
            $szakdoga->oldallink = $request->oldallink;
            $szakdoga->tagokneve = $request->tagokneve;
            $szakdoga->timestamp = $request->timestamp;
            $szakdoga->save();
    
            return redirect('/szakdogak');
    
    }
    
    public function destroy(szakdoga $szakdoga)
    {
            Szakdoga::find($id)->delete();
            return redirect('/szakdogak');
    
    
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
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\szakdoga  $szakdoga
     * @return \Illuminate\Http\Response
     */
    public function show(szakdoga $szakdoga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\szakdoga  $szakdoga
     * @return \Illuminate\Http\Response
     */
    public function edit(szakdoga $szakdoga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\szakdoga  $szakdoga
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\szakdoga  $szakdoga
     * @return \Illuminate\Http\Response
     */
   
}
