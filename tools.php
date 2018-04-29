<?php
/*
in the name of God 
source of anti spam bot
by php 
v.13
dev : mohammadrezajafari [@mohammadrezajiji]
*/
//leave and rem
if($textmassage == '/leave'  or $textmassage == 'leave'  or $textmassage == 'ترک'){
if (in_array($from_id,$Dev)){
jijibot('sendMessage',[
  'chat_id'=>$chat_id,
  'text'=>"🔖ربات از گروه با اطلاعات :
➖➖➖➖➖

🔹ایدی گروه : [$chat_id]

🔸نام گروه : [$namegroup]

💥ارسال کننده دستور : [ @$username ]
➖➖➖
در حال خروج است✔️",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
jijibot('LeaveChat',[
  'chat_id'=>$chat_id,
  ]);
  }
}
  elseif($textmassage == '/rem' or $textmassage == 'rem'  or  $textmassage == 'حذف' ){
	  if (in_array($from_id,$Dev)){
jijibot('sendMessage',[
  'chat_id'=>$chat_id,
  'text'=>"گروه از لیست گروه های پشتیبانی ربات حذف شد✅
➖➖➖➖
🔖اطلاعات گروه شما :

🔸ایدی گروه : [$chat_id]

🔹نام گروه : [$namegroup]

🔖دیگر پیام های این گروه برسی نمیشود
➖➖➖➖➖
💥کانال ما :
🚀 @$channel
➖➖➖➖➖➖➖➖
🚩توسط :\n@$username",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
unlink("data/$chat_id.json");
   }  
  }   
 // tools and cmd
 //rules
elseif($textmassage=="/rules" or $textmassage=="rules" or $textmassage=="قوانین"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
if ($tc == 'group' | $tc == 'supergroup'){  
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
$text1 = $settings["information"]["rules"];
$text = str_replace(["gpname","username","time"],["$namegroup","@$username","$date | $date2"],"$text1");
 jijibot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔖قوانین گروه شما :
➖➖➖➖➖➖➖➖
$text",
		 
		 'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   }   
}
}
else
{
date_default_timezone_set('Asia/Tehran');
$date = date('Y-m-d');
$date2 = date("H:i");
$text1 = $settings["information"]["rules"];
$text = str_replace(["gpname","username","time"],["$namegroup","@$username","$date | $date2"],"$text1");
 jijibot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔖قوانین گروه شما :
➖➖➖➖➖➖➖➖
$text",
		 
		 'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}
elseif (strpos($textmassage , '/setrules ') !== false or strpos($textmassage , 'تنظیم قوانین ') !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
$code = str_replace(['/setrules ','تنظیم قوانین '],'',$textmassage);
$plus = mb_strlen("$code");
if($plus < 600) {
 jijibot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"قوانین جدید  گروه با موفقیت ثبت شد ✅
➖➖➖➖➖➖
🔖توسط : [ @$username ]",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["rules"]="$code";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
	}
else
{
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 تعداد کلمات وارد شد بیش از حد مجاز است حداکثر میتوانید 600 حرف را وارد کنید",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 ربات در گروه شما نصب نیست ! لطفا ابتدا نسبت به نصب ربات اقدام کنید 

ℹ️ با دستور /addfree میتوانید ربات را 7 روز رایگان فعال کنید ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);	
}
}
}
//pin
elseif($rt && $textmassage=="/pin"  or $rt && $textmassage=="pin" or $rt && $textmassage=="سنجاق"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
 jijibot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
jijibot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"پیام  با موفقیت سنجاق شد✅
➖➖➖➖➖➖
🔖توسط : [ @$username ]",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
elseif($textmassage=="/unpin"  or  $textmassage=="unpin"  or  $textmassage=="حذف سنجاق"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
 jijibot('unpinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
jijibot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"پیام  با موفقیت از حالت سنجاق برداشته شد✅
➖➖➖➖➖➖
🔖توسط : [ @$username ]",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
// kick
elseif(strpos($textmassage ,"/kick ") !== false or strpos($textmassage ,"اخراج فرد ") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$text = str_replace(['/kick ','اخراج فرد '],'',$textmassage);
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
	jijibot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$text
      ]);
              jijibot('sendmessage', [
                'chat_id' => $chat_id,
             'text'=>"🔖کاربر با اطلاعات :
➖➖➖➖
📮 نام : [$name]

🔹 یوزرنیم : [ @$username ]

🔸 ایدی : [$id]
➖➖
✅  اخراج شد",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);

   }
}
 elseif($rt && $textmassage=="/kick"  or $rt && $textmassage=="kick" or $rt && $textmassage== "اخراج فرد"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev)) {
	jijibot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖کاربر با اطلاعات :
➖➖➖➖
📮 نام : [$re_name]

🔹 یوزرنیم : [ @$re_user ]

🔸 ایدی : [$re_id]
➖➖
✅  اخراج شد",
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
   } 
else	
{
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 من نمیتوانم ادمین ها , صاحبان و مدیران گروه و خود را اخراج کنم",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
 }
   //del
elseif($rt && $textmassage == "/del" or $rt && $textmassage == "del" or $rt && $textmassage == "حذف"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
 jijibot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$re_msgid
    ]);
	 jijibot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
 }
}
// rmsg
elseif ( strpos($textmassage , '/rmsg ') !== false or strpos($textmassage , 'پاک کردن ') !== false  ) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$num = str_replace(['/rmsg ','پاک کردن '],'',$textmassage);
if ($num <= 300 && $num >= 1){
$add = $settings["information"]["added"];
if ($add == true) {
for($i=$message_id; $i>=$message_id-$num; $i--){
jijibot('deletemessage',[
 'chat_id' => $chat_id,
 'message_id' =>$i,
              ]);
}
jijibot('sendmessage',[
 'chat_id' => $chat_id,
 'text' =>"🚩تعداد : $num
➖➖➖➖
پیام اخیر گروه با موفقیت پاکشد ✔️

🔖توسط : [ @$username ]",
'reply_markup'=>$inlinebutton,
   ]);
}
else
{
jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 ربات در گروه شما نصب نیست ! لطفا ابتدا نسبت به نصب ربات اقدام کنید 

ℹ️ با دستور /addfree میتوانید ربات را 7 روز رایگان فعال کنید",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
jijibot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"خطا⚠️
➖➖➖➖➖➖
عدد وارد شده باید بین 1 تا 300 باشد",
'reply_markup'=>$inlinebutton,
   ]);
}
}
}
//  setname
elseif ( strpos($textmassage , '/setname ') !== false or strpos($textmassage , 'تنظیم نام ') !== false  ) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$newname= str_replace(['/setname ','تنظیم نام '],'',$textmassage);
 jijibot('setChatTitle',[
    'chat_id'=>$chat_id,
    'title'=>$newname
      ]);
