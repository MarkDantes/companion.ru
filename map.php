
<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.openrouteservice.org/v2/directions/driving-car");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_POST, TRUE);

curl_setopt($ch, CURLOPT_POSTFIELDS, '{"coordinates":[['.$_SESSION['last_search']->start_lat.','.$_SESSION['last_search']->start_lon.'],['.$_SESSION['last_search']->end_lat.','.$_SESSION['last_search']->end_lon.']]}');

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Accept: application/json, application/geo+json, application/gpx+xml, img/png; charset=utf-8",
    "Authorization: 5b3ce3597851110001cf6248252d28ff108b4959b49b28d7789784ac",
    "Content-Type: application/json; charset=utf-8"
));

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);