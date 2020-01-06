<?php

namespace Bigcommerce\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class BigcommerceController extends Controller {

    public function getAllProduct(Request $request)
    {
        $client = new \GuzzleHttp\Client([
            'headers' => ['Content-Type' => 'application/json','Accept' => 'application/json','X-Auth-Token' => 'g3r4zmq36wo0frsgil0ux97ylvvgzvt','X-Auth-Client' => 'piliq2oeuu44bzr3hw90ie5ukxi0v3m']
        ]);
        if(isset($request->page)&&isset($request->limit)){
            $pageNumber = $request->page;
            $limit = $request->limit;
            $response = $client->get('https://api.bigcommerce.com/stores/kdvrc6bx/v3/catalog/products?page'.$pageNumber.'&limit'.$limit);

        }else{
            $response = $client->get('https://api.bigcommerce.com/stores/kdvrc6bx/v3/catalog/products');

        }
        $response = json_decode($response->getBody(), true);
        return $response;
    }


}