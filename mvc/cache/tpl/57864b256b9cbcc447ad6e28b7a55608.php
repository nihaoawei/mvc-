<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<title>啦啦啦</title>
	<meta charset="utf-8">
	<!-- <link rel="stylesheet" href="public/css/bootstrap.css"> -->
	<link rel="stylesheet" href="public/css/style3.css">
	<link rel="stylesheet" href="public/css/style.css?v=1">

	<!-- CSS : load Skins 
	<link rel="stylesheet" href="public/css/gray.css">
	<link rel="stylesheet" href="public/css/light.css">
	<link rel="stylesheet" href="public/css/green.css">
	<link rel="stylesheet" href="public/css/green_strong.css">
	<link rel="stylesheet" href="public/css/olive.css">
	<link rel="stylesheet" href="public/css/military.css">
	<link rel="stylesheet" href="public/css/blue.css">
	<link rel="stylesheet" href="public/css/blue_light.css">
	<link rel="stylesheet" href="public/css/blue_navy.css">
	<link rel="stylesheet" href="public/css/brown_dark.css">
	<link rel="stylesheet" href="public/css/brown_orange.css">
	<link rel="stylesheet" href="public/css/brown.css">
	<link rel="stylesheet" href="public/css/orange.css">
	<link rel="stylesheet" href="public/css/ocra.css">
	<link rel="stylesheet" href="public/css/red.css">
	<link rel="stylesheet" href="public/css/violet.css">
	<link rel="stylesheet" href="public/css/wine.css">
	<link rel="stylesheet" href="public/css/grape.css">
	-->

	<!-- =styleswitcher -->
	<link rel="alternate stylesheet" href="public/css/style.css" title="default" />
	<link rel="alternate stylesheet" href="public/css/gray.css" title="gray" />
	<link rel="alternate stylesheet" href="public/css/light.css" title="light" />
	<link rel="alternate stylesheet" href="public/css/green.css" title="green" />
	<link rel="alternate stylesheet" href="public/css/green_strong.css" title="green_strong" />
	<link rel="alternate stylesheet" href="public/css/olive.css" title="olive" />
	<link rel="alternate stylesheet" href="public/css/military.css" title="military" />
	<link rel="alternate stylesheet" href="public/css/blue.css" title="blue" />
	<link rel="alternate stylesheet" href="public/css/blue_light.css" title="blue_light" />
	<link rel="alternate stylesheet" href="public/css/blue_navy.css" title="blue_navy" />
	<link rel="alternate stylesheet" href="public/css/brown_dark.css" title="brown_dark" />
	<link rel="alternate stylesheet" href="public/css/brown_orange.css" title="brown_orange" />
	<link rel="alternate stylesheet" href="public/css/brown.css" title="brown" />
	<link rel="alternate stylesheet" href="public/css/orange.css" title="orange" />
	<link rel="alternate stylesheet" href="public/css/ocra.css" title="ocra" />
	<link rel="alternate stylesheet" href="public/css/red.css" title="red" />
	<link rel="alternate stylesheet" href="public/css/violet.css" title="violet" />
	<link rel="alternate stylesheet" href="public/css/wine.css" title="wine" />
	<link rel="alternate stylesheet" href="public/css/grape.css" title="grape" />
	<link rel="alternate stylesheet" href="public/css/space.css" title="space" />

<style>
.field {
  display:flex;
  position:realtive;
  margin:5em auto;
  width:70%;
  flex-direction:row;
  box-shadow:
   1px 1px 0 rgb(22, 160, 133),
   2px 2px 0 rgb(22, 160, 133),
   3px 3px 0 rgb(22, 160, 133),
   4px 4px 0 rgb(22, 160, 133),
   5px 5px 0 rgb(22, 160, 133),
   6px 6px 0 rgb(22, 160, 133),
   7px 7px 0 rgb(22, 160, 133)
  ;
}

.field>input[type=text],
.field>button {
  display:block;
  font:1.2em 'Montserrat Alternates';
}

.field>input[type=text] {
  flex:1;
  padding:0.6em;
  border:0.2em solid rgb(26, 188, 156);
}

.field>button {
  padding:0.6em 0.8em;
  background-color:rgb(26, 188, 156);
}
</style>
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]--> 

	<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" media="all" href="public/css/ie7.css" />
		<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
	<![endif]-->
	
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" media="all" href="public/css/ie7.css" />
	<![endif]-->
				
	<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
	<script src="public/js/modernizr-1.5.min.js"></script>
