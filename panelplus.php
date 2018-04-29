 <?php
 /*
in the name of God 
source of anti spam bot
by php 
v.13
dev : mohammadrezajafari [@mohammadrezajiji]
*/
if($data=="panel2"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"به پنل مدیریت گروه خوش امدید❤️[بخش دوم]
➖➖➖➖➖➖➖
🔻از دکمه های زیر استفاده کنید",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🎮 سرگرمی",'callback_data'=>'game'],['text'=>"🛃 قفل خودکار",'callback_data'=>'lockauto']
					 ],
					 [
					 ['text'=>"💭 خوش امد گویی",'callback_data'=>'welcome'],['text'=>"🔃 ریستارت تنظیمات",'callback_data'=>'restart']
					 ],
					 [
					 ['text'=>"📊 ادد اجباری",'callback_data'=>'addbzn'],['text'=>"⚠️حساسیت اخطار",'callback_data'=>'warn']
					 ],
					 					 [
					 ['text'=>"📣 قفل کانال",'callback_data'=>'lockchannel'],['text'=>"♨️ حالت سختگیرانه",'callback_data'=>'hardmode']
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
									    elseif($data=="restart"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"📍درصورتی که میخواهید تنظیمات گروه به حالت اولیه بازگردد
➖➖➖➖➖➖➖
 تایید را انتخاب کنید✔️",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[

					 [
					 ['text'=>"تایید ✅",'callback_data'=>'yes']
					 ],
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'panel2']
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
													    elseif($data=="yes"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"📍تنظیمات گروه با موفقیت ریستارت شد✅
➖➖➖➖➖
🔖اطلاعات فرد :

🚀نام شما : [$firstname]
🚦ایدی شما : [$fromid]
💫یوزرنیم  شما : [@$usernames]
",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'panel2']
					 ],
                     ]
               ])
           ]);
$ndate = $settings2["information"]["expire"];
$dateadd = $settings2["information"]["dataadded"];
       $settings2 = '{"lock": {
                "text": "| غیر فعال | ❌",
                "photo": "| غیر فعال | ❌",
                "link": "| غیر فعال | ❌",
                "tag": "| غیر فعال | ❌",
				"username": "| غیر فعال | ❌",
                "sticker": "| غیر فعال | ❌",
                "video": "| غیر فعال | ❌",
                "voice": "| غیر فعال | ❌",
                "audio": "| غیر فعال | ❌",
                "gif": "| غیر فعال | ❌",
                "bot": "| غیر فعال | ❌",
                "forward": "| غیر فعال | ❌",
                "document": "| غیر فعال | ❌",
                "tgservic": "| غیر فعال | ❌",
				"edit": "| غیر فعال | ❌",
				"reply": "| غیر فعال | ❌",
				"contact": "| غیر فعال | ❌",
				"location": "| غیر فعال | ❌",
				"game": "| غیر فعال | ❌",
				"cmd": "| غیر فعال | ❌",
				"mute_all": "| غیر فعال | ❌",
				"mute_all_time": "| غیر فعال | ❌",
				"fosh": "| غیر فعال | ❌",
				"lockauto": "| غیر فعال | ❌",
				"lockcharacter": "| غیر فعال | ❌",
				"video_msg": "| غیر فعال | ❌"
			},
			"information": {
            "added": "true",
			"welcome": "| غیر فعال | ❌",
			"add": "| غیر فعال | ❌",
			"lockchannel": "| غیر فعال | ❌",
			"hardmodebot": "| غیر فعال | ❌",
			"hardmodewarn": "سکوت کاربر ♨️",
			"charge": "7 روز",
			"setadd": "3",
			"dataadded": "",
			"expire": "",
			"textwelcome": "خوش امدید",
			"rules": "ثبت نشده",
			"msg": "",
			"timelock": "00:00",
			"timeunlock": "00:00",
			"pluscharacter": "300",
			"downcharacter": "0",
			"setwarn": "3"
			}
}';
        $settings2 = json_decode($settings2,true);
		$settings2["information"]["expire"]="$ndate";
		$settings2["information"]["dataadded"]="$dateadd";
		$settings2["information"]["msg_id"]="$messageid";
        $settings2 = json_encode($settings2,true);
        file_put_contents("data/$chatid.json",$settings2);
		   }else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
				}
							    elseif($data=="game"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"✨به بخش سرگرمی خوش امدید
➖➖➖➖➖➖➖➖
🚩 از دکمه های زیر استفاده کنید",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🕜 ساعت و تاریخ",'callback_data'=>'td'],['text'=>"😂 جک",'callback_data'=>'jock']
					 ],
					 [
					 ['text'=>"📢 ایا میدانستید؟",'callback_data'=>'aya']
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
			    elseif($data=="welcome"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$welcome = $settings2["information"]["welcome"];
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"✨به بخش خوش امد گویی خوش امدید
➖➖➖➖➖➖➖➖
🚩 از دکمه های زیر استفاده کنید",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🎗خوش امدگویی",'callback_data'=>'text'],['text'=>"$welcome",'callback_data'=>'pwelcome']
					 ],
					 [
					 ['text'=>"📜 متن خوش امد",'callback_data'=>'textwelcome']
					 ],
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'panel2']
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
				    elseif($data=="textwelcome"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$textwelcome = $settings2["information"]["textwelcome"];
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"📍 متن خوش امد گویی گروه :
$textwelcome",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   		 [
['text'=>"🔆 تنظیم متن خوش امد",'callback_data'=>'setwelcome']
					 ],
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'welcome']
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
									    elseif($data=="setwelcome"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$textwelcome = $settings2["information"]["textwelcome"];
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"📍 متن خوش امد گروه رو وارد کنید :
			   
🔹میتوانید در متن خوش امد و قوانین برای گرفتن مشخصات از پارامتر های زیر استفاده کنید
gpname = دریافت نام گروه
username = دریافت یوزرنیم فرد
time = دریافت ساعت وتاریخ",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'welcome']
					 ],
                     ]
               ])
           ]);
