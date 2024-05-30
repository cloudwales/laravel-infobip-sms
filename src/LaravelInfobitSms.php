<?php

namespace CloudWales\LaravelInfobitSms;

class LaravelInfobitSms
{
    private mixed $username;
    private mixed $password;
    private mixed $url;
    private mixed $sender;

    public function __construct()
    {
        $this->username = config('infobit-sms.username');
        $this->password = config('infobit-sms.password');
        $this->url = config('infobit-sms.url');
        $this->sender = config('infobit-sms.sender');
    }

    public function send($recipient, $message)
    {
        $response = Http::withBasicAuth(
            $this->username,
            $this->password
        )
            ->withHeaders([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ])
            ->post($this->url.'/sms/3/messages', [
                "messages" => [
                    "sender" => $this->sender,
                    "destinations" => [
                        "to" => $recipient,
                    ],
                    "content" => [
                        "text" => $message
                    ]
                ]
            ]);

        return $response->json();
    }
}
