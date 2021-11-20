<?php


namespace App\Components;


class NovaPoshtaDelivery
{
    protected $url = "https://api.novaposhta.ua/v2.0/json/";
    protected $token = "5bd1ad9455c5847e852bbfd4c51e329a";
    //74ddda9c-43b8-11ec-8513-b88303659df5
    //2e23c544-28ec-11ec-8513-b88303659df5
    public $CiteRef;
    public $FindByString;


    protected function connect($data){
        $data = json_encode($data);
        $ch = curl_init($this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $response= curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response, true);
        return $response;
    }

    public function setDataWarehouses(){
        $data = [
            "modelName" => "AddressGeneral",
            "calledMethod" => "getWarehouses",
            "methodProperties" => [
                "Language" => "ru",
                "CityRef" => $this->CiteRef,
                "FindByString" => $this->FindByString,
                "Limit" => 15,
            ],
            "apiKey" => $this->token,
        ];
        return $data;
    }

    public function getWarehouses(){
        $response = $this->connect($this->setDataWarehouses());
        return $response;
    }

}
