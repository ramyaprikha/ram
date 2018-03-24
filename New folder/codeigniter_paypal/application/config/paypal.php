<?php
/** set your paypal credential **/

$config['client_id'] = 'AXML_dihjcZ9xtHuXb5PH9a2nyJl1a9w0MjKG8FMVImA5kclG3Dn7u6w5MVfI42CJfaTRlJKsLV6EWmU';
$config['secret'] = 'EJ51yW4BpHeG4m_rBu12NilKcm3YsDkgxc5KbHGZhd2z-2I5f5kxvsjvlst4ySML3ymWXf5vl-yu5qxv';

/**
 * SDK configuration
 */
/**
 * Available option 'sandbox' or 'live'
 */
$config['settings'] = array(

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
    'log.FileName' => 'application/logs/paypal.log',
    /**
     * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
     *
     * Logging is most verbose in the 'FINE' level and decreases as you
     * proceed towards ERROR
     */
    'log.LogLevel' => 'FINE'
);
