<?php

namespace App\Http\Controllers;

use App\Models\OEESummary;
use Illuminate\Http\Request;

class OEESummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = OEESummary::all();

        return view('pages.oee-summary.index', [
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
    public function show(OEESummary $oEESummary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OEESummary $oEESummary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OEESummary $oEESummary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OEESummary $oEESummary)
    {
        //
    }
}
