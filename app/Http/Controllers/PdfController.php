<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'title' => 'Sample PDF',
            'content' => 'This is a demo PDF generated using Snappy in Laravel!'
        ];

        $pdf = PDF::loadView('pdf.sample', $data);
        // dd($pdf);
        return $pdf->download('sample.pdf');
    }
}
