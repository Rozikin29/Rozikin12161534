<?php
include('Stripegateway.php');
$myStripe = new Stripegateway();
$data = array('ID' => 'prod_Dt4beHjp0QxMlH');
$result = $myStripe->delproduct($data);
echo "<pre>"; print_r($result);
?>