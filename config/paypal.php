<?php

return array(
    /** set your paypal credential **/
    'client_id' => 'Afx6J7fa0WXGYYMQhu7HQSJmLOb_RjvjKafMlrI6Wv6TjyRh2AAC1uuSYE2sE2IE95zz2BlrkAzOGSLE',
    'secret' => 'EM21zw3g1YXhsHcPE8VgLue9KRvTMX2DasOtYG4tq4KbRj15o6HUiLPJNrTQClI3k8_uGR5Xv7Aun1aC',
    /**
     * SDK configuration
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',
        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 1000,
        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,
        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',
        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);
