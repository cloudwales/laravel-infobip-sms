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
        $this->username = config('sms-infobip.username');
        $this->password = config('sms-infobip.password');
        $this->url = config('sms-infobip.url');
        $this->sender = config('sms-infobip.sender');
    }


    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/sms-infobip.php' => config_path('sms-infobip.php'),
        ]);
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
            ->post($this->url . '/sms/3/messages', [
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
