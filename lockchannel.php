<?php
/*
in the name of God 
source of anti spam bot
by php 
v.13
dev : mohammadrezajafari [@mohammadrezajiji]
*/
if($textmassage == "/channel on" or $textmassage == "channel on" or $textmassage == "قفل کانال روشن"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
 jijibot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"☆》#قفل کانال روشن شد🔒\n➖➖➖➖➖➖➖\nℹ️از این پس کاربران باید در کانال تنظیم شده عضو شوند تا بتوانند پیام دهند\nتوسط ☆> [ @$username ]",
		 'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["lockchannel"]="| فعال | ✅";
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
}
elseif($textmassage == "/channel off" or $textmassage == "channel off" or $textmassage == "قفل کانال خاموش"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
 jijibot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"☆》#قفل کانال خاموش شد🔓\n➖➖➖➖➖➖➖\nℹ️قفل کانال خاموش شد و دیگر عضویت اجباری فعال نیست\nتوسط ☆> [ @$username ]",
		 'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["lockchannel"]="| غیر فعال | ❌";
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
}
elseif ( strpos($textmassage , '/setchannel ') !== false or strpos($textmassage , 'تنظیم کانال ') !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
$code = $num = str_replace(['/setchannel ','تنظیم کانال '],'',$textmassage);
 jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖 کانال عضویت احباری تنظیم شد
➖➖➖➖➖

📍 از این پس برای فعالیت داشتن در گروه باید عضو کانال روبرو باشند : $code

🚩توسط : [ @$username ]

📌 توجه ربات حتما باید در کانال تنظیم شده ادمین شود تا بتواند عمل کند",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["setchannel"]="$code";
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
					elseif($data=="lockchannel"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
$add = $settings2["information"]["lockchannel"];
$setadd = $settings2["information"]["setchannel"];
          jijibot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به بخش تنظیمات ادد اجباری خوش امدید🍃
➖➖➖➖➖➖➖➖
🔻از دکمه های زیر استفاده کنید",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
    [
                     ['text'=>"📣 قفل کانال",'callback_data'=>'text'],['text'=>"$add",'callback_data'=>'channellock']
					 ],
					 [
					 ['text'=>"📢 کانال تنظیم شده",'callback_data'=>'text'],['text'=>"$setadd",'callback_data'=>'text']
					 ],
					 [
					 ['text'=>"🔔 تنظیم کانال",'callback_data'=>'setchannel']
					 ],
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'panel2']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
	]);
$settings2["information"]["step"]="none";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
	}else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
	}
		  }
		elseif($data=="channellock" && $settings2["information"]["lockchannel"] == "| فعال | ✅"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
$setadd = $settings2["information"]["setchannel"];
          jijibot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به بخش تنظیمات قفل کانال خوش امدید 🍃
➖➖➖➖➖➖➖➖
✅ قفل کانال خاموش شد",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
    [
                     ['text'=>"📣 قفل کانال",'callback_data'=>'text'],['text'=>"| غیر فعال | ❌",'callback_data'=>'channellock']
					 ],
 [
					 ['text'=>"📢 کانال تنظیم شده",'callback_data'=>'text'],['text'=>"$setadd",'callback_data'=>'text']
					 ],
					 [
					 ['text'=>"🔔 تنظیم کانال",'callback_data'=>'setchannel']
					 ],
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'panel2']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
	]);
$settings2["information"]["lockchannel"]="| غیر فعال | ❌";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
	}else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
	}
		  }
		  		elseif($data=="channellock" && $settings2["information"]["lockchannel"] == "| غیر فعال | ❌"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
$setadd = $settings2["information"]["setchannel"];
          jijibot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به بخش تنظیمات قفل کانال خوش امدید 🍃
➖➖➖➖➖➖➖➖
✅ قفل کانال روشن شد",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
    [
                     ['text'=>"📣 قفل کانال",'callback_data'=>'text'],['text'=>"| فعال | ✅",'callback_data'=>'channellock']
					 ],
 [
					 ['text'=>"📢 کانال تنظیم شده",'callback_data'=>'text'],['text'=>"$setadd",'callback_data'=>'text']
					 ],
					 [
					 ['text'=>"🔔 تنظیم کانال",'callback_data'=>'setchannel']
					 ],
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'panel2']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
	]);
$settings2["information"]["lockchannel"]="| فعال | ✅";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
	}else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
	}
		  }
		  		  		elseif($data=="setchannel"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
          jijibot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"🍃 یوزرنیم کانال خود را ارسال کنید 
📍 مثال : @$channel

📌 توجه ربات حتما باید در کانال تنظیم شده ادمین شود تا بتواند عمل کند",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
					 [
					 ['text'=>"🔙 برگشت",'callback_data'=>'lockchannel']
					 ],
                     ]
               ])
	]);
$settings2["information"]["step"]="setchannel";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
	}else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
	}
		  }
// lock auto cmd 
if($textmassage=="/lock auto" or $textmassage=="قفل خودکار روشن"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》قفل خودکار فعال شد🔒\n➖➖➖➖➖➖➖\nℹ️قفل خودکار رو میتوانید تنظیم کنید برای تنظیم از /panel استفاده کنید\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["lockauto"]="| فعال | ✅";
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
elseif($textmassage=="/unlock auto" or $textmassage=="قفل خودکار خاموش"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》قفل #خودکار خاموش شد🔓\n➖➖➖➖➖➖➖\nℹ️قفل خودکار دیگر عمل نخواهد کرد و گروه خودکار سکوت نمیشود\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["lockauto"]="| غیر فعال | ❌";
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
elseif (strpos($textmassage , "/setlockauto ") !== false or strpos($textmassage , "تنظیم قفل خودکار ") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$num = str_replace(['/setlockauto ','تنظیم قفل خودکار '],'',$textmassage);
$add = $settings["information"]["added"];
if ($add == true) {
$te = explode(" ",$num);
date_default_timezone_set('Asia/Tehran');
$date1 = date("H:i:s");
$startlock = $te[0];
$endlock = $te[1];
			  jijibot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"☆》قفل خودکار تنظیم شد🔇\n➖➖➖➖➖➖➖
ℹ️زمان قفل خودکار در گروه به صورت زیر است :

⏲زمان الان : $date1
⏰زمان شروع سکوت گروه : $startlock
🕰زمان خاموش شدن سکوت گروه : $endlock\n➖➖➖➖\nتوسط ☆> [ @$username ]",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["timelock"]="$startlock";
$settings["information"]["timeunlock"]="$endlock";
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