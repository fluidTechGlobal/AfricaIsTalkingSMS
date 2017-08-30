<?php

namespace Ftg\Sms;
use AfricasTalkingGateway;
include __DIR__.'/AfricasTalkingGateway.php';

class Sms{

    /**
     *
     **/
    public function send_sms($phone_number, $message)
    {
        // Be sure to include the file you've just downloaded

        $username   = env('Africa_Is_Talking_Username', 'production');
        $apikey     = env('Africa_Is_Talking_API_KEY', 'production');
        // Specify the numbers that you want to send to in a comma-separated list
        // Please ensure you include the country code (+254 for Kenya in this case)
        $recipients = $phone_number;
        // And of course we want our recipients to know what we really do
        $message    = $message;
        // Create a new instance of our awesome gateway class
        $gateway    = new AfricasTalkingGateway($username, $apikey);
        // Any gateway error will be captured by our custom Exception class below,
        // so wrap the call in a try-catch block
        // Specify your AfricasTalking shortCode or sender id
        $from = env('Africa_Is_Talking_ID', 'production');
        try
        {
            // Thats it, hit send and we'll take care of the rest.
            $results = $gateway->sendMessage($recipients, $message,$from);

//            foreach($results as $result) {
//                 status is either "Success" or "error message"
//                echo " Number: " .$result->number;
//                echo " Status: " .$result->status;
//                echo " MessageId: " .$result->messageId;
//                echo " Cost: "   .$result->cost."\n";
//            }
        }
        catch ( AfricasTalkingGatewayException $e )
        {
            echo "Encountered an error while sending: ".$e->getMessage();
        }
// DONE!!!
    }
}