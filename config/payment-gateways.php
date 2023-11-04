<?php

return [

    /*
     * Company's support email is displayed to the user when they have completed their payment transactions.
     * When set to null the support email won't be displayed.
     */
    'support_email' => 'support@company.email',

    /*
     * Display messages for successful or failed payments.
     */
    'message' => [
        'success' => 'Your payment transaction was successful. Please close the tab to continue.',
        'failed' => 'Your payment transaction was not successful. Please close the tab to continue.',
        'pending' => 'Your payment transaction is being processed by our payment partner. Please stay on this page and refresh in 5 minutes.',
    ],

    /*
     * Debug mode set to true logs all the HTTP response to your application log file
     */
    'debug_mode' => true,

    /*
     * All payment transactions are verified on the callback route.
     */
    'routes' => [
        'callback' => [
            'path' => 'payment/gateways/{provider}/callback/{reference}',
            'name' => 'payment.gateway.callback',
        ],
        'checkout' => [
            'path' => 'payment/gateways/{provider}/checkout/{reference}',
            'name' => 'payment.gateway.checkout',
        ],
        'error' => [
            'path' => 'payment-gateway-error',
            'name' => 'payment.gateway.error',
        ],

        /*
         * Define your custom routes for successful and failed payments.
         */
        'custom' => [
            'success' => [
                'path' => null,
                'name' => null,
            ],
            'failed' => [
                'path' => null,
                'name' => null,
            ],
        ],
    ],

    /**
     * All check out session and payment references are cached and when the payment have been completed, it gets flushed out.
     */
    'cache' => [
        'session' => [
            'key' => '_gateway_session_reference_',
            'expires' => 42300, // 12 hours
        ],
        'payment' => [
            'key' => '_gateway_payment_reference_',
            'expires' => 42300, // 12 hours
        ],
    ],

    /*
     * This is a list of all supported payment gateway providers.
     */
    'providers' => [
        'orangemoney' => [
            'name' => 'orangemoney',
            'channels' => ['mobile_transfer'],
            'base_url' => env('ORANGEMONEY_API_URL', 'https://payment.orange.cm/'),
            'public' => env('ORANGEMONEY_PUBLIC'),
            'secret' => env('ORANGEMONEY_SECRET'),
        ],
        'mtnmoney' => [
            'name' => 'mtnmoney',
            'channels' => ['mobile_transfer'],
            'base_url' => env('MTNMONEY_API_URL', 'https://sandbox.momodeveloper.mtn.com/collection/'),
            'public' => env('MTNMONEY_PUBLIC'),
            'secret' => env('MTNMONEY_SECRET'),
        ],
        'mtnmobilemoney' => [
            'name' => 'flutterwave',
            'channels' => ['card', 'banktransfer', 'ussd', 'credit', 'mpesa', 'qr'],
            'base_url' => env('FLUTTERWAVE_API_URL', 'https://api.flutterwave.com/'),
            'public' => env('FLUTTERWAVE_PUBLIC'),
            'secret' => env('FLUTTERWAVE_SECRET'),
        ],
        'stripe' => [
            'name' => 'stripe',
            'channels' => ['card', 'acss_debit', 'us_bank_account'],
            'base_url' => env('STRIPE_API_URL', 'https://api.stripe.com/'),
            'public' => env('STRIPE_PUBLIC'),
            'secret' => env('STRIPE_SECRET'),
        ],
    ],
];
