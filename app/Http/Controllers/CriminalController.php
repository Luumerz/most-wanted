<?php

namespace App\Http\Controllers;

use App\Models\Criminal;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class CriminalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['criminales'] = Criminal::paginate(6);
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
        if ($request->hasFile('Foto')) {
            $datosCriminal['Foto'] = $request->file('Foto')->store('uploads', 'public');
        }
        Criminal::insert($datosCriminal);
        return redirect('criminales');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $criminal = Criminal::findOrFail($id);
        return view('criminales.details', compact('criminal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $criminal = Criminal::findOrFail($id);
        return view('criminales.edit', compact('criminal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datosCriminal = request()->except('_token', '_method');
        if ($request->hasFile('Foto')) {
            $criminal = Criminal::findOrFail($id);
            Storage::delete('public/'.$criminal->Foto);
            $datosCriminal['Foto'] = $request->file('Foto')->store('uploads', 'public');
        }
        Criminal::where('id', '=', $id)->update($datosCriminal);
        $criminal = Criminal::findOrFail($id);
        return redirect('criminales');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Criminal::destroy($id);
        return redirect('criminales');
    }
}
