<?php
// Query params are: utm_creative={{ad.name}}&utm_campaign={{campaign.name}}&utm_source={{site_source_name}}&utm_placement={{placement}}&campaign_id={{campaign.id}}&adset_id={{adset.id}}&ad_id={{ad.id}}&adset_name={{adset.name}}&fbpixel=1 

require_once dirname(__FILE__) . '/kclient.php';
$client = new KClient('http://40.76.193.150/api.php?', 'hkdmgskm8tyc1dljyc2qrw8gyllycyff');
$client->sendAllParams();       // to send all params from page query
$client->forceRedirectOffer();       // redirect to offer if an offer is chosen
// $client->param('sub_id_5', '123'); // you can send any params
// $client->keyword('PASTE_KEYWORD');  // send custom keyword
// $client->currentPageAsReferrer(); // to send current page URL as click referrer
// $client->debug();              // to enable debug mode and show the errors
// $client->execute();             // request to api, show the output and continue
$client->executeAndBreak();     // to stop page execution if there is redirect or some output
?>
<html>
	<head>
	</head>
	<body>
	</body>
</html>