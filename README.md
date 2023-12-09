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

                     <!-- documentation section start -->
    <div class="pt-50 pb-50 documentation-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <button class="sidebar-menu-open-btn mb-5"><i class="las la-bars"></i> Menu</button>
                    <div class="documentation-menu-wrapper">
                        <button class="sidebar-close-btn"><i class="las la-times"></i></button>
                        <nav class="sidebar-menu">
                            <ul class="menu">
                                <li class="has_child"><a href="#introduction-section">Get started</a>
                                    <ul class="drp-menu">
                                        <li class="active"><a href="#introduction">Introduction</a></li>
                                        <li><a href="#currency">Supported Currencies</a></li>
                                        <li><a href="#api-key">Get Api Key</a></li>
                                        <li><a href="#initiate">Initiate Payment</a></li>
                                    <!-- doc-section end -->
                        <div class="doc-section" id="currency">
                            <div class="doc-content">
                                <section id="">
                                    <h2>Supported Currencies</h2>
                                    <p class="mt-2">This section describes the currencies supported by <strong>WestinPay</strong></p>
                                    <hr>
                                    <p>
                                        <strong>WestinPay</strong>
                                         allows to make transaction with below currencies. Any new currency may update in future.                                    </p>
                                </section>
                                <section id="setting-two">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Currency Name</th>
                                                    <th>Currency Symbol</th>
                                                    <th>Currency Code</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                                                                    <tr>
                                                        <td>United States Dollar</td>
                                                        <td>$</td>
                                                        <td>USD</td>
                                                    </tr>
                                                                                                    <tr>
                                                        <td>GBP</td>
                                                        <td>£</td>
                                                        <td>GBP</td>
                                                    </tr>
                                                                                                    <tr>
                                                        <td>Euro</td>
                                                        <td>€</td>
                                                        <td>EUR</td>
                                                    </tr>
                                                                                                    <tr>
                                                        <td>Canadian dollar</td>
                                                        <td>CAD</td>
                                                        <td>CAD</td>
                                                    </tr>
                                                                                                    <tr>
                                                        <td>Swiss franc</td>
                                                        <td>CHF</td>
                                                        <td>CHF</td>
                                                    </tr>
                                                                                                    <tr>
                                                        <td>Australian dollar</td>
                                                        <td>A$</td>
                                                        <td>AUD</td>
                                                    </tr>
                                                                                                    <tr>
                                                        <td>Hong Kong dollar</td>
                                                        <td>HK$</td>
                                                        <td>HKD</td>
                                                    </tr>
                                                                                                    <tr>
                                                        <td>Indian rupee</td>
                                                        <td>₹</td>
                                                        <td>INR</td>
                                                    </tr>
                                                                                                    <tr>
                                                        <td>New Zealand dollar</td>
                                                        <td>NZ$</td>
                                                        <td>NZD</td>
                                                    </tr>
                                                                                                    <tr>
                                                        <td>Russian ruble</td>
                                                        <td>₽</td>
                                                        <td>RUB</td>
                                                    </tr>
                                                                                                    <tr>
                                                        <td>Romanian leu</td>
                                                        <td>L</td>
                                                        <td>RON</td>
                                                    </tr>
                                                                                                    <tr>
                                                        <td>Bulgarian lev</td>
                                                        <td>BGN</td>
                                                        <td>BGN</td>
                                                    </tr>
                                                                                                    <tr>
                                                        <td>Swedish krona</td>
                                                        <td>kr</td>
                                                        <td>SEK</td>
                                                    </tr>
                                                                                                    <tr>
                                                        <td>Turkish lira</td>
                                                        <td>₺</td>
                                                        <td>TRY</td>
                                                    </tr>
                                                                                                    <tr>
                                                        <td>Brazilian real</td>
                                                        <td>R$</td>
                                                        <td>BRL</td>
                                                    </tr>
                                                                                                    <tr>
                                                        <td>Polonya zlotisi</td>
                                                        <td>zł</td>
                                                        <td>PLN</td>
                                                    </tr>
                                                                                                    <tr>
                                                        <td>South Africa ZAR</td>
                                                        <td>R</td>
                                                        <td>ZAR</td>
                                                    </tr>
                                                                                                    <tr>
                                                        <td>Bitcoin</td>
                                                        <td>₿</td>
                                                        <td>BTC</td>
                                                    </tr>
                                                                                                    <tr>
                                                        <td>ETHEREUM</td>
                                                        <td>Ξ</td>
                                                        <td>ETH</td>
                                                    </tr>
                                                                                                    <tr>
                                                        <td>DOGECOİN</td>
                                                        <td>Ð</td>
                                                        <td>DOGE</td>
                                                    </tr>
                                                                                                    <tr>
                                                        <td>AZN MANAT</td>
                                                        <td>₼</td>
                                                        <td>AZN</td>
                                                    </tr>
                                                                                                    <tr>
                                                        <td>TRX</td>
                                                        <td>TRX</td>
                                                        <td>TRX</td>
                                                    </tr>
                                                                                                    <tr>
                                                        <td>USDT.TRC20</td>
                                                        <td>₮</td>
                                                        <td>USDT</td>
                                                    </tr>
                                                                                            </tbody>
                                        </table>
                                    </div><!-- table-responsive end -->
                                </section>
                            </div><!-- doc-content end -->
                        </div><!-- doc-section end -->
