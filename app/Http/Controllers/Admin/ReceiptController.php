<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Receipt;

class ReceiptController extends Controller
{
    public function index()
    {
        $receipts = Receipt::all();
        return view('admin.receipts.index', compact('receipts'));
    }

    public function create()
    {
        return view('admin.receipts.create');
    }

    public function store(Request $request)
    {
        // Validate and store the receipt
        $validated = $request->validate([
            'ReceiptID' => 'required|string|max:255',
            'StudentNumber' => 'required|string|max:255',
            'StudentName' => 'required|string|max:255',
            'Amount' => 'required|numeric|min:0',
            'College' => 'required|string|max:255',
            'DueDate' => 'nullable|date',
            'DatePaid' => 'nullable|date',
        ]);

        Receipt::create($validated);

        return redirect()->route('receipts.index')->with('success', 'Receipt created successfully.');
    }

    public function edit($id)
    {
        $receipt = Receipt::findOrFail($id);
        return view('admin.receipts.edit', compact('receipt'));
    }

    public function update(Request $request, $id)
    {
        // Validate and update the receipt
        $validated = $request->validate([
            'ReceiptID' => 'required|string|max:255',
            'StudentNumber' => 'required|string|max:255',
            'StudentName' => 'required|string|max:255',
            'Amount' => 'required|numeric|min:0',
            'College' => 'required|string|max:255',
            'DueDate' => 'nullable|date',
            'DatePaid' => 'nullable|date',
        ]);

        $receipt = Receipt::findOrFail($id);
        $receipt->update($validated);

        return redirect()->route('receipts.index')->with('success', 'Receipt updated successfully.');
    }

    public function destroy($id)
    {
        $receipt = Receipt::findOrFail($id);
        $receipt->delete();

        return redirect()->route('receipts.index')->with('success', 'Receipt deleted successfully.');
    }
}
