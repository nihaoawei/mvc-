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
				<p style="font-size: 18px;font-weight: bold;margin:20px;">用户管理</p>
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
	<div class="zt" style="float: right;" >
			
			<p style="font-size: 15px;font-weight: bold;margin:20px;">共有<?=$userCount;?>条用户记录</p>
				<div class="line clearFix">
				<ul  class="li">
					<li style="float: left;list-style: none;width:170px;" class="two jiacu">用户名</li>
					<li style="float: left;list-style: none;width:170px;" class="four jiacu">注册时间</li>
					<li style="float: left;list-style: none;width:170px;" class="five jiacu">用户类型</li>
				</ul>
				</div>
			
				<form action="index.php" method="get">
				<input class="one" type="hidden" name="m" value="guanli" /><br/>
				<input class="one" type="hidden" name="a" value="userGuan" /><br/>
				<?php if(!empty($user)): ?>
					<?php foreach($user as $key => $val) :?>
						<div class="line clearFix">
							<div class="li">
								
								<input class="one" type="checkbox" name="id[]" value="<?=$val['uid'];?>" />
								<a style="width:170px;display: inline-block;" class="two" href="#"><?=$val['uname'];?></a>
								<span style="width:170px;display: inline-block;" class="four"> <?php echo date( 'Y-m-d H:i:s' , $val['rtime'])?></span>
								<span style="width:170px;display: inline-block;" class="six">
									<?php if($val['loginlock'] == 0): ?>
									<a href="index.php?m=guanli&a=userGuan&id=<?=$val['uid'];?>&lock=no">锁定用户</a>
									<?php elseif($val['loginlock'] >= 5) : ?>
									<a href="index.php?m=guanli&a=userGuan&id=<?=$val['uid'];?>&unlock=yes">解锁</a>
									<?php endif;?>
								</span><br />
							</div>
						</div>
					<?php endforeach;?>
					<?php endif;?>
					<input type="submit" name="delete" style="background:#ccc; margin-left:30px;width:50px;" class="btn" value="delete" id="embed-submit" />
				</form>
				
				
			
		</div>
</div>
<div class="clear"></div>
		
<?php include "cache/tpl/721c824130dd8e3b46b71535bd749bbb.php" ;?>


















