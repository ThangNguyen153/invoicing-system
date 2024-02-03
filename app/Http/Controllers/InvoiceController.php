<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use App\Models\Invoice;
use App\Models\InvoiceDetails;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except([
            'invoice', 'addInvoice', 'editInvoice', 'deleteInvoice', 'exportInvoice'
        ]);
    }

    public function invoice()
    {
        $fruits = Fruit::all();
        $invoices = Invoice::with('details')->get();
        return view('invoice', compact('fruits', 'invoices'));
    }

    public function addInvoice(Request $request)
    {
        if($request->isMethod('get')) {
            $fruits = Fruit::all();
            return view('add-invoice', compact('fruits'));
        }

        $credentials = $request->validate([
            'customer_name' => 'required',
            'fruits' => 'required'
        ]);

        if($credentials)
        {
            $newInvoice = new Invoice([
                'customer_name' => $request->get('customer_name')
            ]);
            $newInvoice->save();
            $newInvoice->refresh();
            $fruits = $request->get('fruits');
            foreach ($fruits as $fruit) {

                $invoiceItem = new InvoiceDetails([
                    'invoice_id' => $newInvoice->id,
                    'fruit_id' => $fruit['fruit_id'],
                    'quantity' => $fruit['quantity'],
                    'amount' => $fruit['amount'],
                ]);
                $invoiceItem->save();
            }

            return redirect()->route('invoice')
                ->withSuccess('Create Invoice successfully');
        }
        return back()->withErrors([
            'customer_name' => 'something went wrong',
        ])->onlyInput('customer_name');
    }
    public function editInvoice(Request $request)
    {
        if($request->isMethod('get')) {
            $fruits = Fruit::all();
            $invoice = Invoice::with('details')->where('id', $request->get('id'))->first();
            return view('edit-invoice', compact('fruits', 'invoice'));
        }

        $credentials = $request->validate([
            'customer_name' => 'required',
            'fruits' => 'required'
        ]);

        if($credentials)
        {
            $invoice = Invoice::where('id', $request->get('id'))->first();
            $invoice->customer_name = $request->get('customer_name');
            $invoice->save();

            $fruits = $request->get('fruits');
            InvoiceDetails::where('invoice_id', $request->get('id'))->delete();
            foreach ($fruits as $fruit) {

                $invoiceItem = new InvoiceDetails([
                    'invoice_id' => $invoice->id,
                    'fruit_id' => $fruit['fruit_id'],
                    'quantity' => $fruit['quantity'],
                    'amount' => $fruit['amount'],
                ]);
                $invoiceItem->save();
            }

            return redirect()->route('invoice')
                ->withSuccess('Create Invoice successfully');
        }
        return back()->withErrors([
            'customer_name' => 'something went wrong',
        ])->onlyInput('customer_name');
    }
    public function deleteInvoice(Request $request)
    {
        $credentials = $request->validate([
            'id' => 'required',
        ]);

        if($credentials)
        {
            Invoice::where('id', $request->get('id'))->delete();
            return redirect()->route('invoice')
                ->withSuccess('Delete invoice successfully');
        }
        return back()->withErrors([
            'id' => 'invalid id',
        ])->onlyInput('id');
    }
    public function exportInvoice(Request $request)
    {
        $credentials = $request->validate([
            'id' => 'required',
        ]);

        if($credentials)
        {
            $invoice = Invoice::where('id', $request->get('id'))->first();
            $pdf = Pdf::loadView('export_invoice_template', ['invoice'=>$invoice]);
            return $pdf->download('invoice-'.$invoice->id.'.pdf');
        }
        return back()->withErrors([
            'name' => 'Your provided credentials do not match in our records.',
        ])->onlyInput('name');
    }
}
