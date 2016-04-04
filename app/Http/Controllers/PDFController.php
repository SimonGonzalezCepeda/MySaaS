<?php

namespace App\Http\Controllers;

use DOMPDF;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Http\Response;

/**
 * Class PDFController
 * @package App\Http\Controllers
 */
class PDFController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function incoiceHtml()
    {
        return view('receip');
    }

    /**
     * @return Response
     */
    public function downloadInvoice()
    {
        if (!defined('DOMPDF_ENABLE_AUTOLOAD')){
            define('DOMPDF_ENABLE_AUTOLOAD',false);
        }
        if (file_exists($configPath = base_path().'/vendor/dompdf/dompdf/dompdf_config.inc.php')){
            require_once $configPath;
        }
        $dompdf = new Dompdf();
        $dompdf->load_html("<h1>Hola</h1>");
        $dompdf->render();
        return $this->donwload($dompdf->output());

    }

    /**
     * @param $pdf
     * @return Response
     */
    public function donwload($pdf)
    {
        $filename = "hola.pdf";

        return new Response($pdf, 200,[
           'Content-Description' => 'File Transfer',
            'Content-Disposition' => 'filename="'.$filename.'"', //amb attachment, linea per a fer descarregar el fitxer
            'Content-Transfer_Encoding' => 'binary',
            'Content-Type' => 'application/pdf'
        ]);
    }
}
