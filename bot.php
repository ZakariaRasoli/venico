<?php
/*
in the name of God
source of anti spam bot
by php
v.13
dev : mohammadrezajafari [@mohammadrezajiji]
*/
// include
include "base.php";
include "sharge.php";
include "tools.php";
include "help.php";
include "settings.php";
include "lock.php";
include "fun.php";
include "funplus.php";
include "add.php";
include "pv.php";
include "plus.php";
include "panelplus.php";
include "toolsplus.php";
include "lockchannel.php";
include "lockplus.php";
include "filter.php";
include "panel.php";
include "msgcheck.php";
include "plusmsgcheck.php";
include "upmsgcheck.php";
include "plusupmsgcheck.php";
include "weather.php";
//-----------------------------------------------------------------------------------------
// save id
if ($tc == 'private'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($from_id, $user["userlist"])) {
$user["userlist"][]="$from_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
    }
}
elseif ($tc == 'group' | $tc == 'supergroup'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($chat_id, $user["grouplist"])) {
$user["grouplist"][]="$chat_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
    }
}
 // settings inline
 elseif($data=="media"){
if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$lockdocument = $settings2["lock"]["document"];
$lockgif = $settings2["lock"]["gif"];
$lockvideo_note = $settings2["lock"]["video_msg"];
$locklocation = $settings2["lock"]["location"];
$lockphoto = $settings2["lock"]["photo"];
$lockcontact = $settings2["lock"]["contact"];
$lockaudio = $settings2["lock"]["audio"];
$lockvoice = $settings2["lock"]["voice"];
$locksticker = $settings2["lock"]["sticker"];
$lockgame = $settings2["lock"]["game"];
$lockvideo = $settings2["lock"]["video"];
$locktext = $settings2["lock"]["text"];
         jijibot('editmessagetext',[
             'chat_id'=>$chatid,
  'message_id'=>$messageid,
  'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
| فعال | ✅ = حذف پیام
| غیر فعال | ❌ = حذف نشدن پیام",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
 [
['text'=>"📂 فایل",'callback_data'=>'text'],['text'=>"$lockdocument",'callback_data'=>'lockdocument']
],
[
['text'=>"🎆 گیف",'callback_data'=>'text'],['text'=>"$lockgif",'callback_data'=>'lockgif']
],
[
['text'=>"👁‍🗨 پیام ویدیویی",'callback_data'=>'text'],['text'=>"$lockvideo_note",'callback_data'=>'lockself']
],
  [
 ['text'=>"🏠 ارسال مکان",'callback_data'=>'text'],['text'=>"$locklocation",'callback_data'=>'locklocation']
 ],
   [
 ['text'=>"🏖 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'text'],['text'=>"$lockcontact",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🎹 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🎧 صدا",'callback_data'=>'text'],['text'=>"$lockvoice",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🌈 استیکر",'callback_data'=>'text'],['text'=>"$locksticker",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"🎮 بازی",'callback_data'=>'text'],['text'=>"$lockgame",'callback_data'=>'lockgame']
 ],
 [
['text'=>"📽 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo",'callback_data'=>'lockvideo']
],
 [
['text'=>"📄 متن",'callback_data'=>'text'],['text'=>"$locktext",'callback_data'=>'locktext']
],
[
['text'=>"🔃 رفتن به تنظیمات مدیریت",'callback_data'=>'other']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"]
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
	 elseif($data=="other" ){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$locklink = $settings2["lock"]["link"];
$lockusername = $settings2["lock"]["username"];
$locktag = $settings2["lock"]["tag"];
$lockedit = $settings2["lock"]["edit"];
$lockfosh = $settings2["lock"]["fosh"];
$lockbots = $settings2["lock"]["bot"];
$lockforward = $settings2["lock"]["forward"];
$locktg = $settings2["lock"]["tgservic"];
$lockreply = $settings2["lock"]["reply"];
$lockcmd = $settings2["lock"]["cmd"];
         jijibot('editmessagetext',[
             'chat_id'=>$chatid,
  'message_id'=>$messageid,
  'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
| فعال | ✅ = حذف پیام
| غیر فعال | ❌ = حذف نشدن پیام",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
 [
 ['text'=>"🔗 لينک",'callback_data'=>'text'],['text'=>"$locklink",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"🔹 هشتگ [#]",'callback_data'=>'text'],['text'=>"$locktag",'callback_data'=>'locktag']
 ],
   [
 ['text'=>"🔸 یوزرنیم [@]",'callback_data'=>'text'],['text'=>"$lockusername",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"✏️ فحش",'callback_data'=>'text'],['text'=>"$lockfosh",'callback_data'=>'lockfosh']
 ],
 [
['text'=>"🤖 ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots",'callback_data'=>'lockbot']
],
  [
 ['text'=>"📨 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward",'callback_data'=>'lockforward']
 ],
[
['text'=>"🚦 خدمات تلگرام",'callback_data'=>'text'],['text'=>"$locktg",'callback_data'=>'locktgservic']
],
[
['text'=>"↪️ ریپلای",'callback_data'=>'text'],['text'=>"$lockreply",'callback_data'=>'lockreply']
],
[
['text'=>"📍 دستورات عمومی",'callback_data'=>'text'],['text'=>"$lockcmd",'callback_data'=>'lockcmd']
],
[
['text'=>"🔃 رفتن به تنظیمات رسانه",'callback_data'=>'media']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"]
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
elseif($data=="settings" ){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$mute_all = $settings2["lock"]["mute_all"];
         jijibot('editmessagetext',[
             'chat_id'=>$chatid,
  'message_id'=>$messageid,
  'text'=>"🔖تنظیمات گروه :
➖➖➖➖➖➖➖
🔸ایدی گروه : [$chatid]
🔹نام گروه : [$gpname]
➖➖➖➖➖
🔖لطفا بخش مورد نظر خود را انتخاب کنید",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
 [
 ['text'=>"🔗 تنظیمات رسانه",'callback_data'=>'media'],['text'=>"⚒ تنظیمات مدیریت",'callback_data'=>'other']
 ],
  [
 ['text'=>"📌 قفل همه",'callback_data'=>'text'],['text'=>"$mute_all",'callback_data'=>'lockall']
 ],
[
['text'=>"🔙 برگشت",'callback_data'=>'back'],['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"]
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
  elseif($data=="back"){
			 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
          jijibot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
   'text'=>"به پنل مدیریت گروه خوش امدید❤️
➖➖➖➖➖➖➖
🔻از دکمه های زیر استفاده کنید",
  
    'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'inline_keyboard'=>[
   [
   ['text'=>"⚙ تنظیمات",'callback_data'=>'settings']
   ],
    [
   ['text'=>"🚦 اطلاعات گروه",'callback_data'=>'groupe'],['text'=>"🔖 راهنما",'callback_data'=>'helppanel']
   ],
   [
   ['text'=>"🗓 شارژ گروه",'callback_data'=>'charge'],['text'=>"📝 قفل کاراکتر",'callback_data'=>'character']
   ],
   [
['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"▶️ صحفه بعد",'callback_data'=>'panel2']
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
if($textmassage=="/panel" or $textmassage=="panel" or $textmassage=="پنل" or $textmassage=="/panel@$usernamebot"){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	jijibot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"به پنل مدیریت گروه خوش امدید❤️
➖➖➖➖➖➖➖
🔻از دکمه های زیر استفاده کنید",
    'reply_to_message_id'=>$message_id,
  	'reply_markup'=>json_encode([
  	'resize_keyboard'=>true,
  	'inline_keyboard'=>[
   [
   ['text'=>"⚙ تنظیمات",'callback_data'=>'settings']
   ],
    [
   ['text'=>"🚦 اطلاعات گروه",'callback_data'=>'groupe'],['text'=>"🔖 راهنما",'callback_data'=>'helppanel']
   ],
   [
   ['text'=>"🗓 شارژ گروه",'callback_data'=>'charge'],['text'=>"📝 قفل کاراکتر",'callback_data'=>'character']
   ],
   [
['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"▶️ صحفه بعد",'callback_data'=>'panel2']
  ],
     [
   ['text'=>"✖️ خروج",'callback_data'=>'exit']
   ],
  	]
  	])
  	]);
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
	elseif($data=="exit" ){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            jijibot('deletemessage',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
           ]);
		   }else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
	}
elseif($data=="groupe"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$url = file_get_contents("https://api.telegram.org/bot$token/getChatMembersCount?chat_id=$chatid");
$getchat = json_decode($url, true);
$howmember = $getchat["result"];
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"به بخش اطلاعت گروه خوش امدید🎯
➖➖➖➖
🔸نام گروه : [$gpname]

🔹ایدی گروه : [$chatid]

💭تعداد پیام ها : [$messageid]

🎉تعداد کل عضو های گروه : [$howmember]",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
				   ['text'=>"🔗 لینک گروه",'callback_data'=>"link"],['text'=>"🚩 قوانین گروه",'callback_data'=>'rules']
				   ],
				   [
				   ['text'=>"🏵 لیست ساکت گروه",'callback_data'=>'silentlist'],['text'=>"🛑 لیست کلمات فیلتر",'callback_data'=>'filterword']
				   ],
				   [
				   ['text'=>"📍 درخواست پشتیبانی",'callback_data'=>'support'],['text'=>"📦 خرید شارژ",'callback_data'=>'requstcharge']
				   ],
				   			   [
				   ['text'=>"👮🏻 لیست ادمین ها",'callback_data'=>'adminlist']
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
	elseif($data=="adminlist"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chatid),true);
  $result = $up['result'];
$msg = "";
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg."\n"."📍"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"📍 سازنده گروه : $owner | @$owner2
➖➖➖
👮🏻 لیست ادمین های گروه :
$msg",
'parse_mode'=>"MarkDown",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'groupe']
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
	elseif($data=="support"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"💡قبل از ارسال درخواست ورود پشتیبانی به گروه به نکات زیر توجه داشته باشید
➖➖➖➖➖
1⃣ قبل از ارسال درخواست حتما ربات را ادمین گروه کنید سپس به ارسال درخواست بپردازید

2⃣ از ارسال درخواست بی مورد خودداری کنید و اول راهنمای ربات را به صورت کامل مطالعه کنید

3⃣ پس از ارسال درخواست پشتیبانی از ارسال دوباره درخواست خودداری کنید و منتظر باشید تا پشتیبانی وارد گروه شما شود و به درخواست شما رسیدگی کند
➖➖➖
🔻برای ورود پشتیبان به گروه در صورت وجود مشکل در ربات یا ایراد برای گروه شما ارسال درخواست را لمس کنید🔻",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
				   ['text'=>"👥 درخواست پشتیبانی 👥",'callback_data'=>'yessup']
				   ],
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'groupe']
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
	elseif($data=="requstcharge"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"به بخش خرید شارژ گروه خوش امدید ❤️
➖➖➖➖➖
💭نرخ خرید ربات به شکل زیر است

💵یک ماه : 5000 تومان
💴دو ماه : 10000 تومان
💶نامحدود : 15000 تومان
➖➖➖
➕سرور پر قدرت

➕صد در صد انلاین بدون خاموشی

➕پشتیبانی 24 ساعته

➕امکانات فوق العاده
➖➖ 
⚠️توجه داشته باشید اگر شما پرداخت کردید   گروه شما شارژ نشده کافیست از دکمه درخواست شارژ استفاده کنید تا ادمین های ربات در سریع ترین زمان ممکن به درخواست شما رسیدگی کنند

💥جهت دیدن امکانات ربات کافیست به بخش راهنما مراجعه کنید
➖➖➖
کانال ما : 
🆔 : @$channel
",
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	[
	['text'=>"1⃣ یک ماه",'url'=>"https://gpgrambot.tk/gpgrambot/pay/pay.php?amount=5000&callback=https://gpgrambot.tk/gpgrambot/pay/by-5000.php?id=$fromid"],['text'=>"2⃣  دو ماه",'url'=>"https://gpgrambot.tk/gpgrambot/pay/pay.php?amount=10000&callback=https://gpgrambot.tk/gpgrambot/pay/by-10000.php?id=$fromid"]
	],
	[
	['text'=>"3⃣  نامحدود",'url'=>"https://gpgrambot.tk/gpgrambot/pay/pay.php?amount=15000&callback=https://gpgrambot.tk/gpgrambot/pay/by-15000.php?id=$fromid"],['text'=>"🎯 درخواست شارژ",'callback_data'=>'requstcheck']
	],
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'groupe']
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
	elseif($data=="yessup"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chatid");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
            jijibot('sendmessage', [
                'chat_id' =>$Dev[0],
                'text' => "🔖گروه با نام : [$gpname]
درخواست پشتیبانی کرده است ✅
➖➖➖➖➖➖➖
💥مشخصات فرد ارسال کننده :

📍 ایدی : [ $fromid ]
📍 نام : [ $firstname ]
📍 یوزرنیم : [ @$usernames ]
➖➖➖➖➖
🎉مشخصات گروه :

📍 ایدی گروه : [ $chatid ]
📍 لینک گروه : [ $getlinkde  ]",
            ]);
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"درخواست شما برای پشتیبانی ارسال شد✅
➖➖➖➖➖➖➖
🔖لطفا منتظر بمانید تا پشتیبان وارد گروه شود",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'groupe']
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
		elseif($data=="requstcheck"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chatid");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
$ndate = $settings2["information"]["expire"];
$charge = $settings2["information"]["charge"];
$rdate = $settings2["information"]["dataadded"];
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"درخواست شما برای پشتیبانی ارسال شد✅
➖➖➖➖➖➖➖
🔖به زودی پشتیبان درخواست شمارا برسی میکند",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'groupe']
					 ],
                     ]
               ])
           ]);
 jijibot('sendmessage',[
  'chat_id'=>$Dev[0],
        'text'=>"گروه 🔻 $gpname 🔻تقاظایی شارژ 🔝گروه کرده اند😃✔️
➖➖➖
📍 ثبت ربات در تاریخ : [$rdate]
📍 تاریخ شارژ آخر گروه : [$charge]
📍 مقدار شارژ فعلی : [$ndate]
➖➖➖➖➖➖➖
💥مشخصات فرد ارسال کننده :
📍 ایدی : [ $fromid ]
📍 نام : [ $firstname ]
📍 یوزرنیم : [ @$usernames ]
➖➖➖➖➖
🎉مشخصات گروه :

📍 ایدی گروه : [ $chatid ]
📍 لینک گروه : [ $getlinkde  ]",
        ]);		   
		   }else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
	}
	elseif($data=="filterword"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$filter = $settings2["filterlist"];
for($z = 0;$z <= count($filter)-1;$z++){
$result = $result.$filter[$z]."\n";
}
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"🔖لیست کلمات فیلتر گروه :
➖➖➖➖➖➖➖➖
$result",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
				   ['text'=>"🗑 پاک کردن لیست فیلتر",'callback_data'=>'cleanfilterlist']
				   ],
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'groupe']
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
		elseif($data=="cleanfilterlist"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"لیست کلمات فیلتر گروه با موفقیت پاکسازی شد ✔️",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'groupe']
					 ],
                     ]
               ])
           ]);
