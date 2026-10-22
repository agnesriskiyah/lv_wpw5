<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;

class OrderController extends Controller
{
    public function download()
    {
        $pdf = Pdf::loadView('invoices.invoice');

        return $pdf->stream('invoice.pdf');
    }
}
