<?php

namespace CloudWales\LaravelInfobipSms;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class LaravelInfobipSms
{
    private mixed $sender;
    private mixed $username;
    private mixed $password;
    private mixed $host;

    public function __construct()
    {
        $this->sender = config('infobip-sms.sender');
        $this->username = config('infobip-sms.username');
        $this->password = config('infobip-sms.password');
        $this->host = config('infobip-sms.host');
    }

    public function send($recipients, $message)
    {
        $destinationsArray = $this->preparePhoneNumbers($recipients);


            $response = Http::withBasicAuth($this->username, $this->password)
                ->withHeaders([
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json'
                ])
                ->post($this->host.'/sms/3/messages', [
                    "messages" => [
                        "sender" => $this->sender,
                        "destinations" => $destinationsArray,
                        "content" => [
                            "text" => $message
                        ]
                    ]
                ]);

            if(config('infobip-sms.debug')) {
                $this->logDebugData($response);
            }

            return $response->json();

    }

    private function preparePhoneNumbers($recipients): array
    {
        return collect($recipients)
            ->mapWithKeys(fn($item) => ['to' => $item])
            ->toArray();
    }

    private function logDebugData($response): void
    {
        collect($response->object()->messages)->map(
            fn($message) => Log::info($message->messageId." - ".$message->status->name." - ".$message->destination)
        );
    }
}
