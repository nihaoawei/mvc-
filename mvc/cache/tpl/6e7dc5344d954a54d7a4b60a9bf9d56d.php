<?php include "cache/tpl/57864b256b9cbcc447ad6e28b7a55608.php" ;?>

		<div class="hr grid_12 clearfix"></div>


		<!-- =heading_page -->
		<aside>
			<h2 class="grid_12 heading_page clearfix">MY <span>LOVES</span></h2>
		</aside>

		<div class="hr grid_12 clearfix"></div>
		
		
		<!-- PORTOFLIO ITEMS -->
		
		<!-- GROUP 1 -->
		<div class="portfolio_cat_group clearfix">
		
			<div class="breadcrumbs"><a href="index.html">主页</a> / 所爱之所想</div>
			
			<!-- Row 1 -->
			<section class="grid_3 textright"  id="game">
				
				<header>
					<h3 class="title " id="pager">GAME</h3>
				</header>

				<span class="meta" >游戏之王</span>
				
				<div class="hr clearfix dotted"></div>

				<p class="portfolio_cat_desc">无限时空中，时光的洪流汇聚于同一片大陆。机关术与魔道肆虐，让世界面目全非。英雄，那些熟知的名字，不可思议的聚集在一起。抛却了过往荣光，遵循野心与欲望，随心所欲寻求力量，乃至彼此追逐杀戮。
