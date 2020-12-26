<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FirstEmail;

use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;


class EmailController extends Controller{
    public function payment(){
        // echo "Payment done?";
        $clientId = "AbobDk25HEfyVNSFDpVwUM4bn-AXRPwm0hqO9HqiDEb_6pIGqT8o1KZgwPsaWSw__SJRG8RjbzvqRa8M";
        $clientSecret = 'ECZ6LFExfBh7plG66zbwySDBmrieE_iT_ojMFyOOUFvTV0B4aM2fShb93IvJgX1xYdoq9Z7GbkKkqKCr';

        $environment = new SandboxEnvironment($clientId, $clientSecret);
        $client = new PayPalHttpClient($environment);

        $request = new OrdersCreateRequest();
        $request->prefer('return=representation');
        $request->body = [
                            "intent" => "CAPTURE",
                            "purchase_units" => [[
                                "reference_id" => "test_ref_id1",
                                "amount" => [
                                    "value" => "100.00",
                                    "currency_code" => "USD"
                                ]
                            ]],
                            "application_context" => [
                                "cancel_url" => "https://example.com/cancel",
                                "return_url" => "https://example.com/return"
                            ] 
                        ];

                try {
                    // Call API with your client and get a response for your call
                    $response = $client->execute($request);
                    
                    // If call returns body in response, you can get the deserialized version from the result attribute of the response
                    print_r($response);
                }catch (HttpException $ex) {
                    echo $ex->statusCode;
                    print_r($ex->getMessage());
                }
    }
}