<?php
/*
By : Abdullh.R.Salih => @THS_56
Ch : @Developer_Vip ..
*/
ob_start();
$API_KEY = ""; //Token
echo "api.telegram.org/bot$API_KEY/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME'];
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;

$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;

$name = $message->from->first_name;
$username = $message->from->username;
if ($text == "/start") {
bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"• اهلا بك فى بوت الزخرفه 🔱 •
    • البوت الاول ؏ التلكرام 1️⃣ •
    • لزغرفة اسم فقط قم بأرساله 📬 •
    • اذ لم تستطيع زخرفة اسمك 📇 •
    • تابع قناة جديد البوت ⚡️ •
    ֆ • • • • • • • • • • • • • ֆ",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
            [['text'=>"Developer ViP 📬",'url'=>"https://t.me/developer_vip"],['text'=>"Api And WebSite 📡",'callback_data'=>"api"]],
            [['text'=>"Started Inline 🔐",'switch_inline_query'=>""]]
        ]
    ])
]);
}
if ( $data == "api" ) {
    bot('EditMessageText',['text'=>"Zhrfa ~ زغرفة نصوص \n _Arab and English decoration with 12 different results_ \n\n *Ex* http://vip-team.ml/Zhrfa/Api.php?Name=ViP-Team \n\n `My Website` : http://vip-team.ml",'chat_id'=>$chat_id2,'message_id'=>$message_id2,'parse_mode'=>"markdown",'reply_markup'=>json_encode(['inline_keyboard'=>['text'=>"Developer ViP 📬",'url'=>"https://t.me/developer_vip"]])]);
}
if($text !="/start"){
        $zhrfa = json_decode(file_get_contents("http://vip-team.ml/Zhrfa/Api.php?Name=".urlencode($text)))->Zhrfa;
            for($i = 0; $i <count($zhrfa); $i++){
                bot('SendMessage',['text'=>" - ".$zhrfa[$i],'chat_id'=>$chat_id]);
            }
}
$inlineq = $update->inline_query->query;
if($inlineq == ""){
    bot('answerInlineQuery',[
    'inline_query_id'=>$update->inline_query->id,
    'cache_time'=>'300',
    'results' => json_encode([[
    'type'=>'article',
    'id'=>base64_encode(rand(5,555)),
    'title'=>'مساعدة ⚠️',
    'thumb_url'=>"https://hrkles.000webhostapp.com/user.png",
    'description'=>"قم بكتابتة الاسم لاقوم بأعطائك مجموعة نتائج من الزغرفة 📡 .",
    'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"
    • اهلا بك فى بوت الزخرفه 🔱 •
• البوت الاول ؏ التلكرام 1️⃣  •
• تابع قناة البوت لتتمكن من الاستخدام ⚡️ •
    "],
    'reply_markup'=>['inline_keyboard'=>[
    [
    ['text'=>'Developer ViP 📬','url'=>'https://t.me/developer_vip']
    ]
    ]]
    ]])
    ]);
    }
    
