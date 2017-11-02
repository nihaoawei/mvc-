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

<div class="rihead"><p style="font-size: 18px;font-weight: bold;margin:20px;">立即注册</p></div>
<form class="popup" action="index.php?m=user&a=doRegister" method="post">
  
    <br />
    <p>
        <label for="username2">用&nbsp;户&nbsp;名&nbsp;：</label>
        <input class="inp" id="username2" type="text" name="username" placeholder="请输入用户名"/>
    </p>
    <br>
    <p>
        <label for="password2">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码&nbsp;：</label>
        <input class="inp" id="password2" name="pass" type="password" placeholder="请输入密码"/>
    </p>
    <p>
        <label for="password2">确认密码：</label>
        <input class="inp" id="password2" name="repass" type="password" placeholder="确认密码">
    </p>
    <p>
        <label for="password2">联系电话：</label>
        <input class="inp" id="password2" name="phone" type="text" placeholder="请输入联系电话">
    </p>
	<div id="embed-captcha"></div>
    <p id="wait" class="show">正在加载验证码......</p>
    <p id="notice" class="hide">请先完成验证</p>

    <br>
    <input class="btn" id="embed-submit" type="submit" value="提交" />
</form>

<?php include "cache/tpl/721c824130dd8e3b46b71535bd749bbb.php" ;?>