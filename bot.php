<?php   

    define("TG_TOKEN", "5866402087:AAEI38okRL_3MveD8a7eunhAFRPmdrdpg5w");
    define("TG_CHAT_ID", "1256885622");

    // $getQuery = [
    //     "chat_id" => TG_CHAT_ID,
    //     "text" => "<b>Ass we can</b>",
    //     "reply_markup" => json_encode(
    //         [
    //             'keyboard' => [
    //                 [
    //                     [
    //                         "text" => "Gachi fun",
    //                         "callback_data" => "test1",
    //                     ],
                        
    //                 ]
    //             ],
    //             "one_time_keyboard" => TRUE,
    //             "resize_keyboard" => TRUE,
    //         ]
    //     ),
    // ];

    $getQuery = [
        "url" => "https://hdom.org.ua/php/bot.php",
    ];

    $ch = curl_init("https://api.telegram.org/bot". TG_TOKEN ."/sendWebhook?". http_build_query($getQuery) );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HEADER, 0);

    $resultQuery = curl_exec($ch);
    curl_close($ch);
    
    echo $resultQuery;


    