<?php include "cache/tpl/57864b256b9cbcc447ad6e28b7a55608.php" ;?>
<style>
		.zhuce{
			float: left;
			color:#fff;
		}
		.popup{
			margin-left:300px;
		}
        .inp {
            border: 1px solid gray;
            padding: 0 10px;
            width: 200px;
            height: 30px;
            font-size: 15px;
        }
        .btn {
            border: 1px solid gray;
            width: 100px;
            height: 30px;
            font-size: 15px;
            cursor: pointer;
        }
        #embed-captcha {
            width: 300px;
        }
        .show {
            display: block;
        }
        .hide {
            display: none;
        }
        #notice {
            color: red;
        }
    </style>
<div class="zhmm_top">
				<p style="font-size: 18px;font-weight: bold;margin:20px;">修改资料</p>
				<p style="font-size: 14px;font-weight: bold;margin:20px;">您必须填写旧密码才能修改下面的资料</p>
			</div>
			<form action="index.php?m=user&a=xgzl" method="post" enctype="multipart/form-data">
			<div class="zhmm_bottom">
				<div class="yh_tb">
					<p>
				        <label for="username2">旧&nbsp;&nbsp;&nbsp;&nbsp;密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：&nbsp;&nbsp;&nbsp;&nbsp;</label>
				        <input class="inp" id="username2" type="password" name="orderpass" value=""/>
				    </p>
					<p>
						<img style="width:54px;height:54px;padding:5px;background: #ccc;margin:10px 50px;" src="<?=$users[0]['picture'];?>" />
						<br/>
						<label for="username2">上&nbsp;&nbsp;&nbsp;传&nbsp;&nbsp;&nbsp;&nbsp;头&nbsp;&nbsp;&nbsp;像：&nbsp;&nbsp;&nbsp;</label>
				        <input type="file" name="touxiang"/>
					</p>
					<p>
				        <label for="username2">用&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;户&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
				        <input class="inp" id="username2" type="text" name="username" value="<?=$users[0]['uname'];?>"/>
				    </p>
				    <p>
				        <label for="username2">修&nbsp;&nbsp;&nbsp;改&nbsp;&nbsp;&nbsp;&nbsp;密&nbsp;&nbsp;&nbsp;码：&nbsp;&nbsp;&nbsp;</label>
				        <input class="inp" id="username2" type="password" name="pass" value=""/>

						如不需要更改密码，此处请留空
 
				    </p>
				    <p>
				        <label for="username2">确&nbsp;&nbsp;&nbsp;认&nbsp;&nbsp;&nbsp;&nbsp;密&nbsp;&nbsp;&nbsp;码：&nbsp;&nbsp;&nbsp;</label>
				        <input class="inp" id="username2" type="password" name="repass" value=""/>
				        如不需要更改密码，此处请留空
				    </p>
					
					 <p>
				        <label for="password2">联&nbsp;&nbsp;&nbsp;系&nbsp;&nbsp;&nbsp;&nbsp;电&nbsp;&nbsp;&nbsp;话：&nbsp;&nbsp;&nbsp;</label>
				        <input class="inp" id="password2" name="phone" type="text" value="<?=$users[0]['phone'];?>">
				    </p>
				    <div id="embed-captcha"></div>
					    <p id="wait" class="show">正在加载验证码......</p>
					    <p id="notice" class="hide">请先完成验证</p>

					    <br>
					    <input class="btn" id="embed-submit" type="submit" value="提交" />
					</div>
			</div>
<?php include "cache/tpl/721c824130dd8e3b46b71535bd749bbb.php" ;?>