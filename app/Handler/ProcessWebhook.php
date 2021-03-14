<?php
namespace App\Handler;
use Log;
use \Spatie\WebhookClient\ProcessWebhookJob;
//The class extends "ProcessWebhookJob" class as that is the class 
//that will handle the job of processing our webhook before we have 
//access to it.


class ProcessWebhook extends ProcessWebhookJob
{
public function handle(){
       $data = json_decode($this->webhookCall, true);
       //Do something with the event
       Log::info($data);
       http_response_code(200); //Acknowledge you received the response
    }
}