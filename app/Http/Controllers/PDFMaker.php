<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PDFMaker extends Controller
{
    public function gen(){
        $pdf = App::make('dompdf.wrapper');
        $data = "<h1 style='color: mediumvioletred;'>Provashish pdf</h1><h2 style='color: brown'>header 2</h2>";
        $pdf->loadHTML($data);
        return $pdf->stream();
    }
}