<!-- Let's Start! -->
	<div id="wrapper" class="clearfix">

		<!-- =styleswitcher -->
		<div id="styleswitcher">
			<ul>
				<li class="t_skins">Styleswitcher</li>
				<li><a href="#" onClick="setActiveStyleSheet('default'); return false;">Default</a></li>
				<li><a href="#" onClick="setActiveStyleSheet('gray'); return false;">Gray</a></li>
				<li><a href="#" onClick="setActiveStyleSheet('light'); return false;">Light</a></li>
				<li><a href="#" onClick="setActiveStyleSheet('green'); return false;">Green</a></li>
				<li><a href="#" onClick="setActiveStyleSheet('green_strong'); return false;">Green Strong</a></li>
				<li><a href="#" onClick="setActiveStyleSheet('olive'); return false;">Olive</a></li>
				<li><a href="#" onClick="setActiveStyleSheet('military'); return false;">Military</a></li>
				<li><a href="#" onClick="setActiveStyleSheet('blue'); return false;">Blue</a></li>
				<li><a href="#" onClick="setActiveStyleSheet('blue_light'); return false;">Blue Light</a></li>
				<li><a href="#" onClick="setActiveStyleSheet('blue_navy'); return false;">Blue Navy</a></li>
				<li><a href="#" onClick="setActiveStyleSheet('brown_dark'); return false;">Brown Dark</a></li>
				<li><a href="#" onClick="setActiveStyleSheet('brown_orange'); return false;">Brown Orange</a></li>
				<li><a href="#" onClick="setActiveStyleSheet('brown'); return false;">Brown</a></li>
				<li><a href="#" onClick="setActiveStyleSheet('orange'); return false;">Orange</a></li>
				<li><a href="#" onClick="setActiveStyleSheet('ocra'); return false;">Ocra</a></li>
				<li><a href="#" onClick="setActiveStyleSheet('red'); return false;">Red</a></li>
				<li><a href="#" onClick="setActiveStyleSheet('violet'); return false;">Violet</a></li>
				<li><a href="#" onClick="setActiveStyleSheet('wine'); return false;">Wine</a></li>
				<li><a href="#" onClick="setActiveStyleSheet('grape'); return false;">Grape</a></li>
				<li><a href="#" onClick="setActiveStyleSheet('space'); return false;">Space</a></li>
			</ul>
		</div>

		<div id="container" class="container_12 clearfix">
	
			
<!-- =Header -->
			<header id="header" class="grid_12">
		
				<!-- =Logo -->
				<div class="sy_center">
				<h1 id="logo" class="grid_4">
					<a href="index.php"><img style="width:80px;" src="public/images/logo.png" alt="Lab" /></a>
					
					
				</h1>
				
				
				<form class="field" id="searchform" action="index.php?a=index&a=sreach" method="post">
				  <input type="text" id="searchterm" name="keys" placeholder="what are you searching for?" />
				  <button type="submit" id="search">Find!</button>
				</form>
				<?php if(isset($_SESSION['uname']) && !empty($result)): ?>
					<?php include "cache/tpl/99bad02247f3eae83c76aa3fe371b715.php" ;?>
				
				<?php else : ?>
				<form action="index.php?m=user&a=doLogin" method="post">
					<div class="yonghu">
						<span class="yhm">用户名</span>
						<input type="text" name="username" placeholder="请输入用户名" class="kuang"/>
						<a href="index.php?m=zhmm&a=zhmm">找回密码</a><br />
						<span class="yhm">密码</span>
						<input type="password" name="password" placeholder="请输入密码" class="kuang"/>
						<input type="submit" value="登陆" class="dl" />
						<a href="index.php?m=user&a=register">立即注册</a>
						
					</div>
				</form>
				<?php endif;?>
			</div>

				<!-- =Menu -->
				
				<nav id="nt_nav">
					<ul id="navigation" class="grid_8">
			
						<li><a href="contact.html"><span class="meta">Spring</span><br />注册</a>
							<ul class="sub-menu"> 
								<li><a href="index.php?m=user&a=register">注册</a></li>
								<li><a href="index.php?m=Zhmm&a=zhmm">找回密码</a></li>
								
							</ul>
						</li>
						<li><a href="index.php?m=like&a=likeindex"><span class="meta">summer</span><br />所爱之我所想</a>
							<ul class="sub-menu"> 
								<li><a href="index.php?m=like&a=likeindex#game">游戏之王</a></li>
								<li><a href="index.php?m=like&a=likeindex#picture">好图推荐</a></li>
								<li><a href="index.php?m=like&a=likeindex#suibi">随笔心生</a></li>
							</ul>
						</li><!-- end portfolio -->
						<!-- <li><a href="about.html"><span class="meta">autumn</span><br />About Lab</a> -->
							<!-- <ul class="sub-menu"> 
								<li><a href="full_width.html">Full Width Page</a></li>
								<li><a href="single.html">Single Page</a></li>
								<li><a href="#">Submenu</a>
									<ul class="sub-menu"> 
										<li><a href="#">Submenu Item</a></li>
										<li><a href="#">Submenu Item</a></li>
										<li><a href="#">Submenu Item</a></li>
										<li><a href="#">Submenu Item</a></li>
									</ul> 
								</li>
								<li><a href="typography.html">Typography</a></li>
							</ul> 
						</li><!-- end about --> 

						<li><a href="index.php?m=set&a=zwjs"><span class="meta">autumn</span><br />博客</a>
							<ul class="sub-menu"> 
								<li><a href="index.php?m=set&a=zwjs">自我介绍</a></li>
								<li><a href="index.php?m=user&a=xgzl">个人资料</a></li>
								
							</ul>
						</li>
						<li><a href="index.php" class="current"><span class="meta">winter</span><br />主页</a></li>
					</ul>
				</nav><!-- #nt_nav -->
			
				<div class="clear"></div>

			</header><!-- #header -->