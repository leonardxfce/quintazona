<?php

($config = include 'onedrive-config.php') or die('Configuration file not found');
require_once '/vendor/autoload.php';

use Krizalys\Onedrive\Client;

// If we don't have a code in the query string (meaning that the user did not
// log in successfully or did not grant privileges requested), we cannot proceed
// in obtaining an access token.
if (!array_key_exists('code', $_GET)) {
throw new \Exception('code undefined in $_GET');
}

session_start();

// Attempt to load the OneDrive client' state persisted from the previous
// request.
if (!array_key_exists('onedrive.client.state', $_SESSION)) {
throw new \Exception('onedrive.client.state undefined in $_SESSION');
}

$onedrive = new Client([
'client_id' => $config['ONEDRIVE_CLIENT_ID'],
 // Restore the previous state while instantiating this client to proceed in
// obtaining an access token.
'state' => $_SESSION['onedrive.client.state']
]);

// Obtain the token using the code received by the OneDrive API.
$onedrive->obtainAccessToken($config['ONEDRIVE_CLIENT_SECRET'], $_GET['code']);

// Persist the OneDrive client' state for next API requests.
$_SESSION['onedrive.client.state'] = $onedrive->getState();

// Past this point, you can start using file/folder functions from the SDK.
echo $onedrive->fetchShared();
?>