jijibot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"نام گروه تعویض شد✅
➖➖➖➖➖➖
💥نام جدید :  [$newname]

🔖توسط : [ @$username ]",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
 }
}
// description
elseif ( strpos($textmassage , '/setdescription ') !== false or strpos($textmassage , 'تنظیم اطلاعات ') !== false  ) {
$newdec= str_replace(['/setdescription ','تنظیم اطلاعات '],'',$textmassage);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
 jijibot('setChatDescription',[
    'chat_id'=>$chat_id,
    'description'=>$newdec
      ]);
jijibot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"اطلاعات جدید گروه با موفقیت تغییر کرد✅
➖➖➖➖➖➖
🔖توسط : [ @$username ]",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
 }
}
// set photo
elseif($textmassage=="/delphoto" or $textmassage=="delphoto" or $textmassage=="حذف عکس"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
jijibot('deleteChatPhoto',[
   'chat_id'=>$chat_id,
     ]);
jijibot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"عکس گروه با موفقیت حذف شد ✅
➖➖➖➖➖➖
🔖توسط : [ @$username ]

💥جهت تنظیم عکس گروه دستور [/setphoto] را ارسال کنید",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
 }
}
elseif($textmassage=="/setphoto" or $textmassage=="setphoto" or $textmassage=="تنظیم عکس"){

if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$photo = $update->message->reply_to_message->photo;
$file = $photo[count($photo)-1]->file_id;
      $get = jijibot('getfile',['file_id'=>$file]);
      	  $getchat = json_decode($get, true);
      $patch = $getchat["result"]["file_path"];
    file_put_contents("data/photogp.png",file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
jijibot('setChatPhoto',[
   'chat_id'=>$chat_id,
   'photo'=>new CURLFile("data/photogp.png")
     ]);
jijibot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"عکس گروه با موفقیت تغییر کرد ✅
➖➖➖➖➖➖
🔖توسط : [ @$username ]",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
unlink("data/photogp.png");
 }
}
// link
 elseif($textmassage=="/link" or $textmassage=="link" or $textmassage=="لینک"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){  
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
jijibot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"🔖لینک گروه شما :
$getlinkde",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
 }
 }
 }
else
{
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
jijibot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"🔖لینک گروه شما :
$getlinkde",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
 }
 }
