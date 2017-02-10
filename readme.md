# Laravel - Africa is Talking Sms 


Using Laravel Framework and Africa Is Talking Api, SMS can now be sent in Africa with ease. Follow the steps below and use the Package
## Installation

Run composer require ftg/sms:dev-master at the root of your Laravel Project.

## Africa is Talking Account Creation

You will need an account in Africa is Talking. By default a new account has 10 free sms for test purposes. Visit [Africa is Talking](https://account.africastalking.com/login) and create an account or login if you have one. 
#### Api Creation
Create an Api Key that will be used to send the messages
 
## Configuration
Add the following line to your providers in the App/Config/app.php file;

Ftg\Sms\Facades\Sms::class,

Add the following line to your aliases in the App/Config/app.php file;

'SMS' => Ftg\Sms\Facades\Sms::class,

Add the following lines to your .env file for the Package to pick your africa is talking username and api key. Complete them with the relevant credentials

Africa_Is_Talking_Username=

Africa_Is_Talking_API_KEY=

##Usage
In your controller include the following line at the top;

use Ftg\Sms\Facades\Sms;

In the function send the message as follows;

    /**
     * Sending of Sms
     * Not that numbers have to begin with 254 for Kenya
     **/
    public function test()
    {
            $mobile = "254...";
            $message = "Your Message goes here";
            Sms::send_sms($mobile,$message);
            return "message sent";
    }

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
