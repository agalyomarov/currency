﻿<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NETEX 24</title>
    <meta name="csrf-param" content="_csrf-frontend">
    <meta name="csrf-token" content="4sKumhfPWfO00QaM7b6_SZaww37pMp9L8wKvhywSgDOYiN3dZoYIq_mwVcjV5Pkt4cCbEL13_Xifb_j2T1XjZg==">

    <link href="assets/1fbd42ed/css/bootstrap.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet">
    <link href="css/main.min.css" rel="stylesheet">
</head>

<body>

    <div class="wrapper">
        <div class="content">

            <header>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header__wrapper">
                                <button class="menuBtn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" viewbox="0 0 30 25" fill="none">
                                        <rect id="line01" width="30" height="3" rx="1.5" fill="black"></rect>
                                        <rect id="line02" y="11" width="30" height="3" rx="1.5" fill="black"></rect>
                                        <rect id="line03" y="22" width="30" height="3" rx="1.5" fill="black"></rect>
                                    </svg>
                                </button>
                                <div class="menuBtn-shadow"></div>


                                <a class="logo" href="en.html"><img src="img/logo.svg" alt="logo"></a>
                                <div class="menu">
                                    <ul class="menu-list">
                                        <li class="menu__item">
                                            <a class="menu__link" href="en/site/questions.php">Q&A</a>
                                        </li>

                                        <li class="menu__item">
                                            <a class="menu__link" href="en/pages/rules.php">Rules</a>
                                        </li>

                                        <li class="menu__item">
                                            <a class="menu__link" href="en/site/contacts.php">Contact Us</a>
                                        </li>
                                    </ul>

                                    <div class="mobile-lang">
                                        <div class="dropdown dropdown-languages">
                                            <a href="#" data-toggle="dropdown" class="dropdown-languages__toggle">
                                                en
                                                <svg width="12" height="8" viewbox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                    <path d="M5.26545 7.20482C5.66137 7.63342 6.33863 7.63342 6.73455 7.20482L11.3776 2.17855C11.9693 1.53807 11.515 0.5 10.6431 0.5H1.35693C0.484997 0.5 0.0307255 1.53807 0.622376 2.17855L5.26545 7.20482Z" fill="#48423B"></path>
                                                </svg>
                                            </a>
                                            <ul id="w0" class="dropdown-menu">
                                                <li><a href="index.php" tabindex="-1">ru</a></li>
                                                <li><a href="en.php" tabindex="-1">en</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <a href="https://t.me/Netex24_Support" class="telegram" target="_blank">
                                    <span>Telegram</span>
                                </a>

                                <div class="lang">
                                    <div class="dropdown dropdown-languages">
                                        <a href="#" data-toggle="dropdown" class="dropdown-languages__toggle">
                                            en
                                            <svg width="12" height="8" viewbox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                <path d="M5.26545 7.20482C5.66137 7.63342 6.33863 7.63342 6.73455 7.20482L11.3776 2.17855C11.9693 1.53807 11.515 0.5 10.6431 0.5H1.35693C0.484997 0.5 0.0307255 1.53807 0.622376 2.17855L5.26545 7.20482Z" fill="#48423B"></path>
                                            </svg>
                                        </a>
                                        <ul id="w1" class="dropdown-menu">
                                            <li><a href="index.php" tabindex="-1">ru</a></li>
                                            <li><a href="en.php" tabindex="-1">en</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="backdrop"></div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="steps__form">
                            <form id="form-step1" class="form" action="/create.php" method="post" data-pjax="">
                                <input type="hidden" name="_csrf-frontend" value="4sKumhfPWfO00QaM7b6_SZaww37pMp9L8wKvhywSgDOYiN3dZoYIq_mwVcjV5Pkt4cCbEL13_Xifb_j2T1XjZg==">
                                <div class="course">
                                    Exchange rate <span>1 BTC = 1403074.83 RUB</span>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="currency-label">Give</label>
                                        <div class="currency" id="currency-from">
                                            <div class="currency-wrapper">
                                                <div class="currency-select">
                                                    <input type="hidden" name="Orders[currency_from]" value="6">
                                                    <button type="button" class="currency-select__btn">
                                                        <img src="uploads/bitcoinbtc_1607281332.svg" id="btn-icon-from">
                                                        <span id="btn-name-from">Bitcoin</span>
                                                    </button>
                                                </div>

                                                <div class="currency-input currency-input-from">
                                                    <input type="text" id="from_summ" name="Orders[summ_from]" data-min="0.12">
                                                    <div class="currency-sign__from">BTC</div>
                                                    <div class="currency-error error1"></div>
                                                </div>
                                            </div>

                                            <div class="currency-list-wrapper">
                                                <div class="currency-head">
                                                    Cryptocurrencies </div>
                                                <ul class="currency-list">
                                                    <li class="currency-list__item" data-id="6">
                                                        <img src="uploads/bitcoinbtc_1607281332.svg">
                                                        <span>Bitcoin</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="7">
                                                        <img src="uploads/bitcoincashbch_1607281508.svg">
                                                        <span>Bitcoin Cash</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="8">
                                                        <img src="uploads/drawing_1607282516.svg">
                                                        <span>Bitcoin Gold</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="9">
                                                        <img src="uploads/ethereumeth_1607284009.svg">
                                                        <span>Ethereum</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="10">
                                                        <img src="uploads/stellarxlm_1607284178.svg">
                                                        <span>Stellar</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="11">
                                                        <img src="uploads/etherclassicetc_1607284331.svg">
                                                        <span>Ether Classic</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="12">
                                                        <img src="uploads/litecoinltc_1607284440.svg">
                                                        <span>Litecoin</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="13">
                                                        <img src="uploads/ripplexrp_1607284685.svg">
                                                        <span>Ripple</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="14">
                                                        <img src="uploads/moneroxmr_1607284815.svg">
                                                        <span>Monero</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="15">
                                                        <img src="uploads/dogecoindoge_1607284896.svg">
                                                        <span>Dogecoin</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="16">
                                                        <img src="uploads/dashdash_1607284971.svg">
                                                        <span>Dash</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="17">
                                                        <img src="uploads/zcashzec_1607285041.svg">
                                                        <span>Zcash</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="19">
                                                        <img src="uploads/1958_1621849326.png">
                                                        <span>Tron</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="21">
                                                        <img src="uploads/tether-usdt-logo_1607514459.png">
                                                        <span>Tether (USDT-TRC20)</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="30">
                                                        <img src="uploads/bittorrent_1621766944.svg">
                                                        <span>BitTorrent</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="31">
                                                        <img src="uploads/huobitoken_1621767075.svg">
                                                        <span>Huobi Token</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="35">
                                                        <img src="uploads/tezos_1621767766.svg">
                                                        <span>Tezos</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="40">
                                                        <img src="uploads/nem_1621769323.svg">
                                                        <span>NEM</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="47">
                                                        <img src="uploads/neo_1621769987.svg">
                                                        <span>NEO</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="52">
                                                        <img src="uploads/binance_1621770428.svg">
                                                        <span>Binance Coin</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="59">
                                                        <img src="uploads/trueusd_1621770978.svg">
                                                        <span>TrueUSD</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="61">
                                                        <img src="uploads/cardano_1621771160.svg">
                                                        <span>Cardano</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="67">
                                                        <img src="uploads/chainlink_1621771750.svg">
                                                        <span>Chainlink</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="70">
                                                        <img src="uploads/paxos_1621772047.svg">
                                                        <span>Paxos</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="73">
                                                        <img src="uploads/usdcoin_1621772308.svg">
                                                        <span>USD Coin - ERC20</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-6">
                                                <div class="normal-input">
                                                    <svg class="input-icon" focusable="false" viewbox="0 0 24 24" aria-hidden="true" role="presentation">
                                                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"></path>
                                                    </svg>
                                                    <input type="email" name="Orders[contact]" placeholder="E-mail">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <label class="currency-label currency-label-to">Receive</label>
                                        <div class="currency" id="currency-to">
                                            <div class="currency-wrapper">
                                                <div class="currency-select">
                                                    <input type="hidden" name="Orders[currency_to]" value="3">
                                                    <button type="button" class="currency-select__btn">
                                                        <img src="uploads/qiwi_1606567752.svg" id="btn-icon-to">
                                                        <span id="btn-name-to">Qiwi</span>
                                                    </button>
                                                </div>

                                                <div class="currency-input currency-input-to">
                                                    <input type="text" id="to_summ" name="Orders[summ_to]" data-reserv="1268741.00">
                                                    <div class="currency-sign__to">
                                                        <span class="currency-sign__name">RUB</span>
                                                        <span class="currency-sign__course">1268741.00</span>
                                                    </div>
                                                    <div class="currency-error error2"></div>
                                                </div>
                                            </div>

                                            <div class="currency-list-wrapper">
                                                <div class="currency-head">
                                                    Payment systems </div>
                                                <ul class="currency-list">
                                                    <li class="currency-list__item" data-id="3">
                                                        <img src="uploads/qiwi_1606567752.svg">
                                                        <span>Qiwi</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="4">
                                                        <img src="uploads/webmoney_1606572635.svg">
                                                        <span>Webmoney</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="5">
                                                        <img src="uploads/yandex_1606572766.svg">
                                                        <span>Yandex.Money</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="20">
                                                        <img src="uploads/c-card-green_1607285629.svg">
                                                        <span>Visa, MC ₴</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="22">
                                                        <img src="uploads/alfa_1607285990.svg">
                                                        <span>Alfa-Click ₽</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="24">
                                                        <img src="uploads/tinkoff_1607286184.svg">
                                                        <span>Tinkoff</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="25">
                                                        <img src="uploads/card_1607286252.svg">
                                                        <span>Visa, MC ₽</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="26">
                                                        <img src="uploads/vtb24_1607286347.svg">
                                                        <span>VTB24</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="27">
                                                        <img src="uploads/russianstandard_1607286410.svg">
                                                        <span>Russian Standart ₽</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="28">
                                                        <img src="uploads/promsvyazbank_1607286488.png">
                                                        <span>Promsvyazbank</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="32">
                                                        <img src="uploads/mtsbank_1621767299.svg">
                                                        <span>МТС Bank</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="33">
                                                        <img src="uploads/payeer_1621767489.svg">
                                                        <span>Payeer $</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="34">
                                                        <img src="uploads/pochtabank_1621767637.svg">
                                                        <span>Pochta Bank</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="36">
                                                        <img src="uploads/advcash_1621767914.svg">
                                                        <span>AdvCash $</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="37">
                                                        <img src="uploads/alfabank_1621768931.svg">
                                                        <span>Alfabank ₴</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="38">
                                                        <img src="uploads/capitalist_1621769079.svg">
                                                        <span>Capitalist $</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="39">
                                                        <img src="uploads/kykyryza_1621769170.svg">
                                                        <span>Кукуруза</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="41">
                                                        <img src="uploads/payeer_1621769408.svg">
                                                        <span>Payeer €</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="42">
                                                        <img src="uploads/rncb_1621769504.svg">
                                                        <span>РНКБ</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="43">
                                                        <img src="uploads/sovcombank_1621769579.svg">
                                                        <span>Совкомбанк</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="44">
                                                        <img src="uploads/advcash_1621769683.svg">
                                                        <span>AdvCash €</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="45">
                                                        <img src="uploads/avangard_1621769748.svg">
                                                        <span>Avangard</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="46">
                                                        <img src="uploads/capitalist_1621769802.svg">
                                                        <span>Capitalist €</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="48">
                                                        <img src="uploads/payeer_1621770056.svg">
                                                        <span>Payeer ₽</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="49">
                                                        <img src="uploads/rosbank_1621770140.svg">
                                                        <span>RosBank</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="50">
                                                        <img src="uploads/visamastercard_1621770275.svg">
                                                        <span>Visa, MC ₸</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="51">
                                                        <img src="uploads/advcash_1621770331.svg">
                                                        <span>AdvCash ₽</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="53">
                                                        <img src="uploads/capitalist_1621770545.svg">
                                                        <span>Capitalist ₽</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="54">
                                                        <img src="uploads/mir_1621770624.svg">
                                                        <span>Мир</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="55">
                                                        <img src="uploads/open_1621770714.svg">
                                                        <span>Открытие</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="56">
                                                        <img src="uploads/perfectmoney_1621770769.svg">
                                                        <span>Perfect Money $</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="57">
                                                        <img src="uploads/pumb_1621770840.svg">
                                                        <span>PUMB</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="58">
                                                        <img src="uploads/rshb_1621770890.svg">
                                                        <span>Россельхоз банк</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="60">
                                                        <img src="uploads/advcash_1621771053.svg">
                                                        <span>AdvCash ₴</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="62">
                                                        <img src="uploads/oschadbank_1621771304.svg">
                                                        <span>Oschadbank</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="63">
                                                        <img src="uploads/perfectmoney_1621771371.svg">
                                                        <span>Perfect Money €</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="64">
                                                        <img src="uploads/raiffeisen_1621771454.svg">
                                                        <span>Raiffeisen ₽</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="65">
                                                        <img src="uploads/ukrsibbank_1621771560.svg">
                                                        <span>Ukrsibbank</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="66">
                                                        <img src="uploads/advcash_1621771630.svg">
                                                        <span>AdvCash ₸</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="68">
                                                        <img src="uploads/gazprombank_1621771808.svg">
                                                        <span>Gazprombank</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="69">
                                                        <img src="uploads/monobank_1621771860.svg">
                                                        <span>Monobank</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="71">
                                                        <img src="uploads/perfectmoneyvoucher_1621772116.svg">
                                                        <span>PM e-Voucher</span>
                                                    </li>
                                                    <li class="currency-list__item" data-id="72">
                                                        <img src="uploads/raiffeisen_1621772162.svg">
                                                        <span>Raiffeisen ₴</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-6">
                                                <div class="normal-input normal-input-fio">
                                                    <svg class="input-icon" focusable="false" viewbox="0 0 24 24" aria-hidden="true" role="presentation">
                                                        <path d="M12 5.9c1.16 0 2.1.94 2.1 2.1s-.94 2.1-2.1 2.1S9.9 9.16 9.9 8s.94-2.1 2.1-2.1m0 9c2.97 0 6.1 1.46 6.1 2.1v1.1H5.9V17c0-.64 3.13-2.1 6.1-2.1M12 4C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"></path>
                                                    </svg>
                                                    <input type="text" name="Orders[fio]" placeholder="Recipient Personal name">
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-6">
                                                <div class="normal-input normal-input-account">
                                                    <img src="uploads/qiwi_1606567752.svg" class="input-icon" id="account-icon">
                                                    <input type="text" id="account" name="Orders[account]" placeholder="Qiwi wallet">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-bottom">
                                            <div class="agree">
                                                <div class="wrap-check">
                                                    <input type="checkbox" id="check-agree" required="">
                                                    <label for="check-agree" class="label-check">
                                                        <svg class="svg-no" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="border-radius: 2px;">
                                                            <path d="M0.5 0.5H15.5V15.5H0.5V0.5Z" stroke="black" stroke-width="2"></path>
                                                        </svg>
                                                        <svg class="svg-yes" width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M0.5 0.5H15.5V15.5H0.5V0.5Z" stroke="white"></path>
                                                            <path d="M4 6.5L7.5 10L12.5 5" stroke="black" stroke-width="2" stroke-linecap="round"></path>
                                                        </svg>
                                                    </label>
                                                </div>
                                                <label for="check-agree" class="agree_text">I agree to the processing of personal data and accept <a href="en/pages/rules.html">exchange terms</a></label>
                                            </div>
                                            <button class="form-btn" id="step1-btn">Create order</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="step1bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="reserve-list">
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/qiwi_1606567752.svg" alt="Qiwi">
                                        <div class="reserve-name">Qiwi</div>
                                        <div class="reserve-summ">1268741.00 RUB</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/webmoney_1606572635.svg" alt="Webmoney">
                                        <div class="reserve-name">Webmoney</div>
                                        <div class="reserve-summ">155000.00 USD</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/yandex_1606572766.svg" alt="Yandex.Money">
                                        <div class="reserve-name">Yandex.Money</div>
                                        <div class="reserve-summ">154001.42 RUB</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/bitcoinbtc_1607281332.svg" alt="Bitcoin">
                                        <div class="reserve-name">Bitcoin</div>
                                        <div class="reserve-summ">10.00 BTC</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/bitcoincashbch_1607281508.svg" alt="Bitcoin Cash">
                                        <div class="reserve-name">Bitcoin Cash</div>
                                        <div class="reserve-summ">45.00 BCH</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/drawing_1607282516.svg" alt="Bitcoin Gold">
                                        <div class="reserve-name">Bitcoin Gold</div>
                                        <div class="reserve-summ">156.00 BTG</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/ethereumeth_1607284009.svg" alt="Ethereum">
                                        <div class="reserve-name">Ethereum</div>
                                        <div class="reserve-summ">451.00 ETH</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/stellarxlm_1607284178.svg" alt="Stellar">
                                        <div class="reserve-name">Stellar</div>
                                        <div class="reserve-summ">24524.00 XLM</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/etherclassicetc_1607284331.svg" alt="Ether Classic">
                                        <div class="reserve-name">Ether Classic</div>
                                        <div class="reserve-summ">42541.00 ETC</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/litecoinltc_1607284440.svg" alt="Litecoin">
                                        <div class="reserve-name">Litecoin</div>
                                        <div class="reserve-summ">74724.00 LTC</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/ripplexrp_1607284685.svg" alt="Ripple">
                                        <div class="reserve-name">Ripple</div>
                                        <div class="reserve-summ">424522.00 XRP</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/moneroxmr_1607284815.svg" alt="Monero">
                                        <div class="reserve-name">Monero</div>
                                        <div class="reserve-summ">102554.00 XMR</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/dogecoindoge_1607284896.svg" alt="Dogecoin">
                                        <div class="reserve-name">Dogecoin</div>
                                        <div class="reserve-summ">1400224.00 DOGE</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/dashdash_1607284971.svg" alt="Dash">
                                        <div class="reserve-name">Dash</div>
                                        <div class="reserve-summ">742444.00 DASH</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/zcashzec_1607285041.svg" alt="Zcash">
                                        <div class="reserve-name">Zcash</div>
                                        <div class="reserve-summ">455701.00 ZEC</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/1958_1621849326.png" alt="Tron">
                                        <div class="reserve-name">Tron</div>
                                        <div class="reserve-summ">235042.00 TRX</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/c-card-green_1607285629.svg" alt="Visa, MC ₴">
                                        <div class="reserve-name">Visa, MC ₴</div>
                                        <div class="reserve-summ">4562201.00 UAH</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/tether-usdt-logo_1607514459.png" alt="Tether (USDT-TRC20)">
                                        <div class="reserve-name">Tether (USDT-TRC20)</div>
                                        <div class="reserve-summ">483700.00 USDT</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/alfa_1607285990.svg" alt="Alfa-Click ₽">
                                        <div class="reserve-name">Alfa-Click ₽</div>
                                        <div class="reserve-summ">456321.00 RUB</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/tinkoff_1607286184.svg" alt="Tinkoff">
                                        <div class="reserve-name">Tinkoff</div>
                                        <div class="reserve-summ">4561321.00 RUB</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/card_1607286252.svg" alt="Visa, MC ₽">
                                        <div class="reserve-name">Visa, MC ₽</div>
                                        <div class="reserve-summ">12315441.00 RUB</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/vtb24_1607286347.svg" alt="VTB24">
                                        <div class="reserve-name">VTB24</div>
                                        <div class="reserve-summ">1321255.00 RUB</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/russianstandard_1607286410.svg" alt="Russian Standart ₽">
                                        <div class="reserve-name">Russian Standart ₽</div>
                                        <div class="reserve-summ">1235457.00 RUB</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/promsvyazbank_1607286488.png" alt="Promsvyazbank">
                                        <div class="reserve-name">Promsvyazbank</div>
                                        <div class="reserve-summ">1234647.00 RUB</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/bittorrent_1621766944.svg" alt="BitTorrent">
                                        <div class="reserve-name">BitTorrent</div>
                                        <div class="reserve-summ">120042.00 BTT</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/huobitoken_1621767075.svg" alt="Huobi Token">
                                        <div class="reserve-name">Huobi Token</div>
                                        <div class="reserve-summ">120042.00 HT</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/mtsbank_1621767299.svg" alt="МТС Bank">
                                        <div class="reserve-name">МТС Bank</div>
                                        <div class="reserve-summ">1234647.00 RUB</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/payeer_1621767489.svg" alt="Payeer $">
                                        <div class="reserve-name">Payeer $</div>
                                        <div class="reserve-summ">155000.00 USD</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/pochtabank_1621767637.svg" alt="Pochta Bank">
                                        <div class="reserve-name">Pochta Bank</div>
                                        <div class="reserve-summ">120042.00 RUB</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/tezos_1621767766.svg" alt="Tezos">
                                        <div class="reserve-name">Tezos</div>
                                        <div class="reserve-summ">155000.00 XTZ</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/advcash_1621767914.svg" alt="AdvCash $">
                                        <div class="reserve-name">AdvCash $</div>
                                        <div class="reserve-summ">120042.00 USD</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/alfabank_1621768931.svg" alt="Alfabank ₴">
                                        <div class="reserve-name">Alfabank ₴</div>
                                        <div class="reserve-summ">120042.00 UAH</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/capitalist_1621769079.svg" alt="Capitalist $">
                                        <div class="reserve-name">Capitalist $</div>
                                        <div class="reserve-summ">120042.00 USD</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/kykyryza_1621769170.svg" alt="Кукуруза">
                                        <div class="reserve-name">Кукуруза</div>
                                        <div class="reserve-summ">120042.00 RUB</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/nem_1621769323.svg" alt="NEM">
                                        <div class="reserve-name">NEM</div>
                                        <div class="reserve-summ">120042.00 XEM</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/payeer_1621769408.svg" alt="Payeer €">
                                        <div class="reserve-name">Payeer €</div>
                                        <div class="reserve-summ">120042.00 EUR</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/rncb_1621769504.svg" alt="РНКБ">
                                        <div class="reserve-name">РНКБ</div>
                                        <div class="reserve-summ">120042.00 RUB</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/sovcombank_1621769579.svg" alt="Совкомбанк">
                                        <div class="reserve-name">Совкомбанк</div>
                                        <div class="reserve-summ">120042.00 RUB</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/advcash_1621769683.svg" alt="AdvCash €">
                                        <div class="reserve-name">AdvCash €</div>
                                        <div class="reserve-summ">120042.00 EUR</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/avangard_1621769748.svg" alt="Avangard">
                                        <div class="reserve-name">Avangard</div>
                                        <div class="reserve-summ">120042.00 RUB</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/capitalist_1621769802.svg" alt="Capitalist €">
                                        <div class="reserve-name">Capitalist €</div>
                                        <div class="reserve-summ">120042.00 EUR</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/neo_1621769987.svg" alt="NEO">
                                        <div class="reserve-name">NEO</div>
                                        <div class="reserve-summ">120042.00 NEO</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/payeer_1621770056.svg" alt="Payeer ₽">
                                        <div class="reserve-name">Payeer ₽</div>
                                        <div class="reserve-summ">120042.00 RUB</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/rosbank_1621770140.svg" alt="RosBank">
                                        <div class="reserve-name">RosBank</div>
                                        <div class="reserve-summ">120042.00 RUB</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/visamastercard_1621770275.svg" alt="Visa, MC ₸">
                                        <div class="reserve-name">Visa, MC ₸</div>
                                        <div class="reserve-summ">3228017.00 KZT</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/advcash_1621770331.svg" alt="AdvCash ₽">
                                        <div class="reserve-name">AdvCash ₽</div>
                                        <div class="reserve-summ">120042.00 RUB</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/binance_1621770428.svg" alt="Binance Coin">
                                        <div class="reserve-name">Binance Coin</div>
                                        <div class="reserve-summ">120042.00 BNB</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/capitalist_1621770545.svg" alt="Capitalist ₽">
                                        <div class="reserve-name">Capitalist ₽</div>
                                        <div class="reserve-summ">120042.00 RUB</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/mir_1621770624.svg" alt="Мир">
                                        <div class="reserve-name">Мир</div>
                                        <div class="reserve-summ">120042.00 RUB</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/open_1621770714.svg" alt="Открытие">
                                        <div class="reserve-name">Открытие</div>
                                        <div class="reserve-summ">120042.00 RUB</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/perfectmoney_1621770769.svg" alt="Perfect Money $">
                                        <div class="reserve-name">Perfect Money $</div>
                                        <div class="reserve-summ">120042.00 USD</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/pumb_1621770840.svg" alt="PUMB">
                                        <div class="reserve-name">PUMB</div>
                                        <div class="reserve-summ">484022.00 UAH</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/rshb_1621770890.svg" alt="Россельхоз банк">
                                        <div class="reserve-name">Россельхоз банк</div>
                                        <div class="reserve-summ">120042.00 RUB</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/trueusd_1621770978.svg" alt="TrueUSD">
                                        <div class="reserve-name">TrueUSD</div>
                                        <div class="reserve-summ">120042.00 TUSD</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/advcash_1621771053.svg" alt="AdvCash ₴">
                                        <div class="reserve-name">AdvCash ₴</div>
                                        <div class="reserve-summ">120042.00 UAH</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/cardano_1621771160.svg" alt="Cardano">
                                        <div class="reserve-name">Cardano</div>
                                        <div class="reserve-summ">120042.00 ADA</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/oschadbank_1621771304.svg" alt="Oschadbank">
                                        <div class="reserve-name">Oschadbank</div>
                                        <div class="reserve-summ">120042.00 UAH</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/perfectmoney_1621771371.svg" alt="Perfect Money €">
                                        <div class="reserve-name">Perfect Money €</div>
                                        <div class="reserve-summ">120042.00 EUR</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/raiffeisen_1621771454.svg" alt="Raiffeisen ₽">
                                        <div class="reserve-name">Raiffeisen ₽</div>
                                        <div class="reserve-summ">120042.00 RUB</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/ukrsibbank_1621771560.svg" alt="Ukrsibbank">
                                        <div class="reserve-name">Ukrsibbank</div>
                                        <div class="reserve-summ">155000.00 UAH</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/advcash_1621771630.svg" alt="AdvCash ₸">
                                        <div class="reserve-name">AdvCash ₸</div>
                                        <div class="reserve-summ">120042.00 KZT</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/chainlink_1621771750.svg" alt="Chainlink">
                                        <div class="reserve-name">Chainlink</div>
                                        <div class="reserve-summ">120042.00 LINK</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/gazprombank_1621771808.svg" alt="Gazprombank">
                                        <div class="reserve-name">Gazprombank</div>
                                        <div class="reserve-summ">120042.00 RUB</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/monobank_1621771860.svg" alt="Monobank">
                                        <div class="reserve-name">Monobank</div>
                                        <div class="reserve-summ">155000.00 UAH</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/paxos_1621772047.svg" alt="Paxos">
                                        <div class="reserve-name">Paxos</div>
                                        <div class="reserve-summ">120042.00 PAX</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/perfectmoneyvoucher_1621772116.svg" alt="PM e-Voucher">
                                        <div class="reserve-name">PM e-Voucher</div>
                                        <div class="reserve-summ">120042.00 USD</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/raiffeisen_1621772162.svg" alt="Raiffeisen ₴">
                                        <div class="reserve-name">Raiffeisen ₴</div>
                                        <div class="reserve-summ">155000.00 UAH</div>
                                    </div>
                                </li>
                                <li class="reserve-item">
                                    <div class="reserve-wrap">
                                        <img class="reserve-icon" src="uploads/usdcoin_1621772308.svg" alt="USD Coin - ERC20">
                                        <div class="reserve-name">USD Coin - ERC20</div>
                                        <div class="reserve-summ">120042.00 USDC</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="advantages">
                                <li class="advantages-item">
                                    <div class="advantages-wrap">
                                        <img src="img/1.png" alt="">
                                        <div class="advantages-name">ADVANTAGEOUS EXCHANGE 24/7</div>
                                        <div class="advantages-text">Providing high-quality exchange services for already 5 years.</div>
                                    </div>
                                </li>

                                <li class="advantages-item">
                                    <div class="advantages-wrap">
                                        <img src="img/2.png" alt="">
                                        <div class="advantages-name">RELIABILITY AT ITS LIMITS</div>
                                        <div class="advantages-text">Any doubts? If something goes wrong we will always refund your money. Keep that in mind.</div>
                                    </div>
                                </li>

                                <li class="advantages-item">
                                    <div class="advantages-wrap">
                                        <img src="img/3.png" alt="">
                                        <div class="advantages-name">FAST EXCHANGE UP TO 7 MIN.</div>
                                        <div class="advantages-text">We are loved not only for reliability and best exchange rate but also for a quick exchange.</div>
                                    </div>
                                </li>

                                <li class="advantages-item">
                                    <div class="advantages-wrap">
                                        <img src="img/4.png" alt="">
                                        <div class="advantages-name">1670 EXCHANGE PAIRS</div>
                                        <div class="advantages-text">We have all most popular exchange pairs to exchange. You can always exchange your funds.</div>
                                    </div>
                                </li>

                                <li class="advantages-item">
                                    <div class="advantages-wrap">
                                        <img src="img/5.png" alt="">
                                        <div class="advantages-name">100% EXCHANGE GUARANTEE</div>
                                        <div class="advantages-text">Numerous positive reviews confirm the high quality of our service.</div>
                                    </div>
                                </li>

                                <li class="advantages-item">
                                    <div class="advantages-wrap">
                                        <img src="img/6.png" alt="">
                                        <div class="advantages-name">PROFITABLE EXCHANGE</div>
                                        <div class="advantages-text">We always have good exchange rate. We are always open to cooperation, please contact.</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="video-wrap">
                                <div class="video-bg">
                                    <svg width="104" height="71" viewbox="0 0 104 71" fill="none" xmlns="http://www.w3.org/2000/svg" class="jss152">
                                        <path id="button" d="M99.58 6.84182C96.759 1.85891 93.6975 0.942364 87.464 0.593818C81.237 0.174273 65.5785 0 52.013 0C38.4215 0 22.7565 0.174273 16.536 0.587364C10.3155 0.942364 7.2475 1.85245 4.4005 6.84182C1.495 11.8183 0 20.3899 0 35.4806C0 35.4935 0 35.5 0 35.5C0 35.5129 0 35.5194 0 35.5194V35.5323C0 50.5585 1.495 59.1946 4.4005 64.1195C7.2475 69.1024 10.309 70.006 16.5295 70.4255C22.7565 70.787 38.4215 71 52.013 71C65.5785 71 81.237 70.787 87.4705 70.432C93.704 70.0125 96.7655 69.1088 99.5865 64.1259C102.518 59.2011 104 50.5649 104 35.5387C104 35.5387 104 35.5194 104 35.5065C104 35.5065 104 35.4935 104 35.4871C104 20.3899 102.518 11.8183 99.58 6.84182Z" fill="black" fill-opacity="0.7"></path>
                                        <path d="M71.4127 33.2558C72.7744 34.0199 72.7744 35.9801 71.4127 36.7442L42.0016 53.2472C40.6684 53.9953 39.0229 53.0317 39.0229 51.503L39.0229 18.497C39.0229 16.9683 40.6684 16.0047 42.0016 16.7528L71.4127 33.2558Z" fill="white"></path>
                                    </svg>
                                </div>
                                <!--                    <iframe class="video" src="https://www.youtube.com/embed/qJeGwT_bZbE?autoplay=0&amp;loop=1&amp;rel=0&amp;disablekb=1&amp;modestbranding=1&amp;iv_load_policy=3&amp;fs=0&amp;showinfo=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="footer-left">
                            <svg xmlns="http://www.w3.org/2000/svg" baseprofile="basic" viewbox="0 0 1250 261" style="height: 32px; margin: 5px 0px; display: block;">
                                <lineargradient id="a" gradientunits="userSpaceOnUse" x1="255.003" y1="261" x2="255.003" y2="0">
                                    <stop offset="0" stop-color="#1c1c1c"></stop>
                                    <stop offset="1" stop-color="#4b4b4b"></stop>
                                </lineargradient>
                                <path fill="url(#a)" d="M510 261H30.4C13.6 261 0 247.4 0 230.6V30.4C0 13.6 13.6 0 30.4 0H510v261z"></path>
                                <lineargradient id="b" gradientunits="userSpaceOnUse" x1="880.003" y1="261" x2="880.003" y2="0">
                                    <stop offset="0" stop-color="#bcbcbc"></stop>
                                    <stop offset="1" stop-color="#f3f3f3"></stop>
                                </lineargradient>
                                <path fill="url(#b)" d="M1219.6 261H510V0h709.6c16.8 0 30.4 13.6 30.4 30.4v200.3c0 16.7-13.6 30.3-30.4 30.3z"></path>
                                <g fill="#FFF">
                                    <path d="M155.8 158.3c0 9.9-1.4 17.8-4.1 23.7-2.7 5.9-6.3 10.4-10.6 13.4-4.3 3.1-9.1 5.1-14.4 6.1-5.3 1-10.5 1.5-15.6 1.5H60.4V59.1h55.8c7.2 0 13 1.2 17.6 3.6 4.6 2.4 8.2 5.5 10.9 9.4 2.7 3.9 4.5 8.2 5.5 12.9 1 4.7 1.4 9.4 1.3 13.9-.2 13.1-3.5 22-9.9 26.7 4.2 2 7.6 5.6 10.3 10.8 2.6 5.3 3.9 12.6 3.9 21.9zm-31.2-58.9c0-4.5-.5-7.9-1.6-10.1-1.1-2.2-3.2-3.3-6.4-3.3H87.7v28.7H114c4.1 0 6.8-1.4 8.3-4.1 1.5-2.8 2.3-6.6 2.3-11.2zm3.8 59.1c0-4-.3-7.2-1-9.5-.6-2.3-1.5-4.2-2.5-5.5-1-1.3-2.1-2.2-3.4-2.6-1.2-.4-2.4-.6-3.6-.6H87.7v34.5h27.9c4.8 0 8.2-1.3 10-3.8 1.9-2.6 2.8-6.7 2.8-12.5zM265.2 203h-91.4V59.1h89.8V87H201v26.5h57.6v27.9H201v33.5h64.2V203zM371 160.5c0 30.3-16.3 45.5-48.9 45.5-15.8 0-27.9-4.5-36.2-13.4-8.3-9-12.4-22.8-12.4-41.5H300c.2 4.1.7 8 1.4 11.4.7 3.5 2 6.4 3.8 8.9 1.8 2.5 4.1 4.4 7 5.8s6.6 2.1 11.1 2.1c7.4 0 12.7-1.4 16-4.1 3.3-2.7 5-8.1 5-15.9 0-4.1-.7-7.1-2-8.9-1.3-1.8-3.4-3.2-6.2-4.3-3.2-1.2-7.1-2.1-11.6-2.8-4.5-.7-9.7-1.8-15.5-3.4-4.5-1.3-8.7-2.8-12.5-4.5-3.8-1.7-7.2-4-10.1-7.1-2.9-3.1-5.1-7.1-6.7-12-1.6-4.9-2.4-11.4-2.4-19.4 0-5.9.7-11 2.2-15.3 1.4-4.3 3.4-8 5.8-11s5.2-5.4 8.3-7.3c3.2-1.9 6.4-3.3 9.7-4.3 3.3-1 6.6-1.7 9.9-2 3.3-.3 6.4-.5 9.1-.5 9.4 0 17.1 1.5 22.9 4.4 5.9 2.9 10.4 6.8 13.7 11.4 3.3 4.7 5.5 10 6.6 15.8 1.1 5.9 1.7 11.7 1.7 17.4h-26c-.4-2.4-.7-5.1-1-8-.2-2.9-.9-5.5-1.9-7.6-.9-1.9-2.4-3.6-4.7-5.1-2.3-1.5-5.9-2.3-10.8-2.3-3.8 0-7 .3-9.5 1s-4.4 1.7-5.8 3c-1.4 1.3-2.4 3.1-2.9 5.2s-.8 4.7-.8 7.6c0 3.5.8 6 2.3 7.5 1.5 1.5 4.4 2.8 8.6 3.9 4.4 1.2 8.8 2.2 13.3 3 4.5.8 8.8 1.8 13 2.9 4.2 1.1 8.1 2.6 11.7 4.5 3.6 1.9 6.8 4.4 9.5 7.7s4.9 7.5 6.4 12.6c1.7 5.1 2.4 11.5 2.4 19.1zM470.3 86.9h-32.9V203h-27.3V86.9h-32.9V59.1h93v27.8z"></path>
                                </g>
                                <g fill="#363636">
                                    <path d="M646.7 150.1c-.6 7.5-1.9 14.6-3.9 21.4-2 6.8-4.9 12.7-8.7 17.7-3.8 5.1-8.8 9.1-14.9 12.1s-13.5 4.5-22.2 4.5c-10 0-18.5-1.7-25.5-5.1-7-3.4-12.6-8.4-17-14.8-4.3-6.5-7.5-14.5-9.4-24-2-9.5-3-20.3-3-32.5 0-11.2 1.1-21.4 3.2-30.4s5.4-16.7 9.9-23.1c4.5-6.3 10.2-11.2 17-14.6 6.9-3.4 15.1-5.1 24.6-5.1 9.6 0 17.4 1.5 23.5 4.5 6.1 3 10.9 6.9 14.6 11.7 3.6 4.8 6.2 10.3 7.8 16.4 1.6 6.1 2.7 12.3 3.4 18.4h-25.8c-.6-3.2-1.3-6.3-2.1-9.2-.7-2.9-1.9-5.5-3.4-7.6-1.5-2.1-3.6-3.8-6.2-5.1-2.6-1.3-6.1-1.9-10.5-1.9-5.3 0-9.8.9-13.4 2.6-3.6 1.7-6.6 4.5-8.8 8.4-2.2 3.9-3.8 9-4.8 15.3-1 6.3-1.4 14.1-1.4 23.4 0 9.4.7 16.9 2 22.8 1.3 5.8 3.2 10.4 5.6 13.6 2.4 3.3 5.3 5.5 8.8 6.7 3.5 1.2 7.3 1.8 11.6 1.8 4.4 0 7.8-.7 10.4-2 2.6-1.3 4.6-3.2 6.1-5.7s2.7-5.4 3.5-8.8c.9-3.4 1.7-7.2 2.6-11.5h26.4zM756.2 203H729v-62.1h-41V203h-27.2V59.1H688v53.7h41V59.1h27.2V203zM870.9 203h-28.5l-7.5-29.7h-36.2l-7.4 29.7h-27.5l39.4-143.9h27L870.9 203zm-42.8-56.5l-11.2-46.3-11.5 46.3h22.7zM950.8 203l-41.6-87.6V203H882V59.1h26.7l41.9 87v-87h27V203h-26.8zM1100.3 203h-22.1v-14.6c-1.6 3.5-3.6 6.3-6 8.5s-5 3.9-7.8 5.2c-2.8 1.3-5.8 2.1-8.8 2.6-3 .5-6 .7-8.9.7-10 0-18.4-1.9-25.1-5.8-6.7-3.9-12.1-9.2-16.2-16-4.1-6.8-7-14.9-8.7-24.2-1.7-9.3-2.6-19.3-2.6-30 0-48.8 18.3-73.2 55-73.2 9.1 0 16.7 1.5 23 4.4 6.3 2.9 11.4 6.9 15.3 11.7 3.9 4.9 6.7 10.5 8.4 16.7 1.7 6.3 2.6 12.8 2.6 19.4h-27.8c0-2.9-.2-5.9-.6-9-.4-3.1-1.3-5.8-2.7-8.2-1.4-2.4-3.6-4.4-6.5-5.9S1054 83 1049 83c-5 0-9.3.8-12.7 2.5-3.5 1.7-6.3 4.3-8.5 7.9-2.2 3.6-3.8 8.3-4.8 14-1 5.7-1.5 12.6-1.5 20.6 0 8.8.4 16.4 1.3 22.7.9 6.3 2.4 11.4 4.6 15.2 2.2 3.9 5.1 6.7 8.7 8.5 3.6 1.8 8.2 2.7 13.8 2.7 3.2 0 6.2-.5 9.1-1.5s5.4-2.6 7.5-4.7c2.1-2.1 3.8-4.9 5-8.2 1.2-3.3 1.7-7.3 1.6-12h-25.6v-26.5h53V203zM1208.6 203h-91.2V59.1h89.6V87h-62.4v26.5h57.4v27.9h-57.4v33.5h64V203z"></path>
                                </g>
                            </svg>
                            <img src="img/logo.svg" alt="">
                            <div class="footer-text">
                                <span>HIGH-QUALITY AND FAST CURRENCY EXCHANGE SERVICE 24/7</span>
                                <br>
                                <span>© All rights reserved. Copyright © 2015 - 2021</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xs-12">
                        <div class="footer-right">
                            <ul class="footer-menu">
                                <li>
                                    <a href="en/pages/terms.php">Exchange terms</a>
                                </li>

                                <li>
                                    <a href="en/site/contacts.php">Contact Us</a>
                                </li>
                            </ul>

                            <ul class="social">
                                <li>
                                    <a href="https://t.me/Netex24_Support" target="_blank">
                                        <svg width="42" height="42" viewbox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="42" height="42" rx="6" fill="white"></rect>
                                            <path d="M7.34738 21.3728C9.70035 20.1481 12.3269 19.1259 14.781 18.0985C19.003 16.4157 23.2418 14.762 27.5234 13.2225C28.3564 12.9602 29.8532 12.7037 30 13.8702C29.9196 15.5215 29.589 17.1631 29.3623 18.8047C28.7867 22.4147 28.1214 26.0123 27.4727 29.6105C27.2492 30.809 25.6604 31.4294 24.6437 30.6624C22.2005 29.103 19.7385 27.5587 17.3265 25.963C16.5364 25.2044 17.2691 24.1149 17.9747 23.5731C19.987 21.6992 22.1211 20.1071 24.0282 18.1363C24.5427 16.9624 23.0227 17.9517 22.5213 18.2548C19.7664 20.0487 17.079 21.9522 14.1745 23.5288C12.6909 24.3005 10.9617 23.641 9.47881 23.2104C8.1492 22.6902 6.20079 22.1661 7.34725 21.3729L7.34738 21.3728Z" fill="#48423B"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="assets/6b2f09dc/jquery.js"></script>
    <script src="assets/32852cdd/yii.js"></script>
    <script src="assets/32852cdd/yii.activeForm.js"></script>
    <script src="js/main1.min.js"></script>
    <script src="assets/1fbd42ed/js/bootstrap.js"></script>
    <script>
        let from = JSON.parse('{"6":{"id":"6","sign":"BTC","name":"Bitcoin","icon":"bitcoinbtc_1607281332.svg","rate":"0.0000453223","reserve":"10.00","placeholder":"BTC account","min":"0.12"},"7":{"id":"7","sign":"BCH","name":"Bitcoin Cash","icon":"bitcoincashbch_1607281508.svg","rate":"0.0086850790","reserve":"45.00","placeholder":"BCH account","min":"2.70"},"8":{"id":"8","sign":"BTG","name":"Bitcoin Gold","icon":"drawing_1607282516.svg","rate":"0.0567214974","reserve":"156.00","placeholder":"BTG account","min":"0.78"},"9":{"id":"9","sign":"ETH","name":"Ethereum","icon":"ethereumeth_1607284009.svg","rate":"0.0008161466","reserve":"451.00","placeholder":"ETH account","min":"0.30"},"10":{"id":"10","sign":"XLM","name":"Stellar","icon":"stellarxlm_1607284178.svg","rate":"5.6911309415","reserve":"24524.00","placeholder":"XLM account","min":"1620.00"},"11":{"id":"11","sign":"ETC","name":"Ether Classic","icon":"etherclassicetc_1607284331.svg","rate":"0.0605326877","reserve":"42541.00","placeholder":"ETC account","min":"12.36"},"12":{"id":"12","sign":"LTC","name":"Litecoin","icon":"litecoinltc_1607284440.svg","rate":"0.0160220463","reserve":"74724.00","placeholder":"LTC account","min":"4.12"},"13":{"id":"13","sign":"XRP","name":"Ripple","icon":"ripplexrp_1607284685.svg","rate":"2.7100271003","reserve":"424522.00","placeholder":"XRP","min":"1200.00"},"14":{"id":"14","sign":"XMR","name":"Monero","icon":"moneroxmr_1607284815.svg","rate":"0.0079045135","reserve":"102554.00","placeholder":"XMR account","min":"2.26"},"15":{"id":"15","sign":"DOGE","name":"Dogecoin","icon":"dogecoindoge_1607284896.svg","rate":"12.2153816085","reserve":"1400224.00","placeholder":"DOGE account","min":"1600.00"},"16":{"id":"16","sign":"DASH","name":"Dash","icon":"dashdash_1607284971.svg","rate":"0.0191350938","reserve":"742444.00","placeholder":"DASH account","min":"4.20"},"17":{"id":"17","sign":"ZEC","name":"Zcash","icon":"zcashzec_1607285041.svg","rate":"0.0144508671","reserve":"455701.00","placeholder":"ZEC account","min":"6.23"},"19":{"id":"19","sign":"TRX","name":"Tron","icon":"1958_1621849326.png","rate":"11.9805244594","reserve":"235042.00","placeholder":"TRX account","min":"3415.00"},"21":{"id":"21","sign":"USDT","name":"Tether (USDT-TRC20)","icon":"tether-usdt-logo_1607514459.png","rate":"1.0008006405","reserve":"483700.00","placeholder":"Wallet number","min":"600.00"},"30":{"id":"30","sign":"BTT","name":"BitTorrent","icon":"bittorrent_1621766944.svg","rate":"1136363.6363636000","reserve":"120042.00","placeholder":"BTT account","min":"280000000.00"},"31":{"id":"31","sign":"HT","name":"Huobi Token","icon":"huobitoken_1621767075.svg","rate":"0.1806358382","reserve":"120042.00","placeholder":"HT account","min":"27.16"},"35":{"id":"35","sign":"XTZ","name":"Tezos","icon":"tezos_1621767766.svg","rate":"0.6459948320","reserve":"155000.00","placeholder":"XTZ account","min":"243.00"},"40":{"id":"40","sign":"XEM","name":"NEM","icon":"nem_1621769323.svg","rate":"23.0043708305","reserve":"120042.00","placeholder":"XEM account","min":"12400.00"},"47":{"id":"47","sign":"NEO","name":"NEO","icon":"neo_1621769987.svg","rate":"0.1018641133","reserve":"120042.00","placeholder":"NEO account","min":"3.25"},"52":{"id":"52","sign":"BNB","name":"Binance Coin","icon":"binance_1621770428.svg","rate":"0.0041890080","reserve":"120042.00","placeholder":"BNB account","min":"2.26"},"59":{"id":"59","sign":"TUSD","name":"TrueUSD","icon":"trueusd_1621770978.svg","rate":"1.0000000000","reserve":"120042.00","placeholder":"TUSD account","min":"423.00"},"61":{"id":"61","sign":"ADA","name":"Cardano","icon":"cardano_1621771160.svg","rate":"1.9924287707","reserve":"120042.00","placeholder":"ADA account","min":"650.00"},"67":{"id":"67","sign":"LINK","name":"Chainlink","icon":"chainlink_1621771750.svg","rate":"0.1374570447","reserve":"120042.00","placeholder":"LINK account","min":"22.43"},"70":{"id":"70","sign":"PAX","name":"Paxos","icon":"paxos_1621772047.svg","rate":"1.0011012113","reserve":"120042.00","placeholder":"PAX account","min":"350.00"},"73":{"id":"73","sign":"USDC","name":"USD Coin - ERC20","icon":"usdcoin_1621772308.svg","rate":"0.9090909091","reserve":"120042.00","placeholder":"USDC account","min":"400.00"}}')
        let to = JSON.parse('{"3":{"id":"3","sign":"RUB","name":"Qiwi","icon":"qiwi_1606567752.svg","rate":"63.5905784199","reserve":"1268741.00","placeholder":"Qiwi wallet"},"4":{"id":"4","sign":"USD","name":"Webmoney","icon":"webmoney_1606572635.svg","rate":"1.0000000000","reserve":"155000.00","placeholder":" WMZ account"},"5":{"id":"5","sign":"RUB","name":"Yandex.Money","icon":"yandex_1606572766.svg","rate":"63.5905784199","reserve":"154001.42","placeholder":"Yandex wallet"},"20":{"id":"20","sign":"UAH","name":"Visa, MC \u20b4","icon":"c-card-green_1607285629.svg","rate":"31.5656565657","reserve":"4562201.00","placeholder":"Curd number"},"22":{"id":"22","sign":"RUB","name":"Alfa-Click \u20bd","icon":"alfa_1607285990.svg","rate":"63.5905784199","reserve":"456321.00","placeholder":"Curd number"},"24":{"id":"24","sign":"RUB","name":"Tinkoff","icon":"tinkoff_1607286184.svg","rate":"63.5905784199","reserve":"4561321.00","placeholder":"Curd number"},"25":{"id":"25","sign":"RUB","name":"Visa, MC \u20bd","icon":"card_1607286252.svg","rate":"63.5905784199","reserve":"12315441.00","placeholder":"Curd number"},"26":{"id":"26","sign":"RUB","name":"VTB24","icon":"vtb24_1607286347.svg","rate":"63.5905784199","reserve":"1321255.00","placeholder":"Curd number"},"27":{"id":"27","sign":"RUB","name":"Russian Standart \u20bd","icon":"russianstandard_1607286410.svg","rate":"63.5905784199","reserve":"1235457.00","placeholder":"Curd number"},"28":{"id":"28","sign":"RUB","name":"Promsvyazbank","icon":"promsvyazbank_1607286488.png","rate":"63.5905784199","reserve":"1234647.00","placeholder":"Curd number"},"32":{"id":"32","sign":"RUB","name":"\u041c\u0422\u0421 Bank","icon":"mtsbank_1621767299.svg","rate":"63.5905784199","reserve":"1234647.00","placeholder":"Curd number"},"33":{"id":"33","sign":"USD","name":"Payeer $","icon":"payeer_1621767489.svg","rate":"1.0000000000","reserve":"155000.00","placeholder":"PAYEER account"},"34":{"id":"34","sign":"RUB","name":"Pochta Bank","icon":"pochtabank_1621767637.svg","rate":"63.5905784199","reserve":"120042.00","placeholder":"Curd number"},"36":{"id":"36","sign":"USD","name":"AdvCash $","icon":"advcash_1621767914.svg","rate":"1.0000000000","reserve":"120042.00","placeholder":"AdvCash account"},"37":{"id":"37","sign":"UAH","name":"Alfabank \u20b4","icon":"alfabank_1621768931.svg","rate":"31.5656565657","reserve":"120042.00","placeholder":"Curd number"},"38":{"id":"38","sign":"USD","name":"Capitalist $","icon":"capitalist_1621769079.svg","rate":"1.0000000000","reserve":"120042.00","placeholder":"Curd number"},"39":{"id":"39","sign":"RUB","name":"\u041a\u0443\u043a\u0443\u0440\u0443\u0437\u0430","icon":"kykyryza_1621769170.svg","rate":"63.5905784199","reserve":"120042.00","placeholder":"Curd number"},"41":{"id":"41","sign":"EUR","name":"Payeer \u20ac","icon":"payeer_1621769408.svg","rate":"0.9487666034","reserve":"120042.00","placeholder":"PAYEER account"},"42":{"id":"42","sign":"RUB","name":"\u0420\u041d\u041a\u0411","icon":"rncb_1621769504.svg","rate":"63.5905784199","reserve":"120042.00","placeholder":"Curd number"},"43":{"id":"43","sign":"RUB","name":"\u0421\u043e\u0432\u043a\u043e\u043c\u0431\u0430\u043d\u043a","icon":"sovcombank_1621769579.svg","rate":"63.5905784199","reserve":"120042.00","placeholder":"Curd number"},"44":{"id":"44","sign":"EUR","name":"AdvCash \u20ac","icon":"advcash_1621769683.svg","rate":"0.9487666034","reserve":"120042.00","placeholder":"AdvCash account"},"45":{"id":"45","sign":"RUB","name":"Avangard","icon":"avangard_1621769748.svg","rate":"63.5905784199","reserve":"120042.00","placeholder":"Curd number"},"46":{"id":"46","sign":"EUR","name":"Capitalist \u20ac","icon":"capitalist_1621769802.svg","rate":"0.9487666034","reserve":"120042.00","placeholder":"Curd number"},"48":{"id":"48","sign":"RUB","name":"Payeer \u20bd","icon":"payeer_1621770056.svg","rate":"63.5905784199","reserve":"120042.00","placeholder":"PAYEER account"},"49":{"id":"49","sign":"RUB","name":"RosBank","icon":"rosbank_1621770140.svg","rate":"63.5905784199","reserve":"120042.00","placeholder":"Curd number"},"50":{"id":"50","sign":"KZT","name":"Visa, MC \u20b8","icon":"visamastercard_1621770275.svg","rate":"459.9816007360","reserve":"3228017.00","placeholder":"Curd number"},"51":{"id":"51","sign":"RUB","name":"AdvCash \u20bd","icon":"advcash_1621770331.svg","rate":"63.5905784199","reserve":"120042.00","placeholder":"AdvCash account"},"53":{"id":"53","sign":"RUB","name":"Capitalist \u20bd","icon":"capitalist_1621770545.svg","rate":"63.5905784199","reserve":"120042.00","placeholder":"Curd number"},"54":{"id":"54","sign":"RUB","name":"\u041c\u0438\u0440","icon":"mir_1621770624.svg","rate":"63.5905784199","reserve":"120042.00","placeholder":"Curd number"},"55":{"id":"55","sign":"RUB","name":"\u041e\u0442\u043a\u0440\u044b\u0442\u0438\u0435","icon":"open_1621770714.svg","rate":"63.5905784199","reserve":"120042.00","placeholder":"Curd number"},"56":{"id":"56","sign":"USD","name":"Perfect Money $","icon":"perfectmoney_1621770769.svg","rate":"1.0000000000","reserve":"120042.00","placeholder":"Curd number"},"57":{"id":"57","sign":"UAH","name":"PUMB","icon":"pumb_1621770840.svg","rate":"31.5656565657","reserve":"484022.00","placeholder":"Curd number"},"58":{"id":"58","sign":"RUB","name":"\u0420\u043e\u0441\u0441\u0435\u043b\u044c\u0445\u043e\u0437 \u0431\u0430\u043d\u043a","icon":"rshb_1621770890.svg","rate":"63.5905784199","reserve":"120042.00","placeholder":"Curd number"},"60":{"id":"60","sign":"UAH","name":"AdvCash \u20b4","icon":"advcash_1621771053.svg","rate":"31.5766206701","reserve":"120042.00","placeholder":"AdvCash account"},"62":{"id":"62","sign":"UAH","name":"Oschadbank","icon":"oschadbank_1621771304.svg","rate":"31.5656565657","reserve":"120042.00","placeholder":"Curd number"},"63":{"id":"63","sign":"EUR","name":"Perfect Money \u20ac","icon":"perfectmoney_1621771371.svg","rate":"0.9487666034","reserve":"120042.00","placeholder":"Curd number"},"64":{"id":"64","sign":"RUB","name":"Raiffeisen \u20bd","icon":"raiffeisen_1621771454.svg","rate":"63.5905784199","reserve":"120042.00","placeholder":"Curd number"},"65":{"id":"65","sign":"UAH","name":"Ukrsibbank","icon":"ukrsibbank_1621771560.svg","rate":"31.5766206701","reserve":"155000.00","placeholder":"Curd number"},"66":{"id":"66","sign":"KZT","name":"AdvCash \u20b8","icon":"advcash_1621771630.svg","rate":"459.9816007360","reserve":"120042.00","placeholder":"AdvCash account"},"68":{"id":"68","sign":"RUB","name":"Gazprombank","icon":"gazprombank_1621771808.svg","rate":"63.5905784199","reserve":"120042.00","placeholder":"Curd number"},"69":{"id":"69","sign":"UAH","name":"Monobank","icon":"monobank_1621771860.svg","rate":"31.5766206701","reserve":"155000.00","placeholder":"Curd number"},"71":{"id":"71","sign":"USD","name":"PM e-Voucher","icon":"perfectmoneyvoucher_1621772116.svg","rate":"1.0000000000","reserve":"120042.00","placeholder":"Curd number"},"72":{"id":"72","sign":"UAH","name":"Raiffeisen \u20b4","icon":"raiffeisen_1621772162.svg","rate":"31.5656565657","reserve":"155000.00","placeholder":"Curd number"}}')
    </script>
    <script>
        jQuery(function($) {
            jQuery('#form-step1').yiiActiveForm([], []);
        });
    </script>
</body>

</html>