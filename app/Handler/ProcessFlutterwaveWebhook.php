<?php


namespace App\Handler;
use \Spatie\WebhookClient\ProcessWebhookJob;
use Log;
//The class extends "ProcessWebhookJob" class as that is the class 
//that will handle the job of processing our webhook before we have 
//access to it.


class ProcessFlutterwaveWebhook extends ProcessWebhookJob
{
    public function handle(){

        // "I got here";
       $data = json_decode($this->webhookCall, true);
       //Do something with the event
       Log::info($data);
       http_response_code(200); //Acknowledge you received the response
    }
}


