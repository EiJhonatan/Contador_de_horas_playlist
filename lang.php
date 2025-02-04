<?php
$ip = $_SERVER['REMOTE_ADDR'];
$geoData = @json_decode(file_get_contents("http://ip-api.com/json/{$ip}"), true);
$lang = ($geoData && isset($geoData['countryCode']) && $geoData['countryCode'] !== 'BR') ? "en" : "pt";
$langData = json_decode(file_get_contents("lang.json"), true);
$texts = $langData[$lang] ?? $langData["pt"];

?>
