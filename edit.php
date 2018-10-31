<?php
include ('Stripegateway.php');
$myStripe = new Stripegateway();
$data = array('id' =>'prod_Dt4beHjp0QxMlH', 'description' => 'pendek warna hitam');
$result = $myStripe->editproduct($data);
	echo "<pre>"; print_r($result);