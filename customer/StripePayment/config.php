<?php
	require_once "stripe-php-master/init.php";
	require_once "products.php";

$stripeDetails = array(
		"secretKey" => "sk_test_51OQlKRSF4kxO297tkFCztzicahegg10IySoj7POLQeKwFu0ndxH1zZuayGGC6IFihpfruzv7N51qz0AEd6YfxgRa00PbF1dvRR",  //Your Stripe Secret key
		"publishableKey" => "pk_test_51OQlKRSF4kxO297tcMtnceqPdfywCCTZ6HZFrN7S4EGhqBhgxfI1RPKpbM9rOEepFu47FOhAj9FfewpG1r5iSshE009AhsdMTN"  //Your Stripe Publishable key
	);

	// Set your secret key: remember to change this to your live secret key in production
	// See your keys here: https://dashboard.stripe.com/account/apikeys
	\Stripe\Stripe::setApiKey($stripeDetails['secretKey']);

	
?>
