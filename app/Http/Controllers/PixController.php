<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Divulgueregional\ApiInterV2\InterBanking;
//use Junges\Pix\Pix;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class PixController extends Controller
{


 protected $baseUrl = "https://sandbox.api.pagseguro.com";
protected $apiKey = "82AA97D4BF444BC1A1589DBA152E213E";
 //protected $apiKey = "f42321a5-0dc3-4158-8a34-24003652cad72d9081a44a84b484b2befb1debe68e037473-9f62-4f4f-8b2c-e3b98cc7b0f3";

 private $CostomerName;
 private $CostomerEmail;
 private $CostomerTaxID;

 private $CostomerNumber;

 private $ItemName;
 private $ItemAmount;


 private $AddressStreet;
 private $AddressNumber;
 private $AddressComplement;
 private $AddressLocality;
 private $AddressCity;
 private $AddressRegion;
 
 private $AddressCountry = "BRA";
 private $AddressPostal = "01452002";

 public function setCostomer($name, $email, $taxID, $number){
    $this->CostomerName = $name;
    $this->CostomerEmail = $email;
    $this->CostomerTaxID = $taxID;
    $this->CostomerNumber = $number;
    return $this;
 }

 public function setItem($name, $amount){
    $this->ItemName = $name;
    $this->ItemAmount = $amount;
    return $this;
 }

 public function setAddress($street, $number, $complement, $locality, $city, $regionCode){
    $this->AddressStreet = $street;
    $this->AddressNumber = $number;
    $this->AddressComplement = $complement;
    $this->AddressLocality = $locality;
    $this->AddressCity = $city;
    $this->AddressRegion = $regionCode;
    return $this;
 }




  public function createOrder()
    {
        $url = "{$this->baseUrl}/orders";

       $currentDate = Carbon::now();

        // Adicionar 30 dias
        $expirationDate = $currentDate->addDays(30)->format('Y-m-d\TH:i:sP');



        $requestData = [
            "reference_id" => "ex-00001",
            "customer" => [
                "name" => $this->CostomerName,
                "email" => $this->CostomerEmail,
                "tax_id" => $this->CostomerTaxID,
                "phones" => [
                    [
                        "country" => "55",
                        "area" => "11",
                        "number" => $this->CostomerNumber,
                        "type" => "MOBILE"
                    ]
                ]
            ],
            "items" => [
                [
                    "name" => $this->ItemName,
                    "quantity" => 1,
                    "unit_amount" => $this->ItemAmount
                ]
            ],
            "qr_codes" => [
                [
                    "amount" => [
                        "value" => $this->ItemAmount
                    ],
                    "expiration_date" => $expirationDate,
                ]
            ],
            "shipping" => [
                "address" => [
                    "street" => $this->AddressStreet,
                    "number" => $this->AddressNumber,
                    "complement" => $this->AddressComplement,
                    "locality" => $this->AddressLocality,
                    "city" => $this->AddressCity,
                    "region_code" => $this->AddressRegion,
                    "country" => $this->AddressCountry,
                    "postal_code" => $this->AddressPostal
                ]
            ],
            "notification_urls" => [
                "https://alexandrecardoso-pagseguro.ultrahook.com"
            ]
        ];

        $client = new Client();

        try {
            $response = $client->post($url, [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ' . $this->apiKey
                ],
                'json' => $requestData
            ]);

            $result = json_decode($response->getBody(), true);

   
            return $result;
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }



    public function verifyPaymentStatus(string $charge_id){
        $url = "{$this->baseUrl}/orders/{$charge_id}";




        $client = new Client();

        try {
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ' . $this->apiKey
                ]
            
            ]);

            $result = json_decode($response->getBody(), true);
            return $result;


        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }


    }

}
