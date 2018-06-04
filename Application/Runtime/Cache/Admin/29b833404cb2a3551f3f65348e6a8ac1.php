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
  <div class="container" style="position: relative;height: auto;min-height: 100%">
    <div class="header" style="height:60px;">
        <h3 class="text-muted" style="float:left;width:70%;">睿思邀请码发放-后台管理系统</h3>
        <a href="/index.php/Admin/Index/destroy"><button type="button" class="btn btn-default" style="float:right;width:10%;">退出</button></a>
         <h3 class="text-muted"  style="float:right;width:20%;">欢迎：<?php echo (session('username')); ?></h3>
    </div>
    <div class="navbar-wrapper" style="z-index:9999">
      <div class="navwrapper">
        <div class="navbar navbar-static-top" style="background-color:#e5e6e5;border-color:#f5f6f5;">
          <div class="container" style="padding-right:0px; padding-left:0px;width: 870px;">
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="menuItem"><a href="/index.php/Admin/Index">查看发放历史</a></li>
                <li class="menuItem"><a href="/index.php/Admin/Rule">设置发放规则</a></li>
                <li class="menuItem"><a href="/index.php/Admin/Remain">查看剩余邀请码</a></li>
                 <li class="menuItem"><a href="/index.php/Admin/Change">修改管理员信息</a></li>
              </ul>
            </div>
          </div>
        </div> 
      </div><!-- End Navbar -->
    </div> <!-- END NAVBAR -->
    <table class="table table-striped table-bordered" style="text-align:center;width:70%;margin:auto auto;">
      <tr class="info">
        <td width="40%" style="align:center"><strong>邀请码序号</strong></td>
        <td width="60%" style="align:center"><strong>邀请码</strong></td>
      </tr>
      <?php if(is_array($result)): foreach($result as $key=>$list): ?><tr class="danger">
        <td width="40%" style="align:center"><?php echo ($list["num"]); ?></td>
        <td width="60%" style="align:center"><?php echo ($list["val"]); ?></td>
        </tr><?php endforeach; endif; ?>
     </table>
      <style type="text/css">
.pageclass span{
  margin-left: 15px;
}
.pageclass a{
  margin-left: 15px;
}
     </style>
     <div class="pageclass" style="margin:auto auto;text-align:center;font-size:15px;">
     <br>
     <?php echo ($page); ?>
     </div>
  </div>
</body>
</html>