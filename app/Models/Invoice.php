<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = 'invoices';
    public $incrementing = true;

    protected $fillable = [
        'id',
        'StudentNumber',
        'StudentName',
        'Amount',
        'College',
        'Scholarship',
        'DueDate',
        'DatePaid',
    ];
    protected static function boot()
    {
        parent::boot();

        static::created(function ($invoice) {
            // Automatically create a receipt when an invoice is created
            // Only create a receipt if the DatePaid is not null
            if ($invoice->DatePaid !== null)
            Receipt::create([
                'ReceiptID' => $invoice->id,
                'StudentNumber' => $invoice->StudentNumber,
                'StudentName' => $invoice->StudentName,
                'Amount' => $invoice->Amount,
                'College' => $invoice->College,
                'Scholarship' => $invoice->Scholarship,
                'DueDate' => $invoice->DueDate,
                'DatePaid' => $invoice->DatePaid,
            ]);
        });

        static::updated(function ($invoice) {
            // Check if DatePaid was updated and is not null
            if (($invoice->isDirty('DatePaid') && $invoice->DatePaid !== null) || 
            ($invoice->getOriginal('DatePaid') === null && $invoice->DatePaid !== null)) {
                // Create a receipt
                Receipt::create([
                    'id' => $invoice->id,
                    'StudentNumber' => $invoice->StudentNumber,
                    'StudentName' => $invoice->StudentName,
                    'Amount' => $invoice->Amount,
                    'College' => $invoice->College,
                    'Scholarship' => $invoice->Scholarship,
                    'DueDate' => $invoice->DueDate,
                    'DatePaid' => $invoice->DatePaid,
                ]);
            }
        });
    }

    public function receipt()   
    {
        return $this->hasOne(Receipt::class);
    }
}
