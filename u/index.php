<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make your RandomNumazu</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" type="text/css" href="./u/styles.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    
    <style>
        .footer {
            text-align: center;
            vertical-align: middle;
            position: fixed;
            left: 0px;
            bottom: 0px;
            width: 100%;
            height: 50px;
            margin: 0 auto;
            background-color: rgba(255,255,255,0.5);
            backdrop-filter: blur(10px);
            z-index: 10;
        }
    </style>

</head>
<body style="margin-left: 30px">
    <h2 style="z-index: 1">Make your RandomNumazu</h1>
    <h4 style="z-index: 1">RandomNumazu可以帮助您生成一个可以返回随机背景图片的链接，并可直接应用于博客中。</h1>
    <p style="z-index: 1">以换行为界限，一行输入一个图片地址。</p>
    <p>推荐图床：<a href="https://imgtp.com/" target="_blank">imgtp</a></p>
    <form action="./u/start" method="post">
        <label class="text-field filled">
          <textarea name="text" rows="16" cols="80"></textarea>
          <span>壁纸地址</span>
        </label>
        <br>
        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">获取服务</button>
    </form>
    <div class="footer">
    <p>© 2024 某喵帕斯的米苍酱 保持所有权利</p>
    <p style="margin-top: -20px;">合理地使用该API，请勿利用该API进行任何违法操作。</p>
    </div>
</body>
</html>
