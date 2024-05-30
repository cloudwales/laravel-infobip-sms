<?php

namespace CloudWales\LaravelInfobipSms;

use Illuminate\Support\Facades\Http;

class LaravelInfobipSms
{
    private mixed $username;
    private mixed $password;
    private mixed $url;
    private mixed $sender;

    public function __construct()
    {
        $this->username = config('infobip-sms.username');
        $this->password = config('infobip-sms.password');
        $this->url = config('infobip-sms.url');
        $this->sender = config('infobip-sms.sender');
    }

    public function send($recipients, $message)
    {
        $destinationsArray = $this->preparePhoneNumbers($recipients);

        $response = Http::withBasicAuth($this->username, $this->password)
            ->withHeaders([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ])
            ->post($this->url.'/sms/3/messages', [
                "messages" => [
                    "sender" => $this->sender,
                    "destinations" => $destinationsArray,
                    "content" => [
                        "text" => $message
                    ]
                ]
            ]);


        return $response->json();
    }

    private function preparePhoneNumbers($recipients): array
    {
        return collect($recipients)
            ->mapWithKeys(fn($item) => ['to' => $item])
            ->toArray();
    }
}
