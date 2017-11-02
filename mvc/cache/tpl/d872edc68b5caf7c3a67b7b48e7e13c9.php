<?php include "cache/tpl/57864b256b9cbcc447ad6e28b7a55608.php" ;?>

<div class="center2">
			<div class="center2_top">
				<p class="zi">结果:找到“<span><?=$keys;?></span>”相关内容<span><?=$sum;?></span>个</p>
				<?php if(empty($sreach)): ?>
				<p>对不起，没有找到匹配结果</p>
				<?php else : ?>
				<?php foreach($sreach as $key=>$val) :?>
				<br />
				<div class="content1">
					<a  style="font-size: 15px;font-weight: bold;" href="index.php?m=details&a=details&yid=<?=$val['yid'];?>"><b><?=$val['title'];?></b></a>
					<br />
					<br/>
					<?=$val['content'];?>
				</div>
				<?php endforeach;?>
				<?php endif;?>
			</div>
		</div>


<div class="clear"></div>

<div class="clear"></div>
<?php include "cache/tpl/721c824130dd8e3b46b71535bd749bbb.php" ;?>