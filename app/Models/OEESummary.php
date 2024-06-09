<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OEESummary extends Model
{
    use HasFactory;

    protected $fillable = ['jobOrderID', 'productID', 'productNAME', 'toolingID', 'machineID', 'Machine_Tonnage', 'Start_Time', 'Shift_ID', 'Output', 'BlackDot', 'Buble', 'BurnMark', 'Dented', 'Discoloration', 'DragMark', 'Flahes', 'FlowMark', 'OilyMark', 'OverCut', 'PinBroken', 'PinMark', 'Scratches', 'Shiny', 'ShortMolding', 'SilverStreak', 'SinkMark', 'WeldLine', 'WhiteM', 'Reject_Total', 'ActualCycleTime', 'PlanCycleTime', 'DMC', 'JOS', 'MB', 'MOC', 'MOR1', 'MOR2', 'MSSD', 'NMP', 'NPO', 'PA', 'PM', 'QP', 'T', 'TPM', 'Downtime_Total', 'Available_T'];
}
