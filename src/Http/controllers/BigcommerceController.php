<?php

namespace Bigcommerce\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;




class BigcommerceController extends Controller {

    public function getBaseUrl(){
        $store_hash = $_ENV['STORE_HASH'];
        return "https://api.bigcommerce.com/stores/".$store_hash."/v3/";
    }

    public function getAllProduct(Request $request)
    {
        try {
            $url = $this->getBaseUrl();
            $client = new \GuzzleHttp\Client([
                'headers' => ['Content-Type' => 'application/json','Accept' => 'application/json','X-Auth-Token' => $_ENV['AUTH_TOKEN'],'X-Auth-Client' => $_ENV['AUTH_CLIENT']]
            ]);
            if(isset($request->page)&&isset($request->limit)){
                $pageNumber = $request->page;
                $limit = $request->limit;
                $response = $client->get($url.'catalog/products?page='.$pageNumber.'&limit='.$limit);
            }else{
                $response = $client->get($url.'catalog/products');

            }
        } catch (\Exception $e) {
            return new JsonResponse(['error' => 'Could not retrieve data']);
        }
        $response = json_decode($response->getBody(), true);
        return $response;
    }

    
    public function getProductById(Request $request)
    {
        try {
            $product_id = $request->product_id; 
            $url = $this->getBaseUrl();
            $client = new \GuzzleHttp\Client([
                'headers' => ['Content-Type' => 'application/json','Accept' => 'application/json','X-Auth-Token' => $_ENV['AUTH_TOKEN'],'X-Auth-Client' => $_ENV['AUTH_CLIENT']]
            ]);
            $response = $client->get($url.'catalog/products/'.$product_id);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => 'Could not retrieve data']);
        }
        $response = json_decode($response->getBody(), true);
        return $response;
    }


}