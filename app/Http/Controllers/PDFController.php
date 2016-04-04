<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PDFController extends Controller
{
    public function downloadInvoice()
    {
        return view("invoice");
    }

    public function donwload($pdf)
    {
        $filename = "hola.pdf";

        return new Response($pdf, 200,[
           'Content-Description' => 'File Transfer',

        ]);
    }
}
