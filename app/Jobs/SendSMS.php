<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Twilio\Rest\Client;

class SendSMS implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $phoneNumber,$otp;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($phoneNumber,$otp)
    {
        $this->phoneNumber = $phoneNumber;
        $this->otp = $otp;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        {
            $twilio = new Client(config('services.twilio.account_sid'), config('services.twilio.auth_token'));

            try {
                $twilio->messages->create(
                    '+923107379985', // recipient number
                    [
                        'from' => config('services.twilio.from'),
                        'body' => "Your OTP is " . $this->otp . ".",
                    ]
                );
            } catch (\Throwable $th) {
                Log::error("In SendSms job: ".$th->getMessage());
            }
        }
    }
}
