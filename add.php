
<?php
include ('Stripegateway.php');
$myStripe = new Stripegateway();
$data = array('name => 'kolor', 'caption' => 'pendek warna hitam');
$result = $myStripe->product($data);
	echo "<pre>"; print_r($result);