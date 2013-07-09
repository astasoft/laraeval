<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Allowed IP
    |--------------------------------------------------------------------------
    |
    | List of IP's that allowed to access Laraeval. BE AWARE when putting
    | Laraeval on production server! I have WARN You! :)
    |
    */
    'allowed_ips' => array(
        '127.0.0.1',     // home sweet home...
    ),

    /*
    |--------------------------------------------------------------------------
    | Trusted Proxies
    |--------------------------------------------------------------------------
    |
    | If you run your app behind load balancer such as Nginx or Varnish you
    | will not get the client IP address but instead you got load balancer
    | IP.
    |
    | To solve that problem you must add list of proxies IP so Laravel will
    | use X_HTTP_FORWARDED_FOR header instead of REMOTE_ADDR.
    |
    | Use value '*' to trust all IP.
    */
    'trusted_proxies' => '*',   // use array('ip_one', 'ip_two') for each IP
);