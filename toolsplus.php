<?php
// setup and setowner
// addfree
if($textmassage == "/addfree" or $textmassage == "addfree" or $textmassage == "نصب رایگان" or $textmassage == "/start@$usernamebot addfree" or $textmassage == "/addfree@$usernamebot") {
if ($status == 'creator'){
$url = file_get_contents("https://api.telegram.org/bot$token/getChatMembersCount?chat_id=$chat_id");
$getchat = json_decode($url, true);
$howmember = $getchat["result"];
$add = $settings["information"]["added"];
$dataadd = $settings["information"]["dataadded"];
if ($add == true) {
jijibot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"گروه قبلا در لیست گروه های پشتیبانی ربات بوده است ✔️
➖➖➖➖➖➖➖
🚩اطلاعات گروه :

🔅ایدی گروه : [$chat_id]

💭نام گروه : [$namegroup]

📆 تاریخ اضافه شدن گروه : [$dataadd]
",
  'reply_to_message_id'=>$message_id,
		  	  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"$dataadd",'callback_data'=>"text"]
	  ],
   ]
   ])
     ]); 
}
else
{
if($howmember >= 10){
jijibot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"گروه با موفقیت به لیست پشتیبانی ربات اضافه شد✅
➖➖➖➖
🔖اطلاعات گروه شما :

🔸ایدی گروه : [$chat_id]

🔹نام گروه : [$namegroup]

➖➖➖
📍 برای دریافت پنل تنظیمات و راهنما دستور :

/panel

را ارسال کنید ✔️
➖➖
نصب رایگان انجام شد گروه 7 روز شارژ شد ✅
➖➖➖➖➖➖➖➖
🔖توسط : [ @$username ]",
'reply_to_message_id'=>$message_id,
		  	  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	  	  	 [
				 ['text'=>"⚙️ مدیریت گروه",'callback_data'=>"back"],['text'=>"🚦 راهنما",'callback_data'=>"help"]
		 ],
		            [
         ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"]
     ],
	 ],
	   ])
 ]); 
		        jijibot('sendmessage',[
            'chat_id'=>$Dev[0],
            'text'=>"یک گروه به لیست گروه های مدیریتی رایگان من اضافه شد ✅
➖➖➖➖➖
🚩اطلاعات گروه :

🔅ایدی گروه : [$chat_id]

💭نام گروه : [$namegroup]

🔖توسط : [ @$username ] 
", 
        ]); 
$dateadd = date('Y-m-d', time());
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +7 day"));
        $settings = '{"lock": {
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
        $settings = json_decode($settings,true);
		$settings["information"]["expire"]="$next_date";
		$settings["information"]["dataadded"]="$dateadd";
		$settings["information"]["msg_id"]="$message_id";
        $settings = json_encode($settings,true);
        file_put_contents("data/$chat_id.json",$settings);
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");  
fwrite($gpadd, "نام گروه : [$namegroup] | ایدی گروه : [$chat_id]\n");
fclose($gpadd);
}
else
{
if ($add != true) {
jijibot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"📍 تعداد اعضا کافی نمیباشد 
➖➖
📌برای استفاده از ربات گروه شما باید حداقل 10 عضو را داشته باشد

ℹ️ اگر نیاز به تست ربات و دیدن امکانات ربات دارید به گروه پشتیبانی ما مراجعه کنید",
  'reply_to_message_id'=>$message_id,
		  	  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	 	[
['text'=>"📣 گروه پشتیبانی",'url'=>"https://t.me/joinchat/D_YTwT_4s3rTodKw9KdKfw"]
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
}
}
//add
elseif ($textmassage == "/add"  or $textmassage == "add" or $textmassage == "نصب") {
if (in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add != true) {
jijibot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"گروه با موفقیت به لیست پشتیبانی ربات اضافه شد✅
➖➖➖➖
🔖اطلاعات گروه شما :

🔸ایدی گروه : [$chat_id]

🔹نام گروه : [$namegroup]

➖➖➖
📍 برای دریافت پنل تنظیمات و راهنما دستور :

/panel

را ارسال کنید ✔️
➖➖
گروه توسط ادمین اضافه شد و 10 روز شارژ شد ✅
➖➖➖➖➖➖➖➖
🔖توسط : [ @$username ]",
'reply_to_message_id'=>$message_id,
		  	  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	  	  	 [
				 ['text'=>"⚙️ مدیریت گروه",'callback_data'=>"back"],['text'=>"🚦 راهنما",'callback_data'=>"help"]
		 ],
		            [
         ['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"]
     ],
	 ],
	   ])
 ]);  
 		        jijibot('sendmessage',[
            'chat_id'=>$Dev[0],
            'text'=>"یک گروه توسط ادمین اضافه شد ✅
➖➖➖➖➖
🚩اطلاعات گروه :

🔅ایدی گروه : [$chat_id]

💭نام گروه : [$namegroup]

🔖توسط : [ @$username ] 
", 
        ]); 