// warn
elseif($textmassage=="/warn" && $rt or $textmassage=="warn" && $rt or $textmassage=="اخطار" && $rt){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
$warn = $settings["warnlist"]["$re_id"];
$setwarn = $settings["information"]["setwarn"];
$warnplus = $warn + 1;	
if ($warnplus >= $setwarn) {
$hardmodewarn = $settings["information"]["hardmodewarn"];
if($hardmodewarn == "🚷 اخراج کاربر"){
jijibot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
	]);
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖کاربر با اطلاعات :
➖➖➖➖
📮 نام : [$re_name]

🔹 یوزرنیم : [ @$re_user ]

🔸 ایدی : [$re_id]
➖➖
🔹 به خاطر رسیدن اخطار ها به حداکثر اخراج شد",
   ]);
 }
else
{
   jijibot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
         ]);
		 	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖کاربر با اطلاعات :
➖➖➖➖
📮 نام : [$re_name]

🔹 یوزرنیم : [ @$re_user ]

🔸 ایدی : [$re_id]
➖➖
🔹 به خاطر رسیدن اخطار ها به حداکثر سکوت شد",
   ]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
else
{
jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖کاربر با اطلاعات :
➖➖➖➖
📮 نام : [$re_name]

🔹 یوزرنیم : [ @$re_user ]

🔸 ایدی : [$re_id]
➖➖
✅  یک اخطار گرفت
🔹 تعداد اخطار ها : $warnplus
🔸 حداکثر اخطار : $setwarn",
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
$settings["warnlist"]["{$re_id}"]=$warnplus;
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
 else
 {
jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 ربات در گروه شما نصب نیست ! لطفا ابتدا نسبت به نصب ربات اقدام کنید 

ℹ️ با دستور /addfree میتوانید ربات را 7 روز رایگان فعال کنید",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
 }
else
{
		jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 من نمیتوانم ادمین ها , صاحبان و مدیران گروه و خود را اخطار بدهم",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
}
 elseif($textmassage=="/unwarn" && $rt or $textmassage=="unwarn" && $rt or $textmassage=="حذف اخطار"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
$warn = $settings["warnlist"]["$re_id"];
$setwarn = $settings["information"]["setwarn"];
$warnplus = $warn - 1;	
jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖کاربر با اطلاعات :
➖➖➖➖
📮 نام : [$re_name]

🔹 یوزرنیم : [ @$re_user ]

🔸 ایدی : [$re_id]
➖➖
✅  یک اخطارش حذف شد
🔹 تعداد اخطار ها : $warnplus
🔸 حداکثر اخطار : $setwarn",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["warnlist"]["{$re_id}"]=$warnplus;
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
 }
 else
 {
jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 ربات در گروه شما نصب نیست ! لطفا ابتدا نسبت به نصب ربات اقدام کنید 

ℹ️ با دستور /addfree میتوانید ربات را 7 روز رایگان فعال کنید",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
 }
}
}
elseif ( strpos($textmassage , '/setwarn ') !== false or strpos($textmassage , 'تنظیم اخطار ') !== false  ) {
$newdec = str_replace(['/setwarn ','تنظیم اخطار '],'',$textmassage);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
if ($newdec <= 20 && $newdec >= 1){
jijibot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"🔖 تعداد اخطار ها تغییر کرد
➖➖➖➖➖
🔸حداکثر تعداد اخطار : $newdec

➖➖➖➖
🚩توسط : [ @$username ]",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["setwarn"]="$newdec";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   }else{
jijibot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"خطا⚠️
➖➖➖➖➖➖
عدد وارد شده باید بین 1 تا 20 باشد",
'reply_markup'=>$inlinebutton,
   ]);
 }
}
else
{
jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 ربات در گروه شما نصب نیست ! لطفا ابتدا نسبت به نصب ربات اقدام کنید 

ℹ️ با دستور /addfree میتوانید ربات را 7 روز رایگان فعال کنید",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($textmassage=="/warn info" or $textmassage=="warn info" or $textmassage=="اطلاعات اخطار"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
if ($tc == 'group' | $tc == 'supergroup'){  
$warn = $settings["warnlist"]["$re_id"];
$setwarn = $settings["information"]["setwarn"];
jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖کاربر با اطلاعات :
➖➖➖➖
📮 نام : [$re_name]

🔹 یوزرنیم : [ @$re_user ]

🔸 ایدی : [$re_id]
➖➖
🔹 تعداد اخطار ها : $warn
🔸 حداکثر اخطار : $setwarn",
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
 }
 }
 }
?>