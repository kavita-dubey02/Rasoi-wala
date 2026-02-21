<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class OtpService
{
    public function sendOtp($mobile, $otp)
    {
        $authKey = "353446494e4741494e30313134371744986361";
        $senderId = "FINDSL";
        $route = "1"; 
        $templateId = "1707174497877024099";
        $message = "{$otp} is the OTP for FINGAIN DIGI SOLUTION SERVICES Registration. Don't share with anyone.";
        $response = Http::get("http://135.181.75.92/http-tokenkeyapi.php", [
            'authentic-key' => $authKey,
            'senderid' => $senderId,
            'route' => $route,
         'number' => $mobile,
            'message' => $message,
            'templateid' => $templateId,
        ]);
        \Log::info("Sending OTP: " . $otp . " to " . $mobile);
        \Log::info("SMS API Response Body: " . $response->body());
        return $response->body();
    }
} 