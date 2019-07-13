<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"F:\phpStudy\WWW\tp5.0.24\public/../apps/index\view\selfinfo\self_info.html";i:1562985473;s:59:"F:\phpStudy\WWW\tp5.0.24\apps\index\view\public\header.html";i:1563009933;s:57:"F:\phpStudy\WWW\tp5.0.24\apps\index\view\public\foot.html";i:1562568428;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <meta name="author" content="order by dede58.com"/>
		<title>小米商城-个人中心</title>
		<link rel="stylesheet" type="text/css" href="/static/index/css/style.css">
		<style>
			span > input{
				color:dimgray ;
				width: 600px;
				background-color: transparent ;
				border: 0 ;
				outline: 0 ;
			}
		</style>
	</head>
	<body>
	<!-- start header -->
	<header>
	<div class="top center">
		<div class="left fl">
			<ul>
				<li><a href="http://www.mi.com/" target="_blank">小米商城</a></li>
					<li>|</li>
					<li><a href="">MIUI</a></li>
					<li>|</li>
					<li><a href="">米聊</a></li>
					<li>|</li>
					<li><a href="">游戏</a></li>
					<li>|</li>
					<li><a href="">多看阅读</a></li>
					<li>|</li>
					<li><a href="">云服务</a></li>
					<li>|</li>
					<li><a href="">金融</a></li>
					<li>|</li>
					<li><a href="">小米商城移动版</a></li>
					<li>|</li>
					<li><a href="">问题反馈</a></li>
					<li>|</li>
					<li><a href="">Select Region</a></li>
					<div class="clear"></div>
				</ul>
		</div>
	    <div class="right fr">
	    	<div class="gouwuche fr"><a href="<?php echo url('Shopcar/index'); ?>">购物车</a></div>
	    	<div class="fr">
	    		<ul class="fr_ul">
	    			<li><a href="<?php echo url('Login/index'); ?>" target="_blank">登录</a></li>
	    			<li>|</li>
	    			<li><a href="<?php echo url('Reg/index'); ?>" target="_blank" >注册</a></li>
				</ul>
				<div class="headimg">
						<a href="<?php echo url('Selfinfo/index'); ?>" ><img src="<?php echo \think\Cookie::get('src'); ?>" alt="头像"  width="40px" height="40px" style="border-radius: 100%;"></a>
						<script src="/static/index/js/jquery.js"></script>
						<script>
							$(function()
							{
								var session="<?php echo \think\Session::get('name'); ?>";
								if (session) {
									$('.fr_ul').hide();
									$('.headimg').show();
								} else {
									$('.fr_ul').show();
									$('.headimg').hide();
								}
							});
						</script>
				</div>
			</div>
	    	<div class="clear"></div>
	    </div>
		<div class="clear"></div>
	</div>
</header>
<!-- banner-x -->
<div class="banner_x center">
	<a href="<?php echo url('Index/index'); ?>" target="_blank"><div class="logo fl"></div></a>
	<a href=""><div class="ad_top fl"></div></a>
	<div class="nav fl">
		<ul>
			<li><a href="<?php echo url('Lists/index'); ?>" target="_blank">小米手机</a></li>
			<li><a href="">红米</a></li>
			<li><a href="">平板·笔记本</a></li>
			<li><a href="">电视</a></li>
			<li><a href="">盒子·影音</a></li>
			<li><a href="">路由器</a></li>
			<li><a href="">智能硬件</a></li>
			<li><a href="">服务</a></li>
			<li><a href="">社区</a></li>
		</ul>
	</div>
	<div class="search fr">
		<form action="" method="post">
			<div class="text fl">
				<input type="text" class="shuru"  placeholder="小米6&nbsp;小米MIX现货">
			</div>
			<div class="submit fl">
				<input type="submit" class="sousuo" value="搜索"/>
			</div>
			<div class="clear"></div>
		</form>
		<div class="clear"></div>
	</div>
</div>
<!-- end-banner-x -->
	<!--end header -->
	<!-- start banner_x -->
		<!-- 在 header.html里面 -->
<!-- end banner_x -->
<!-- self_info -->
	<div class="grzxbj">
		<div class="selfinfo center">
		<div class="lfnav fl">
			<div class="ddzx">订单中心</div>
			<div class="subddzx">
				<ul>
					<li><a href="<?php echo url('Order/index'); ?>" >我的订单</a></li>
					<li><a href="">意外保</a></li>
					<li><a href="">团购订单</a></li>
					<li><a href="">评价晒单</a></li>
				</ul>
			</div>
			<div class="ddzx">个人中心</div>
			<div class="subddzx">
				<ul>
					<li><a href="<?php echo url('Selfinfo/index'); ?>" style="color:#ff6700;font-weight:bold;">我的个人中心</a></li>
					<li><a href="">消息通知</a></li>
					<li><a href="">优惠券</a></li>
					<li><a href="">收货地址</a></li>
				</ul>
			</div>
		</div>
		<div class="rtcont fr">
			<form enctype="multipart/form-data" method="post" >
					<div class="grzlbt ml40">我的资料</div>
					<div class="subgrzl ml40"><span>昵称</span><span><input type="text" name="username" class="name" readonly value="<?php echo \think\Session::get('name'); ?>"></span><span><a href="">编辑</a></span></div>
					<div class="subgrzl ml40"><span>手机号</span><span><input type="text" name="username" class="name" readonly value="15669097417"></span><span><a href="">编辑</a></span></div>
					<div class="subgrzl ml40"><span>头像</span><span><input type="file" name="i" multiple></span><span><input type="submit" formaction="<?php echo url('Selfinfo/upload'); ?>" value="上传"></span></div>
					<div class="subgrzl ml40"><span>个性签名</span><span><input type="text" name="username" class="name" readonly value="一支穿云箭，千军万马来相见！"></span><span><a href="">编辑</a></span></div>
					<div class="subgrzl ml40"><span>我的爱好</span><span><input type="text" name="username" class="name" readonly value="游戏，音乐，旅游，健身"></span><span><a href="">编辑</a></span></div>
					<div class="subgrzl ml40"><span>收货地址</span><span><input type="text" name="username" class="name" readonly value="浙江省杭州市江干区19号大街571号"></span><span><a href="">编辑</a></span></div>
					<div class="subgrzl ml40"><span><a href="">修改密码</a></span><span><a href="">忘记密码</a></span><span><a href="<?php echo url('Selfinfo/exits'); ?>">退出登录</a></span></div>
				</form>
		</div>
		<div class="clear"></div>
		</div>
	</div>
<!-- self_info -->
		
<footer class="mt20 center">			
	<div class="mt20">小米商城|MIUI|米聊|多看书城|小米路由器|视频电话|小米天猫店|小米淘宝直营店|小米网盟|小米移动|隐私政策|Select Region</div>
	<div>©mi.com 京ICP证110507号 京ICP备10046444号 京公网安备11010802020134号 京网文[2014]0059-0009号</div> 
	<div>违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试</div>
</footer>

	</body>
</html>