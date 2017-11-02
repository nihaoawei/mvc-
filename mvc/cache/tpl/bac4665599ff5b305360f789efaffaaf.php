<?php include "cache/tpl/57864b256b9cbcc447ad6e28b7a55608.php" ;?>
<script type="text/JavaScript" src="./public/ckeditor/ckeditor.js"></script>
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
            width: 500px;
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
<div class="fatie_top" style="margin: 0 20px;">
			<p  style="font-size: 18px;font-weight: bold;margin:20px;">发表帖子</p>
		</div>
		
		<div style="margin: 0  20px;" class="fatie_content clearFix">
			<form action="index.php?m=fatie&a=doFasui" method="post" enctype="multipart/form-data">
				随笔图片：<input  type="file" name="tupian" /><br/>
                随笔名字：<input class="inp"  type="text" name="sname" value="" class="content" /><br />
				随笔标题：<input class="inp"  type="text" name="stitle" value="" class="content" />
				<label>可输入 <b>80</b> 个字符</label>
				<br />
				<br />
				<br />
				<textarea id="ckeditor" class="ckeditor" name="scontent"></textarea>
				<div id="embed-captcha"></div>
			    <p id="wait" class="show">正在加载验证码......</p>
			    <p id="notice" class="hide">请先完成验证</p>

			    <input class="btn" id="embed-submit" type="submit" value="提交" />
							
			</form>
		</div>

<?php include "cache/tpl/721c824130dd8e3b46b71535bd749bbb.php" ;?>