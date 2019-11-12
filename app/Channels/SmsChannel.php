<?php

namespace App\Channels;

use GuzzleHttp\Client;
use Illuminate\Notifications\Notification;

class SmsChannel
{
    /**
     * Send the given notification.
     *
     * @param mixed $notifiable
     * @param \Illuminate\Notifications\Notification $notification
     * @return void
     */
    public function send($notifiable, Notification $notification)
    {
        $message = $notification->toSms($notifiable);

        $client = new Client();

        $response = $client->request('post', env('SMS_API_URL'), [
            'form_params' => [
                'api_key'  => env('SMS_API_KEY', ''),
                'type'     => $message->type,
                'contacts' => $message->to,
                'senderid' => $message->from,
                'msg'      => $message->content,
            ]
        ]);

        return $response;
    }
}
