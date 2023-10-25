<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Barryvdh\DomPDF\Facade\Pdf;

class DownloadPdfController extends Controller
{
    public function download(Certificate $record)
    {
        $baptized = $record->baptized;
        $godparents = $baptized->godparentt;
        $parentt = $baptized->parentt;
        $celebrant = $baptized->celebrant;

        $pdf = Pdf::loadView('certificado', compact(
            'record',
            'baptized',
            'godparents',
            'parentt',
            'celebrant'
        ));

        return $pdf->stream('certificado.pdf');
    }
}
