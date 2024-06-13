<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Illuminate\Http\Request;
use App\Http\Requests\CvRequest;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cvs = Cv::all();
        return view('pages.list-cv', ['cvs' => $cvs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.register-cv');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CvRequest $request)
    {
        Cv::create($request->validated());
        return to_route('cv.index')->with('succes', "Client enregistrer avec succes !");
    }

    /**
     * Display the specified resource.
     */
    public function show(Cv $cv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cv $cv)
    {
        return view('pages.edit-cv',[
            'cv' => $cv
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CvRequest $request, Cv $cv)
    {
        $cv->update($request->validated());
        
        return to_route('pages.list-cv')->with([
            'success' => 'Cv modifié avec succes!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cv $cv)
    {
        $cv->delete();
        return to_route('pages.list-cv')->with([
            'success' => 'Cv supprimé avec succés'
        ]);
    }
}
