<?php
/*
in the name of God 
source of anti spam bot
by php 
v.13
dev : mohammadrezajafari [@mohammadrezajiji]
*/
if($textmassage=="/filterlist" or $textmassage=="filterlist" or $textmassage=="لیست فیلتر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$filter = $settings["filterlist"];
for($z = 0;$z <= count($filter)-1;$z++){
$result = $result.$filter[$z]."\n";
}
jijibot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🔖لیست کلمات فیلتر گروه :
➖➖➖➖➖➖➖➖
$result",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
elseif (strpos($textmassage , "/filter ") !== false or strpos($textmassage , "افزودن فیلتر ") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
$text = str_replace(['/filter ','افزودن فیلتر '],'',$textmassage);
jijibot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"#》کلمه $text به لیست کلمات فیلتر اضافه شد✅\n➖➖➖➖➖➖➖\nکلمه : $text\nℹ ️به لیست فیلتر اضافه شد از این پس این کلمه پاک میشود\nتوسط ☆> : [ @$username ]",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
$settings["filterlist"][]="$text";
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
elseif (strpos($textmassage , "/unfilter " ) !== false or strpos($textmassage , "حذف فیلتر ") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$text = str_replace(['/unfilter ','حذف فیلتر '],'',$textmassage);
jijibot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"#》کلمه $text از لیست کلمات فیلتر حذف شد✅\n➖➖➖➖➖➖➖\nکلمه : $text\nℹ️ ️از لیست فیلتر کلمات حذف شد از این پس این کلمه پاک نمی شود\nتوسط ☆> [ @$username ]",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
$key = array_search($text,$settings["filterlist"]);
unset($settings["filterlist"][$key]);
$settings["filterlist"] = array_values($settings["filterlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
elseif($textmassage=="/clean filterlist" or $textmassage=="clean filterlist" or $textmassage=="حذف لیست فیلتر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ) {
$add = $settings["information"]["added"];
if ($add == true) {
jijibot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لیست کلمات فیلتر گروه پاک شد✔️
➖➖➖➖➖➖➖➖
🔖توسط : [ @$username ]
",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
unset($settings["filterlist"]);
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
// lock auto 
	    elseif($data=="lockauto"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"❄️ به بخش قفل خودکار گروه خوش امدید
			   
📍 در این قسمت میتوانید سکوت گروه را به صورت خودکار تعیین کنید تا در زمان معین شده گروه از حالت سکوت خارج یا سکوت شود 
➖➖➖➖➖➖➖➖
🚩 از دکمه های زیر استفاده کنید",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 وضعیت قفل",'callback_data'=>'text'],['text'=>"$lockauto",'callback_data'=>'lockautostats']
					 ],
					            [
                     ['text'=>"🔻⏰ زمان فعال شدن ⏰🔻",'callback_data'=>'text']
					 ],
					 					            [
                     ['text'=>"$timelockauto",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ یک ساعت",'callback_data'=>'hourlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ یک ساعت",'callback_data'=>'hourlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minlockautodown']
					 ],
					 		            [
                     ['text'=>"🔻⏰ زمان خاموش شدن ⏰🔻",'callback_data'=>'text']
					 ],
					 			 					            [
                     ['text'=>"$timeunlockauto",'callback_data'=>'text']
					 ],
					 					               [
                     ['text'=>"➕ یک ساعت",'callback_data'=>'hourunlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minunlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ یک ساعت",'callback_data'=>'hourunlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minunlockautodown']
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
											    elseif($data=="lockautostats" &&  $settings2["lock"]["lockauto"] == "| غیر فعال | ❌"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"❄️ به بخش قفل خودکار گروه خوش امدید
➖➖➖➖➖➖➖➖
📍 قفل خودکار گروه فعال شد",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 وضعیت قفل",'callback_data'=>'text'],['text'=>"| فعال | ✅",'callback_data'=>'lockautostats']
					 ],
					            [
                     ['text'=>"🔻⏰ زمان فعال شدن ⏰🔻",'callback_data'=>'text']
					 ],
					 					            [
                     ['text'=>"$timelockauto",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ یک ساعت",'callback_data'=>'hourlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ یک ساعت",'callback_data'=>'hourlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minlockautodown']
					 ],
					 		            [
                     ['text'=>"🔻⏰ زمان خاموش شدن ⏰🔻",'callback_data'=>'text']
					 ],
					 			 					            [
                     ['text'=>"$timeunlockauto",'callback_data'=>'text']
					 ],
					 					               [
                     ['text'=>"➕ یک ساعت",'callback_data'=>'hourunlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minunlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ یک ساعت",'callback_data'=>'hourunlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minunlockautodown']
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
$settings2["lock"]["lockauto"]="| فعال | ✅";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
				}
															    elseif($data=="lockautostats" &&  $settings2["lock"]["lockauto"] == "| فعال | ✅"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"❄️ به بخش قفل خودکار گروه خوش امدید
➖➖➖➖➖➖➖➖
📍 قفل خودکار گروه خاموش شد",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 وضعیت قفل",'callback_data'=>'text'],['text'=>"| غیر فعال | ❌",'callback_data'=>'lockautostats']
					 ],
					            [
                     ['text'=>"🔻⏰ زمان فعال شدن ⏰🔻",'callback_data'=>'text']
					 ],
					 					            [
                     ['text'=>"$timelockauto",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ یک ساعت",'callback_data'=>'hourlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ یک ساعت",'callback_data'=>'hourlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minlockautodown']
					 ],
					 		            [
                     ['text'=>"🔻⏰ زمان خاموش شدن ⏰🔻",'callback_data'=>'text']
					 ],
					 			 					            [
                     ['text'=>"$timeunlockauto",'callback_data'=>'text']
					 ],
					 					               [
                     ['text'=>"➕ یک ساعت",'callback_data'=>'hourunlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minunlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ یک ساعت",'callback_data'=>'hourunlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minunlockautodown']
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
$settings2["lock"]["lockauto"]="| غیر فعال | ❌";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
				}
											    elseif($data=="hourlockautoplus"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
$next_date = date('H:i', strtotime($timelockauto ."+60 Minutes"));
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"❄️ به بخش قفل خودکار گروه خوش امدید
➖➖➖➖➖➖➖➖
🚩 زمان فعال سازی قفل یک ساعت افزایش یافت",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 وضعیت قفل",'callback_data'=>'text'],['text'=>"$lockauto",'callback_data'=>'lockautostats']
					 ],
					            [
                     ['text'=>"🔻⏰ زمان فعال شدن ⏰🔻",'callback_data'=>'text']
					 ],
					 					            [
                     ['text'=>"$next_date",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ یک ساعت",'callback_data'=>'hourlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ یک ساعت",'callback_data'=>'hourlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minlockautodown']
					 ],
					 		            [
                     ['text'=>"🔻⏰ زمان خاموش شدن ⏰🔻",'callback_data'=>'text']
					 ],
					 			 					            [
                     ['text'=>"$timeunlockauto",'callback_data'=>'text']
					 ],
					 					               [
                     ['text'=>"➕ یک ساعت",'callback_data'=>'hourunlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minunlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ یک ساعت",'callback_data'=>'hourunlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minunlockautodown']
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
$settings2["information"]["timelock"]="$next_date";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
				}
															    elseif($data=="hourlockautodown"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
$next_date = date('H:i', strtotime($timelockauto ."-60 Minutes"));
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"❄️ به بخش قفل خودکار گروه خوش امدید
➖➖➖➖➖➖➖➖
🚩 زمان فعال سازی قفل یک ساعت کاهش یافت",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 وضعیت قفل",'callback_data'=>'text'],['text'=>"$lockauto",'callback_data'=>'lockautostats']
					 ],
					            [
                     ['text'=>"🔻⏰ زمان فعال شدن ⏰🔻",'callback_data'=>'text']
					 ],
					 					            [
                     ['text'=>"$next_date",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ یک ساعت",'callback_data'=>'hourlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ یک ساعت",'callback_data'=>'hourlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minlockautodown']
					 ],
					 		            [
                     ['text'=>"🔻⏰ زمان خاموش شدن ⏰🔻",'callback_data'=>'text']
					 ],
					 			 					            [
                     ['text'=>"$timeunlockauto",'callback_data'=>'text']
					 ],
					 					               [
                     ['text'=>"➕ یک ساعت",'callback_data'=>'hourunlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minunlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ یک ساعت",'callback_data'=>'hourunlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minunlockautodown']
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
$settings2["information"]["timelock"]="$next_date";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
				}
											    elseif($data=="minlockautoplus"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
$next_date = date('H:i', strtotime($timelockauto ."+5 Minutes"));
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"❄️ به بخش قفل خودکار گروه خوش امدید
➖➖➖➖➖➖➖➖
🚩 زمان فعال سازی قفل پنج دقیقه افزایش یافت",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 وضعیت قفل",'callback_data'=>'text'],['text'=>"$lockauto",'callback_data'=>'lockautostats']
					 ],
					            [
                     ['text'=>"🔻⏰ زمان فعال شدن ⏰🔻",'callback_data'=>'text']
					 ],
					 					            [
                     ['text'=>"$next_date",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ یک ساعت",'callback_data'=>'hourlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ یک ساعت",'callback_data'=>'hourlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minlockautodown']
					 ],
					 		            [
                     ['text'=>"🔻⏰ زمان خاموش شدن ⏰🔻",'callback_data'=>'text']
					 ],
					 			 					            [
                     ['text'=>"$timeunlockauto",'callback_data'=>'text']
					 ],
					 					               [
                     ['text'=>"➕ یک ساعت",'callback_data'=>'hourunlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minunlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ یک ساعت",'callback_data'=>'hourunlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minunlockautodown']
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
$settings2["information"]["timelock"]="$next_date";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
				}
															    elseif($data=="minlockautodown"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
$next_date = date('H:i', strtotime($timelockauto ."-5 Minutes"));
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"❄️ به بخش قفل خودکار گروه خوش امدید
➖➖➖➖➖➖➖➖
🚩 زمان فعال سازی قفل پنج دقیقه کاهش یافت",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 وضعیت قفل",'callback_data'=>'text'],['text'=>"$lockauto",'callback_data'=>'lockautostats']
					 ],
					            [
                     ['text'=>"🔻⏰ زمان فعال شدن ⏰🔻",'callback_data'=>'text']
					 ],
					 					            [
                     ['text'=>"$next_date",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ یک ساعت",'callback_data'=>'hourlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ یک ساعت",'callback_data'=>'hourlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minlockautodown']
					 ],
					 		            [
                     ['text'=>"🔻⏰ زمان خاموش شدن ⏰🔻",'callback_data'=>'text']
					 ],
					 			 					            [
                     ['text'=>"$timeunlockauto",'callback_data'=>'text']
					 ],
					 					               [
                     ['text'=>"➕ یک ساعت",'callback_data'=>'hourunlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minunlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ یک ساعت",'callback_data'=>'hourunlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minunlockautodown']
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
$settings2["information"]["timelock"]="$next_date";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
				}
												    elseif($data=="hourunlockautoplus"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
$next_date = date('H:i', strtotime($timeunlockauto ."+60 Minutes"));
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"❄️ به بخش قفل خودکار گروه خوش امدید
➖➖➖➖➖➖➖➖
🚩 زمان خاموش شدن قفل یک ساعت افزایش یافت",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 وضعیت قفل",'callback_data'=>'text'],['text'=>"$lockauto",'callback_data'=>'lockautostats']
					 ],
					            [
                     ['text'=>"🔻⏰ زمان فعال شدن ⏰🔻",'callback_data'=>'text']
					 ],
					 					            [
                     ['text'=>"$timelockauto",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ یک ساعت",'callback_data'=>'hourlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ یک ساعت",'callback_data'=>'hourlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minlockautodown']
					 ],
					 		            [
                     ['text'=>"🔻⏰ زمان خاموش شدن ⏰🔻",'callback_data'=>'text']
					 ],
					 			 					            [
                     ['text'=>"$next_date",'callback_data'=>'text']
					 ],
					 					               [
                     ['text'=>"➕ یک ساعت",'callback_data'=>'hourunlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minunlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ یک ساعت",'callback_data'=>'hourunlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minunlockautodown']
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
$settings2["information"]["timeunlock"]="$next_date";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
				}
																    elseif($data=="hourunlockautodown"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
$next_date = date('H:i', strtotime($timeunlockauto ."-60 Minutes"));
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"❄️ به بخش قفل خودکار گروه خوش امدید
➖➖➖➖➖➖➖➖
🚩 زمان خاموش شدن قفل یک ساعت کاهش یافت",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 وضعیت قفل",'callback_data'=>'text'],['text'=>"$lockauto",'callback_data'=>'lockautostats']
					 ],
					            [
                     ['text'=>"🔻⏰ زمان فعال شدن ⏰🔻",'callback_data'=>'text']
					 ],
					 					            [
                     ['text'=>"$timelockauto",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ یک ساعت",'callback_data'=>'hourlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ یک ساعت",'callback_data'=>'hourlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minlockautodown']
					 ],
					 		            [
                     ['text'=>"🔻⏰ زمان خاموش شدن ⏰🔻",'callback_data'=>'text']
					 ],
					 			 					            [
                     ['text'=>"$next_date",'callback_data'=>'text']
					 ],
					 					               [
                     ['text'=>"➕ یک ساعت",'callback_data'=>'hourunlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minunlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ یک ساعت",'callback_data'=>'hourunlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minunlockautodown']
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
$settings2["information"]["timeunlock"]="$next_date";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
				}
																    elseif($data=="minunlockautoplus"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
$next_date = date('H:i', strtotime($timeunlockauto ."+5 Minutes"));
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"❄️ به بخش قفل خودکار گروه خوش امدید
➖➖➖➖➖➖➖➖
🚩 زمان خاموش شدن قفل پنج دقیقه افزایش یافت",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 وضعیت قفل",'callback_data'=>'text'],['text'=>"$lockauto",'callback_data'=>'lockautostats']
					 ],
					            [
                     ['text'=>"🔻⏰ زمان فعال شدن ⏰🔻",'callback_data'=>'text']
					 ],
					 					            [
                     ['text'=>"$timelockauto",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ یک ساعت",'callback_data'=>'hourlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ یک ساعت",'callback_data'=>'hourlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minlockautodown']
					 ],
					 		            [
                     ['text'=>"🔻⏰ زمان خاموش شدن ⏰🔻",'callback_data'=>'text']
					 ],
					 			 					            [
                     ['text'=>"$next_date",'callback_data'=>'text']
					 ],
					 					               [
                     ['text'=>"➕ یک ساعت",'callback_data'=>'hourunlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minunlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ یک ساعت",'callback_data'=>'hourunlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minunlockautodown']
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
$settings2["information"]["timeunlock"]="$next_date";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
				}
																				    elseif($data=="minunlockautodown"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockauto = $settings2["lock"]["lockauto"];
$timelockauto = $settings2["information"]["timelock"];
$timeunlockauto = $settings2["information"]["timeunlock"];
$next_date = date('H:i', strtotime($timeunlockauto ."-5 Minutes"));
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"❄️ به بخش قفل خودکار گروه خوش امدید
➖➖➖➖➖➖➖➖
🚩 زمان خاموش شدن قفل پنج دقیقه کاهش یافت",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 وضعیت قفل",'callback_data'=>'text'],['text'=>"$lockauto",'callback_data'=>'lockautostats']
					 ],
					            [
                     ['text'=>"🔻⏰ زمان فعال شدن ⏰🔻",'callback_data'=>'text']
					 ],
					 					            [
                     ['text'=>"$timelockauto",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ یک ساعت",'callback_data'=>'hourlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ یک ساعت",'callback_data'=>'hourlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minlockautodown']
					 ],
					 		            [
                     ['text'=>"🔻⏰ زمان خاموش شدن ⏰🔻",'callback_data'=>'text']
					 ],
					 			 					            [
                     ['text'=>"$next_date",'callback_data'=>'text']
					 ],
					 					               [
                     ['text'=>"➕ یک ساعت",'callback_data'=>'hourunlockautoplus'],['text'=>"➕ پنج دقیقه",'callback_data'=>'minunlockautoplus']
					 ],
					 				               [
                     ['text'=>"➖ یک ساعت",'callback_data'=>'hourunlockautodown'],['text'=>"➖ پنج دقیقه",'callback_data'=>'minunlockautodown']
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
$settings2["information"]["timeunlock"]="$next_date";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
				}
?>