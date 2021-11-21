<?php
namespace App\Components;
use Illuminate\Support\Facades\Log;

class SmsProvider
{
    // Объявление свойств класса
    protected $token = 'FSro5zwxf9IYIen';
    protected $originator = 'Shop Zakaz';
    protected $endpoint = 'https://im.smsclub.mobi/sms/send';

    protected $text;
    protected $number;

    // Передача данных в класс
    public function __construct($text, $number)
    {

        $this->text = $text;
        $this->number = $number;
    }

    // Формирование данных в формат JSON
    public function data(){

        $data = json_encode([
            'phone' => [$this->number],
            'message' => $this->text,
            'src_addr' => $this->originator
        ]);
        return $data;
    }

    // Функция отправки смс
    public function sendMessage() {

        Log::channel('sms')->info($this->data());
        $res = false;
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => $this->endpoint,
            CURLOPT_POSTFIELDS => $this->data(),
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                'Authorization: Bearer ' . $this->token,
                'Content-Type: application/json'
            ]
        ]);
        $result = curl_exec($ch);
        $res = $result;
        curl_close($ch);
        return $res;
    }
}
