<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>高考查询填报</title>
    <style type="text/css">
* {
    padding: 0px;
    margin: 0px;
}
.box {
    width: 100%;
    height: 900px;
    margin-left:auto;
    margin-right:auto;
    background:  url("__ROOT__/Public/index/images/bg.png");
}
#dh {
	width: 500px;
	height: 35px;
	margin: 0 auto;
	margin-top: 10px;
	float: right;
}
#dh ul{
	width: 500px;
	height: 35px;
}
ul {
    list-style:none;
}
#dh ul li{
	height: 35px;
	float: left;
	line-height: 35px;
	text-align: center;
}
#dh ul li a{
	display: block; font-size:20px; color: white;text-decoration: none;background-color:black;line-height: 35px;float: right;border-right-style: dashed;border-left-style:dashed; border-width: thin;border-color: white;
}
#dh ul li a:hover{
	color:white;text-decoration: underline;
}
.logo{
    width: 120px;
    height: 149px;
    margin-top: 3cm;
    margin-left: 50px;
    float: left;
    background-color: white;
}
.title{
    width:800px;
    height: 149px;
    margin-top: 3cm;
    margin-left: 30px;
    padding-left: 200px;
    float: left;
}
.building{
    width: 754px;
    height: 392px;
    margin-left: 50px;
    background: url("__ROOT__/Public/index/images/gaokaojiayou.png");
    clear: both;
}
.zhanghao{
    width: 540px;
    height: 314px;
    margin-top: -314px;
    float: right;
}
.denglu{
    width: 216px;
    height: 50px;
    margin-left: 1020px;
    margin-top: -89px;
    background-color: yellow;
}
</style>
    <style type="text/css">
        table{border-collapse:collapse;border-spacing:0;border-left:1px solid #888;border-top:1px solid #888;color:black;}
        th,td{border-right:1px solid #888;border-bottom:1px solid #888;padding:5px 15px;}
        th{font-weight:bold;}         
</style>
</head>
<body>
<div class="box">
     <div id="dh">
     	 <ul>
     	 	 <li><a href="__ROOT__/admin.php/Login/login">&nbsp管理员登陆&nbsp</a></li>
     	 	  <li><a href="__ROOT__/index.php/Index/index">&nbsp首页&nbsp</a></li>
     	 	 <li><a href="__ROOT__/index.php/Index/about">&nbsp关于我们&nbsp</a></li>
     	 </ul>
     </div>
     <div class="logo"> 
     <img src="__ROOT__/Public/index/images/1.png">
     </div>
     <div class="title">
     <img src="__ROOT__/Public/index/images/write.png">
     </div> 
     <div class="building"></div>
     <div class="zhanghao">
     <form method='post'> 
     <p><font face="arial" color="white">
        报考省份：
        <select name="province">
                  <option value="北京市">北京市</option>
                  <option value="重庆市">重庆市</option>
                  <option value="甘肃省">甘肃省</option>
                  <option value="天津市">天津市</option>
                  <option value="江西省">江西省</option>
                  <option value="河北省">河北省</option>
                  <option value="内蒙古">内蒙古</option>
        </select>
        <br>
        <br>
        考生类型：
        <select name="subject">
                  <option value="文科">文科</option>
                  <option value="理科">理科</option>
        </select>
        <br>
        <br>
     
        考生分数：
            <input type="number" name="score" />
            <br>
            <br>
     <!--    考生排名：
            <input type="text" name="line" /> -->
   
               
                  查询方式：
                  <select name="type">
                  <option value="heigh">按最高分查询</option>
                  <option value="avg">按平均分查询</option>
                  <option value="low">按最低分查询</option>
                  </select>
              </p>
             
        </p>
     </div>
     <div class="denglu">
         <input type="submit" value="" style="background:url(__ROOT__/Public/index/images/chaxun.jpg) no-repeat center;width:213px;height:48px; ">
      
     </div>
       </form>
</div>
   
<div style="width:80%;margin:10px 0 30px 130px;">
   <table>
    <tr style="text-align: center;font-weign:bold;font-size:15px;">
					 <td width="281px">学校</td>
					 <td width="155px">省份</td>
					 <td width="155px">类型</td>
					 <td width="238px">最高分</td>
					 <td width="224px">最低分</td>
					 <td width="224px">平均分</td>
	  </tr>				 
      <tr style="text-align: center;color:black">              
				<?php if(is_array($result)): foreach($result as $key=>$val): ?><tr style="text-align: center;">
					  <td width="281px"><?php echo ($val['name']); ?></td>
					 <td width="155px"><?php echo ($val["provice"]); ?></td>
					 <td width="155px"><?php echo ($val["type"]); ?></td>
					 <td width="238px"><?php echo ($val["heigh"]); ?></td>
					 <td width="224px"><?php echo ($val["low"]); ?></td>
					 <td width="224px"><?php echo ($val["avg"]); ?></td>
	 </tr><?php endforeach; endif; ?>   
										 </table>
</div>
</body>
</html>