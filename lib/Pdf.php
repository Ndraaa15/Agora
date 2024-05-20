<?php

namespace Lib;

use Barryvdh\DomPDF\Facade\Pdf;

class PdfLib
{
    public function generate($view, $data)
    {
        $pdf = PDF::loadView($view, $data);
        return $pdf->download('invoice.pdf');
    }
}
