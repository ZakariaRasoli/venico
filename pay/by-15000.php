<?php
include("../../gpgram/base.php");
$MerchantID = '6ff28b6c-413e-11e8-a4ed-005056a205be';
$Amount = 15000;
$Authority = $_GET['Authority'];
$user = $_GET['id'];
if ($_GET['Status'] == 'OK'){
$client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);
$result = $client->PaymentVerification(
[
'MerchantID' => $MerchantID,
'Authority' => $Authority,
'Amount' => $Amount,
]
);

if ($result->Status == 100){
echo '📍 پرداخت شما موفقیت امیز بود به ربات برگشته و ایدی گروه خود را ارسال کنید';

sendMessage("$user","📍 پرداخت شما موفقیت امیز بود
🎉 میزارن شارژ خریداری شد :  نامحدود
ℹ️اگر ایدی گروه خود را نمیدانید من را به گروهتان دعوت کنید
📌 لطفا ایدی گروه خود را ارسال کنید
🔆 مثال :
-1001073263482");
sendMessage("$Dev","📍 یک خرید انجام شد
🎉 میزارن شارژ خریداری شد :  نامحدود
📌 توسط : [$user](tg://user?id=$user)","MarkDown");
file_put_contents("../data/$user.txt","true");
} else {
echo 'پرداخت شما قبلا ثبت شده است';
}
} else {
echo 'پرداخت انجام نشد';
}
?>