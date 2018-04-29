<?php
/*
in the name of God 
source of anti spam bot
by php 
v.13
dev : mohammadrezajafari [@mohammadrezajiji]
*/
// fun and for all
// time
if($textmassage=="/time" or $textmassage=="ساعت" or $textmassage=="time"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
if ($tc == 'group' | $tc == 'supergroup'){  
$basetime = file_get_contents("http://irapi.ir/time/");
file_put_contents("test.png",file_get_contents("http://webservice.lorddeveloper.ir/clock?API_KEY=JUPITERAPI"));
$getchat = json_decode($basetime, true);
$time = $getchat["FAtime"];
$date = $getchat["FAdate"];
	jijibot('sendSticker',[
	'chat_id'=>$chat_id,
	'sticker'=>new CURLFile("test.png"),
'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
  [
                    ['text'=>"🔻تاریخ امروز🔻",'callback_data'=>'text']
                ],
                [
                   ['text'=>"$date",'callback_data'=>'text']
                ],
                [
                    ['text'=>"🔻 ساعت 🔻",'callback_data'=>'text']
                ],
                [
                   ['text'=>"$time",'callback_data'=>'text']
                ],
	  	  	 [
				 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"]
		 ],
   ]
   ])
   ]);
   }
}
}
else
{
$basetime = file_get_contents("http://irapi.ir/time/");
file_put_contents("test.png",file_get_contents("http://webservice.lorddeveloper.ir/clock?API_KEY=JUPITERAPI"));
$getchat = json_decode($basetime, true);
$time = $getchat["FAtime"];
$date = $getchat["FAdate"];
	jijibot('sendSticker',[
	'chat_id'=>$chat_id,
	'sticker'=>new CURLFile("test.png"),
'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
  [
                    ['text'=>"🔻تاریخ امروز🔻",'callback_data'=>'text']
                ],
                [
                   ['text'=>"$date",'callback_data'=>'text']
                ],
                [
                    ['text'=>"🔻 ساعت 🔻",'callback_data'=>'text']
                ],
                [
                   ['text'=>"$time",'callback_data'=>'text']
                ],
	  	  	 [
				 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"]
		 ],
   ]
   ])
   ]);
}
}
// id
elseif($rt && $textmassage =="/id" or $rt && $textmassage =="ایدی" or $rt && $textmassage =="id"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
$getuserprofile = getUserProfilePhotos($token,$re_id);
$cuphoto = $getuserprofile->total_count;
$getuserphoto = $getuserprofile->photos[0][0]->file_id;
if ($getuserphoto != false) {
  jijibot('sendphoto',[
  'chat_id'=>$chat_id,
'photo'=>$getuserphoto,
  'caption'=>"💭ایدی گروه : [$chat_id]
  
🚦نام  : [$re_name]

🔹ایدی : [$re_id]

🔸یوزرنیم : [ @$re_user ]",
'reply_markup'=>$inlinebutton,
   ]);
   }  
else
{
	jijibot('sendphoto',[
  'chat_id'=>$chat_id,
'photo'=>new CURLFile("other/nophoto.png"),
  'caption'=>"💭ایدی گروه : [$chat_id]
  
🚦نام شما : [$re_name]

🔹ایدی : [$re_id]

🔸یوزرنیم : [ @$re_user ]",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   }  
}
}   
else
{
$getuserprofile = getUserProfilePhotos($token,$re_id);
$cuphoto = $getuserprofile->total_count;
$getuserphoto = $getuserprofile->photos[0][0]->file_id;
  jijibot('sendphoto',[
  'chat_id'=>$chat_id,
'photo'=>$getuserphoto,
  'caption'=>"💭ایدی گروه : [$chat_id]
  
🚦نام  : [$re_name]

🔹ایدی : [$re_id]

🔸یوزرنیم : [ @$re_user ]",
'reply_markup'=>$inlinebutton,
   ]);
   }
   }
elseif($textmassage=="/id" or $textmassage=="ایدی" or $textmassage=="id"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
$getuserprofile = getUserProfilePhotos($token,$from_id);
$cuphoto = $getuserprofile->total_count;
$getuserphoto = $getuserprofile->photos[0][0]->file_id;
if ($getuserphoto != false) {
  jijibot('sendphoto',[
  'chat_id'=>$chat_id,
'photo'=>$getuserphoto,
  'caption'=>"💭ایدی گروه : [$chat_id]

🚦نام شما : [$first_name]

🔹ایدی : [$from_id]

🔸یوزرنیم : [ @$username ]",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   }
else
{
	jijibot('sendphoto',[
  'chat_id'=>$chat_id,
'photo'=>new CURLFile("other/nophoto.png"),
  'caption'=>"💭ایدی گروه : [$chat_id]
  
🚦نام شما : [$first_name]

🔹ایدی : [$from_id]

🔸یوزرنیم : [ @$username ]",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   }
}
}
else
{
$getuserprofile = getUserProfilePhotos($token,$from_id);
$cuphoto = $getuserprofile->total_count;
$getuserphoto = $getuserprofile->photos[0][0]->file_id;
  jijibot('sendphoto',[
  'chat_id'=>$chat_id,
'photo'=>$getuserphoto,
  'caption'=>"💭ایدی گروه : [$chat_id]
  
🚦نام شما : [$first_name]

🔹ایدی : [$from_id]

🔸یوزرنیم : [ @$username ]",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}
// getpro
elseif(strpos($textmassage ,"/getpro ") !== false or strpos($textmassage ,"عکس پروفایل ") !== false) {
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
$text = str_replace(['/getpro ','عکس پروفایل '],'',$textmassage);
$getuserprofile = getUserProfilePhotos($token,$from_id);
$cuphoto = $getuserprofile->total_count;
$getuserphoto = $getuserprofile->photos[$text - 1][0]->file_id;
if ($getuserphoto != false) {
  jijibot('sendphoto',[
  'chat_id'=>$chat_id,
'photo'=>$getuserphoto,
  'caption'=>"🔹ایدی : [$from_id]
🔸یوزرنیم : [ @$username ]
➖➖
🖼 تعداد عکس پروفایل : [$cuphoto]
🌠شماره عکس پروفایل : [$text]",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   }
else
{
	jijibot('sendphoto',[
  'chat_id'=>$chat_id,
'photo'=>new CURLFile("other/nophoto.png"),
  'caption'=>"🔹ایدی : [$from_id]
🔸یوزرنیم : [ @$username ]
➖➖
🖼 تعداد عکس پروفایل : [$cuphoto]",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   }
}
}
else
{
$text = str_replace(['/getpro ','عکس پروفایل '],'',$textmassage);
$getuserprofile = getUserProfilePhotos($token,$from_id);
$cuphoto = $getuserprofile->total_count;
$getuserphoto = $getuserprofile->photos[$text - 1][0]->file_id;
  jijibot('sendphoto',[
  'chat_id'=>$chat_id,
'photo'=>$getuserphoto,
  'caption'=>"🔹ایدی : [$from_id]
🔸یوزرنیم : [ @$username ]
➖➖
🖼 تعداد عکس پروفایل : [$cuphoto]
🌠شماره عکس پروفایل : [$text]",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}
// me
elseif($textmassage=="/me"  or $textmassage=="من"  or $textmassage=="me"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
$getuserprofile = getUserProfilePhotos($token,$from_id);
$cuphoto = $getuserprofile->total_count;
if (in_array($from_id,$Dev)) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖اطلاعات شما :
➖➖➖➖
🔹نام شما : [$first_name]
🔸ایدی شما: [$from_id]
🔅یوزرنیم : [@$username]
🖼 تعداد عکس پروفایل : [$cuphoto]
💥تعداد کل پیام ها : [$tedadmsg]
➖➖➖
🚩 مقام شما : ادمین ربات",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   }
else
{
if ( $status == 'creator' or $status == 'administrator') {
		jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖اطلاعات شما :
➖➖➖➖
🔹نام شما : [$first_name]
🔸ایدی شما: [$from_id]
🔅یوزرنیم : [@$username]
🖼 تعداد عکس پروفایل : [$cuphoto]
💥تعداد کل پیام ها : [$tedadmsg]
➖➖➖
🚩 مقام شما : مدیر گروه",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
else
{
		jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖اطلاعات شما :
➖➖➖➖
🔹نام شما : [$first_name]
🔸ایدی شما: [$from_id]
🔅یوزرنیم : [@$username]
🖼 تعداد عکس پروفایل : [$cuphoto]
💥تعداد کل پیام ها : [$tedadmsg]
➖➖➖
🚩 مقام شما : عضو عادی",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   }
}
}
}
else
{
$getuserprofile = getUserProfilePhotos($token,$from_id);
$cuphoto = $getuserprofile->total_count;
		jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖اطلاعات شما :
➖➖➖➖
🔹نام شما : [$first_name]
🔸ایدی شما: [$from_id]
🔅یوزرنیم : [@$username]
🖼 تعداد عکس پروفایل : [$cuphoto]
💥تعداد کل پیام ها : [$tedadmsg]
➖➖➖
🚩 مقام شما : مدیر گروه",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}
   // nerkh
elseif($textmassage=="/nerkh" or $textmassage=="نرخ" or $textmassage=="nerkh"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖نرخ ربات مدیریت گروه
➖➖➖➖
💵یک ماه : 5000 تومان

💴دو ماه : 10000 تومان

💶نامحدود : 15000 تومان
➖➖➖
💥ربات پرقدرت بدون خاموشی با سرور قوی و امکانات فوق العاده",
'reply_to_message_id'=>$message_id,
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	[
	['text'=>"1⃣ یک ماه",'url'=>"https://zakaria.golddev.ir/venico/gpgram/pay/pay.php?amount=5000&callback=https:///zakaria.golddev.ir/venico/gpgram/pay/by-5000.php?id=$from_id"],['text'=>"2⃣  دو ماه",'url'=>"https://zakaria.golddev.ir/venico/gpgram/pay/pay.php?amount=10000&callback=https:///zakaria.golddev.ir/venico/gpgram/pay/by-10000.php?id=$from_id"]
	],
	[
	['text'=>"3⃣  نامحدود",'url'=>"https://zakaria.golddev.ir/venico/gpgram/pay/pay.php?amount=15000&callback=https:///zakaria.golddev.ir/venico/gpgram/pay/by-15000.php?id=$from_id"]
	],
	           [
         ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"]
     ]
              ],
        ])
   ]);
   }
}
else
{
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖نرخ ربات مدیریت گروه
➖➖➖➖
💵یک ماه : 5000 تومان

💴دو ماه : 10000 تومان

💶نامحدود : 15000 تومان
➖➖➖
💥ربات پرقدرت بدون خاموشی با سرور قوی و امکانات فوق العاده",
'reply_to_message_id'=>$message_id,
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	[
	['text'=>"1⃣ یک ماه",'url'=>"https://zakaria.golddev.ir/venico/gpgram/pay/pay.php?amount=5000&callback=https:///zakaria.golddev.ir/venico/gpgram/pay/by-5000.php?id=$from_id"],['text'=>"2⃣  دو ماه",'url'=>"https://zakaria.golddev.ir/venico/gpgram/pay/pay.php?amount=10000&callback=https:///zakaria.golddev.ir/venico/gpgram/pay/by-10000.php?id=$from_id"]
	],
	[
	['text'=>"3⃣  نامحدود",'url'=>"https://zakaria.golddev.ir/venico/gpgram/pay/pay.php?amount=15000&callback=https:///zakaria.golddev.ir/venico/gpgram/pay/by-15000.php?id=$from_id"]
	],
	           [
         ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"]
     ]
              ],
        ])
   ]);
}
}
// info
elseif($textmassage=="/info" && $rt or $textmassage=="اطلاعات" && $rt or $textmassage=="info" && $rt){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
$getuserprofile = getUserProfilePhotos($token,$from_id);
$cuphoto = $getuserprofile->total_count;
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖اطلاعات :
➖➖➖➖➖
🚀نام : [$re_name]
🚦ایدی : [$re_id]
💫یوزرنیم : [@$re_user]
🖼 تعداد عکس پروفایل : [$cuphoto]
➖➖➖
💭لینک : [http://t.me/$re_user]",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   } 
}
else
{
$getuserprofile = getUserProfilePhotos($token,$from_id);
$cuphoto = $getuserprofile->total_count;
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖اطلاعات :
➖➖➖➖➖
🚀نام : [$re_name]
🚦ایدی : [$re_id]
💫یوزرنیم : [@$re_user]
🖼 تعداد عکس پروفایل : [$cuphoto]
➖➖➖
💭لینک : [http://t.me/$re_user]",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}
elseif($textmassage=="/info"  or $textmassage=="اطلاعات"  or $textmassage=="info" ){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
$getuserprofile = getUserProfilePhotos($token,$from_id);
$cuphoto = $getuserprofile->total_count;
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖اطلاعات :
➖➖➖➖➖➖➖➖
🔸ایدی گروه : [$chat_id]
🔹تعداد پیام ها : [$tedadmsg]
🔅نوع گروه : [$tc]
➖➖➖➖➖
🚀نام شما : [$first_name]
🚦ایدی شما : [$from_id]
💫یوزرنیم  شما : [@$username]
🖼 تعداد عکس پروفایل : [$cuphoto]
➖➖➖
💭لینک شما : [http://t.me/$username]",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   }
}   
 else
 {
$getuserprofile = getUserProfilePhotos($token,$from_id);
$cuphoto = $getuserprofile->total_count;
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖اطلاعات :
➖➖➖➖➖➖➖➖
🔸ایدی گروه : [$chat_id]
🔹تعداد پیام ها : [$tedadmsg]
🔅نوع گروه : [$tc]
➖➖➖➖➖
🚀نام شما : [$first_name]
🚦ایدی شما : [$from_id]
💫یوزرنیم  شما : [@$username]
🖼 تعداد عکس پروفایل : [$cuphoto]
➖➖➖
💭لینک شما : [http://t.me/$username]",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}
if(strpos($textmassage ,"/info ") !== false or strpos($textmassage ,"اطلاعات فرد ") !== false) {
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
$text = str_replace(['/info ','اطلاعات فرد '],'',$textmassage);
if($text > 0){
              jijibot('sendmessage', [
                'chat_id' => $chat_id,
             'text'=>"⭐️ پروفایل فرد : [$text](tg://user?id=$text)",
			 'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   }
}
}
else
{
$text = str_replace(['/info ','اطلاعات فرد '],'',$textmassage);
              jijibot('sendmessage', [
                'chat_id' => $chat_id,
             'text'=>"⭐️ پروفایل فرد : [$text](tg://user?id=$text)",
			 'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}
?>