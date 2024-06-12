<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;
    protected $table = 'receipts';

    protected $fillable = [
        'id',
        'ReceiptID',       
        'StudentNumber',
        'StudentName',
        'Amount',
        'College',
        'Scholarship',
        'DueDate',
        'DatePaid',
    ];
    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}