而在一个又一个传奇的背后，召唤师的身影时隐时现，没错，他们，才是历史真正的创造者，生存或者毁灭，战争，似乎永无止境。</p>

			</section>
			<!-- grid_3 textright -->

			<!-- portfolio_items_group -->
			<section class="grid_9 portfolio_items_group">
				<?php if(!empty($yxrw)): ?>
				<?php foreach($yxrw[0] as $key=>$val) :?>
				<article>
					<a class="portfolio_item float left_zero isvideo_mini" href="index.php?m=details&a=details&yid=<?=$val['yid'];?>">
						<header><span><?=$val['yname'];?></span></header>
						<figure><img style="width:198px;height:142px;" class="" src="<?=$val['ypic'];?>"  alt="<?=$val['yname'];?>"/></figure>
					</a>
				</article>
				<?php endforeach;?>
				<?php endif;?>
			</section><!-- grid_9 portfolio_items_group -->
			<aside class="grid_12 view_all">
					
					    <nav style="float: right;margin-right:80px;" class="pagination pagination-blue">

					      <a href="<?=$suibi[1]['last'];?>#pager" class="next">&gt;</a>
					      <a href="index.php?m=like&a=likeindex&page=5?#pager">5</a>
					      <a href="index.php?m=like&a=likeindex&page=4?#pager">4</a>
					      <a href="index.php?m=like&a=likeindex&page=3?#pager">3</a>
					      <a href="index.php?m=like&a=likeindex&page=2?#pager">2</a>
					      <a href="index.php?m=like&a=likeindex&page=1?#pager">1</a>
					      <a href="<?=$suibi[1]['first'];?>#pager" class="prev">&lt;</a>
					    </nav>
					    <a href="index.php?m=fatie&a=fatie" style="float: left; width:100px;height: 50px;text-align: center;line-height: 50px; margin-left:50px;" class="textlink">发帖</a>
			</aside><!-- .grid_12 .view_all -->
		</div><!-- portfolio_cat_group -->
			
		
		<div class="pr clearfix grid_12"></div>
		

		<!-- GROUP 2 -->
		<section class="portfolio_cat_group clearfix" id="picture">
			
			<!-- Row 1 -->
			<section class="grid_3 textright" >
				
				<header>
					<h3 class="title " id="pager3">PICTURE</h3>
				</header>

				<span class="meta" >美图推荐</span>
				
				<div class="hr clearfix dotted"></div>
				
				<p class="portfolio_cat_desc">一步踏尽一树白 一桥轻雨一伞开 一梦黄粱一壶酒 一身白衣一生裁</p>

			</section><!-- grid_3 textright -->

			<!-- portfolio_items_group -->
			<section class="grid_9 portfolio_items_group">
				<?php if(!empty($tupian)): ?>
				<?php foreach($tupian[0] as $key=>$val) :?>
				<article>
					<span class="portfolio_item float left_zero isphoto_mini" href="portfolio_single.html">
						<figure><img style="width:198px;height:142px;" class="" src=<?=$val['url'];?>  alt=""/></figure>
					</span>
				</article>
				<?php endforeach;?>
				<?php endif;?>
	
			</section><!-- grid_9 portfolio_items_group -->
			<nav style="float: right;margin-right:80px;" class="pagination pagination-blue">
					      <a href="<?=$tupian[1]['first'];?>#pager3" class="prev">&lt;</a>
					      <a href="index.php?m=like&a=likeindex&page=1#pager3">1</a>
					      <a href="index.php?m=like&a=likeindex&page=2#pager3">2</a>
					      <a href="index.php?m=like&a=likeindex&page=3#pager3">3</a>
					      <a href="index.php?m=like&a=likeindexpage=4#pager3">4</a>
					      <a href="index.php?m=like&a=likeindexpage=5#pager3">5</a>
					      <a href="<?=$tupian[1]['last'];?>#pager3" class="next">&gt;</a>
					      
					    </nav>
		</section><!-- portfolio_cat_group -->


		<div class="pr clearfix grid_12"></div>


		<!-- GROUP 3 -->
		<section class="portfolio_cat_group clearfix" id="suibi">
			
			<!-- Row 1 -->
			<section class="grid_3 textright" >
				
				<header><h3 class="title" id="pager2" >PROSE</h3></header>
				<span class="meta">Never lose a lovely prose!</span>
				
				<div class="hr clearfix dotted"></div>
				
				<p class="portfolio_cat_desc">我将红尘里的江山看了一场，不过是起落浮沉数年的时光；朱红的新纱覆了落尘的旧梦，年少的女子爱上年少的郎。我将红尘里的江山看了一场，人物与是非在岁月里淌；层层后浪拥着前浪，今朝的美酒醉倒今朝的倜傥。一时明月，一时花黄，我在红尘里的江山中回头望，阑珊的灯火处阑珊的一方，多少年前的风景，多少年后的模样。</p>

			</section><!-- grid_3 textright -->

			<!-- portfolio_items_group -->
			<section class="grid_9 portfolio_items_group">
				<?php if(!empty($suibi)): ?>
				<?php foreach($suibi[0] as $key=>$val) :?>
				<article>
					<a class="portfolio_item float left_zero isvideo_mini" href="index.php?m=details&a=detailsSui&sid=<?=$val['sid'];?>">
						<header><span><?=$val['sname'];?></span></header>
						<figure><img style="width:198px;height:142px;" class="" src="<?=$val['spic'];?>"  alt="<?=$val['stitle'];?>"/></figure>
					</a>
				</article>
				<?php endforeach;?>
				<?php endif;?>
			</section><!-- grid_9 portfolio_items_group -->
			<aside class="grid_12 view_all">
					
					    <nav style="float: right;margin-right:80px;" class="pagination pagination-blue">
					      <a href="<?=$suibi[1]['last'];?>#pager2" class="next">&gt;</a>
					      <a href="index.php?m=like&a=likeindex&page=5?#pager2">5</a>
					      <a href="index.php?m=like&a=likeindex&page=4?#pager2">4</a>
					      <a href="index.php?m=like&a=likeindex&page=3?#pager2">3</a>
					      <a href="index.php?m=like&a=likeindex&page=2?#pager2">2</a>
					      <a href="index.php?m=like&a=likeindex&page=1?#pager2">1</a>
					      <a href="<?=$suibi[1]['first'];?>#pager2" class="prev">&lt;</a>
					    </nav>
					     <a href="index.php?m=fatie&a=fasui" style="float: left; width:100px;height: 50px;text-align: center;line-height: 50px; margin-left:50px;" class="textlink">发文章</a>
			</aside><!-- .grid_12 .view_all -->
		</section><!-- portfolio_cat_group -->
			
		<div class="hr grid_12 clearfix"></div>
		
	</div><!-- #container -->
	
	<?php include "cache/tpl/721c824130dd8e3b46b71535bd749bbb.php" ;?>