$dateadd = date('Y-m-d', time());
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +10 day"));
        $settings = '{"lock": {
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
			"msg": "",
			"timelock": "00:00",
			"timeunlock": "00:00",
			"pluscharacter": "300",
			"downcharacter": "0",
			"textwelcome": "خوش امدید",
			"rules": "ثبت نشده",
			"setwarn": "3"
			}
}';
        $settings = json_decode($settings,true);
		$settings["information"]["expire"]="$next_date";
		$settings["information"]["dataadded"]="$dateadd";
		$settings["information"]["msg_id"]="$message_id";
        $settings = json_encode($settings,true);
        file_put_contents("data/$chat_id.json",$settings);
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");  
fwrite($gpadd, "نام گروه : [$namegroup] | ایدی گروه : [$chat_id]\n");
fclose($gpadd);
}
else
{
$dataadd = $settings["information"]["dataadded"];
jijibot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"گروه قبلا در لیست گروه های پشتیبانی ربات بوده است ✔️
➖➖➖➖➖➖➖
🚩اطلاعات گروه :

🔅ایدی گروه : [$chat_id]

💭نام گروه : [$namegroup]

📆 تاریخ اضافه شدن گروه : [$dataadd]
",
  'reply_to_message_id'=>$message_id,
		  	  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
['text'=>"⚡️کانال ما ᴬᶠᴳ🛡",'url'=>"https://telegram.me/$channel"],['text'=>"$dataadd",'callback_data'=>"text"]
	  ],
   ]
   ])
     ]); 
}
}
}
}
//automatic
elseif ($textmassage == "/automatic"  or $textmassage == "automatic" or $textmassage == "اتوماتیک فعال") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true) {
jijibot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"قفل ها برای مدیریت خودکار گروه فعال شدند ✅
			
💥اکنون گروه به صورت خودکار در حال مدیریت است
➖➖➖➖➖➖➖➖
🔖توسط : [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
		$settings["lock"]["link"]="| فعال | ✅";
		$settings["lock"]["username"]="| فعال | ✅";
		$settings["lock"]["bot"]="| فعال | ✅";
		$settings["lock"]["forward"]="| فعال | ✅";
		$settings["lock"]["tgservices"]="| فعال | ✅";
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
}
// setwelcome
if (strpos($textmassage , "/setwelcome ") !== false or strpos($textmassage , "تنظیم خوش امد ") !== false ) {
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
$we = str_replace(['/setwelcome ','تنظیم خوش امد '],'',$textmassage);
$plus = mb_strlen("$we");
if($plus < 600) {
jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"متن خوش امد گویی با موفقیت تغییر کرد✔️
➖➖➖➖➖
📍متن جدید خوش امد [$we]

🔖توسط : [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["textwelcome"]="$we";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
	}
else
{
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 تعداد کلمات وارد شد بیش از حد مجاز است حداکثر میتوانید 600 حرف را وارد کنید",
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
// welcome enbale and disable
elseif ($textmassage == "/welcome enable"  or $textmassage == "welcome enable" or $textmassage == "خوش امد روشن") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
$text = $settings["information"]["textwelcome"];
jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"خوش امد گویی روشن شد ✅
➖➖➖➖➖
ℹ️متن خوش امد [$text]

🔖توسط : [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["welcome"]="| فعال | ✅";
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
elseif ($textmassage == "/welcome disable"  or $textmassage == "welcome disable" or $textmassage == "خوش امد خاموش") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"خوش امد گویی خاموش شد✅

🔖توسط : [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["welcome"]="| غیر فعال | ❌";
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
// report
elseif ($rt && $textmassage=="/report" or $rt && $textmassage=="report" or $rt && $textmassage=="ارسال گزارش" ) {
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
$up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
$result = $up['result'];
        jijibot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"گزارش شما برای سازنده گروه ارسال شد ✅",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
    }
	        jijibot('sendmessage',[
            'chat_id'=>$owner,
            'text'=>"یک گزارش برای شما ارسال شد ✅
➖➖➖➖➖➖
🔻 متن پیام گزارش شده در پیام زیر برای شما فوروارد میشود 🔻
➖➖➖➖➖
🔖اطلاعات کابر ارسال کننده گزارش :

📍 ایدی : [ $from_id ]
📍 نام : [ $first_name ]
📍 یوزرنیم : [ @$username ]
➖➖➖➖
🎉مشخصات گروه :

📍 ایدی گروه : [ $chat_id ]
📍 نام گروه : [ $namegroup ]
📍 لینک گروه : [ $getlinkde  ]
➖➖➖
🔖اطلاعات کابر خاطی :

📍 ایدی : [ $re_id ]
📍 نام : [ $re_name ]
📍 یوزرنیم : [ @$re_user ]
",
        ]);
        jijibot('forwardMessage',[
            'chat_id'=>$owner,
            'from_chat_id'=>$chat_id,
            'message_id'=>$replyid,
        ]);
}
}
}
// support 
elseif ($textmassage=="/support" or $textmassage=="support" or $textmassage=="درخواست پشتیبانی" ) {
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
            jijibot('sendmessage', [
                'chat_id' =>$Dev[0],
                'text' => "🔖گروه با نام : [$namegroup]
درخواست پشتیبانی کرده است ✅
➖➖➖➖➖➖➖
💥مشخصات فرد ارسال کننده :

📍 ایدی : [ $from_id ]
📍 نام : [ $first_name ]
📍 یوزرنیم : [ @$username ]
➖➖➖➖➖
🎉مشخصات گروه :

📍 ایدی گروه : [ $chat_id ]
📍 لینک گروه : [ $getlinkde  ]",
            ]);
            jijibot('sendmessage', [
                'chat_id'=>$chat_id,
                'text'=>"درخواست شما به پشتیبانی ارسال شد✅
➖➖➖➖
🔖به زودی پشتیبانی وارد گروه میشود",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
        }
}
// hardmode
elseif($textmassage=="/modebot on" or $textmassage=="سختگیرانه ربات روشن"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》حالت سخت گیرانه اضافه کردن #ربات در گروه فعال شد🔒\n➖➖➖➖➖➖➖\nℹ️از این پس کاربر اضافه کننده ربات حذف خواهد شد \nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["hardmodebot"]="🚷 اخراج کاربر";
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
elseif($textmassage=="/modebot off" or $textmassage=="سختگیرانه ربات خاموش"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》حالت سخت گیرانه اضافه کردن #ربات در گروه غیر فعال شد🔒\n➖➖➖➖➖➖➖\nℹ️از این پس کاربر اضافه کننده ربات حذف نخواهد شد \nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["hardmodebot"]="| غیر فعال | ❌";
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
elseif($textmassage=="/modewarn on" or $textmassage=="سختگیرانه اخطار روشن"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》حالت سخت گیرانه اخراج #کاربر در گروه فعال شد🔒\n➖➖➖➖➖➖➖\nℹ️از این پس کاربر پس از رسیدن به حداکثر اخطار اخراج  میشود \nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["hardmodewarn"]="🚷 اخراج کاربر";
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
elseif($textmassage=="/modewarn off" or $textmassage=="سختگیرانه اخطار خاموش"){
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
$add = $settings["information"]["added"];
if ($add == true) {
	jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☆》حالت سخت گیرانه اخراج #کاربر در گروه غیر فعال شد🔒\n➖➖➖➖➖➖➖\nℹ️از این پس کاربر پس از رسیدن به حداکثر اخطار سکوت میشود \nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["hardmodewarn"]="سکوت کاربر ♨️";
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
?>
