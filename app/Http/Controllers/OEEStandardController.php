<?php

namespace App\Http\Controllers;

use App\Models\OEEStandard;
use Illuminate\Http\Request;

class OEEStandardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = OEEStandard::all();

        return view('pages.oee-standard.index', [
            'items' => $items,
        ]);
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
    public function show(OEEStandard $oEEStandard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OEEStandard $oEEStandard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OEEStandard $oEEStandard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OEEStandard $oEEStandard)
    {
        //
    }
}
