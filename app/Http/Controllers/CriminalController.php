<?php

namespace App\Http\Controllers;

use App\Models\Criminal;
use Illuminate\Http\Request;

class CriminalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['criminales'] = Criminal::paginate(5);
        return view('criminales.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('criminales.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosCriminal = request()->except('_token');
        if($request->hasFile('Foto')) {
            $datosCriminal['Foto']=$request->file('Foto')->store('uploads', 'public');
        }
        Criminal::insert($datosCriminal);
        return response()->json($datosCriminal);
    }

    /**
     * Display the specified resource.
     */
    public function show(Criminal $criminal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Criminal $criminal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Criminal $criminal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Criminal $criminal)
    {
        //
    }
}
