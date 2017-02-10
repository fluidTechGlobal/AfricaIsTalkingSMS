# Laravel - Africa is Talking Sms 

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

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

Add the following lines to your .env file for the Package to pick your africa is talking username and api key.



## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
