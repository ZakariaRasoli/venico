<?php
$MerchantID = '6ff28b6c-413e-11e8-a4ed-005056a205be';
$Description = 'خرید ربات مدیریت گروه';
$Email = 'zakaria.rasoli@gmail.com';
$Mobile = '09145546180';
$CallbackURL = $_GET['callback'];
$Amount = $_GET['amount']; 

$client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

$result = $client->PaymentRequest(
[
'MerchantID' => $MerchantID,
'Amount' => $Amount,
'Description' => $Description,
'Email' => $Email,
'Mobile' => $Mobile,
'CallbackURL' => $CallbackURL,
]
);

if ($result->Status == 100) {
Header('Location: https://www.zarinpal.com/pg/StartPay/'.$result->Authority);
} else {
echo'ERR: '.$result->Status;
}
?>