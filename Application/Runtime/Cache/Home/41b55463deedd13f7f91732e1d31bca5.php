<?php if (!defined('THINK_PATH')) exit();?><html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
        <title>非邀请码领取时间</title>
        <link rel="stylesheet" href="/Public/css/weui.min.css"/>
        <script src="/Public/css/jquery.min.js" type="text/javascript"></script>
        
    </head>
    <body>
        <div class="beijing">
            <div class="middle">
                <img src="/Public/images/0.png" width="320px">
                <h3 style="text-align:center;">对不起，不在领取时间</h3><br>
                <?php if(is_array($detail)): foreach($detail as $key=>$de): ?><h3 style="color:red;text-align:center;">自 <?php echo ($de["date1"]); ?>至 <?php echo ($de["date2"]); ?></h3><br>
                <h3 style="color:red;text-align:center;">（每天<?php echo ($de["time1"]); ?>至<?php echo ($de["time2"]); ?>发放邀请码）</h3><br><?php endforeach; endif; ?>
                <img src="/Public/images/sorry.png" width="320px">  
                <p>请等待下次机会领取。</p>
                <p>如有问题请加西电导航QQ群:186181835 咨询,加群时请说明是西电学生</p>
    		</div>
		</div>

 		<div class="bottom">
         	<img src="/Public/images/0.jpg" width="320px">     
        </div>
    </body>
</html>