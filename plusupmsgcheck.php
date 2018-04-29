<?php
/*
in the name of God 
source of anti spam bot
by php 
v.13
dev : mohammadrezajafari [@mohammadrezajiji]
*/
// restart settings 
if($settings["information"]["step"] == "reset"){
if($textmassage == "بله"){
              jijibot('sendmessage', [
                'chat_id' => $chat_id,
             'text'=>"تنظیمات گروه با موفقیت ریستارت شد✅
➖➖➖➖➖➖➖
🔖توسط :
➖➖➖➖
📮 نام : [$first_name]

🔹 یوزرنیم : [ @$username ]

🔸 ایدی : [$from_id]
➖➖ ",
'reply_markup'=>$inlinebutton,
 ]);
$ndate = $settings["information"]["expire"];
$dateadd = $settings["information"]["dataadded"];
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
		$settings["information"]["expire"]="$ndate";
		$settings["information"]["dataadded"]="$dateadd";
		$settings["information"]["msg_id"]="$message_id";
        $settings = json_encode($settings,true);
        file_put_contents("data/$chat_id.json",$settings);
}else{
	jijibot('sendmessage',[
          'chat_id' => $chat_id,
'text'=>"درخواست شما با موفقیت رد شد ✅",
]);
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
 }
}
// buy charge
if(file_exists("data/$from_id.txt") && $tc == "private"){
		date_default_timezone_set('Asia/Tehran');
		$date1 = date('Y-m-d', time());
		$date2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
		$next_date = date('Y-m-d', strtotime($date2 ." +30 day"));
	jijibot('sendmessage',[
        "chat_id"=>$chat_id,
        "text"=>"✅ گروه شما با موفقیت شارژ شد"
		]);
			jijibot('sendmessage',[
        "chat_id"=>$textmassage,
        "text"=>"✅ شارژ با موفقیت برای این گروه خریداری شد"
		]);
$settings = json_decode(file_get_contents("data/$textmassage.json"),true);
$settings["information"]["expire"]="$next_date";
$settings["information"]["charge"]="30 روز";
$settings = json_encode($settings,true);
file_put_contents("data/$textmassage.json",$settings);
unlink("data/$from_id.txt");
}
 // left group when end charge
date_default_timezone_set('Asia/Tehran');
$date4 = date('Y-m-d', time());
if ($tc == 'group' | $tc == 'supergroup'){ 
if($settings["information"]["expire"] != false){
if($date4 > $settings["information"]["expire"]){
			jijibot('sendmessage',[
            'chat_id'=>$Dev[0],
            'text'=>"🚩شارژ یک گروه به پایان رسید
➖➖➖➖
💭ربات این گروه را ترک کرد
➖➖➖
🔖اطلاعات گروه :

🔸ایدی گروه : [$chat_id]

🔹نام گروه : [$namegroup]

➖➖",
        ]); 
			 jijibot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"🚩شارژ این گروه به پایان رسیده
➖➖➖➖
💭ربات این گروه را ترک میکند
➖➖➖
🔖اطلاعات گروه شما :

🔸ایدی گروه : [$chat_id]

🔹نام گروه : [$namegroup]

🔖دیگر پیام های این گروه برسی نمیشود
➖➖",
]);
        jijibot('LeaveChat', [
        'chat_id' =>$chat_id,
    ]);
    }
}
}
// welcome
if ($settings["information"]["welcome"] == "| فعال | ✅"){
if($update->message->new_chat_member){
if ($tc == "group" | $tc == "supergroup"){
$text1 = $settings["information"]["textwelcome"];
$newmemberuser = $update->message->new_chat_member->username;
$name = $update->message->new_chat_member->first_name;
date_default_timezone_set('Asia/Tehran');
$date = date('Y-m-d');
$date2 = date("H:i");
$text = str_replace(["gpname","username","time"],["$namegroup","@$newmemberuser","$date | $date2"],"$text1");
jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"$text",
'reply_to_message_id'=>$message_id,
	]);
}
}
}
// lock character
if($settings["lock"]["lockcharacter"] == "| فعال | ✅"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev)){
$plus = mb_strlen("$textmassage");
$pluscharacter = $settings["information"]["pluscharacter"];
$downcharacter = $settings["information"]["downcharacter"];
if ($pluscharacter < $plus or $plus < $downcharacter) {   
jijibot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
// autolock 
if ($settings["lock"]["lockauto"] == "| فعال | ✅"){
date_default_timezone_set('Asia/Tehran');
$date1 = date("H:i");
$timelockauto = $settings["information"]["timelock"];
$unlocktime = $settings["information"]["timeunlock"];
if($unlocktime > $date1 && $date1 > $timelockauto){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ) {
$timeremmber = $settings["information"]["timeremmber"];
if($date1 < $timeremmber){
 jijibot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
}
else
{
	 jijibot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);

		jijibot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"⏰ یاد اوری :

🔕 قفل خودکار در گروه فعال است 

📍زمان الان : $date1
📍زمان شروع قفل : $timelockauto
📍زمان پایان قفل : $unlocktime",
'reply_markup'=>$inlinebutton,
   ]);
$next_date = date('H:i', strtotime($date1 ."+180 Minutes"));
$settings["information"]["timeremmber"]="$next_date";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
}
}
// panel
elseif ($user["userjop"]["$from_id"]["file"] == 'forwarduser') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["userlist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($textmassage != "برگشت 🔙") {
         jijibot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"پیام با موفقیت ارسال شد ✔️",
	  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
Forward($numbers[$z], $chat_id,$message_id);
}
}
}
elseif ($user["userjop"]["$from_id"]["file"] == 'forwardgroup') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["grouplist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($textmassage != "برگشت 🔙") {
         jijibot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"پیام با موفقیت ارسال شد ✔️",
	  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
Forward($numbers[$z], $chat_id,$message_id);
}
}
}
elseif ($user["userjop"]["$from_id"]["file"] == 'sendgroup') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["grouplist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($textmassage != "برگشت 🔙") {
         jijibot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"پیام با موفقیت ارسال شد ✔️",
	  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
     jijibot('sendmessage',[
          'chat_id'=>$numbers[$z],        
		  'text'=>"$textmassage",
        ]);
}
}
}
elseif ($user["userjop"]["$from_id"]["file"] == 'senduser') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["userlist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($textmassage != "برگشت 🔙") {
         jijibot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"پیام با موفقیت ارسال شد ✔️",
	  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
     jijibot('sendmessage',[
          'chat_id'=>$numbers[$z],        
		  'text'=>"$textmassage",
        ]);
}
}
}
?>