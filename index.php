<?php
$seed = time();
$servername=$_GET["server"];
if ($servername<>"") {
    $filename = "https://api.miraao.com/RandomNumazu/u/txts/$servername.txt";
    $contents = file_get_contents($filename);
    $list = explode("\r\n",$contents);
    // 输出查询参数
    //echo $contexta[0];
} else {
$list = ["https://img2.imgtp.com/2024/02/21/6WAE5O9S.jpg",
    "https://img2.imgtp.com/2024/02/21/oePzNFmI.jpg",
    "https://img2.imgtp.com/2024/02/21/o5tbjf7H.jpg",
    "https://img2.imgtp.com/2024/02/21/lEGR2QqT.jpg",
    "https://img2.imgtp.com/2024/02/21/UQVL4TSx.jpg",
    "https://img2.imgtp.com/2024/02/21/dcwwegZV.jpg",
    "https://img2.imgtp.com/2024/02/21/2tH38AbW.jpg",
    "https://img2.imgtp.com/2024/02/21/ZecQ9AS7.jpg",
    "https://img2.imgtp.com/2024/02/21/Kg4BPffj.jpg",
    "https://img2.imgtp.com/2024/02/21/ZlvODnD6.jpg",
    "https://img2.imgtp.com/2024/02/21/nEYcHxMh.jpg",
    "https://img2.imgtp.com/2024/02/21/WsHo49Q2.jpg",
    "https://img2.imgtp.com/2024/02/21/rhFVQo4K.jpg",
    "https://img2.imgtp.com/2024/02/21/dOqxoTXu.jpg",
    "https://img2.imgtp.com/2024/02/21/wOyksiCB.jpg",
    "https://img2.imgtp.com/2024/02/21/QZKxzDSe.jpg"];
}

$length = count($list);
$num = rand(0,$length-1);
$picpath = $list[$num];
die(header("Location: $picpath"));
?>