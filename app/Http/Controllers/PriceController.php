<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sheets;

class PriceController extends Controller
{
    public function seller(Request $request)
    {
        $values = Sheets::spreadsheet('1cIJS9cyCzG-YnD2pPSmmwANmB2wmVVpTGOZ6sT_9DMg')->sheet('Bảng Giá đại lý')->all();

        return view('prices.seller', [
            'values' => $values,
        ]);
    }

    public function sellerDownload(Request $request)
    {
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . env('GOOGLE_SERVICE_ACCOUNT_JSON_LOCATION'));

        $client = new \Google\Client();
        $client->useApplicationDefaultCredentials();
        // $client->addScope(\Google\Service\Sheets::SPREADSHEETS);

        // $service = new \Google\Service\Sheets($client);

        // $sheets = $service->spreadsheets->get('1cIJS9cyCzG-YnD2pPSmmwANmB2wmVVpTGOZ6sT_9DMg')->getSheets();
        // $sheet = $sheets[0];
        // $values = $sheet->getData();

        // dd($sheet);
        
        
        $client->addScope(\Google\Service\DRIVE::DRIVE);

        $service = new \Google\Service\Drive($client);

        $fileId = '1cIJS9cyCzG-YnD2pPSmmwANmB2wmVVpTGOZ6sT_9DMg';
        // $response = $service->files->get($fileId, array(
        //     'alt' => 'media'
        // ));
        // $content = $response->getBody()->getContents();

        $response = $service->files->export($fileId, 'application/pdf', array('alt' => 'media' ));
        $content = $response->getBody()->getContents();  
        
        $headers = [
            'Content-type'        => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="BNLN_SellerPriceTable.pdf"',
        ];
    
        return response()->make($content, 200, $headers);
    }

    public function customer(Request $request)
    {
        $values = Sheets::spreadsheet('1t-yIOPYhb1WfpiNbAv4ww_otnospOzKaYaX4C5E6J2g')->sheet('Bảng Giá bán Lẻ')->all();

        return view('prices.customer', [
            'values' => $values,
        ]);
    }

    public function customerDownload(Request $request)
    {
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . env('GOOGLE_SERVICE_ACCOUNT_JSON_LOCATION'));

        $client = new \Google\Client();
        $client->useApplicationDefaultCredentials();
        $client->addScope(\Google\Service\DRIVE::DRIVE);
        $service = new \Google\Service\Drive($client);

        $fileId = '1t-yIOPYhb1WfpiNbAv4ww_otnospOzKaYaX4C5E6J2g';
        $response = $service->files->export($fileId, 'application/pdf', array('alt' => 'media' ));
        $content = $response->getBody()->getContents();  
        
        $headers = [
            'Content-type'        => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="BNLN_PublicPriceTable.pdf"',
        ];
    
        return response()->make($content, 200, $headers);
    }
}
