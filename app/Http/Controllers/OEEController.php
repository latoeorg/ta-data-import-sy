<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\OEESummaryImport;

use App\Models\OEESummary;
use App\Models\OEESummaryDate;

class OEEController extends Controller
{
    public function index()
    {
        $items = OEESummary::all();

        return view('pages.oee.index', [
            'items' => $items,
        ]);
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv',
            'date' => 'required|date', // Validate the date input
        ]);

        // check date if exists
        $date = OEESummaryDate::where('date', $request->date)->first();
        if (!$date) {
            OEESummaryDate::create([
                'date' => $request->date,
            ]);
        }

        Excel::import(new OEESummaryImport($request->date), $request->file('file'));

        return back()->with('success', 'Data imported successfully!');
    }
}
