<?php

namespace App\Http\Controllers;

use App\Models\hegaldia;
use Illuminate\Http\Request;

class HegaldiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Hegaldia::all();
    }

    public function indexWeb()
    {
        $hegaldiak = Hegaldia::all();
        return view('hegaldia.index', ['hegaldiak' => $hegaldiak]);    }
        

    public function showWeb($id)
    {
        $hegaldia = Hegaldia::find($id);
        return view('hegaldia.show', ['hegaldia' => $hegaldia]);
    }

    public function updateWeb(Request $request, hegaldia $hegaldia)
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
     * @param  \App\Models\hegaldia  $hegaldia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hegaldia = hegaldia::find($id);
        return $hegaldia;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hegaldia  $hegaldia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $hegaldia = hegaldia::find($id);

        $hegaldia->irt = $request->irt;
        $hegaldia->hel = $request->hel;

        $hegaldia->ira = $request->ira;

        $hegaldia->save();

        return redirect()->route('hegaldia');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hegaldia  $hegaldia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $hegaldia = hegaldia::find($id);
        $hegaldia->delete();

    }
}
