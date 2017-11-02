<?php include "cache/tpl/57864b256b9cbcc447ad6e28b7a55608.php" ;?>
<div style="height:400px;">
	<nav id="nt_nav" style="float: left;">
		<ul id="navigation" class="grid_8">
			<li style="width:200px;"><a style="color:#000" href="index.php?m=guanli&a=guanli"><span class="meta"></span><br />管理选项</a>
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
</div><div class="clear"></div>

<?php include "cache/tpl/721c824130dd8e3b46b71535bd749bbb.php" ;?>