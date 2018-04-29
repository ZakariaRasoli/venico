<?php

// fun and for all
// ping
if($textmassage=="/ping" or $textmassage=="انلاینی" or $textmassage=="ping"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
   jijibot('sendVideoNote',[
  'chat_id'=>$chat_id,
    'video_note'=>new CURLFile("other/ping.mp4"),
        'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
        ]);
   }
}
else
{
   jijibot('sendVideoNote',[
  'chat_id'=>$chat_id,
    'video_note'=>new CURLFile("other/ping.mp4"),
        'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
        ]);
}
}
// gif
elseif ( strpos($textmassage , '/gif ') !== false  ) {
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
$text = str_replace("/gif ","",$textmassage);
$ran = rand(1,3);
if ($ran == "1") {
$info_user = file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=memories-anim-logo&text=$text&symbol_tagname=popular&fontsize=70&fontname=futura_poster&fontname_tagname=cool&textBorder=15&growSize=0&antialias=on&hinting=on&justify=2&letterSpacing=0&lineSpacing=0&textSlant=0&textVerticalSlant=0&textAngle=0&textOutline=off&textOutline=false&textOutlineSize=2&textColor=%230000CC&angle=0&blueFlame=on&blueFlame=false&framerate=75&frames=5&pframes=5&oframes=4&distance=2&transparent=off&transparent=false&extAnim=gif&animLoop=on&animLoop=false&defaultFrameRate=75&doScale=off&scaleWidth=240&scaleHeight=120&&_=1469943010141");
$getchat = json_decode($info_user, true);
$gif = $getchat["src"];
 jijibot('senddocument',[
    'chat_id'=>$chat_id,
    'document'=>"$gif",
    'caption'=>"@$usernamebot",
    'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
     ]);
}
if ($ran == "2") {
    $info_user = file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=flash-anim-logo&text=$text&symbol_tagname=popular&fontsize=70&fontname=futura_poster&fontname_tagname=cool&textBorder=15&growSize=0&antialias=on&hinting=on&justify=2&letterSpacing=0&lineSpacing=0&textSlant=0&textVerticalSlant=0&textAngle=0&textOutline=off&textOutline=false&textOutlineSize=2&textColor=%230000CC&angle=0&blueFlame=on&blueFlame=false&framerate=75&frames=5&pframes=5&oframes=4&distance=2&transparent=off&transparent=false&extAnim=gif&animLoop=on&animLoop=false&defaultFrameRate=75&doScale=off&scaleWidth=240&scaleHeight=120&&_=1469943010141");
$getchat = json_decode($info_user, true);
$gif = $getchat["src"];
 jijibot('senddocument',[
    'chat_id'=>$chat_id,
    'document'=>"$gif",
    'caption'=>"@$usernamebot",
    'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
     ]);
}
if ($ran == "3") {
        $info_user = file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=alien-glow-anim-logo&text=$text&symbol_tagname=popular&fontsize=70&fontname=futura_poster&fontname_tagname=cool&textBorder=15&growSize=0&antialias=on&hinting=on&justify=2&letterSpacing=0&lineSpacing=0&textSlant=0&textVerticalSlant=0&textAngle=0&textOutline=off&textOutline=false&textOutlineSize=2&textColor=%230000CC&angle=0&blueFlame=on&blueFlame=false&framerate=75&frames=5&pframes=5&oframes=4&distance=2&transparent=off&transparent=false&extAnim=gif&animLoop=on&animLoop=false&defaultFrameRate=75&doScale=off&scaleWidth=240&scaleHeight=120&&_=1469943010141");
$getchat = json_decode($info_user, true);
$gif = $getchat["src"];
 jijibot('senddocument',[
    'chat_id'=>$chat_id,
    'document'=>"$gif",
    'caption'=>"@$usernamebot",
    'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
     ]);
   }
}
}
else
{
$text = str_replace("/gif ","",$textmassage);
$info_user = file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=memories-anim-logo&text=".$text."&symbol_tagname=popular&fontsize=70&fontname=futura_poster&fontname_tagname=cool&textBorder=15&growSize=0&antialias=on&hinting=on&justify=2&letterSpacing=0&lineSpacing=0&textSlant=0&textVerticalSlant=0&textAngle=0&textOutline=off&textOutline=false&textOutlineSize=2&textColor=%230000CC&angle=0&blueFlame=on&blueFlame=false&framerate=75&frames=5&pframes=5&oframes=4&distance=2&transparent=off&transparent=false&extAnim=gif&animLoop=on&animLoop=false&defaultFrameRate=75&doScale=off&scaleWidth=240&scaleHeight=120&&_=1469943010141");
$getchat = json_decode($info_user, true);
$gif = $getchat["src"];
 jijibot('senddocument',[
    'chat_id'=>$chat_id,
    'document'=>"$gif",
    'caption'=>"@$usernamebot",
    'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
     ]);
}
}
// logo
elseif ( strpos($textmassage , '/logo ') !== false or strpos($textmassage , 'لوگو بساز ') !== false) {
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
$text = str_replace(['/logo ','لوگو بساز '],'',$textmassage);
 jijibot('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>"http://api.monsterbot.ir/pic/?text=".$text."&y=15&font=Steamy&fsize=90&bg=logo8",
    'caption'=>"@$usernamebot",
    'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   }
}
else
{
    $text = str_replace(['/logo ','لوگو بساز '],'',$textmassage);
 jijibot('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>"http://api.monsterbot.ir/pic/?text=".$text."&y=15&font=Steamy&fsize=90&bg=logo8",
    'caption'=>"@$usernamebot",
    'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   }
}
// voice
elseif ( strpos($textmassage ,'/voice ') !== false  ) {
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
$text = str_replace("/voice ","",$textmassage);
$trtext = urlencode($text);
 jijibot('sendvoice',[
    'chat_id'=>$chat_id,
    'voice'=>"http://tts.baidu.com/text2audio?lan=en&ie=UTF-8&text=".$trtext,
    'caption'=>"@$usernamebot",
    'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   }
}
else
{
$text = str_replace("/voice ","",$textmassage);
$trtext = urlencode($text);
 jijibot('sendvoice',[
    'chat_id'=>$chat_id,
    'voice'=>"http://tts.baidu.com/text2audio?lan=en&ie=UTF-8&text=".$trtext,
    'caption'=>"@$usernamebot",
    'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}
// sticker
elseif($textmassage=="/photo" or $textmassage=="photo" or $textmassage=="تبدیل به عکس"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
$file = $update->message->reply_to_message->sticker->file_id;
      $get = jijibot('getfile',['file_id'=>$file]);
      	  $getchat = json_decode($get, true);
      $patch = $getchat["result"]["file_path"];
    file_put_contents("data/photo.png",file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
jijibot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>new CURLFile("data/photo.png"),
  'caption'=>"@$usernamebot",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unlink("data/photo.png");
 }
}
else
{
$file = $update->message->reply_to_message->sticker->file_id;
      $get = jijibot('getfile',['file_id'=>$file]);
      	  $getchat = json_decode($get, true);
      $patch = $getchat["result"]["file_path"];
    file_put_contents("data/photo.png",file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
jijibot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>new CURLFile("data/photo.png"),
  'caption'=>"@$usernamebot",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unlink("data/photo.png");
}
}
// photo
elseif($textmassage=="/sticker" or $textmassage=="sticker" or $textmassage=="تبدیل به استیکر"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
$photo = $update->message->reply_to_message->photo;
$file = $photo[count($photo)-1]->file_id;
      $get = jijibot('getfile',['file_id'=>$file]);
      $getchat = json_decode($get, true);
      $patch = $getchat["result"]["file_path"];
    file_put_contents("data/sticker.webp",file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
jijibot('sendsticker',[
 'chat_id'=>$chat_id,
 'sticker'=>new CURLFile("data/sticker.webp"),
   'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unlink("data/sticker.webp");
 }
}
else
{
    $photo = $update->message->reply_to_message->photo;
$file = $photo[count($photo)-1]->file_id;
      $get = jijibot('getfile',['file_id'=>$file]);
      $getchat = json_decode($get, true);
      $patch = $getchat["result"]["file_path"];
    file_put_contents("data/sticker.webp",file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
jijibot('sendsticker',[
 'chat_id'=>$chat_id,
 'sticker'=>new CURLFile("data/sticker.webp"),
   'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unlink("data/sticker.webp");
}
}
// azan
elseif($textmassage == "/azan" or $textmassage == "azan" or $textmassage == "اذان"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
if ($tc == 'group' | $tc == 'supergroup'){
$text = file_get_contents("https://prayer.aviny.com/api/prayertimes/1");
$getchat = json_decode($text, true);
$city = $getchat["CityName"];
$sobeh = $getchat["Imsaak"];
$toloe = $getchat["Sunrise"];
$zoher = $getchat["Noon"];
$qurob = $getchat["Sunset"];
$maghreb = $getchat["Maghreb"];
$nime = $getchat["Midnight"];
$rmroz = $getchat["Today"];
 jijibot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"🕌 اوقات شرعی تهران :

🏬 نام شهر : $city
🏙 اذان صبح : $sobeh
🌇 طلوع افتاب : $toloe
☀️ اذان ظهر : $zoher
🌃 غروب افتاب : $qurob
🌄 اذان مغرب : $maghreb
🌌 نیمه شب : $nime

📅 تاریخ امروز : $rmroz",
    'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   }
}
}
else
{
$text = file_get_contents("https://prayer.aviny.com/api/prayertimes/1");
$getchat = json_decode($text, true);
$city = $getchat["CityName"];
$sobeh = $getchat["Imsaak"];
$toloe = $getchat["Sunrise"];
$zoher = $getchat["Noon"];
$qurob = $getchat["Sunset"];
$maghreb = $getchat["Maghreb"];
$nime = $getchat["Midnight"];
$rmroz = $getchat["Today"];
 jijibot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"🕌 اوقات شرعی تهران :

🏬 نام شهر : $city
🏙 اذان صبح : $sobeh
🌇 طلوع افتاب : $toloe
☀️ اذان ظهر : $zoher
🌃 غروب افتاب : $qurob
🌄 اذان مغرب : $maghreb
🌌 نیمه شب : $nime

📅 تاریخ امروز : $rmroz",
    'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}

// instagrm
elseif ( strpos($textmassage , '/instagram ') !== false or strpos($textmassage , 'اینستاگرام ') !== false  ) {
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
$code = str_replace(['/instagram ','اینستاگرام '],'',$textmassage);
$text = file_get_contents("http://api.reloadlife.me/v1/1/instagram/userinfo?user=".$code);
$getchat = json_decode($text, true);
$city = $getchat["Result"]["Biography"];
$toloe = $getchat["Result"]["Followers"];
$zoher = $getchat["Result"]["Following"];
$qurob = $getchat["Result"]["PrivatePage"];
$maghreb = $getchat["Result"]["Posts"]["count"];
$maghreb1 = $getchat["Result"]["ProfilePhoto"];
$fullname = $getchat["Result"]["DisplayName"];
$idinsta = $getchat["Result"]["Id"];
$usernameinsta = $getchat["Result"]["Username"];
jijibot('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>$maghreb1,
    'caption'=>"@$usernamebot",
    'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   jijibot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"اسم اصلی : $fullname
    ایدی اینستاگرام : $idinsta
    وضعیت اکانت : $qurob
    تعداد دنبال کننده ها : $toloe
    تعداد دنبال کرده ها : $zoher
    بیوگرافی : $city
    لینک اینستاگرام : https://instagram.com/$usernameinsta",
    'parse_mode'=>'MarkDown',
    'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   }
}
else
{
    $code = str_replace(['/instagram ','اینستاگرام '],'',$textmassage);
$text = file_get_contents("http://api.reloadlife.me/v1/1/instagram/userinfo?user=".$code);
$getchat = json_decode($text, true);
$city = $getchat["Result"]["Biography"];
$toloe = $getchat["Result"]["Followers"];
$zoher = $getchat["Result"]["Following"];
$qurob = $getchat["Result"]["PrivatePage"];
$maghreb = $getchat["Result"]["Posts"]["count"];
$maghreb1 = $getchat["Result"]["ProfilePhoto"];
$fullname = $getchat["Result"]["DisplayName"];
$idinsta = $getchat["Result"]["Id"];
$usernameinsta = $getchat["Result"]["Username"];
if($qurob != true){
    $qurob1 = "عمومی";
}else{
    $qurob1 = "خصوصی";
}
jijibot('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>$maghreb1,
    'caption'=>"@$usernamebot",
    'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   jijibot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"اسم اصلی : $fullname
    ایدی اینستاگرام : $idinsta
    وضعیت اکانت : $qurob1
    تعداد دنبال کننده ها : $toloe
    تعداد دنبال کرده ها : $zoher
    بیوگرافی : $city
    لینک اینستاگرام : https://instagram.com/$usernameinsta",
    'parse_mode'=>'HTML',
    'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}
elseif($textmassage == "/arz" or $textmassage == "arz" or $textmassage == "ارز"){
    if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
if ($tc == 'group' | $tc == 'supergroup'){
    $arz=json_decode(file_get_contents("http://webservice.lorddeveloper.ir/arz/"),true);
$dollar=$arz['currency']['dollar'];
$euro=$arz['currency']['euro'];
$pound=$arz['currency']['pound'];
$AED=$arz['currency']['AED'];
$turkish_lira=$arz['currency']['turkish_lira'];
$chinese_yuan=$arz['currency']['chinese_yuan'];
$yen=$arz['currency']['yen'];
$canadian_dollar=$arz['currency']['canadian_dollar'];
$australian_dollar=$arz['currency']['australian_dollar'];
$newzealand_dollar=$arz['currency']['newzealand_dollar'];
$switzerland_frank=$arz['currency']['switzerland_frank'];
$afghan=$arz['currency']['afghan'];
$swedish_krona=$arz['currency']['swedish_krona'];
$danish_krona=$arz['currency']['danish_krona'];
$norwegian_krona=$arz['currency']['norwegian_krona'];
$kuwaiti_dinar=$arz['currency']['kuwaiti_dinar'];
$arabian_rial=$arz['currency']['arabian_rial'];
$qatar_rial=$arz['currency']['qatar_rial'];
$omani_rial=$arz['currency']['omani_rial'];
$iraqi_dinar=$arz['currency']['iraqi_dinar'];
$bahrain_dinar=$arz['currency']['bahrain_dinar'];
$syrian_lair=$arz['currency']['syrian_lair'];
$indian_rupee=$arz['currency']['indian_rupee'];
$pakistani_rupee=$arz['currency']['pakistani_rupee'];
$singapore_dollar=$arz['currency']['singapore_dollar'];
$hongkong_dollar=$arz['currency']['hongkong_dollar'];
$thai_baht=$arz['currency']['thai_baht'];
$russian_ruble=$arz['currency']['russian_ruble'];
$azerbaijani_manat=$arz['currency']['azerbaijani_manat'];
$armenian_drama=$arz['currency']['armenian_drama'];
$georgia_larry=$arz['currency']['georgia_larry'];
$ounce=$arz['gold']['ounce'];
$gold=$arz['gold']['gold'];
$gold_18=$arz['gold']['gold_18'];
$gold_24=$arz['gold']['gold_24'];
$silver=$arz['gold']['silver'];
$gold_coin=$arz['coin']['gold_coin'];
$emami_coin=$arz['coin']['emami_coin'];
$half_coin=$arz['coin']['half_coin'];
$quarter_coin=$arz['coin']['quarter_coin'];
$gramme_coin=$arz['coin']['gramme_coin'];
$currency="💵 قیمت ارز های کشور های مختلف:
🇺🇸 دلار: $dollar
🇪🇺 یورو : $euro
🇬🇧 یوند : $pound
🇦🇪 درهم : $AED
🇯🇵 ین : $yen
🇹🇷 لیر ترکیه : $turkish_lira
🇨🇳 یوان چین : $chinese_yuan
🇨🇦 دلار کانادا : $canadian_dollar
🇦🇺 دلار استرلیا : $australian_dollar
🇳🇿 دلار نیوزلند :$newzealand_dollar
🇸🇪 کرون سوئد : $swedish_krona
🇩🇰 کرون دانمارک : $danish_krona
🇳🇴 کرون نروژ : $norwegian_krona
🇰🇼 دینار کویت : $kuwaiti_dinar
🇸🇦 ریال عربستان : $arabian_rial
🇶🇦 ریال قطر : $qatar_rial
🇮🇶 دینار عراق : $iraqi_dinar
🇸🇾 لیر سوریه : $syrian_lair
🇮🇳 روپیه هندوستان : $indian_rupee
🇵🇰 روپیه پاکستان : $pakistani_rupee
🇧🇭 دینار بحرین : $bahrain_dinar
🇷🇺 روبل روسیه : $russian_ruble
🇦🇿 منات اذربایجان : $azerbaijani_manat
🇦🇲 درام ارمنستان : $armenian_drama
🇹🇭 بات تایلند : $thai_baht
🇭🇰 دلار هنگ کنگ : $hongkong_dollar";
$gold="💵 قیمت طلا:
📍یک انس طلا: $ounce
📍 یک مثقال طلا: $gold
📍طلا 18 عیار: $gold_18
📍طلا 24 عیار: $gold_24
📍نقره: $silver";
$coin="💵 قیمت سکه:
📍سکه بهار آزادی: $gold_coin
📍سکه امامی: $emami_coin
📍نیم سکه: $half_coin
📍ربع سکه: $quarter_coin
📍سکه گرمی: $gramme_coin";
jijibot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$currency\n$gold\n$coin\n💵 قیمت ها بر حسب ریال میباشد.",
'parse_mode'=>'Markdown',
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   }
   }
   }else{
       $arz=json_decode(file_get_contents("http://webservice.lorddeveloper.ir/arz/"),true);
$dollar=$arz['currency']['dollar'];
$euro=$arz['currency']['euro'];
$pound=$arz['currency']['pound'];
$AED=$arz['currency']['AED'];
$turkish_lira=$arz['currency']['turkish_lira'];
$chinese_yuan=$arz['currency']['chinese_yuan'];
$yen=$arz['currency']['yen'];
$canadian_dollar=$arz['currency']['canadian_dollar'];
$australian_dollar=$arz['currency']['australian_dollar'];
$newzealand_dollar=$arz['currency']['newzealand_dollar'];
$switzerland_frank=$arz['currency']['switzerland_frank'];
$afghan=$arz['currency']['afghan'];
$swedish_krona=$arz['currency']['swedish_krona'];
$danish_krona=$arz['currency']['danish_krona'];
$norwegian_krona=$arz['currency']['norwegian_krona'];
$kuwaiti_dinar=$arz['currency']['kuwaiti_dinar'];
$arabian_rial=$arz['currency']['arabian_rial'];
$qatar_rial=$arz['currency']['qatar_rial'];
$omani_rial=$arz['currency']['omani_rial'];
$iraqi_dinar=$arz['currency']['iraqi_dinar'];
$bahrain_dinar=$arz['currency']['bahrain_dinar'];
$syrian_lair=$arz['currency']['syrian_lair'];
$indian_rupee=$arz['currency']['indian_rupee'];
$pakistani_rupee=$arz['currency']['pakistani_rupee'];
$singapore_dollar=$arz['currency']['singapore_dollar'];
$hongkong_dollar=$arz['currency']['hongkong_dollar'];
$thai_baht=$arz['currency']['thai_baht'];
$russian_ruble=$arz['currency']['russian_ruble'];
$azerbaijani_manat=$arz['currency']['azerbaijani_manat'];
$armenian_drama=$arz['currency']['armenian_drama'];
$georgia_larry=$arz['currency']['georgia_larry'];
$ounce=$arz['gold']['ounce'];
$gold=$arz['gold']['gold'];
$gold_18=$arz['gold']['gold_18'];
$gold_24=$arz['gold']['gold_24'];
$silver=$arz['gold']['silver'];
$gold_coin=$arz['coin']['gold_coin'];
$emami_coin=$arz['coin']['emami_coin'];
$half_coin=$arz['coin']['half_coin'];
$quarter_coin=$arz['coin']['quarter_coin'];
$gramme_coin=$arz['coin']['gramme_coin'];
$currency="💵 قیمت ارز های کشور های مختلف:
🇺🇸  دلار: $dollar
🇪🇺  یورو : $euro
🇬🇧  یوند : $pound
🇦🇪  درهم : $AED
🇯🇵  ین : $yen
🇹🇷  لیر ترکیه : $turkish_lira
🇨🇳  یوان چین : $chinese_yuan
🇨🇦  دلار کانادا : $canadian_dollar
🇦🇺  دلار استرلیا : $australian_dollar
🇳🇿  دلار نیوزلند :$newzealand_dollar
🇸🇪  کرون سوئد : $swedish_krona
🇩🇰  کرون دانمارک : $danish_krona
🇳🇴  کرون نروژ : $norwegian_krona
🇰🇼  دینار کویت : $kuwaiti_dinar
🇸🇦  ریال عربستان : $arabian_rial
🇶🇦  ریال قطر : $qatar_rial
🇮🇶  دینار عراق : $iraqi_dinar
🇸🇾  لیر سوریه : $syrian_lair
🇮🇳  روپیه هندوستان : $indian_rupee
🇵🇰  روپیه پاکستان : $pakistani_rupee
🇧🇭  دینار بحرین : $bahrain_dinar
🇷🇺  روبل روسیه : $russian_ruble
🇦🇿  منات اذربایجان : $azerbaijani_manat
🇦🇲  درام ارمنستان : $armenian_drama
🇹🇭  بات تایلند : $thai_baht
🇭🇰  دلار هنگ کنگ : $hongkong_dollar";
$gold="💵 قیمت طلا:
📍 یک انس طلا: $ounce
📍  یک مثقال طلا: $gold
📍 طلا 18 عیار: $gold_18
📍 طلا 24 عیار: $gold_24
📍 نقره: $silver";
$coin="💵 قیمت سکه:
📍 سکه بهار آزادی: $gold_coin
📍 سکه امامی: $emami_coin
📍 نیم سکه: $half_coin
📍 ربع سکه: $quarter_coin
📍 سکه گرمی: $gramme_coin";
jijibot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$currency\n$gold\n$coin\n💵 قیمت ها بر حسب ریال میباشد.",
'parse_mode'=>'Markdown',
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   }
   }




?>
