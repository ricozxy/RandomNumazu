<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $text = $_POST['text'];
    $time = date('ymdHis');
    $filePath = dirname(__DIR__) . "/txts/{$time}.txt";
    if ($text <> ""){
        if (file_put_contents($filePath, $text) !== false) {
            $fileUrl = "https://api.miraao.com/RandomNumazu/u/txts/{$time}.txt";
            $fileUrlinAPI = "https://api.miraao.com/RandomNumazu?server={$time}";
            //echo "Text saved successfully! File URL: {$fileUrl}";
            echo "你的随机壁纸服务地址为:<br>{$fileUrlinAPI}<br>妥善保管网址，本站不予重复查询。";
        } else {
            http_response_code(500);
            echo "Internal Server Error";
        }
    } else{
        echo "地址为空。";
    }
    
} else {
    http_response_code(405);
    $uPath = "https://api.miraao.com/RandomNumazu/u/";
    die(header("Location: $uPath"));
}
?>
