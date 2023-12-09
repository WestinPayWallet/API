<?php
    $parameters = [
        'identifier' => 'DFU80XZIKS',
        'currency' => 'USD',
        'amount' => 100.00,
        'details' => 'Purchase T-shirt',
        'ipn_url' => 'http://example.com/ipn_url.php',
        'cancel_url' => 'http://example.com/cancel_url.php',
        'success_url' => 'http://example.com/success_url.php',
        'public_key' => 'your_public_key',
        'site_logo' => 'https://westinpay.com/assets/images/logoIcon/logo.png',
        'checkout_theme' => 'dark',
        'customer_name' => 'John Doe',
        'customer_email' => 'john@mail.com',

    ];

    //live end point
    $url = "https://westinpay.com/payment/initiate";

    //test end point
    $url = "https://westinpay.com/sandbox/payment/initiate";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POSTFIELDS,  $parameters);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);

    //$result contains the response back.
?>