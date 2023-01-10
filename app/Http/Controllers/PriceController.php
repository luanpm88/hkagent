<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sheets;

class PriceController extends Controller
{
    public function getSheetValues($sheetId, $range)
    {
        $client = new \Google\Client();
        $client->useApplicationDefaultCredentials();
        $client->addScope(\Google\Service\Sheets::SPREADSHEETS);
        $service = new \Google\Service\Sheets($client);
        $response = $service->spreadsheets_values->get($sheetId, $range);
        return $response->getValues();
    }

    public function getExportedPdfFileContentFromSheet($sheetId)
    {
        $client = new \Google\Client();
        $client->useApplicationDefaultCredentials();
        $client->addScope(\Google\Service\Drive::DRIVE);

        $service = new \Google\Service\Drive($client);

        $response = $service->files->export($sheetId, 'application/pdf', array('alt' => 'media' ));
        return $response->getBody()->getContents();  
    }

    public function seller(Request $request)
    {
        $range = 'Bảng Giá đại lý';
        $sheetId = '1cIJS9cyCzG-YnD2pPSmmwANmB2wmVVpTGOZ6sT_9DMg';

        $values = $this->getSheetValues($sheetId, $range);
        
        return view('prices.seller', [
            'values' => $values,
        ]);
    }

    public function sellerDownload(Request $request)
    {
        $content = $this->getExportedPdfFileContentFromSheet('1cIJS9cyCzG-YnD2pPSmmwANmB2wmVVpTGOZ6sT_9DMg');
    
        return response()->make($content, 200, [
            'Content-type'        => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="BNLN_SellerPriceTable.pdf"',
        ]);
    }

    public function customer(Request $request)
    {
        $range = 'Bảng Giá bán Lẻ';
        $sheetId = '1t-yIOPYhb1WfpiNbAv4ww_otnospOzKaYaX4C5E6J2g';

        $values = $this->getSheetValues($sheetId, $range);
        
        return view('prices.customer', [
            'values' => $values,
        ]);
    }

    public function customerDownload(Request $request)
    {
        $content = $this->getExportedPdfFileContentFromSheet('1t-yIOPYhb1WfpiNbAv4ww_otnospOzKaYaX4C5E6J2g');
    
        return response()->make($content, 200, [
            'Content-type'        => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="BNLN_SellerPriceTable.pdf"',
        ]);
    }
}
