<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="睿思邀请码后台">
    <meta name="author" content="齐鹏飞">
<title>睿思邀请码发放-后台管理系统</title>
<link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/Public/css/jumbotron-narrow.css">
</head>
<body>
<form  action="/index.php/Admin/Login/checklogin" method="post" style="text-align:center;width:50%;margin:auto auto;">
<p style="font-size:30px;"><strong>睿思邀请码发放-后台管理系统</strong></p>
        <input type="text" class="form-control" name="username" placeholder="用户名">
         <p style="height:20px;"></p>
         <input type="text" class="form-control" name="password" placeholder="密码">
     <p style="height:20px;"></p>
        <button type="submit" class="btn btn-primary" >登录</button>
</form>
</body>
</html>