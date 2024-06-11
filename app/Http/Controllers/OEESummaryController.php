<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\OEESummaryImport;

use App\Models\OEESummary;

class OEESummaryController extends Controller
{
    public function index()
    {
        $items = OEESummary::all();

        return view('pages.oee-summary.index', [
            'items' => $items,
        ]);
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv',
            'date' => 'required|date', // Validate the date input
        ]);

        Excel::import(new OEESummaryImport($request->date), $request->file('file'));

        return back()->with('success', 'Data imported successfully!');
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
