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
				<p style="font-size: 18px;font-weight: bold;margin:20px;">帖子管理</p>
			</div>
    <div style="height:400px;">
	<nav id="nt_nav" style="float: left;">
		<ul id="navigation" class="grid_8">
		<li style="width:200px;"><a href="index.php?m=guanli&a=guanli"><span class="meta"></span><br />管理选项</a>
					<ul class="sub-menu"> 
						<li><a href="index.php?m=guanli&a=userGuan">用户管理</a></li>
						<li><a href="index.php?m=guanli&a=tieGuan">帖子管理</a></li>
						<li><a href="index.php?m=guanli&a=huiGuan">回帖管理</a></li>
						<?php if($isclose[0]['close'] == 0): ?>

						<li><a href="index.php?m=guanli&a=guanli&close=yes">关闭博客仅自己可见</a></li>
						<?php elseif($isclose[0]['close'] == 1) : ?>			
						<li><a href="index.php?m=guanli&a=guanli&close=no">开启博客所有人可见</a></li>
						<?php endif;?>
					</ul>
			</li>
		</ul>
	</nav>
	<div class="tzgl" style="float:right">
			<div class="tzgltail">

			<p style="font-size: 15px;font-weight: bold;margin:20px;">主题数<?=$tieCount;?></p>
				<div class="line clearFix">
				<ul  class="li">
					<li style="float: left;list-style: none;width:170px;" class="two jiacu">帖子名</li>

					<li style="float: left;list-style: none;width:170px;" class="two jiacu">帖子标题</li>
					<li style="float: left;list-style: none;width:170px;" class="four jiacu">最后发表时间</li>
				</ul>
				</div>
				<form action="index.php?m=guanli&a=tieGuan" method="get">

				<input class="one" type="hidden" name="m" value="guanli" /><br/>
				<input class="one" type="hidden" name="a" value="tieGuan" /><br/>
				<?php if(!empty($ties)): ?>
				<?php foreach($ties as $key=>$val) :?>
					<p class="tiezigl">
						<input type="checkbox" name="id[]" value="<?=$val['yid'];?>" />
						<em  style="width:170px;display: inline-block;" class="em2"><?=$val['yname'];?></em>
						<em  style="width:170px; height:20px ;display: inline-block; overflow: hidden;" class="em2"><?=$val['title'];?></em>
						<em style="width:170px;display: inline-block;" class="em1"><?php echo date('Y-m-d H:m:s' ,$val['addtime']) ?></em>
						
					</p>
				<?php endforeach;?>
				<?php endif;?>
					<br/>
					<input type="submit" name="del" value="删除帖子">
				</form>
			</div>
		</div>
</div>
<div class="clear"></div>
		
<?php include "cache/tpl/721c824130dd8e3b46b71535bd749bbb.php" ;?>


















