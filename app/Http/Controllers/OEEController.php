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

    public function destroy(string $id)
    {
        $item = OEESummary::findOrFail($id);
        $item->delete();

        return redirect()->route('oee.index')->with('success', 'Data successfully deleted');
    }

    public function destroyByDate(Request $request)
    {
        ini_set('max_execution_time', 3600); // 3600 seconds = 60 minutes
        set_time_limit(3600);

        $date = OEESummaryDate::where('date', $request->date)->first();
        $items = OEESummary::where('date', $request->date)->get();

        // if date null

        if (!$date) {
            return redirect()->route('oee.index')->with('error', 'Data this month not found');
        }

        foreach ($items as $item) {
            $item->delete();
        }

        $date->delete();

        return redirect()->route('oee.index')->with('success', 'Data successfully deleted');
    }
}
