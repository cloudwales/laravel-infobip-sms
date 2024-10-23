<?php

namespace CloudWales\LaravelInfobipSms;

use CloudWales\LaravelInfobipSms\Exceptions\AuthenticationFailedException;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class LaravelInfobipSms
{
    private mixed $from;
    private mixed $sender;
    private mixed $username;
    private mixed $password;
    private mixed $host;

    public function __construct()
    {
        $this->from = config('infobip-sms.from_number');
        $this->sender = config('infobip-sms.sender');
        $this->username = config('infobip-sms.username');
        $this->password = config('infobip-sms.password');
        $this->host = config('infobip-sms.host');
    }


    public function getMessageReport($bulkId)
    {
        $response = Http::withBasicAuth($this->username, $this->password)
            ->withHeaders([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ])
            ->get($this->host.'/sms/3/logs?bulkId=' . $bulkId);

        $this->throwError($response);

        return $response->json();
    }

    /**
     * @throws AuthenticationFailedException
     * @throws ConnectionException
     */
    public function sendSms($recipients, $message,  $flash = false)
    {
        $destinationsArray = $this->preparePhoneNumbers($recipients);

        $response = Http::withBasicAuth($this->username, $this->password)
            ->withHeaders([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ])
            ->post($this->host.'/sms/3/messages', [
                "messages" => [
                    "sender" => config('infobip-sms.sender'),
                    "destinations" => $destinationsArray,
                    "content" => [
                        "text" => $message
                    ],
                    'options' => [
                        'flash' => $flash
                    ]
                ]
            ]);

        $this->throwError($response);

        return $response->json();
    }

    public function sendWhatsApp($recipient, $message)
    {
        $payload = [
            "from" => config('infobip-sms.from'),
            "to" => $recipient,
            "content" => [
                "text" => $message
            ]
        ];

        $response = Http::withBasicAuth($this->username, $this->password)
            ->withHeaders([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ])
            ->post($this->host.'/whatsapp/1/message/text', $payload);

        $this->throwError($response);

        return $response->json();
    }


    private function preparePhoneNumbers($recipients): array
    {
        return collect($recipients)
            ->mapWithKeys(fn($item) => ['to' => $item])
            ->toArray();
    }

    /**
     * @throws AuthenticationFailedException
     */
    public function throwError(\GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response $response): void
    {
        if (isset($response->object()->errorCode) && $response->object()->errorCode == 'E401') {
            throw AuthenticationFailedException::unauthorisedUser($response->object()->description);
        }
    }

}
