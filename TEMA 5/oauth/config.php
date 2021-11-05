<?php
    require_once 'vendor/autoload.php';

    // init configuration
    $clientID = '976863044175-n2cn1s10f8av3r2grjf21fn1alrsrb42.apps.googleusercontent.com';
    $clientSecret = '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';
    $redirectUri = 'URL-CALLBACK';
    
    // create Client Request to access Google API
    $client = new Google_Client();
    $client->setClientId($clientID);
    $client->setClientSecret($clientSecret);
    $client->setRedirectUri($redirectUri);

    // autorizaciones a recursos
    $client->addScope("email");
    $client->addScope("profile");

?>