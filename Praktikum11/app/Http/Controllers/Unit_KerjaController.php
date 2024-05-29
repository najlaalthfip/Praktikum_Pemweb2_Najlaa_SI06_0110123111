<?php

namespace App\Http\Controllers;

use App\Models\Unit_Kerja;
use Illuminate\Http\Request;

class Unit_KerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //ambil data unit kerja dari database
        $list_unit_kerja = Unit_Kerja::all();
        //kirim data ke view
        return view('pasien.unit_kerja', compact('list_unit_kerja'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Unit_Kerja $unit_Kerja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unit_Kerja $unit_Kerja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Unit_Kerja $unit_Kerja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unit_Kerja $unit_Kerja)
    {
        //
    }
}
