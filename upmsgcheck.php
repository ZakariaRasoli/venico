<?php
/*
in the name of God 
source of anti spam bot
by php 
v.13
dev : mohammadrezajafari [@mohammadrezajiji]
*/
// msg check
// add
if($settings["information"]["add"] == "| فعال | ✅") {
if($newchatmemberid == true){
$add = $settings["addlist"]["$from_id"]["add"];
$addplus = $add +1;
$settings["addlist"]["{$from_id}"]["add"]="$addplus";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
if($settings["information"]["add"] == "| فعال | ✅"){
if ($status != "creator" && $status != "administrator" && !in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){
$youadding = $settings["addlist"]["$from_id"]["add"];
$setadd = $settings["information"]["setadd"];
$addtext = $settings["addlist"]["$from_id"]["addtext"];
$msg = $settings["information"]["lastmsgadd"];
            if($youadding < $setadd){
			if($addtext == false){
            jijibot('SendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"🔖کاربر با اطلاعات :
➖➖➖➖
🔹نام : [$first_name]
🔸ایدی : [$from_id]
🔅یوزرنیم : [@$username]
➖➖➖
⚠️ تعداد افرادی که شما به گروه دعوت کرده اید برابر : 0

🚀 برای باز شدن چت شما باید $setadd نفر را به گروه دعوت کنید",
            ]);
            jijibot('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$message_id
            ]);
			            jijibot('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$msg
            ]);
$msgplus = $message_id + 1;
$settings["information"]["lastmsgadd"]="$msgplus";
$settings["addlist"]["$from_id"]["addtext"]="true";
$settings["addlist"]["$from_id"]["add"]=0;
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
          }
		  else
		  {
			              jijibot('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$message_id
			 ]);
       }
		}
		  }
		}
		}
//  game
if($settings["lock"]["game"] == "| فعال | ✅"){
if($update->message->game){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
	jijibot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// location
if ($settings["lock"]["location"] == "| فعال | ✅"){
if($update->message->location){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
	jijibot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// filter
if($settings["filterlist"] != false){
if ($status != 'creator' && $status != 'administrator' ) {
$check = check_filter("$textmassage");
if ($check == true) {
jijibot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
}
}
}
// setrules
if($settings["information"]["step"] == "setrules"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
if ($tc == 'group' | $tc == 'supergroup'){
$plus = mb_strlen("$textmassage");
if($plus < 600) {
jijibot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"قوانین گروه شما ثبت شد ✅",
  'reply_to_message_id'=>$message_id,
 ]);
$settings["information"]["rules"]="$textmassage";
$settings["information"]["step"]="none";
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
}
}
// lock channel 
if($settings["information"]["lockchannel"] == "| فعال | ✅"){
if ($status != "creator" && $status != "administrator" && !in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){
$usernamechannel = $settings["information"]["setchannel"];
@$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=".$usernamechannel."&user_id=".$from_id));
@$tch = $forchannel->result->status;
if($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
$msg = $settings["information"]["lastmsglockchannel"];
$channeltext = $settings["channellist"]["$from_id"]["channeltext"];
			if($channeltext == false){
            jijibot('SendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"🔖کاربر با اطلاعات :
➖➖➖➖
🔹نام : [$first_name]
🔸ایدی : [$from_id]
🔅یوزرنیم : [@$username]
➖➖➖
🚀 برای فعالیت داشتن در گروه شما باید عضو کانال $usernamechannel ما بشوید",
            ]);
            jijibot('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$message_id
            ]);
			            jijibot('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$msg
            ]);
$msgplus = $message_id + 1;
$settings["information"]["lastmsglockchannel"]="$msgplus";
$settings["channellist"]["$from_id"]["channeltext"]="true";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
          }
		  else
		  {
			              jijibot('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$message_id
			 ]);
       }
		}
		  }
		}
		}
if($settings["information"]["step"] == "setchannel"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
if ($tc == 'group' | $tc == 'supergroup'){
if(strpos($textmassage , '@') !== false) {
$plus = mb_strlen("$textmassage");
if($plus < 25) {
jijibot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"کانال شما با موفقیت تنظیم شد ✅
 
📍 کانال تنظیم شد : $textmassage

📌 توجه ربات حتما باید در کانال تنظیم شده ادمین شود تا بتواند عمل کند",
  'reply_to_message_id'=>$message_id,
 ]);
$settings["information"]["setchannel"]="$textmassage";
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
		jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 خطا ! یوزرنیم کانال وارد شد بیش از حد مجاز بلند است",
  'reply_to_message_id'=>$message_id,
            'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
					 [
					 ['text'=>"🔙 برگشت",'callback_data'=>'lockchannel']
					 ],
                     ]
               ])
 ]);
}
}
else
{
		jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 خطا در ابتدا یوزرنیم کانال حتما باید عبارت @ باشد 
🔘 ماننده : @$channel",
  'reply_to_message_id'=>$message_id,
            'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
					 [
					 ['text'=>"🔙 برگشت",'callback_data'=>'lockchannel']
					 ],
                     ]
               ])
 ]);
}
}
}
}
// setwelcome
if($settings["information"]["step"] == "setwelcome"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) ){
if ($tc == 'group' | $tc == 'supergroup'){
$plus = mb_strlen("$textmassage");
if($plus < 200) {
jijibot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"متن خوش امد گویی گروه با موفقیت تنظیم شد ✅",
  'reply_to_message_id'=>$message_id,
 ]);
$settings["information"]["textwelcome"]="$textmassage";
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
		jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 خطا ! متن وارد شده بیش از حد مجاز است",
  'reply_to_message_id'=>$message_id,
            'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
					 [
					 ['text'=>"🔙 برگشت",'callback_data'=>'welcome']
					 ],
                     ]
               ])
 ]);
}
}
}
}
// banall
elseif ($tc == 'private'){ 
if(in_array($from_id, $user["banlist"])) {
jijibot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🛑شما به خاطر رعایت نکردن قوانین از ربات مسدود شدید 

❇️ لطفا پیام دوباره ارسال نکنید",
'reply_markup'=>json_encode(['KeyboardRemove'=>[
],'remove_keyboard'=>true
])
]);
    }
}
elseif ($tc == 'group' | $tc == 'supergroup'){ 
if(in_array($from_id, $user["banlist"])) {
		jijibot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
      ]);
}
}
// sup
if($user["userjop"]["$from_id"]["file"] == "sup"&& $tc == "private"){   
if ($textmassage != "🔙 برگشت") {	
jijibot('ForwardMessage',[
'chat_id'=>$Dev[0],
'from_chat_id'=>$chat_id,
'message_id'=>$message_id
]);
			jijibot('sendmessage',[       
			'chat_id'=>$chat_id,
			'text'=>"✔️نظر شما ارسال شد.\nبا تشکر از شما",
	]);	
	}
	}
?>