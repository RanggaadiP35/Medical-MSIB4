<?php

namespace App\Http\Controllers;

use App\Models\survey;
use App\Models\domisili;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class surveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $domisili  = domisili::all();
        return view('landingPage.survey', compact('domisili'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('landingPage.survey');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'bodyHeight' => 'required',
            'bodyWeight' => 'required',
            'domisili' => 'required',
        ]);

        // echo($request); die;

        DB::table('masyarakat')->insert(
            [
                'nama'=>$request->name,
                'gender'=>$request->gender,
                'umur'=>$request->age,
                'tinggi_badan'=>$request->bodyHeight,
                'berat_badan'=>$request->bodyWeight,
                'domisili_id'=>$request->domisili,
            ]
        );

        // print_r('nama', 'gender', 'umur', 'tinggi_badan', 'berat_badan', 'domisili_id'); die;

        return redirect('survey')->
        with('succes','data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function show(survey $survey)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function edit(survey $survey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, survey $survey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function destroy(survey $survey)
    {
        //
    }
}
