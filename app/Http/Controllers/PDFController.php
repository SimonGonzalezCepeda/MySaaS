<?php

namespace App\Http\Controllers;

use DOMPDF;
use Illuminate\Contracts\View\View;
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
    public function invoiceHtml()
    {
        $data = [
            'vendor' => 'HOLA',
            'user' => 'Sylver'
        ];
        return view($data);
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

    public function view(array $data)
    {
        return View::make('cashier::receipt', array_merge(
            $data, ['invoice' => $this, 'user' => $this->user, 'vendor' => $this->vendor]
        ));
    }
}
