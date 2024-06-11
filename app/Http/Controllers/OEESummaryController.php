<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\OEESummaryImport;

use App\Models\OEESummary;
use App\Models\OEESummaryDate;

class OEESummaryController extends Controller
{
    public function index()
    {
        $items = OEESummaryDate::all();

        foreach ($items as $item) {
            $dataPerMonth = OEESummary::where('date', $item->date);

            $item->Downtime_Total = $dataPerMonth->sum('Downtime_Total');
            $item->Available_T = $dataPerMonth->sum('Available_T');
            $item->Operating_Time = ((($item->Available_T - $item->Downtime_Total) / $item->Available_T) * 100) / 100;
            $item->Available_Rate = ($item->Operating_Time / $item->Available_T) * 100;
        }

        return view('pages.oee-summary.index', [
            'items' => $items,
        ]);
    }
}
