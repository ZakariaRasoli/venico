<?php
/*
in the name of God 
source of anti spam bot
by php 
v.13
dev : mohammadrezajafari [@mohammadrezajiji]
*/
// panel admin
if($textmassage=="/panel admin" or $textmassage=="panel admin" or $textmassage=="پنل مدیریت"){
if ($tc == "private") {
if (in_array($from_id,$Dev)) {
jijibot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🚦ادمین عزیز به پنل مدریت ربات خوش امدید
➖➖➖➖
لطفا از دکمه های زیر برای مدیریت گروه ها  استفاده کنید✅",
         'reply_to_message_id'=>$message_id,
	  'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"👥 مدیریت گروه ها"],['text'=>"💥 امار ربات"]
	],
 	[
	  	['text'=>"📌 فوروارد به گروه"],['text'=>"📍 فوروارد به کاربران"]
	  ],
	  	  	 [
		['text'=>"🔅 ارسال به گروه ها"],['text'=>"👤 ارسال به کابران"]                            
		 ],
		 	  	  	 [
					 ['text'=>"🔙 برگشت"]                            
		 ],
   ],
      'resize_keyboard'=>true
   ])
 ]);
}
}
}
elseif($textmassage=="👥 مدیریت گروه ها" or $textmassage=="مدیریت گروه ها" or $textmassage=="/panel group"){
if ($tc == "private") {
if (in_array($from_id,$Dev)) {
jijibot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🚦ادمین عزیز به پنل مدریت گروه ها خوش امدید
➖➖➖➖
لطفا از دکمه های زیر برای مدیریت گروه ها  استفاده کنید✅",
         'reply_to_message_id'=>$message_id,
	  'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"📜 لیست گروه ها"],['text'=>"❗️ خروج ربات از گروه"]
	],
	[
	['text'=>"🔙 برگشت"] 
	]
   ],
      'resize_keyboard'=>true
   ])
 ]);
}
}
}
elseif($textmassage=="📜 لیست گروه ها" ){
if ($tc == "private") {
if (in_array($from_id,$Dev)) {
	jijibot('senddocument',[
	'chat_id'=>$chat_id,
	'document'=>new CURLFile("data/group.txt"),
	'caption'=>"🚥 لیست گروه های ربات",
	'reply_to_message_id'=>$message_id,
	]);
}
}
}
elseif($textmassage=="❗️ خروج ربات از گروه" ){
if ($tc == "private") {
if (in_array($from_id,$Dev)) {
jijibot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📍 ادمین عزیز جهت خروج ربات ار گروه مورد نظر میتوانید از دستور :
➖➖➖
/left [ایدی گروه]
یا

ترک [ایدی گروه]

استفاده کنید ✅
➖➖➖➖
مثال : left -1001073837688/",
'reply_to_message_id'=>$message_id,
 ]);
}
}
}
elseif(strpos($textmassage , "ترک " ) !== false or strpos($textmassage , "/left " ) !== false) {
$text = str_replace(['/left ','ترک '],'',$textmassage);
if ($tc == "private") {
if (in_array($from_id,$Dev)) {
jijibot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🤖ربات از گروه با ایدی :

$text

خارج شد ✅",
  ]);
jijibot('LeaveChat',[
  'chat_id'=>$text,
  ]);
unlink("data/$text.json");
}
}
}
elseif($textmassage=="💥 امار ربات"){
$users = count($user["userlist"]);
$group = count($user["grouplist"]);
				jijibot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"🤖 امار ربات شما :

👥 تعداد گروه ها : $group

👤 تعداد کاربران : $users
",
                'hide_keyboard'=>true,
		]);
		}
elseif ($textmassage == '👤 ارسال به کابران' && in_array($from_id,$Dev)) {
         jijibot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"لطفا متن خود را ارسال کنید 🚀",
	  'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"🔙 برگشت"] 
	]
   ],
      'resize_keyboard'=>true
   ])
 ]);
$user["userjop"]["$from_id"]["file"]="senduser";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
elseif ($textmassage == '🔅 ارسال به گروه ها' && in_array($from_id,$Dev)) {
         jijibot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"لطفا متن خود را ارسال کنید 🚀",
	  'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"🔙 برگشت"] 
	]
   ],
      'resize_keyboard'=>true
   ])
 ]);
