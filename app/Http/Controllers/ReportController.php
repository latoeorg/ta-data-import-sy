<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\OEESummary;
use App\Models\OEESummaryDate;

class ReportController extends Controller
{
    public function OEEReport()
    {
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

        return view('pages.report.oee', [
            'items' => $items,
        ]);
    }

    public function DowntimeReport()
    {
        $items = OEESummaryDate::all();

        foreach ($items as $item) {
            $dataPerMonth = OEESummary::where('date', $item->date);

            $item->Downtime_Total = $dataPerMonth->sum('Downtime_Total');
            $item->DMC = $dataPerMonth->sum('DMC');
            $item->JOS = $dataPerMonth->sum('JOS');
            $item->MB = $dataPerMonth->sum('MB');
            $item->MOC = $dataPerMonth->sum('MOC');
            $item->MOR1 = $dataPerMonth->sum('MOR1');
            $item->MOR2 = $dataPerMonth->sum('MOR2');
            $item->MSSD = $dataPerMonth->sum('MSSD');
            $item->NMP = $dataPerMonth->sum('NMP');
            $item->NPO = $dataPerMonth->sum('NPO');
            $item->PA = $dataPerMonth->sum('PA');
            $item->PM = $dataPerMonth->sum('PM');
            $item->QP = $dataPerMonth->sum('QP');
            $item->T = $dataPerMonth->sum('T');
            $item->TPM = $dataPerMonth->sum('TPM');

            // Change data to percentage by dividing by total downtime
            if ($item->Downtime_Total > 0) {
                $item->DMC = number_format(($item->DMC / $item->Downtime_Total) * 10, 1);
                $item->JOS = number_format(($item->JOS / $item->Downtime_Total) * 10, 1);
                $item->MB = number_format(($item->MB / $item->Downtime_Total) * 10, 1);
                $item->MOC = number_format(($item->MOC / $item->Downtime_Total) * 10, 1);
                $item->MOR1 = number_format(($item->MOR1 / $item->Downtime_Total) * 10, 1);
                $item->MOR2 = number_format(($item->MOR2 / $item->Downtime_Total) * 10, 1);
                $item->MSSD = number_format(($item->MSSD / $item->Downtime_Total) * 10, 1);
                $item->NMP = number_format(($item->NMP / $item->Downtime_Total) * 10, 1);
                $item->NPO = number_format(($item->NPO / $item->Downtime_Total) * 10, 1);
                $item->PA = number_format(($item->PA / $item->Downtime_Total) * 10, 1);
                $item->PM = number_format(($item->PM / $item->Downtime_Total) * 10, 1);
                $item->QP = number_format(($item->QP / $item->Downtime_Total) * 10, 1);
                $item->T = number_format(($item->T / $item->Downtime_Total) * 10, 1);
                $item->TPM = number_format(($item->TPM / $item->Downtime_Total) * 10, 1);
            }
        }

        return view('pages.report.downtime', [
            'items' => $items,
        ]);
    }

    public function RejectReport()
    {
        $items = OEESummaryDate::all();

        foreach ($items as $item) {
            $dataPerMonth = OEESummary::where('date', $item->date);

            $item->Reject_Total = $dataPerMonth->sum('Reject_Total');
            $item->BlackDot = $dataPerMonth->sum('BlackDot');
            $item->Buble = $dataPerMonth->sum('Buble');
            $item->BurnMark = $dataPerMonth->sum('BurnMark');
            $item->Dented = $dataPerMonth->sum('Dented');
            $item->Discoloration = $dataPerMonth->sum('Discoloration');
            $item->DragMark = $dataPerMonth->sum('DragMark');
            $item->Flahes = $dataPerMonth->sum('Flahes');
            $item->FlowMark = $dataPerMonth->sum('FlowMark');
            $item->OilyMark = $dataPerMonth->sum('OilyMark');
            $item->OverCut = $dataPerMonth->sum('OverCut');
            $item->PinBroken = $dataPerMonth->sum('PinBroken');
            $item->PinMark = $dataPerMonth->sum('PinMark');
            $item->Scratches = $dataPerMonth->sum('Scratches');
            $item->Shiny = $dataPerMonth->sum('Shiny');
            $item->ShortMolding = $dataPerMonth->sum('ShortMolding');
            $item->SilverStreak = $dataPerMonth->sum('SilverStreak');
            $item->SinkMark = $dataPerMonth->sum('SinkMark');
            $item->WeldLine = $dataPerMonth->sum('WeldLine');
            $item->WhiteM = $dataPerMonth->sum('WhiteM');

            // Change data to percentage by dividing by total rejects
            if ($item->Reject_Total > 0) {
                $item->BlackDot = number_format(($item->BlackDot / $item->Reject_Total) * 100, 1);
                $item->Buble = number_format(($item->Buble / $item->Reject_Total) * 100, 1);
                $item->BurnMark = number_format(($item->BurnMark / $item->Reject_Total) * 100, 1);
                $item->Dented = number_format(($item->Dented / $item->Reject_Total) * 100, 1);
                $item->Discoloration = number_format(($item->Discoloration / $item->Reject_Total) * 100, 1);
                $item->DragMark = number_format(($item->DragMark / $item->Reject_Total) * 100, 1);
                $item->Flahes = number_format(($item->Flahes / $item->Reject_Total) * 100, 1);
                $item->FlowMark = number_format(($item->FlowMark / $item->Reject_Total) * 100, 1);
                $item->OilyMark = number_format(($item->OilyMark / $item->Reject_Total) * 100, 1);
                $item->OverCut = number_format(($item->OverCut / $item->Reject_Total) * 100, 1);
                $item->PinBroken = number_format(($item->PinBroken / $item->Reject_Total) * 100, 1);
                $item->PinMark = number_format(($item->PinMark / $item->Reject_Total) * 100, 1);
                $item->Scratches = number_format(($item->Scratches / $item->Reject_Total) * 100, 1);
                $item->Shiny = number_format(($item->Shiny / $item->Reject_Total) * 100, 1);
                $item->ShortMolding = number_format(($item->ShortMolding / $item->Reject_Total) * 100, 1);
                $item->SilverStreak = number_format(($item->SilverStreak / $item->Reject_Total) * 100, 1);
                $item->SinkMark = number_format(($item->SinkMark / $item->Reject_Total) * 100, 1);
                $item->WeldLine = number_format(($item->WeldLine / $item->Reject_Total) * 100, 1);
                $item->WhiteM = number_format(($item->WhiteM / $item->Reject_Total) * 100, 1);
            }
        }

        return view('pages.report.reject', [
            'items' => $items,
        ]);
    }
}
