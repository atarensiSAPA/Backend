<?php
//Angel Tarensi
/*!
A simple example that shows how to use Guzzle as a Http Client for Hybridauth instead of PHP Curl extention.
*/
/*
include 'vendor/autoload.php';

$config = [
    'callback' => "http://localhost/Practiques/Pt05_AlexVazquez/Controlador/github_controlador.php",

    'keys' => ['id' => '6fd6e04c9fd6a8f40d50', 'secret' => '94ef8126e111ff22e7c774025daa88f0ed49d26a'],
];

try {
    $adapter = new Hybridauth\Provider\Github($config);

    $adapter->authenticate();

    $tokens = $adapter->getAccessToken();
    $userProfile = $adapter->getUserProfile();
    $name = $userProfile->displayName;
    $email = $userProfile->email;

    $adapter->disconnect();
} catch (Exception $e) {
    echo $e->getMessage();
}
*/