if ($inlineq) {
$zhrfa = json_decode(file_get_contents("http://vip-team.ml/Zhrfa/Api.php?Name=".urlencode($inlineq)))->Zhrfa;
$z0 = $zhrfa[0]; $z1 = $zhrfa[1]; $z2 = $zhrfa[2]; $z3 = $zhrfa[3]; $z4 = $zhrfa[4]; $z5 = $zhrfa[5]; $z6 = $zhrfa[6]; $z7 = $zhrfa[7]; $z8 = $zhrfa[8]; $z9 = $zhrfa[9]; $z10 = $zhrfa[10]; $z11 = $zhrfa[11];
bot('answerInlineQuery',[
'inline_query_id'=>$update->inline_query->id,
'results' => json_encode([[
'type'=>'article',
'id'=>base64_encode(rand(5,555)),
'title'=>"- 1 الزغرفة الـ  📬 .",
'description'=>"- لرؤية الزغرفة هذه : $z0 اضغط هنا 🔱 - ",
'input_message_content'=>[
'parse_mode'=>'markdown',
'message_text'=>"$z0",
'disable_web_page_preview'=>true,
],
],[
'type' => 'article',
'id' => base64_encode(rand(5,555)),
'title'=>"- 2 الزغرفة الـ  📬 .",
'description'=>"- لرؤية الزغرفة هذه : $z1 اضغط هنا 🔱 -",
'input_message_content'=>[
'parse_mode'=>'markdown',
'message_text'=>"$z1",
'disable_web_page_preview'=>true,
],
],[
'type' => 'article',
'id' => base64_encode(rand(5,555)),
'title'=>"- 3 الزغرفة الـ  📬 .",
'description'=>"- لرؤية الزغرفة هذه : $z2 اضغط هنا 🔱 -",
'input_message_content'=>[
'parse_mode'=>'markdown',
'message_text'=>"$z2",
'disable_web_page_preview'=>true,
],
],[
'type' => 'article',
'id' => base64_encode(rand(5,555)),
'title'=>"- 4 الزغرفة الـ  📬 .",
'description'=>"- لرؤية الزغرفة هذه : $z3 اضغط هنا 🔱 -",
'input_message_content'=>[
'parse_mode'=>'markdown',
'message_text'=>"$z3",
'disable_web_page_preview'=>true,
],
],[
'type' => 'article',
'id' => base64_encode(rand(5,555)),
'title'=>"- 5 الزغرفة الـ  📬 .",
'description'=>"- لرؤية الزغرفة هذه : $z4 اضغط هنا 🔱 -",
'input_message_content'=>[
'parse_mode'=>'markdown',
'message_text'=>"$z4",
'disable_web_page_preview'=>true,
],
],[
'type' => 'article',
'id' => base64_encode(rand(5,555)),
'title'=>"- 6 الزغرفة الـ  📬 .",
'description'=>"- لرؤية الزغرفة هذه : $z5 اضغط هنا 🔱 -",
'input_message_content'=>[
'parse_mode'=>'markdown',
'message_text'=>"$z5",
'disable_web_page_preview'=>true,
],
],[
'type' => 'article',
'id' => base64_encode(rand(5,555)),
'title'=>"- 7 الزغرفة الـ  📬 .",
'description'=>"- لرؤية الزغرفة هذه : $z6 اضغط هنا 🔱 -",
'input_message_content'=>[
'parse_mode'=>'markdown',
'message_text'=>"$z6",
'disable_web_page_preview'=>true,
],
],[
'type' => 'article',
'id' => base64_encode(rand(5,555)),
'title'=>"- 8 الزغرفة الـ  📬 .",
'description'=>"- لرؤية الزغرفة هذه : $z7 اضغط هنا 🔱 -",
'input_message_content'=>[
'parse_mode'=>'markdown',
'message_text'=>"$z7",
'disable_web_page_preview'=>true,
],
],[
'type' => 'article',
'id' => base64_encode(rand(5,555)),
'title'=>"- 9 الزغرفة الـ  📬 .",
'description'=>"- لرؤية الزغرفة هذه : $z8 اضغط هنا 🔱 -",
'input_message_content'=>[
'parse_mode'=>'markdown',
'message_text'=>"$z8 ",
'disable_web_page_preview'=>true,
],
],[
'type' => 'article',
'id' => base64_encode(rand(5,555)),
'title'=>"- 10 الزغرفة الـ  📬 .",
'description'=>"- لرؤية الزغرفة هذه : $z9 اضغط هنا 🔱 -",
'input_message_content'=>[
'parse_mode'=>'markdown',
'message_text'=>"$z9",
'disable_web_page_preview'=>true,
],
],[
'type' => 'article',
'id' => base64_encode(rand(5,555)),
'title'=>"- 11 الزغرفة الـ  📬 .",
'description'=>"- لرؤية الزغرفة هذه : $z10 اضغط هنا 🔱 -",
'input_message_content'=>[
'parse_mode'=>'markdown',
'message_text'=>"$z10",
'disable_web_page_preview'=>true,
],
],[
'type' => 'article',
'id' => base64_encode(rand(5,555)),
'title'=>"- 12 الزغرفة الـ  📬 .",
'description'=>"- لرؤية الزغرفة هذه : $z11 اضغط هنا 🔱 -",
'input_message_content'=>[
'parse_mode'=>'markdown',
'message_text'=>"$z11",
'disable_web_page_preview'=>true,
],
],
])
]);
}
