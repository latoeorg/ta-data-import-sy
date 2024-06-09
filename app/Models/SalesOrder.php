<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesOrder extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['date', 'target_date', 'customer', 'additional_fee', 'note', 'subtotal', 'total_amount', 'status'];

    public function items()
    {
        return $this->hasMany(SalesOrderItem::class);
    }
}