unset($settings2["filterlist"]);
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
	}
	elseif($data=="link"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
		$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chatid");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"💭 لینک گروه شما :
🔸 $getlinkde ",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'groupe']
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
		elseif($data=="rules"){
$text = $settings2["information"]["rules"];
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"💭 قوانین گروه شما :
$text",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   		   				   [
				   ['text'=>"🌟 تنظیم قوانین",'callback_data'=>'setrules']
				   ],
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'groupe']
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
				elseif($data=="setrules"){
$text = $settings2["information"]["rules"];
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"💭 قوانین گروه خود را ارسال کنید",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'groupe']
					 ],
                     ]
               ])
           ]);
$settings2["information"]["step"]="setrules";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
		}
		elseif($data=="silentlist" ){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$silent = $settings2["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result."[$silent[$z]](tg://user?id=$silent[$z])"."\n";
}
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"💭 لیست افراد ساکت گروه :
➖➖➖➖➖➖➖➖
$result ",
'parse_mode'=>"MarkDown",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   				   [
				   ['text'=>"🗑 پاک کردن لیست سکوت",'callback_data'=>'cleansilentlist']
				   ],
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'groupe']
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
				elseif($data=="cleansilentlist"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$silent = $settings2["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
 jijibot('restrictChatMember',[
   'user_id'=>$silent[$z],   
   'chat_id'=>$chatid,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
}
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"لیست افراد سکوت گروه با موفقیت پاکسازی شد ✔️",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'groupe']
					 ],
                     ]
               ])
           ]);
unset($settings2["silentlist"]);
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