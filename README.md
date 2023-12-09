# API
# Automatic payment documentation with WestinPay Wallet
# https://westinpay.com/api/documentation#demo

<img src="https://westinpay.com/assets/images/20BC661C-3C34-4C9B-BAAD-D7BE95162806.jpeg" >
<img src="https://westinpay.com/assets/images/AFCF2D90-B4A4-4710-8B12-B420F7ECB07F.jpeg" >

<section class="inner-hero overlay--one bg_img" style="background-image: url('https://westinpay.com/assets/images/frontend/breadcrumb/6501e2289bd661694622248.png');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h2 class="page-title text-center text-white">Developer - Api Documentation</h2>
                <ul class="page-breadcrumb justify-content-center">
                    <li><a href="https://westinpay.com">Dashboard</a></li>
                    <li>Developer - Api Documentation</li>
<!-- doc-content end -->
                            <div class="doc-code">
                                <div class="doc-code-inner">
                                    <div class="code-block">
                                        <button class="clipboard-btn" data-clipboard-target="#php">copy</button>
                                        <div class="code-block-header">Example PHP code</div>

<pre><code class="language-php" id="php">&lt;?php
    $parameters = [
        'identifier' =&gt; 'DFU80XZIKS',
        'currency' =&gt; 'USD',
        'amount' =&gt; 100.00,
        'details' =&gt; 'Purchase T-shirt',
        'ipn_url' =&gt; 'http://example.com/ipn_url.php',
        'cancel_url' =&gt; 'http://example.com/cancel_url.php',
        'success_url' =&gt; 'http://example.com/success_url.php',
        'public_key' =&gt; 'your_public_key',
        'site_logo' =&gt; 'https://westinpay.com/assets/images/logoIcon/logo.png',
        'checkout_theme' =&gt; 'dark',
        'customer_name' =&gt; 'John Doe',
        'customer_email' =&gt; 'john@mail.com',

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
?&gt;</code></pre>

                                 
                                        <div class="code-block-header">Example Responses</div>

<pre><code class="language-php" id="response">//Error Response.
{
    "error": "true",
    "message": "Invalid api key"
}

//Success Response.
{
    "success": "ok",
    "message": "Payment Initiated. Redirect to url.",
    "url":"http://example.com/initiate/payment/checkout?payment_id=eJSAASDxdrt4DASDASVNASJA7893232432cvmdsamnvASF"
}
</code></pre>

                                    </div><!-- code-block end -->
                                </div>
                            </div>
                        </div><!-- doc-section end -->
