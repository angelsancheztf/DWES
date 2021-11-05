<?php
    require_once 'vendor/autoload.php';

    // init configuration
    $clientID = 'CLIENT-ID';
    $clientSecret = 'CODE-SECRET';
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