$settings2["information"]["step"]="setwelcome";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
					}
					    elseif($data=="pwelcome" && $settings2["information"]["welcome"] =="| فعال | ✅" ){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"
➖➖➖➖➖➖➖➖
🚩 از دکمه های زیر استفاده کنید
➖➖➖
خوش امد گویی خاموش شد ❌",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				     [
                     ['text'=>"🎗خوش امدگویی",'callback_data'=>'text'],['text'=>"| غیر فعال | ❌",'callback_data'=>'pwelcome']
					 ],
			    	 [
					 ['text'=>"📜 متن خوش امد",'callback_data'=>'textwelcome']
					 ],
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'panel2']
					 ],
                     ]
               ])
           ]);
$settings2["information"]["welcome"]="| غیر فعال | ❌";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }
		  else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
						}
						    elseif($data=="pwelcome" && $settings2["information"]["welcome"] == "| غیر فعال | ❌"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"
➖➖➖➖➖➖➖➖
🚩 از دکمه های زیر استفاده کنید
➖➖➖
خوش امد گویی روشن شد ✅",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				     [
                     ['text'=>"🎗خوش امدگویی",'callback_data'=>'text'],['text'=>"| فعال | ✅",'callback_data'=>'pwelcome']
					 ],
					 [
					 ['text'=>"📜 متن خوش امد",'callback_data'=>'textwelcome']
					 ],
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'panel2']
					 ],
                     ]
               ])
           ]);
$settings2["information"]["welcome"]="| فعال | ✅";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
		   }else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
    }
							}
		    elseif($data=="td"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"به بخش دریافت ساعت و تاریخ خوش امدید😃
➖➖➖➖➖➖➖
🔻از دکمه های زیر استفاده کنید",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"⏰ ساعت",'callback_data'=>'time'],['text'=>"📅 تاریخ",'callback_data'=>'data']
					 ],
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'panel2']
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
						    elseif($data=="jock"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
				$jock = file_get_contents("http://beyondteam.000webhostapp.com/PersianJoke.php");
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
		 
     'message_id'=>$messageid,
               'text'=>"$jock",
		 
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"😆 یه جک دیگه",'callback_data'=>'jock']
					 ],
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'game']
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
						 elseif($data=="aya"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
				$aya = file_get_contents("https://api.bot-dev.org/danestani/");
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
		 
     'message_id'=>$messageid,
               'text'=>"$aya",
		 
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"📢 یکی دیگه!",'callback_data'=>'aya']
					 ],
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'game']
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
			    elseif($data=="time"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$basetime = file_get_contents("http://irapi.ir/time/");
$getchat = json_decode($basetime, true);
$time = $getchat["FAtime"];
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
		 
     'message_id'=>$messageid,
               'text'=>"⏱ ساعت :
➖➖➖➖➖➖➖
$time",
		 
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"⏰ ساعت",'callback_data'=>'time'],['text'=>"📅 تاریخ",'callback_data'=>'data']
					 ],
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'panel2']
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
				    elseif($data=="data"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$basetime = file_get_contents("http://irapi.ir/time/");
$getchat = json_decode($basetime, true);
$date = $getchat["FAdate"];
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"📆 تاریخ :
➖➖➖➖➖➖➖
$date ",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"⏰ ساعت",'callback_data'=>'time'],['text'=>"📅 تاریخ",'callback_data'=>'data']
					 ],
					 [
					 ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"🔙 برگشت",'callback_data'=>'panel2']
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
		  elseif($data=="lockall" && $settings2["lock"]["mute_all"] =="| فعال | ✅"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
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
                 'inline_keyboard'=>[
 [
 ['text'=>"🔗 تنظیمات رسانه",'callback_data'=>'media'],['text'=>"⚒ تنظیمات مدیریت",'callback_data'=>'other']
 ],
 [
 ['text'=>"📌 قفل همه",'callback_data'=>'text'],['text'=>"| غیر فعال | ❌",'callback_data'=>'lockall']
 ],
[
['text'=>"🔙 برگشت",'callback_data'=>'back'],['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"]
],
	]
	])
	]);
