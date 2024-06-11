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

        return view('pages.oee-summary.index', [
            'items' => $items,
        ]);
    }
}
