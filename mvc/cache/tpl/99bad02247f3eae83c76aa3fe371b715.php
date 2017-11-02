<meta charset="utf-8" />
<style>
	*{
		margin:0;
		padding:0;
		font-size:12px;
	}
	a{
		color:#333;
	}
	.login {
		width:300px;
		height:68px;
		padding-top: 10px;
		float:right;
	}
	.login img{
		padding: 2px;
		width: 48px;
		height: 48px;
		background: #FFF;
		border: 1px solid #cdcdcd;
		float:right;
	}
	.login .user{
		padding-left: 16px;
		background: url('./public/images/user_online.gif') no-repeat 0 2px;
		font-weight:bold;
	}
	.login p{
		height:22px;
		text-align:right;
		padding:2.5px;
	}
	.login a{
		padding: 0 5px;
		border-right:1px solid #D5CCD5;
	}
	
</style>
<div class="login">

	<img src="<?=$result[0]['picture'];?>">
	<p>
		<a href="index.php?m=user&a=xgzl" class="user"><?=$_SESSION['uname'];?></a>
		<br/>
		<a href="index.php?m=user&a=xgzl">修改资料</a>
		<?php if($_SESSION['utype']==1): ?>
		<a href="index.php?m=guanli&a=guanli">管理中心</a>
		<?php endif;?>
		<a href="index.php?m=user&a=outLogin">退出</a>
	</p>
</div>
