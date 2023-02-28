<?php
if(empty($_POST)){
    echo"it is an empty post";
}

else
{
$Name = $_POST['name'];
$Email = $_POST['email'];
$Mobile = $_POST['mobile'];


$key = "test_499656e1860cc40c03e8c3ff281";
$token = "test_0bd01b0e9530c59b069f947b753";
$mojoURL = "test.instamojo.com";


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://$mojoURL/api/1.1/payment-requests/");
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-Api-Key:$key", "X-Auth-Token:$token"));
                 
$payload = Array(
    'purpose' => 'WEB DEVELOPMENT',
    'amount' => '750',
    'phone' => "$Mobile",
    'buyer_name' => "$Name",
    'redirect_url' => '',
    'send_email' => false,
    'webhook' => '',
    'send_sms' => false,
    'email' => "$Email",
    'allow_repeated_payments' => false
);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 

$decode = json_decode($response);

$success = $decode -> success;
if ($success == true)
{

$paymentURL = $decode->payment_request->longurl;

// SQL DATA ENTRY


header("Location:$paymentURL");
exit();

}
else{ echo"$response";}
}

?>