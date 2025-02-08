// Include This at top of the page
use Payment\TZSMMPAY\TZSMMPAYTxn;



// In gateway map add tzsmmpay like shown bellow
$gatewayMap = [
    'paypal' => PaypalTxn::class,
    'stripe' => StripeTxn::class,
    'mollie' => MollieTxn::class,
    'perfectmoney' => PerfectmoneyTxn::class,
    'coinbase' => CoinbaseTxn::class,
    'paystack' => PaytmTxn::class,
    'voguepay' => BinanceTxn::class,
    'flutterwave' => FlutterwaveTxn::class,
    'cryptomus' => CryptomusTxn::class,
    'nowpayments' => NowpaymentsTxn::class,
    'securionpay' => SecurionpayTxn::class,
    'coingate' => CoingateTxn::class,
    'monnify' => MonnifyTxn::class,
    'coinpayments' => CoinpaymentsTxn::class,
    'paymongo' => PaymongoTxn::class,
    'coinremitter' => CoinremitterTxn::class,
    'btcpayserver' => BtcpayserverTxn::class,
    'binance' => BinanceTxn::class,
    'cashmaal' => CashmaalTxn::class,
    'blockio' => BlockIoTxn::class,
    'blockchain' => BlockchainTxn::class,
    'instamojo' => InstamojoTxn::class,
    'paytm' => PaytmTxn::class,
    'razorpay' => RazorpayTxn::class,
    'twocheckout' => TwocheckoutTxn::class,
    'tzsmmpay' => TZSMMPAYTxn::class,
];
