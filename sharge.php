<?php
/*
in the name of God 
source of anti spam bot
by php 
v.13
dev : mohammadrezajafari [@mohammadrezajiji]
*/
//-----------------------------------------------------------------------------------------
// charge
if (strpos($textmassage , "/charge ") !== false && in_array($from_id,$Dev) or strpos($textmassage , "تنظیم شارژ ") !== false && in_array($from_id,$Dev)) {
	$num = str_replace(['/charge ','تنظیم شارژ '],'',$textmassage);
	if ($num <= 1000 && $num >= 1){
		date_default_timezone_set('Asia/Tehran');
		$date1 = date('Y-m-d', time());
		$date2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
		$next_date = date('Y-m-d', strtotime($date2 ." +$num day"));
			  jijibot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"شارژ گروه با موفقیت به $num روز دیگر تنظیم شد✅
➖➖➖➖➖➖➖➖
🔹تاریخ امروز : $date1

🔸تاریخ اتمام شارژ : $next_date
➖➖➖➖
🚩اطلاعات گروه :

🔅ایدی گروه : [$chat_id]

💭نام گروه : [$namegroup]
➖➖➖➖
🔖توسط : [ @$username ]",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["expire"]="$next_date";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   }else{
jijibot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"خطا ⚠️
➖➖➖➖➖➖
💭عدد وارد شده باید بین 1 تا 1000 باشد",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}
// check charge
elseif($textmassage == "میزان شارژ" or $textmassage == "/check"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
date_default_timezone_set('Asia/Tehran');
$date3 = date('Y-m-d');
$date2 = date('d');
$date1 = date('m');
$ndate = $settings["information"]["expire"];
$rdate = $settings["information"]["dataadded"];
$gettime2 = date('d', strtotime($ndate));
$gettime1 = date('m', strtotime($ndate));
$gettime = $gettime1 - $date1 ;
$gettime2 = $gettime2 - $date2 ;
$ingettime = $gettime * 30 ;
$endtime = $ingettime + $gettime2 ;
        jijibot('sendmessage', [
            "chat_id" => $chat_id,
            "text" => "به بخش میزان شارژ گروه خوش امدید💎
➖➖➖➖➖➖➖➖
🔖اطلاعات گروه شما :

🔸ایدی گروه : [$chat_id]

🔹نام گروه : [$namegroup]
➖➖➖➖
اطلاعات تاریخ انقضای گروه🔻",
            'reply_to_message_id'=>$message_id,
        'reply_markup'=>json_encode([
            'resize_keyboard'=>true,
            'inline_keyboard'=>[
                [
                    ['text'=>"🔻تاریخ امروز🔻",'callback_data'=>'text']
                ],
                [
                   ['text'=>"🔹 $date3 🔸",'callback_data'=>'text']
                ],
                [
                    ['text'=>"🔻تاریخ اتمام شارژ 🔻",'callback_data'=>'text']
                ],
                [
                   ['text'=>"🔹 $ndate 🔸",'callback_data'=>'text']
                ],
                [
                    ['text'=>"🔻تاریخ ثبت شارژ 🔻",'callback_data'=>'text']
                ],
                [
                   ['text'=>"🔹 $rdate 🔸",'callback_data'=>'text']
                ],
				                [
                    ['text'=>"🔻میزان شارژ گروه🔻",'callback_data'=>'text']
                ],
                [
                   ['text'=>"📶 $endtime روز دیگر",'callback_data'=>'text']
                ],

					 [
					 ['text'=>"📦 خرید شارژ",'callback_data'=>'requstcharge']
					 ],
					 									 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"✖️ خروج",'callback_data'=>'exit']
					 ],
            ]
        ])
        ]);
}
}
  elseif($data=="charge"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev)){
date_default_timezone_set('Asia/Tehran');
$date3 = date('Y-m-d');
$date2 = date('d');
$date1 = date('m');
$ndate = $settings2["information"]["expire"];
$rdate = $settings2["information"]["dataadded"];
$gettime2 = date('d', strtotime($ndate));
$gettime1 = date('m', strtotime($ndate));
$gettime = $gettime1 - $date1 ;
$gettime2 = $gettime2 - $date2 ;
$ingettime = $gettime * 30 ;
$endtime = $ingettime + $gettime2 ;
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"به بخش میزان شارژ گروه خوش امدید💎
➖➖➖➖➖➖➖➖
🔖اطلاعات گروه شما :

🔸ایدی گروه : [$chatid]

🔹نام گروه : [$gpname]
➖➖➖➖
اطلاعات تاریخ انقضای گروه🔻",
        'reply_markup'=>json_encode([
            'resize_keyboard'=>true,
            'inline_keyboard'=>[
                [
                    ['text'=>"🔻تاریخ امروز🔻",'callback_data'=>'text']
                ],
                [
                   ['text'=>"🔹 $date3 🔸",'callback_data'=>'text']
                ],
                [
                    ['text'=>"🔻تاریخ اتمام شارژ 🔻",'callback_data'=>'text']
                ],
                [
                   ['text'=>"🔹 $ndate 🔸",'callback_data'=>'text']
                ],
                [
                    ['text'=>"🔻تاریخ ثبت شارژ 🔻",'callback_data'=>'text']
                ],
                [
                   ['text'=>"🔹 $rdate 🔸",'callback_data'=>'text']
                ],
				                [
                    ['text'=>"🔻میزان شارژ گروه🔻",'callback_data'=>'text']
                ],
                [
                   ['text'=>"📶 $endtime روز دیگر",'callback_data'=>'text']
                ],
									 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'back']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit'],['text'=>"📦 خرید شارژ",'callback_data'=>'requstcharge']
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
// panel for sharge
if (strpos($textmassage , "/sendcharge ") !== false && in_array($from_id,$Dev) or strpos($textmassage , "ارسال شارژ ") !== false && in_array($from_id,$Dev)) {
    $panels = str_replace(['/sendcharge ','ارسال شارژ '],'',$textmassage);
	$modified = ltrim($panels);
    $jam = "$modified";
    date_default_timezone_set('Asia/Tehran');
    $date1 = date('Y-m-d', time());
    $date2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
    $next_date = date('Y-m-d', strtotime($date2 ." +30 day"));
			       jijibot('sendmessage',[
            'chat_id'=>$panels,
            'text'=>"گروه با موفقیت 30 روز شارژ شد✅"
   ]);
        jijibot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"گروه مورد نظر با موفقیت 30 روز شارژ شد✅
➖➖➖➖➖➖
🔖ایدی گروه : [$panels]

🔸تاریخ امروز : [$date1]

🔹تاریخ انقضای شارژ گروه : [$next_date]
➖➖➖
✨توسط : [ @$username ]",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
@$getsettings = file_get_contents("data/$jam.json");
@$settings = json_decode($getsettings,true);
$settings["information"]["expire"]="$next_date";
$settings = json_encode($settings,true);
file_put_contents("data/$jam.json",$settings);
}
// panel charge in pv
if ($textmassage == "/request" or $textmassage == "درخواست شارژ"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
$ndate = $settings["information"]["expire"];
$charge = $settings["information"]["charge"];
$rdate = $settings["information"]["dataadded"];
	jijibot('sendmessage',[
  'chat_id'=>$chat_id,
  'reply_to_message_id'=>$message_id,
        'text'=>"درخواست شما برای شارژ گروه ارسال شد لطفا با پشتیبانی در ارتباط باشید✅",
  ]);
 jijibot('sendmessage',[
  'chat_id'=>$Dev[0],
        'text'=>"گروه 🔻 $namegroup 🔻تقاظایی شارژ 🔝گروه کرده اند😃✔️
➖➖➖
📍 ثبت ربات در تاریخ : [$rdate]
📍 تاریخ شارژ آخر گروه : [$charge]
📍 مقدار شارژ فعلی : [$ndate]
💥مشخصات فرد ارسال کننده :
➖➖➖➖➖➖➖
📍 ایدی : [ $from_id ]
📍 نام : [ $first_name ]
📍 یوزرنیم : [ @$username ]
➖➖➖➖➖
🎉مشخصات گروه :

📍 ایدی گروه : [ $chat_id ]
📍 لینک گروه : [ $getlinkde  ]",
        ]);
}
}
// lock character
		    elseif($data=="character"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockcharacter = $settings2["lock"]["lockcharacter"];
$pluscharacter = $settings2["information"]["pluscharacter"];
$downcharacter = $settings2["information"]["downcharacter"];
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"🖍 به بخش تنظیم تعداد کارکتر یا حروف پیام خوش امدید
			   
📍 شما در این قسمت میتوانید حداکثر یا حداقل تعداد حروف پیام را تایین کنید
➖➖➖➖➖➖➖➖
🚩 از دکمه های زیر استفاده کنید",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 وضعیت قفل",'callback_data'=>'text'],['text'=>"$lockcharacter",'callback_data'=>'lockcharacter']
					 ],
					            [
                     ['text'=>"✒️ حداکثر کاراکتر",'callback_data'=>'text'],['text'=>"$pluscharacter",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ ده عدد",'callback_data'=>'uppluscharacter'],['text'=>"➖ ده عدد",'callback_data'=>'dempluscharacter']
					 ],
					 		            [
                     ['text'=>"حداقل کاراکتر",'callback_data'=>'text'],['text'=>"$downcharacter",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ ده عدد",'callback_data'=>'updowncharacter'],['text'=>"➖ ده عدد",'callback_data'=>'demdowncharacter']
					 ],
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'back']
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
						    elseif($data=="lockcharacter" &&  $settings2["lock"]["lockcharacter"] == "| غیر فعال | ❌"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockcharacter = $settings2["lock"]["lockcharacter"];
$pluscharacter = $settings2["information"]["pluscharacter"];
$downcharacter = $settings2["information"]["downcharacter"];
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"🖍 به بخش تنظیم تعداد کارکتر یا حروف پیام خوش امدید
➖➖➖➖➖➖➖➖
📍 قفل کاراکتر پیام فعال شد",
'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 وضعیت قفل",'callback_data'=>'text'],['text'=>"| فعال | ✅",'callback_data'=>'lockcharacter']
					 ],
					            [
                     ['text'=>"✒️ حداکثر کاراکتر",'callback_data'=>'text'],['text'=>"$pluscharacter",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ ده عدد",'callback_data'=>'uppluscharacter'],['text'=>"➖ ده عدد",'callback_data'=>'dempluscharacter']
					 ],
					 		            [
                     ['text'=>"حداقل کاراکتر",'callback_data'=>'text'],['text'=>"$downcharacter",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ ده عدد",'callback_data'=>'updowncharacter'],['text'=>"➖ ده عدد",'callback_data'=>'demdowncharacter']
					 ],
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'back']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
$settings2["lock"]["lockcharacter"]="| فعال | ✅";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
				}
		    elseif($data=="lockcharacter" &&  $settings2["lock"]["lockcharacter"] == "| فعال | ✅"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockcharacter = $settings2["lock"]["lockcharacter"];
$pluscharacter = $settings2["information"]["pluscharacter"];
$downcharacter = $settings2["information"]["downcharacter"];
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"🖍 به بخش تنظیم تعداد کارکتر یا حروف پیام خوش امدید
➖➖➖➖➖➖➖➖
📍 قفل کاراکتر پیام غیر فعال شد",
'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 وضعیت قفل",'callback_data'=>'text'],['text'=>"| غیر فعال | ❌",'callback_data'=>'lockcharacter']
					 ],
					            [
                     ['text'=>"✒️ حداکثر کاراکتر",'callback_data'=>'text'],['text'=>"$pluscharacter",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ ده عدد",'callback_data'=>'uppluscharacter'],['text'=>"➖ ده عدد",'callback_data'=>'dempluscharacter']
					 ],
					 		            [
                     ['text'=>"حداقل کاراکتر",'callback_data'=>'text'],['text'=>"$downcharacter",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ ده عدد",'callback_data'=>'updowncharacter'],['text'=>"➖ ده عدد",'callback_data'=>'demdowncharacter']
					 ],
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'back']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
$settings2["lock"]["lockcharacter"]="| غیر فعال | ❌";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
				}
		    elseif($data=="uppluscharacter"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockcharacter = $settings2["lock"]["lockcharacter"];
$pluscharacter = $settings2["information"]["pluscharacter"];
$pluscharacterplus = $pluscharacter + 10 ;
$downcharacter = $settings2["information"]["downcharacter"];
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"🖍 به بخش تنظیم تعداد کارکتر یا حروف پیام خوش امدید
➖➖➖➖➖➖➖➖
🚩 حداکثر تعداد کاراکتر 10 عدد افزایش یافت",
'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 وضعیت قفل",'callback_data'=>'text'],['text'=>"$lockcharacter",'callback_data'=>'lockcharacter']
					 ],
					            [
                     ['text'=>"✒️ حداکثر کاراکتر",'callback_data'=>'text'],['text'=>"$pluscharacterplus",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ ده عدد",'callback_data'=>'uppluscharacter'],['text'=>"➖ ده عدد",'callback_data'=>'dempluscharacter']
					 ],
					 		            [
                     ['text'=>"حداقل کاراکتر",'callback_data'=>'text'],['text'=>"$downcharacter",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ ده عدد",'callback_data'=>'updowncharacter'],['text'=>"➖ ده عدد",'callback_data'=>'demdowncharacter']
					 ],
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'back']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
$settings2["information"]["pluscharacter"]="$pluscharacterplus";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
				}
			    elseif($data=="dempluscharacter"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockcharacter = $settings2["lock"]["lockcharacter"];
$pluscharacter = $settings2["information"]["pluscharacter"];
$pluscharacterplus = $pluscharacter - 10 ;
if($pluscharacterplus >= 0){
$downcharacter = $settings2["information"]["downcharacter"];
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"🖍 به بخش تنظیم تعداد کارکتر یا حروف پیام خوش امدید
➖➖➖➖➖➖➖➖
🚩 حداکثر تعداد کاراکتر 10 عدد کاهش یافت",
'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 وضعیت قفل",'callback_data'=>'text'],['text'=>"$lockcharacter",'callback_data'=>'lockcharacter']
					 ],
					            [
                     ['text'=>"✒️ حداکثر کاراکتر",'callback_data'=>'text'],['text'=>"$pluscharacterplus",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ ده عدد",'callback_data'=>'uppluscharacter'],['text'=>"➖ ده عدد",'callback_data'=>'dempluscharacter']
					 ],
					 		            [
                     ['text'=>"حداقل کاراکتر",'callback_data'=>'text'],['text'=>"$downcharacter",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ ده عدد",'callback_data'=>'updowncharacter'],['text'=>"➖ ده عدد",'callback_data'=>'demdowncharacter']
					 ],
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'back']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
$settings2["information"]["pluscharacter"]="$pluscharacterplus";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }
		   else
		   {
			  			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"امکان تغییر به پایین تر از عدد 0 وجود ندارد ⚠️",
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
						 elseif($data=="demdowncharacter"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockcharacter = $settings2["lock"]["lockcharacter"];
$pluscharacter = $settings2["information"]["pluscharacter"];
$downcharacter = $settings2["information"]["downcharacter"];
$downcharacterplus = $downcharacter - 10 ;
if($downcharacterplus >= 0){
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"🖍 به بخش تنظیم تعداد کارکتر یا حروف پیام خوش امدید
➖➖➖➖➖➖➖➖
🚩 حداقل تعداد کاراکتر 10 عدد کاهش یافت",
'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 وضعیت قفل",'callback_data'=>'text'],['text'=>"$lockcharacter",'callback_data'=>'lockcharacter']
					 ],
					            [
                     ['text'=>"✒️ حداکثر کاراکتر",'callback_data'=>'text'],['text'=>"$pluscharacter",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ ده عدد",'callback_data'=>'uppluscharacter'],['text'=>"➖ ده عدد",'callback_data'=>'dempluscharacter']
					 ],
					 		            [
                     ['text'=>"حداقل کاراکتر",'callback_data'=>'text'],['text'=>"$downcharacterplus",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ ده عدد",'callback_data'=>'updowncharacter'],['text'=>"➖ ده عدد",'callback_data'=>'demdowncharacter']
					 ],
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'back']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
$settings2["information"]["downcharacter"]="$downcharacterplus";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }
		   else
		   {
			  			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"امکان تغییر به پایین تر از عدد 0 وجود ندارد ⚠️",
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
							elseif($data=="updowncharacter"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockcharacter = $settings2["lock"]["lockcharacter"];
$pluscharacter = $settings2["information"]["pluscharacter"];
$downcharacter = $settings2["information"]["downcharacter"];
$downcharacterplus = $downcharacter + 10 ;
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"🖍 به بخش تنظیم تعداد کارکتر یا حروف پیام خوش امدید
➖➖➖➖➖➖➖➖
🚩 حداقل تعداد کاراکتر 10 عدد افزایش یافت",
'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🔐 وضعیت قفل",'callback_data'=>'text'],['text'=>"$lockcharacter",'callback_data'=>'lockcharacter']
					 ],
					            [
                     ['text'=>"✒️ حداکثر کاراکتر",'callback_data'=>'text'],['text'=>"$pluscharacter",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ ده عدد",'callback_data'=>'uppluscharacter'],['text'=>"➖ ده عدد",'callback_data'=>'dempluscharacter']
					 ],
					 		            [
                     ['text'=>"حداقل کاراکتر",'callback_data'=>'text'],['text'=>"$downcharacterplus",'callback_data'=>'text']
					 ],
					               [
                     ['text'=>"➕ ده عدد",'callback_data'=>'updowncharacter'],['text'=>"➖ ده عدد",'callback_data'=>'demdowncharacter']
					 ],
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'back']
					 ],
					      [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
                     ]
               ])
           ]);
$settings2["information"]["downcharacter"]="$downcharacterplus";
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