$settings2["lock"]["mute_all"]="| غیر فعال | ❌";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
	}else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
	}
		  }
			  elseif($data=="lockall" && $settings2["lock"]["mute_all"] =="| غیر فعال | ❌"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
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
                 'inline_keyboard'=>[
 [
 ['text'=>"🔗 تنظیمات رسانه",'callback_data'=>'media'],['text'=>"⚒ تنظیمات مدیریت",'callback_data'=>'other']
 ],
 [
 ['text'=>"📌 قفل همه",'callback_data'=>'text'],['text'=>"| فعال | ✅",'callback_data'=>'lockall']
 ],
[
['text'=>"🔙 برگشت",'callback_data'=>'back'],['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"]
],
	]
	])
	]);
$settings2["lock"]["mute_all"]="| فعال | ✅";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
	}else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
	}
			  }
			      elseif($data=="warn"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$setwarn = $settings2["information"]["setwarn"];
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"به بخش اخطار خوش امدید❤️
➖➖➖➖➖➖➖➖
🔹در این بخش شما میتوانید حداکثر اخطار برای کاربر را تایین کنید

🔸توجه داشته باشید عدد باید بین 1 تا 20 باشد",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
					 [
					 ['text'=>"⚠️ میزان اخطار",'callback_data'=>'text'],['text'=>"🔸 $setwarn 🔹",'callback_data'=>'text']
					 ],
					 [
					 ['text'=>"➕ افزایش دادن",'callback_data'=>'warn+'],['text'=>"➖ کاهش دادن",'callback_data'=>'warn-']
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
	elseif($data=="warn+"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$setwarn = $settings2["information"]["setwarn"];
    $manfi = $setwarn + 1;
    if ($manfi <= 20 && $manfi >= 1){
          jijibot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به بخش اخطار خوش امدید❤️
➖➖➖➖➖➖➖➖
افزایش یافت✔️",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
					 ['text'=>"⚠️ میزان اخطار",'callback_data'=>'text'],['text'=>"🔸 $manfi 🔹",'callback_data'=>'text']
					 ],
					 [
					 ['text'=>"➕ افزایش دادن",'callback_data'=>'warn+'],['text'=>"➖ کاهش دادن",'callback_data'=>'warn-']
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
$settings2["information"]["setwarn"]="$manfi";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
	}else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
	}
		  }
						}
								  		  		elseif($data=="warn-"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$setwarn = $settings2["information"]["setwarn"];
    $manfi = $setwarn - 1;
    if ($manfi <= 20 && $manfi >= 1){
          jijibot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به بخش اخطار خوش امدید❤️
➖➖➖➖➖➖➖➖
کاهش یافت✔️",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
					 ['text'=>"⚠️ میزان اخطار",'callback_data'=>'text'],['text'=>"🔸 $manfi 🔹",'callback_data'=>'text']
					 ],
					 [
					 ['text'=>"➕ افزایش دادن",'callback_data'=>'warn+'],['text'=>"➖ کاهش دادن",'callback_data'=>'warn-']
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
$settings2["information"]["setwarn"]="$manfi";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
	}else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
	}
		  }
						}
											    elseif($data=="hardmode"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$hardmodebot = $settings2["information"]["hardmodebot"];
$hardmodewarn = $settings2["information"]["hardmodewarn"];
            jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"♨️ به بخش حالت سخت گیرانه خوش امدید
➖➖➖➖➖➖➖➖
🚩 از دکمه های زیر استفاده کنید",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🤖 اضافه کردن ربات",'callback_data'=>'text'],['text'=>"$hardmodebot",'callback_data'=>'hardmodebot']
					 ],
					            [
                     ['text'=>"❗️ حداکثر اخطار",'callback_data'=>'text'],['text'=>"$hardmodewarn",'callback_data'=>'hardmodewarn']
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
						  elseif($data=="hardmodebot" && $settings2["information"]["hardmodebot"] == "🚷 اخراج کاربر"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$hardmodewarn = $settings2["information"]["hardmodewarn"];
                    jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"♨️ به بخش حالت سخت گیرانه خوش امدید
➖➖➖➖➖➖➖➖
🚩 حالت سخت گیرانه اضافه کردن ربات غیرفعال شد",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🤖 اضافه کردن ربات",'callback_data'=>'text'],['text'=>"| غیر فعال | ❌",'callback_data'=>'hardmodebot']
					 ],
					            [
                     ['text'=>"❗️ حداکثر اخطار",'callback_data'=>'text'],['text'=>"$hardmodewarn",'callback_data'=>'hardmodewarn']
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
$settings2["information"]["hardmodebot"]="| غیر فعال | ❌";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
	}else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
	}
		  }
		  						  elseif($data=="hardmodebot" && $settings2["information"]["hardmodebot"] == "| غیر فعال | ❌"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$hardmodewarn = $settings2["information"]["hardmodewarn"];
                    jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"♨️ به بخش حالت سخت گیرانه خوش امدید
➖➖➖➖➖➖➖➖
🚩 حالت سخت گیرانه اضافه کردن ربات فعال شد",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🤖 اضافه کردن ربات",'callback_data'=>'text'],['text'=>"🚷 اخراج کاربر",'callback_data'=>'hardmodebot']
					 ],
					            [
                     ['text'=>"❗️ حداکثر اخطار",'callback_data'=>'text'],['text'=>"$hardmodewarn",'callback_data'=>'hardmodewarn']
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
$settings2["information"]["hardmodebot"]="🚷 اخراج کاربر";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
	}else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
	}
		  }
		  						  elseif($data=="hardmodewarn" && $settings2["information"]["hardmodewarn"] == "🚷 اخراج کاربر"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$hardmodebot = $settings2["information"]["hardmodebot"];
                    jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"♨️ به بخش حالت سخت گیرانه خوش امدید
➖➖➖➖➖➖➖➖
🚩 حالت سخت گیرانه رسیدن به حداکثر اخطار و سکوت کاربر فعال شد",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🤖 اضافه کردن ربات",'callback_data'=>'text'],['text'=>"$hardmodebot",'callback_data'=>'hardmodebot']
					 ],
					            [
                     ['text'=>"❗️ حداکثر اخطار",'callback_data'=>'text'],['text'=>"سکوت کاربر ♨️",'callback_data'=>'hardmodewarn']
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
$settings2["information"]["hardmodewarn"]="سکوت کاربر ♨️";
$settings = json_encode($settings2,true);
file_put_contents("data/$chatid.json",$settings);
	}else{
			jijibot('answerCallbackQuery',[
'callback_query_id'=>$membercall,
'text'=>"شما مدیر ربات نیستید ⚠️",
]);
	}
		  }
		  						  elseif($data=="hardmodewarn" && $settings2["information"]["hardmodewarn"] == "سکوت کاربر ♨️"){
		 if ($statusq == 'creator' or $statusq == 'administrator' or in_array($fromid,$Dev) ){
$hardmodebot = $settings2["information"]["hardmodebot"];
                    jijibot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"♨️ به بخش حالت سخت گیرانه خوش امدید
➖➖➖➖➖➖➖➖
🚩 حالت سخت گیرانه رسیدن به حداکثر اخطار و اخراج کاربر فعال شد",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"🤖 اضافه کردن ربات",'callback_data'=>'text'],['text'=>"$hardmodebot",'callback_data'=>'hardmodebot']
					 ],
					            [
                     ['text'=>"❗️ حداکثر اخطار",'callback_data'=>'text'],['text'=>"🚷 اخراج کاربر",'callback_data'=>'hardmodewarn']
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
$settings2["information"]["hardmodewarn"]="🚷 اخراج کاربر";
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