<?php

// voice
if($textmassage=="/lock voice" or $textmassage=="قفل ویس"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #صدا (وویس)  فعال شد🔇\n➖➖➖➖➖➖➖\nℹ️ارسال ویس [صدا] فعال شد از این پس ارسال ویس [صدا] ممنوع میباشد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["voice"]="| فعال | ✅";
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
elseif($textmassage=="/unlock voice" or $textmassage=="بازکردن ویس"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #صدا (وویس) غیر فعال شد🔊\n➖➖➖➖➖➖➖\nℹ️ارسال ویس [صدا] غیر فعال شد و  ممنوع نمیباشد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["voice"]="| غیر فعال | ❌";
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
// sticker
elseif($textmassage=="/lock sticker" or $textmassage=="قفل استیکر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #استیکر فعال شد🔇\n➖➖➖➖➖➖➖\nℹ️ارسال استیکر فعال شد از این پس ارسال استیکر ممنوع میباشد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["sticker"]="| فعال | ✅";
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
elseif($textmassage=="/unlock sticker" or $textmassage=="بازکردن استیکر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
  	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #استیکر غیر فعال شد🔊\n➖➖➖➖➖➖➖\nℹ️پاک کردن استیکر غیر فعال شد و ارسال استیکر ممنوع نمیباشد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["sticker"]="| غیر فعال | ❌";
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
// forward
elseif($textmassage=="/lock forward" or $textmassage=="قفل فوروارد"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #فوروارد فعال شد🔇\n➖➖➖➖➖➖➖\nℹ️پاک کردن پیام فوروارد شده فعال شد و از این پس  ممنوع میباشد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["forward"]="| فعال | ✅";
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
elseif($textmassage=="/unlock forward" or $textmassage=="بازکردن فوروارد"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #فوروارد غیر فعال شد🔊\n➖➖➖➖➖➖➖\nℹ️پاک کردن فوروارد غیر فعال شد و ارسال پیام فوروارد شده ممنوع نمیباشد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["forward"]="| غیر فعال | ❌";
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
// fosh
elseif($textmassage=="/lock fosh" or $textmassage=="قفل فحش"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》ارسال #کلمات رکیک در گروه ممنوع شد🔒\n➖➖➖➖➖➖➖\nℹ️قفل کلمات رکیک (فحش) فعال شد از این پس تمامی پیام های حاوی کلمات رکیک (فحش) پاک خواهند شد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["fosh"]="| فعال | ✅";
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
elseif($textmassage=="/unlock fosh" or $textmassage=="بازکردن فحش"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》ارسال #کلمات رکیک در گروه آزاد شد🔓\n➖➖➖➖➖➖➖\nℹ️ارسال کلمات رکیک (فحش) در گروه ازاد شد و پیام های حاوی کلمات رکیک (فحش) پاک نخواهند شد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["fosh"]="| غیر فعال | ❌";
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
// muteall
elseif($textmassage=="/mute all"  or $textmassage=="mute all" or $textmassage=="بیصدا همه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #همه فعال شد🔇\n➖➖➖➖➖➖➖\nℹ️پاک کردن تمامی پیام ها فعال شد از این پس تمامی پیام های گروه شامل متن عکس و... پاک میشوند\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["mute_all"]="| فعال | ✅";
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
elseif($textmassage=="/unmute all"  or $textmassage=="unmute all" or $textmassage=="باصدا همه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #همه غیر فعال شد🔊\n➖➖➖➖➖➖➖\nℹ️پاک کردن تمامی پیام ها غیر فعال شد و گروه از حالت سکوت خارج شد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["mute_all"]="| غیر فعال | ❌";
$settings["lock"]["mute_all_time"]="| غیر فعال | ❌";
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
// muteall time
elseif (strpos($textmassage , "/muteall ") !== false or strpos($textmassage , "بیصدا همه ") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
	$num = str_replace(['/muteall ','بیصدا همه '],'',$textmassage);
	$add = $settings["information"]["added"];
if ($add == true) {
	if ($num <= 100000 && $num >= 1){
		date_default_timezone_set('Asia/Tehran');
        $date1 = date("h:i:s");
        $date2 = isset($_GET['date']) ? $_GET['date'] : date("h:i:s");
        $next_date = date('h:i:s', strtotime($date2 ."+$num Minutes"));
			  jijibot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"☆》بیصدا کردن #همه فعال شد🔇\n➖➖➖➖➖➖➖
ℹ️گروه به مدت $num دقیقه بیصدا شد

⏲زمان الان : $date1
⏰زمان پایان سکوت گروه : $next_date\n➖➖➖➖\nتوسط ☆> [ @$username ]",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["mute_all_time"]="$next_date";
$settings["lock"]["mute_all_time"]="| فعال | ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings); 
   }else{
jijibot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"خطا ⚠️
➖➖➖➖➖➖
💭عدد وارد شده باید بین 1 تا 1000 باشد
$date1
$nextdata",
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
// farsi
if($textmassage=="/lock text" or $textmassage=="قفل متن"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》ارسال #متن در گروه ممنوع شد🔒\n➖➖➖➖➖➖➖\nℹ️قفل متن فعال شد از این پس تمام پیام های حاوی متن پاک خواهند شد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["text"]="| فعال | ✅";
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
elseif($textmassage=="/unlock text" or $textmassage=="بازکردن متن"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》ارسال #متن در گروه  ازاد شد🔓\n➖➖➖➖➖➖➖\nℹ️ارسال متن در گروه ازاد شد و پیام های حاوی ان پاک نخواهند شد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["text"]="| غیر فعال | ❌";
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
// cmd
elseif($textmassage=="/lock cmd" or $textmassage=="قفل دستورات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》قفل #دستورات عمومی در گروه ممنوع شد🔒\n➖➖➖➖➖➖➖\nℹ️قفل دستورات عمومی فعال شد از این پس  دستورات عمومی در گروه کار نخواهند کرد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["cmd"]="| فعال | ✅";
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
elseif($textmassage=="/unlock cmd" or $textmassage=="بازکردن دستورات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》قفل دستورات عمومی در گروه  ازاد شد🔓\n➖➖➖➖➖➖➖\nℹ️ و دستورات عمومی در گروه کار خواهند کرد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["cmd"]="| غیر فعال | ❌";
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
// replay
elseif($textmassage=="/lock reply" or $textmassage=="قفل ریپلای"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》#ریپلای کردن بر روی پیام [ارسال پاسخ] در گروه ممنوع شد🔒\n➖➖➖➖➖➖➖\nℹ️قفل ریپلای کردن بر روی پیام [ارسال پاسخ]  فعال شد از این پس  ریپلای کردن بر روی پیام [ارسال پاسخ]  پاک خواهند شد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["reply"]="| فعال | ✅";
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
elseif($textmassage=="/unlock reply" or $textmassage=="بازکردن ریپلای"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》#ریپلای کردن بر روی پیام [ارسال پاسخ] در گروه  ازاد شد🔓\n➖➖➖➖➖➖➖\nℹ️ریپلای کردن بر روی پیام [ارسال پاسخ] در گروه ازاد شد و ریپلای کردن بر روی پیام [ارسال پاسخ] پاک نخواهند شد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["reply"]="| غیر فعال | ❌";
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
// tgservic
elseif($textmassage=="/lock tgservic" or $textmassage=="قفل خدمات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #خدمات تلگرام  فعال شد🔇\n➖➖➖➖➖➖➖\nℹ️پاک کردن خدمات تلگرام فعال شد و از این پس  ممنوع میباشد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tgservic"]="| فعال | ✅";
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
elseif($textmassage=="/unlock tgservic" or $textmassage=="بازکردن خدمات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #خدمات تلگرام  غیرفعال شد🔊\n➖➖➖➖➖➖➖\nℹ️پاک کردن خدمات تلگرام غیر فعال شد و خدمات تلگرام ممنوع نمیباشد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tgservic"]="| غیر فعال | ❌";
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
// video note
elseif($textmassage=="/lock videonote" or $textmassage=="قفل پیام ویدیویی"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #پیام ویدیویی فعال شد🔇\n➖➖➖➖➖➖➖\nℹ️پاک کردن پیام ویدیویی شد و از این پس  ممنوع میباشد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video_msg"]="| فعال | ✅";
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
elseif($textmassage=="/unlock videonote" or $textmassage=="بازکردن پیام ویدیویی"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #پیام ویدیویی  غیرفعال شد🔊\n➖➖➖➖➖➖➖\nℹ️پاک کردن پیام ویدیویی غیر فعال شد و خدمات تلگرام ممنوع نمیباشد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video_msg"]="| غیر فعال | ❌";
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
// lock bots
elseif ($textmassage == "/lock bots" or $textmassage == "lock bots" or $textmassage == "قفل ربات") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》#محافظت از گروه در برابر ربات ها  فعال شد🔒\n➖➖➖➖➖➖➖\nℹ️قفل ربات های مخرب فعال شد از این پس تمامی ربات های مخرب پاک خواهند شد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["bot"]="| فعال | ✅";
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
elseif ($textmassage == "/unlock bots" or $textmassage == "unlock bots"  or $textmassage == "بازکردن ربات") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》#محافظت از گروه در برابر ربات ها  ازاد است🔒\n➖➖➖➖➖➖➖\nℹ️تحریم ربات های مخرب در گروه ازاد شد و ربات های مخرب پاک نخواهند شد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["bot"]="| غیر فعال | ❌";
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
// end lock
  ?>
