<?php namespace App\Http\Controllers;

use Carbon\Carbon;
use Request;
use App\Models\Invoice;

class InvoiceController extends Controller {

    public function showAll() {
        $invoices = Invoice::all();
        return view('invoice_all', ['invoices' => $invoices->getArray()]);
    }

    public function show($id) {
        $invoice = new Invoice($id);
        return view('invoice', ['invoice' => $invoice]);
    }

    public function getItems() {
        $line_item = Invoice::getItems();
        return view('line_items', ['invoice' => $line_item]);
    }

    public function create() {
        return view('new_invoice');
    }

    public function postCreate() {
        return redirect('invoice');
    }

    public function edit() {
        return view('edit_invoice');
    }

    public function postEdit() {
        return redirect('invoice');
    }

    public function delete() {
        return redirect('invoice');
    }

    protected function validateForm() {
        
    }

}