<?php   

    define("TG_TOKEN", "5866402087:AAEI38okRL_3MveD8a7eunhAFRPmdrdpg5w");
    define("TG_CHAT_ID", "1256885622");

    $getQuery = [

    ];
    

    //webhook
    // $getQuery = [
    //     "url" => "https://mirosla4.github.io/php_bots/bot.php",
    // ];

    function sendMessage($getQuery) {
            $ch = curl_init("https://api.telegram.org/bot". TG_TOKEN ."/sendMessage?". http_build_query($getQuery) );
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_HEADER, 0);
        
            $resultQuery = curl_exec($ch);
            curl_close($ch);

            return $resultQuery;
    }

    $data = file_get_contents("php://input");
    $data = json_decode($data, 1);
    var_dump($data);
    $textMessage = $data["message"]["text"];

    if($textMessage == "ХАЧУ ГАЧИ") {
        $getQuery = [
            "chat_id" => TG_CHAT_ID,
            "text" => "<b>Ass we can<b>",
            "parse_mode" => "html"
        ];
        sendMessage($getQuery);
    }



    
