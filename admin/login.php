<?php

($config = include 'onedrive-config.php') or die('Configuration file not found');
require_once '/vendor/autoload.php';

use Krizalys\Onedrive\Client;

$onedrive = new Client([
    'client_id' => $config['ONEDRIVE_CLIENT_ID'],
        ]);
$url = $onedrive->getLogInUrl([
    'wl.signin',
    'wl.basic',
    'wl.contacts_skydrive',
    'wl.skydrive_update',
        ], $config['ONEDRIVE_CALLBACK_URI']);
session_start();

// Persist the OneDrive client' state for next API requests.
$_SESSION = [
    'onedrive.client.state' => $onedrive->getState(),
];
// Guide the user to the log in URL (you may also use an HTTP/JS redirect).
echo "<a href='$url'>Next step</a>";
?>