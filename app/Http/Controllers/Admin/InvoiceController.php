<?php

    namespace App\Http\Controllers\Admin;

    use App\Models\Invoice;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use App\Http\Requests\InvoiceFormRequest;

    class InvoiceController extends Controller
    {
        public function index()
        {
            $invoices = Invoice::all();
            return view('admin.invoices.index', compact('invoices'));
        }

        public function create()
        {
            $invoices =  Invoice::all();
            return view('admin.invoices.create', compact('invoices'));
        }

        public function store(InvoiceFormRequest $request)
        {
            $validatedData = $request->validated();

            $invoices = new Invoice;
            $invoices->StudentNumber = $validatedData['StudentNumber'];
            $invoices->StudentName = $validatedData['StudentName'];
            $invoices->Amount = $validatedData['Amount'];
            $invoices->College = $validatedData['College'];
            $invoices->Scholarship = $validatedData['Scholarship'];
            $invoices->DueDate = $validatedData['DueDate'];
            $invoices->DatePaid = $validatedData['DatePaid'];

            $invoices->status = $request->status == true ? '1':'0';
            $invoices->save();

            return redirect('admin/invoices')->with('message','Invoice Added');
        }

        public function edit(int $id)
        {
            $invoices =  Invoice::all();
            $invoices = Invoice::findOrFail($id);
            return view('admin.invoices.edit', compact('invoices'));
        }

        public function update(InvoiceFormRequest $request, int $id)
        {
            $validatedData = $request->validated();
            $invoice = Invoice::findOrFail($id);    

            if($invoice)
            {
                $invoice->update($validatedData);

                return redirect('admin/invoices')->with('message','Invoice Updated Successfully');
            }
            else{
                return redirect()->with('message','No such Invoice is Found');
            }
        }
        public function delete(int $id)
        {
            $invoice = Invoice::findOrFail($id);
            $invoice ->delete();
            return redirect()->back()->with('message','Deleted Invoice');
        }
    }
