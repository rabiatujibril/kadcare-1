<?php

namespace App\Notifications;



use Illuminate\Support\Facades\Http;

class SMS
{
    const URL = "https://cheapglobalsms.com/api_v1";
    const ACCOUNT = "3586_kadcare";
    const PASS = "kadcare@123";
    const SMS_MESSAGE = [
        'request_approved' => "Dear [FACILITY], your request has been approved.",
        'request_costed' => "Dear [FACILITY], your request has been costed.",
        'request_delivered' => "Dear [FACILITY], your request has been delivered.",
        'request_cancelled' => "Dear [FACILITY], your request has been cancelled.",
    ];

    public static function requests($body = [], $url = self::URL, $headers = []){
        $response = Http::accept('application/json')
            ->post($url, array_merge([
                'sub_account' => self::ACCOUNT,
                'sub_account_pass' => self::PASS,
            ], $body));
        return $response;
    }

    public static function getBalance($action="account_info"){
        return json_decode(self::requests([
            'action' => $action,
        ]));
    }

    public static function updateInfo($new_default_sender_id = 'KADCARE',$new_notification_email = 'sms@mikrotech.ng', $action="update_account_info"){
        return json_decode(self::requests([
            'new_default_sender_id' => $new_default_sender_id,
            'new_notification_email' => $new_notification_email,
            'action' => $action,
        ]));
    }

    public static function sendSMS($recipients, $message , $sender_id = null, $is_flash = false, $action='send_sms'){
        return json_decode(self::requests([
            'recipients' => $recipients,
            'message' => $message,
            'sender_id' => $sender_id,
            'type' => $is_flash ? 1 : 0,
            'action' => $action,
        ]));
    }
}
