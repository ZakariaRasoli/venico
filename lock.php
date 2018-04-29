<?php
// lock
// lock link
if($textmassage=="/lock link" or $textmassage=="قفل لینک"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》ارسال #لینک در گروه ممنوع شد🔒\n➖➖➖➖➖➖➖\nℹ️قفل لینک فعال شد از این پس تمام پیام های حاوی لینک پاک خواهند شد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["link"]="| فعال | ✅";
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
elseif($textmassage=="/unlock link" or $textmassage=="بازکردن لینک"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》ارسال #لینک در گروه  ازاد شد🔓\n➖➖➖➖➖➖➖\nℹ️ارسال لینک در گروه ازاد شد و پیام های حاوی لینک پاک نخواهند شد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["link"]="| غیر فعال | ❌";
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
// lock photo
elseif($textmassage=="/lock photo" or $textmassage=="قفل عکس"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {	
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #عکس فعال شد🔇\n➖➖➖➖➖➖➖\nℹ️پاک کردن عکس فعال شد از این پس ارسال عکس ممنوع میباشد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["photo"]="| فعال | ✅";
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
elseif($textmassage=="/unlock photo" or $textmassage=="بازکردن عکس"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #عکس غیر فعال شد🔊\n➖➖➖➖➖➖➖\nℹ️پاک کردن عکس غیر فعال شد و  ارسال عکس ممنوع نمیباشد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["photo"]="| غیر فعال | ❌";
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
// gif
elseif($textmassage=="/lock gif" or $textmassage=="قفل گیف"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #تصاویر متحرک فعال شد🔇\n➖➖➖➖➖➖➖\nℹ️پاک کردن تصاویر متحرک [گیف] فعال شد از این پس ارسال تصاویر متحرک [گیف] ممنوع میباشد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["gif"]="| فعال | ✅";
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
elseif($textmassage=="/unlock gif" or $textmassage=="بازکردن گیف"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن # تصاویر متحرک غیر فعال شد🔊\n➖➖➖➖➖➖➖\nℹ️پاک کردن تصاویر متحرک [گیف] غیر فعال شد و  ارسال صاویر متحرک [گیف] ممنوع نمیباشد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["gif"]="| غیر فعال | ❌";
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
// document
elseif($textmassage=="/lock document" or $textmassage=="قفل فایل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #فایل  فعال شد🔇\n➖➖➖➖➖➖➖\nپاک کردن ارسال فایل فعال شد و از این پس  ممنوع میباشد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["document"]="| فعال | ✅";
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
elseif($textmassage=="/unlock document" or $textmassage=="بازکردن فایل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #فایل غیر فعال شد🔊\n➖➖➖➖➖➖➖\nℹ️پاک کردن ارسال فایل غیر فعال شد و ارسال فایل ممنوع نمیباشد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["document"]="| غیر فعال | ❌";
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
// video
elseif($textmassage=="/lock video" or $textmassage=="قفل ویدیو"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #ویدیو فعال شد🔇\n➖➖➖➖➖➖➖\nℹ️پاک کردن فیلم فعال شد از این پس ارسال فیلم ممنوع میباشد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video"]="| فعال | ✅";
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
elseif($textmassage=="/unlock video" or $textmassage=="بازکردن ویدیو"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #ویدیو غیر فعال شد🔊\n➖➖➖➖➖➖➖\nℹ️پاک کردن فیلم غیر فعال شد و  ارسال فیلم ممنوع نمیباشد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video"]="| غیر فعال | ❌";
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
// edit
elseif($textmassage=="/lock edit" or $textmassage=="قفل ویرایش"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》#ویرایش پیام در گروه ممنوع شد🔒\n➖➖➖➖➖➖➖\nℹ️قفل ویرایش فعال شد از این پس تمام پیام های ویرایش شده پاک خواهند شد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["edit"]="| فعال | ✅";
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
elseif($textmassage=="/unlock edit" or $textmassage=="بازکردن ویرایش"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》#ویرایش پیام در گروه ازاد است🔓\n➖➖➖➖➖➖➖\nℹ️ویرایش پیام در گروه ازاد شد و پیام های ویرایش شده پاک نخواهند شد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["edit"]="| غیر فعال | ❌";
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
// game
elseif($textmassage=="/lock game" or $textmassage=="قفل بازی"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #بازی های تحت وب   فعال شد🔇\n➖➖➖➖➖➖➖\nℹ️پاک کردن بازی های تحت وب فعال شد از این پس ارسال بازی تحت وب ممنوع میباشد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["game"]="| فعال | ✅";
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
elseif($textmassage=="/unlock game" or $textmassage=="بازکردن بازی"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #بازی های تحت وب  غیر فعال شد🔊\n➖➖➖➖➖➖➖\nℹ️پاک کردن بازی های تحت وب غیر فعال شد و  ارسال بازی تحت وب ممنوع نمیباشد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 $settings["lock"]["game"]="| غیر فعال | ❌";
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
// location
elseif($textmassage=="/lock location" or $textmassage=="قفل مکان"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #موقعیت فعال شد🔇\n➖➖➖➖➖➖➖\nℹ️پاک کردن ارسال مکان فعال شد و از این پس  ممنوع میباشد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["location"]="| فعال | ✅";
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
elseif($textmassage=="/unlock location" or $textmassage=="بازکردن مکان"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #موقعیت غیر فعال شد🔊\n➖➖➖➖➖➖➖\nℹ️پاک کردن ارسال مکان غیر فعال شد و ارسال مکان ممنوع نمیباشد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["location"]="| غیر فعال | ❌";
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
// contact
elseif($textmassage=="/lock contact" or $textmassage=="قفل مخاطب"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #ارسال مخاطب فعال شد🔇\n➖➖➖➖➖➖➖\nℹ️ارسال مخاطب [شماره] فعال شد از این پس  ممنوع میباشد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["contact"]="| فعال | ✅";
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
elseif($textmassage=="/unlock contact" or $textmassage=="بازکردن مخاطب"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #ارسال مخاطب غیر فعال شد🔊\n➖➖➖➖➖➖➖\nℹ️پاک کردن مخاطب [شماره] غیر فعال شد و ارسال مخاطب [شماره] ممنوع نمیباشد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["contact"]="| غیر فعال | ❌";
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
// tag
elseif($textmassage=="/lock tag" or $textmassage=="قفل تگ"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》ارسال #تگ  در گروه ممنوع شد🔒\n➖➖➖➖➖➖➖\nℹ️قفل تگ [#] فعال شد از این پس تمام پیام های حاوی ان پاک خواهند شد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tag"]="| فعال | ✅";
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
elseif($textmassage=="/unlock tag" or $textmassage=="بازکردن تگ"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》ارسال #تگ در گروه  ازاد شد🔓\n➖➖➖➖➖➖➖\nℹ️ارسال تگ [#] در گروه ازاد شد و پیام های حاوی ان پاک نخواهند شد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tag"]="| غیر فعال | ❌";
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
// username 
elseif($textmassage=="/lock username" or $textmassage=="قفل یوزرنیم"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》ارسال #یوزرنیم  در گروه ممنوع شد🔒\n➖➖➖➖➖➖➖\nℹ️قفل تگ [@] فعال شد از این پس تمام پیام های حاوی ان پاک خواهند شد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["username"]="| فعال | ✅";
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
elseif($textmassage=="/unlock username" or $textmassage=="بازکردن یوزرنیم"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》ارسال #یوزرنیم در گروه  ازاد شد🔓\n➖➖➖➖➖➖➖\nℹ️ارسال تگ [@] در گروه ازاد شد و پیام های حاوی ان پاک نخواهند شد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["username"]="| غیر فعال | ❌";
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
// audio
elseif($textmassage=="/lock audio" or $textmassage=="قفل اهنگ"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #اهنگ فعال شد🔇\n➖➖➖➖➖➖➖\nℹ️پاک کردن آهنگ فعال شد از این پس ارسال آهنگ ممنوع میباشد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["audio"]="| فعال | ✅";
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
elseif($textmassage=="/unlock audio" or $textmassage=="بازکردن اهنگ"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》بیصدا کردن #اهنگ غیر فعال شد🔊\n➖➖➖➖➖➖➖\nℹ️پاک کردن آهنگ غیر فعال شد و  ارسال آهنگ ممنوع نمیباشد\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["audio"]="| غیر فعال | ❌";
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
