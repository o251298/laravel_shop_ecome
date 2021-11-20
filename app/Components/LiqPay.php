<?php


namespace App\Components;

class LiqPay
{
    protected $order_id;
    protected $description;
    protected $amount;
    protected $private_key;
    protected $public_key;

    public function __construct($order_id, $description, $amount)
    {
        $this->order_id = $order_id;
        $this->description = $description;
        $this->amount = $amount;
        $this->public_key = config('liqpay.public_key');
        $this->private_key = config('liqpay.private_key');

    }

    public function setParams()
    {
        $params = [
            "public_key" => $this->public_key,
            "version" => "3",
            "action" => "pay",
            "amount" => $this->amount,
            "currency" => "UAH",
            "description" => $this->description,
            "order_id" => $this->order_id,
        ];
        return $params;
    }
    public function data()
    {
        $json_string = json_encode($this->setParams());
        $data = base64_encode($json_string);
        return $data;
    }

    public function signature()
    {

        $sign_string = $this->private_key . $this->data() . $this->private_key;
        $signature = base64_encode(sha1($sign_string, 1));
        return $signature;
    }

    public function run()
    {
        $param = [];
        $param['data'] = $this->data();
        $param['signature'] = $this->signature();
        return $param;
    }







}
