<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\OEEStandard;
use App\Models\OEESummary;
use App\Models\OEESummaryDate;

class DashboardController extends Controller
{
    public function index()
    {
        $OEEStandard = OEEStandard::all();

        $items = OEESummaryDate::all();

        foreach ($items as $item) {
            $dataPerMonth = OEESummary::where('date', $item->date);

            // Availability
            $item->Downtime_Total = $dataPerMonth->sum('Downtime_Total');
            $item->Available_T = $dataPerMonth->sum('Available_T');
            $item->Available_Rate = number_format((($item->Available_T - $item->Downtime_Total) / $item->Available_T) * 100, 0);
            $item->Available_Rate = $item->Available_Rate < 0 ? $item->Available_Rate * -1 : $item->Available_Rate;

            // Performance
            $item->Output = $dataPerMonth->sum('Output');
            $item->ActualCycleTime = $dataPerMonth->sum('ActualCycleTime');
            $item->PlanCycleTime = $dataPerMonth->sum('PlanCycleTime');
            $item->Performance_Rate = number_format((($item->Output * $item->PlanCycleTime) / $item->ActualCycleTime / $item->Output) * 100, 0);
            $item->Performance_Rate = $item->Performance_Rate < 0 ? $item->Performance_Rate * -1 : $item->Performance_Rate;

            // Quality
            $item->Reject_Total = $dataPerMonth->sum('Reject_Total');
            $item->Finish_Total = $item->Output - $item->Reject_Total;
            $item->Quality_Rate = number_format(($item->Finish_Total / $item->Output) * 100, 0);
            $item->Quality_Rate = $item->Quality_Rate < 0 ? $item->Quality_Rate * -1 : $item->Quality_Rate;

            // OEE
            $item->OEE = number_format(($item->Available_Rate * $item->Performance_Rate * $item->Quality_Rate) / 10000, 2);
        }

        $labels = $items->pluck('date');

        $data = [
            'Available_Rate' => $items->pluck('Available_Rate'),
            'Performance_Rate' => $items->pluck('Performance_Rate'),
            'Quality_Rate' => $items->pluck('Quality_Rate'),
            'OEE' => $items->pluck('OEE'),
        ];

        return view('pages.dashboard.index', [
            'OEEStandard' => $OEEStandard,
            'labels' => $labels,
            'data' => $data,
        ]);
    }
}
