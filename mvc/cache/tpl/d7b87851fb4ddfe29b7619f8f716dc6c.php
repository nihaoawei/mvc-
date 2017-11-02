<?php include "cache/tpl/57864b256b9cbcc447ad6e28b7a55608.php" ;?>
<script type="text/JavaScript" src="./public/ckeditor/ckeditor.js"></script>

		<div class="hr grid_12 clearfix"></div>

		<!-- =heading_page -->
		<aside>
			<h2 class="grid_12 heading_page clearfix"><span>游戏之王King of the game</span><time datetime="<?php echo date('M m-d ,Y  H:i:s' , $detail[0]['addtime']);?>" class="postdate"><?php echo date('M m-d ,Y  H:i:s' , $detail[0]['addtime']);?></time></h2>
		</aside>
		
		<div class="hr grid_12 clearfix"></div>
	

		<!-- START PROJECT -->
		<!-- Left Column / Project -->
		<section class="project grid_12">
			
			<aside id="left_col_portfolio_single" class="grid_4">
			
				<div class="breadcrumbs"><a href="index.html">主页</a> / <a href="index.php?m=Like&a=likeindex">所爱之所想</a> / 游戏之王</div>
				
				<ul class="project_info">
					<li class="title"><img style="width:200px;height:200px;" src="public/images/diaochan.jpg"/></li>
					<li class="title"><img style="width:200px;height:200px;" src="public/images/yuji.jpg"/></li>
					<li class="title"><img style="width:200px;height:200px;" src="public/images/liyuan.jpg"/></li>
				</ul>
				<p class="text-project"><img style="width:200px;height:200px;" src="public/images/wuzhetian.jpg"/></p>
				<p><img style="width:200px;height:200px;" src="public/images/sunshangxiang.jpg"/></p>
				<figure><img class="float_left" style="width:200px;height:200px;" src="public/images/miyue.jpg" /></figure>
			</aside><!-- #left_col_portfolio_single .grid_4 -->
		
			<!-- Right Column -->
			<article id="project_right_col" class="grid_8 cleafix">

				<!-- Post Data -->
				<p class="sub"><strong class="tag_bg"></strong><a class="catlink" href="#"><?=$detail[0]['yname'];?></a> <a class="catlink" href="#">法师</a> <a class="catlink" href="#">脆皮</a><a class="commentlink" href="index.php?m=details&a=details&yid=<?=$detail[0]['yid'];?>#huitie"><?=$countHui;?></a></p>
				
				<!-- Post Image -->
				<figure>
					<a href="https://baike.baidu.com/item/%E5%B0%8F%E4%B9%94/19543935?fr=aladdin#2"  title="查看详情">
					<img class="thumb" alt="<?=$detail[0]['yname'];?>" style="width:640px;height:300px;" src="<?=$detail[0]['ypic'];?>" /></a>
				</figure>
				
				<div class="hr clearfix"></div>
				
				<!-- Post Content -->
				<header><p style="font-size:18px;"><b>背景故事</b></p></header>
				<p class="text_project"><b><?=$detail[0]['title'];?></b></p>
				<div class="comment_text">
						<p><?=$detail[0]['content'];?></p>
				</div><!-- comment_text -->

				<p><a class="tooltip" href="https://baike.baidu.com/item/%E5%B0%8F%E4%B9%94/19543935?fr=aladdin#2" target="_blank" title="Visit Our Portfolio">查看更多</a></p>
				<?php if(!empty($detail[0]['jineng'])): ?>
				<header><p style="font-size:18px;"><b>英雄技能</b></p></header>
				<p><?=$detail[0]['jineng'];?></p>
				<?php endif;?>
				
				<!-- Utilities -->
				<footer>
					<p class="utilities clearfix">
						<a href="index.php?m=like&a=likeindex" class="textlink right">Read More</a>
					</p>
				</footer>
			
			
			
			<div class="hr clearfix"></div>
			
			<!-- =RESPONSE -->
			<section class="response">
			<!-- Comment -->
				<header id="huitie"><p style="font-size:18px;"><b><?=$countHui;?>条回复</b></p></header>
			
				<div class="hr dotted clearfix"></div>
			
				<ol class="commentlist">
				
				<!-- COMMENT 1 -->
				<?php if(!empty($user)): ?>
				<?php foreach($user as $Key=>$Val) :?>
				<li class="comment bypostauthor">
				
					<div class="gravatar">
						<figure><img alt="" src="<?=$Val['picture'];?>" height="48" width="48" /></figure>
						<a class="comment-reply-link" href="index.php?m=details&a=details&yid=<?=$detail[0]['yid'];?>#huifu">回复</a>
					</div><!-- .gravatar -->
				
					<div class="comment_content">
						<div class="clearfix">
							<time datetime="<?php echo date('M m-d ,Y  H:i:s' , $Val['addtime']);?>" class="comment-meta commentmetadata"><?php echo date('M m-d ,Y  H:i:s' , $Val['addtime']);?></time><br/>
						<cite class="author_name"><?=$Val['uname'];?></cite>
						</div>
						<div class="comment_text">
							<p><?=$Val['content'];?></p>
						</div><!-- comment_text -->
					</div><!-- .comment_content -->
				</li><!-- .comment -->
				<?php endforeach;?>
				<?php endif;?>
				<!-- END COMMENT 1 -->
				
				
				

				</ol><!-- .commentlist -->
			
				<div class="hr clearfix"></div>
			
				<!-- Comment Form -->
				<form id="comment_form" action="index.php?m=details&a=dohuifu" method="post" > 
					<h3 id = "huifu">Add a comment</h3>
					<div class="hr dotted clearfix"></div>
						
						<input type="hidden" name="tid" value="<?=$detail[0]['yid'];?>" />
						<div class="textarea"><textarea id="ckeditor" class="ckeditor" name="content"></textarea></div>
						<input type="submit" value="发表回复"class="bt_hui"/>
						</form>

			</section><!-- response -->
			
			</article><!-- #project_right_col -->
		
		</section><!-- .project -->

		<div class="hr grid_12 clearfix"></div>
		
	</div><!-- #container -->
<?php include "cache/tpl/721c824130dd8e3b46b71535bd749bbb.php" ;?>