$user["userjop"]["$from_id"]["file"]="sendgroup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
elseif ($textmassage == '📌 فوروارد به گروه' && in_array($from_id,$Dev)) {
         jijibot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"لطفا متن خود را ارسال کنید 🚀",
	  'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"🔙 برگشت"] 
	]
   ],
      'resize_keyboard'=>true
   ])
 ]);
$user["userjop"]["$from_id"]["file"]="forwardgroup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
elseif ($textmassage == '📍 فوروارد به کاربران' && in_array($from_id,$Dev)) {
         jijibot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"لطفا متن خود را فوروارد کنید 🚀",
				  'reply_to_message_id'=>$message_id,
				   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"🔙 برگشت"] 
	]
   ],
      'resize_keyboard'=>true
   ])
    		]);
$user["userjop"]["$from_id"]["file"]="forwarduser";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
// banall
elseif (strpos($textmassage , "/banall ") !== false or strpos($textmassage , "مسدود همگانی ") !== false) {
if (in_array($from_id,$Dev)) {
$text = str_replace(['/banall ','مسدود همگانی '],'',$textmassage);
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
jijibot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"⛔️ فرد مسدود همگانی شد
			
🔖 اطلاعات کاربر :			
📮 نام : [$name]
🔹 یوزرنیم : [ @$username ]
🔸 ایدی : [$id]",
    'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$user["banlist"][]="$text";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif (strpos($textmassage , "/unbanall ") !== false or strpos($textmassage , "ازاد همگانی ") !== false) {
if (in_array($from_id,$Dev)) {
$text = str_replace(['/unbanall ','ازاد همگانی '],'',$textmassage);
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
jijibot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"فرد از مسدودیت همگانی ازاد شد ✅
			
🔖 اطلاعات کاربر :			
📮 نام : [$name]
🔹 یوزرنیم : [ @$username ]
🔸 ایدی : [$id]",
    'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$key = array_search($text,$user["banlist"]);
unset($user["banlist"][$key]);
$user["banlist"] = array_values($user["banlist"]); 
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif($textmassage == "/banlist"  or $textmassage == "banlist" or $textmassage == "لیست مسدود همگانی") {
if ( in_array($from_id,$Dev)) {
$silent = $user["banlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result.$silent[$z]."\n";
}
	  jijibot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🔖 لیست مسدود همگانی : 
➖➖➖➖➖

$result
🔸🔹🔸🔹🔸🔹",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
// lock character
// lock photo
elseif($textmassage=="/lock character" or $textmassage=="قفل کاراکتر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {	
$pluscharacter = $settings["information"]["pluscharacter"];
$downcharacter = $settings["information"]["downcharacter"];
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》قفل کاراکتر #پیام فعال شد🔇\n➖➖➖➖➖➖➖\nℹ️قفل کاراکتر فعال شد  از این پس متن ارسال توسط کاربران باید بیش تر از $pluscharacter و کم تر از $downcharacter باشد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["lockcharacter"]="| فعال | ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
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
elseif($textmassage=="/unlock character" or $textmassage=="بازکردن کاراکتر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》قفل کاراکتر #پیام غیر فعال شد🔊\n➖➖➖➖➖➖➖\nℹ️پاک کردن کاراکتر غیر فعال شد و  محدودیتی دیگر در پیام ارسالی وجود ندارد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["lockcharacter"]="| غیر فعال | ❌";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
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
elseif (strpos($textmassage , "/setlockcharacter ") !== false or strpos($textmassage , "تنظیم کاراکتر ") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
	$num = str_replace(['/setlockcharacter ','تنظیم کاراکتر '],'',$textmassage);
$add = $settings["information"]["added"];
if ($add == true) {
$te = explode(" ",$num);
$startlock = $te[0];
$endlock = $te[1];
			  jijibot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"☆》قفل کاراکتر پیام تنظیم شد🔇\n➖➖➖➖➖➖➖
ℹ️محدودیت در پیام های ارسالی به شکل زیر است :

🖍حداقل تعداد کاراکتر پیام : $startlock
🖌حداکثر تعداد کراکتر پیام : $endlock\n➖➖➖➖\nتوسط ☆> [ @$username ]",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["downcharacter"]="$startlock";
$settings["information"]["pluscharacter"]="$endlock";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings); 
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
?>