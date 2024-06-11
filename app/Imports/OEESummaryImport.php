<?php

namespace App\Imports;

use PhpOffice\PhpSpreadsheet\Shared\Date;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

use App\Models\OEESummary;

class OEESummaryImport implements ToCollection
{
    protected $date;

    public function __construct($date)
    {
        $this->date = $date;
    }

    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        foreach ($collection as $index => $row) {
            // Skip the header row
            if ($index == 0) {
                continue;
            }

            OEESummary::create([
                'date' => $this->date, // Store the request date here

                'jobOrderID' => $row[1],
                'productID' => $row[2],
                'productNAME' => $row[3],
                'toolingID' => $row[4],
                'machineID' => $row[5],
                'Machine_Tonnage' => $row[6],
                'Start_Time' => $row[7] ? Date::excelToDateTimeObject($row[7]) : null,
                'Shift_ID' => $row[8],
                'Output' => $row[9],
                'BlackDot' => $row[10],
                'Buble' => $row[11],
                'BurnMark' => $row[12],
                'Dented' => $row[13],
                'Discoloration' => $row[14],
                'DragMark' => $row[15],
                'Flahes' => $row[16],
                'FlowMark' => $row[17],
                'OilyMark' => $row[18],
                'OverCut' => $row[19],
                'PinBroken' => $row[20],
                'PinMark' => $row[21],
                'Scratches' => $row[22],
                'Shiny' => $row[23],
                'ShortMolding' => $row[24],
                'SilverStreak' => $row[25],
                'SinkMark' => $row[26],
                'WeldLine' => $row[27],
                'WhiteM' => $row[28],
                'Reject_Total' => $row[29],
                'ActualCycleTime' => $row[30],
                'PlanCycleTime' => $row[31],
                'DMC' => $row[32],
                'JOS' => $row[33],
                'MB' => $row[34],
                'MOC' => $row[35],
                'MOR1' => $row[36],
                'MOR2' => $row[37],
                'MSSD' => $row[38],
                'NMP' => $row[39],
                'NPO' => $row[40],
                'PA' => $row[41],
                'PM' => $row[42],
                'QP' => $row[43],
                'T' => $row[44],
                'TPM' => $row[45],
                'Downtime_Total' => $row[32] + $row[33] + $row[34] + $row[35] + $row[36] + $row[37] + $row[38] + $row[39] + $row[40] + $row[41] + $row[42] + $row[43] + $row[44] + $row[45],
                'Available_T' => $row[47],
            ]);
        }
    }
}
