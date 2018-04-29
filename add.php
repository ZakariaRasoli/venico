<?php

// add kon and dell msg
if($textmassage == "/add on" or $textmassage == "add on" or $textmassage == "دعوت روشن"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 jijibot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"☆》#قفل اد اجباری در گروه فعال شد🔒\n➖➖➖➖➖➖➖\nℹ️از این پس هر کابر برای چت کردن در گروه باید $setadd کابر را اد کند تا توانایی چت کردن را  داشته باشد\nتوسط ☆> [ @$username ]",
		 'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["add"]="| فعال | ✅";
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
elseif($textmassage == "/add off" or $textmassage == "add off" or $textmassage == "دعوت خاموش"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 jijibot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"☆》#قفل اد اجباری غیر فعال شد🔓\n➖➖➖➖➖➖➖\nℹ️از این پس لازم نیست کاربران برای چت کردن در گروه کاربر دیگر را اد کنند\nتوسط ☆> [ @$username ]",
		 'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["add"]="| غیر فعال | ❌";
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
elseif (strpos($textmassage , '/setadd ') !== false or strpos($textmassage , 'تنظیم دعوت ') !== false ) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
$code = str_replace(['/setadd ','تنظیم دعوت '],'',$textmassage);
if($code <= 20 && $code >= 1){
 jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔖 تعداد افرادی که توسط اعضای گروه باید دعوت شوند تغییر کرد
➖➖➖➖➖
🔸تعداد اعضای که باید دعوت شود : $code

🚩توسط : [ @$username ]",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["setadd"]="$code";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   } 
else
{
jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 عدد وارد شده بین 1 تا 20 باید باشد",
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
// delall
elseif($textmassage == "/delall" or $textmassage == "پاکسازی کلی"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
$time = $settings["information"]["timermsg"];
date_default_timezone_set('Asia/Tehran');
$date1 = date("H:i:s");
if($date1 > $time){
$msg_id = $settings["information"]["msg_id"];	
$manha = $message_id - $msg_id ;
if($manha < 1000){
for($i=$update->message->message_id; $i>= $msg_id; $i--){
jijibot('deletemessage',[
 'chat_id' =>$update->message->chat->id,
 'message_id' =>$i,
              ]);
}
jijibot('sendmessage',[
 'chat_id' =>$update->message->chat->id,
 'text' =>"پیام های گروه تا زمانی که گروه تنظیم شده بود پاک شد  ✔️
 
🔘 تعداد پاک شده ها : $manha

ℹ️ ربات به صورت خودکار گروه رو دوباره تنظیم کرد",
   ]);
date_default_timezone_set('Asia/Tehran');
$date1 = date("H:i:s");
$date2 = isset($_GET['date']) ? $_GET['date'] : date("H:i:s");;
$next_date = date('H:i:s', strtotime($date2 ."+120 Minutes"));
$settings["information"]["timermsg"]="$next_date";
$settings["information"]["msg_id"]="$message_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
$plus = $message_id - 500 ;
for($i=$update->message->message_id; $i>= $plus; $i--){
jijibot('deletemessage',[
 'chat_id' =>$update->message->chat->id,
 'message_id' =>$i,
              ]);
}
date_default_timezone_set('Asia/Tehran');
$date1 = date("H:i:s");
$date2 = isset($_GET['date']) ? $_GET['date'] : date("H:i:s");;
$next_date = date('H:i:s', strtotime($date2 ."+60 Minutes"));
$settings["information"]["timermsg"]="$next_date";
$settings["information"]["msg_id"]="$message_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
else
{
jijibot('sendmessage',[
 'chat_id' =>$update->message->chat->id,
 'text' =>"🕰 محدودیت زمانی 🕰
 
🔧 ربات به تازگی پاکسازی پیام را انجام داده است
📍 زمان ازاد سازی : $time",
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
					elseif($data=="addbzn"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
$add = $settings2["information"]["add"];
$setadd = $settings2["information"]["setadd"];
          jijibot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به بخش تنظیمات ادد اجباری خوش امدید🍃
➖➖➖➖➖➖➖➖
🔻از دکمه های زیر استفاده کنید",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
    [
                     ['text'=>"👥 ادد اجباری",'callback_data'=>'text'],['text'=>"$add",'callback_data'=>'lockadd']
					 ],
					 [
					 ['text'=>"🚸 میزان دعوت",'callback_data'=>'text'],['text'=>"🔸 $setadd 🔹",'callback_data'=>'text']
					 ],
					 [
					 ['text'=>"➕ افزایش دادن",'callback_data'=>'add+'],['text'=>"➖ کاهش دادن",'callback_data'=>'add-']
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
	}else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
	}
		  }
		elseif($data=="lockadd" && $settings2["information"]["add"] == "| فعال | ✅"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
$setadd = $settings2["information"]["setadd"];
          jijibot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به بخش تنظیمات ادد اجباری خوش امدید🍃
➖➖➖➖➖➖➖➖
✅ادد اجباری خاموش شد",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
    [
                     ['text'=>"👥 ادد اجباری",'callback_data'=>'text'],['text'=>"| غیر فعال | ❌",'callback_data'=>'lockadd']
					 ],
					 [
					 ['text'=>"🚸 میزان دعوت",'callback_data'=>'text'],['text'=>"🔸 $setadd 🔹",'callback_data'=>'text']
					 ],
					 [
					 ['text'=>"➕ افزایش دادن",'callback_data'=>'add+'],['text'=>"➖ کاهش دادن",'callback_data'=>'add-']
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
$settings2["information"]["add"]="| غیر فعال | ❌";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
	}else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
	}
		  }
		  		elseif($data=="lockadd" && $settings2["information"]["add"] == "| غیر فعال | ❌"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
$setadd = $settings2["information"]["setadd"];
          jijibot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به بخش تنظیمات ادد اجباری خوش امدید🍃
➖➖➖➖➖➖➖➖
✅ادد اجباری روشن شد",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
    [
                     ['text'=>"👥 ادد اجباری",'callback_data'=>'text'],['text'=>"| فعال | ✅",'callback_data'=>'lockadd']
					 ],
					 [
					 ['text'=>"🚸 میزان دعوت",'callback_data'=>'text'],['text'=>"🔸 $setadd 🔹",'callback_data'=>'text']
					 ],
					 [
					 ['text'=>"➕ افزایش دادن",'callback_data'=>'add+'],['text'=>"➖ کاهش دادن",'callback_data'=>'add-']
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
$settings2["information"]["add"]="| فعال | ✅";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
	}else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
	}
		  }
		  		  		elseif($data=="add+"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
$setadd = $settings2["information"]["setadd"];
$add = $settings2["information"]["add"];
$manfi = $setadd + 1;
if($manfi <= 20 && $manfi >= 1){
          jijibot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به بخش تنظیمات ادد اجباری خوش امدید🍃
➖➖➖➖➖➖➖➖
افزایش یافت✔️",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
    [
                     ['text'=>"👥 ادد اجباری",'callback_data'=>'text'],['text'=>"$add",'callback_data'=>'lockadd']
					 ],
					 [
					 ['text'=>"🚸 میزان دعوت",'callback_data'=>'text'],['text'=>"🔸 $manfi 🔹",'callback_data'=>'text']
					 ],
					 [
					 ['text'=>"➕ افزایش دادن",'callback_data'=>'add+'],['text'=>"➖ کاهش دادن",'callback_data'=>'add-']
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
$settings2["information"]["setadd"]="$manfi";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
}
else
{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"امکان تغییر دیگر وجود ندارد ⚠️",
]);
	}
		 }
	else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
	}
		  }
								  		  		elseif($data=="add-"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
$setadd = $settings2["information"]["setadd"];
$add = $settings2["information"]["add"];
$manfi = $setadd - 1;
    if ($manfi <= 20 && $manfi >= 1){
          jijibot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به بخش تنظیمات ادد اجباری خوش امدید🍃
➖➖➖➖➖➖➖➖
کاهش یافت✔️",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
    [
                     ['text'=>"👥 ادد اجباری",'callback_data'=>'text'],['text'=>"$add",'callback_data'=>'lockadd']
					 ],
					 [
					 ['text'=>"🚸 میزان دعوت",'callback_data'=>'text'],['text'=>"🔸 $manfi 🔹",'callback_data'=>'text']
					 ],
					 [
					 ['text'=>"➕ افزایش دادن",'callback_data'=>'add+'],['text'=>"➖ کاهش دادن",'callback_data'=>'add-']
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
$settings2["information"]["setadd"]="$manfi";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
}
else
{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"امکان تغییر دیگر وجود ندارد ⚠️",
]);
	}
		 }
	else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
	}
		  }
?>
