<?php include "cache/tpl/57864b256b9cbcc447ad6e28b7a55608.php" ;?>
<script type="text/JavaScript" src="./public/ckeditor/ckeditor.js"></script>
		<div class="hr grid_12 clearfix"></div>


		<!-- =heading_page -->
		<aside>
			<h2 class="grid_12 heading_page clearfix"><span>随笔而生Born out of essays</span></h2>
		</aside>

		<div class="hr grid_12 clearfix"></div>


		<!-- Left Column -->
		<section id="left_col" class="grid_8">
			
			<!-- BLOG POST 1 - SPIDERMAN -->
			<article class="post">

				<div class="breadcrumbs"><a href="index.html">主页</a> / 随笔而生</div>
				
				<!-- Post Title -->
				<header>
					<p class="title"><a href="single.html"><?=$detailSui[0]['sname'];?></a><time datetime="<?php echo date('M m-d ,Y  H:i:s' , $detailSui[0]['addtime']);?>" class="postdate"><?php echo date('M m-d ,Y  H:i:s' , $detailSui[0]['addtime']);?></time></p>
				</header>

				<!-- Post Data -->
				<p class="sub"><strong class="tag_bg"></strong><a class="catlink" href="#"><?=$detailSui[0]['sname'];?></a> <a class="catlink" href="#">诗词</a> <a class="catlink" href="#">古典</a><a class="commentlink" href="#"><?=$countHuiSui;?></a></p>
				
				<!-- Post Image -->
				<figure>
					<span class="image-holder-medium"><img style="width:640px;height:300px;" class="thumb" alt="" src="<?=$detailSui[0]['spic'];?>" /></span>
				</figure>
			
				<!-- Post Content -->
				<p style="font-size:15px;font-weight:bold;"><?=$detailSui[0]['stitle'];?></p>
				<p><?=$detailSui[0]['scontent'];?></p>
				<!-- Utilities -->
				<footer>
					<p class="utilities clearfix">
						<!--iframe class="like" src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fexample.com%2Fpage%2Fto%2Flike&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=like&amp;colorscheme=light&amp;height=80" style="border:none; overflow:hidden; width:450px; height:80px;"></iframe>
						<a href="http://twitter.com/home/?status=http://demo.mattiaviviani.com/html_templates/lab/" class="social_icon left"><img class="twitter" src="public/images/icons/16px/twitter.png"></a-->
						<a href="index.php?m=like&a=likeindex" class="textlink right">Read More</a>
					</p>
				</footer>

			
			<!-- =RESPONSE -->
			<section class="response">
			<!-- Comment -->
				<header id="huitie"><p style="font-size:18px;"><b><?=$countHuiSui;?>条回复</b></p></header>
			
				<div class="hr dotted clearfix"></div>
			
				<ol class="commentlist">
				
				<!-- COMMENT 1 -->
				<?php if(!empty($userSui)): ?>
				<?php foreach($userSui as $Key=>$Val) :?>
				<li class="comment bypostauthor">
				
					<div class="gravatar">
						<figure><img alt="" src="<?=$Val['picture'];?>" height="48" width="48" /></figure>
						<a class="comment-reply-link" href="index.php?m=details&a=detailsSui&sid=<?=$detailSui[0]['sid'];?>#huifu">回复</a>
					</div><!-- .gravatar -->
				
					<div class="comment_content">
						<div class="clearfix">
							<time datetime="<?php echo date('M m-d ,Y  H:i:s' , $Val['addtime']);?>" class="comment-meta commentmetadata"><?php echo date('M m-d ,Y  H:i:s' , $Val['addtime']);?></time><br/>
						<cite class="author_name"><?=$Val['uname'];?></cite>
						</div>
						<div class="comment_text">
							<p><?=$Val['scontent'];?></p>
						</div><!-- comment_text -->
					</div><!-- .comment_content -->
				</li><!-- .comment -->
				<?php endforeach;?>
				<?php endif;?>
				<!-- END COMMENT 1 -->
				
				
				

				</ol><!-- .commentlist -->
			
				<div class="hr clearfix" id = "huifu"></div>
			
				<!-- Comment Form -->
				<form id="comment_form" action="index.php?m=details&a=dohuifuSui" method="post" > 
					<h3 >Add a comment</h3>
					<div class="hr dotted clearfix"></div>
						
						<input type="hidden" name="tid" value="<?=$detailSui[0]['sid'];?>" />
						<div class="textarea"><textarea id="ckeditor" class="ckeditor" name="content"></textarea></div>
						<input type="submit" value="发表回复"class="bt_hui"/>
						</form>

			</section><!-- response -->
			
		
		</section><!-- .project -->
			<!-- END POST 1 -->
			</section><!-- Left column -->


		<!-- =Right Column / Sidebar -->
		<aside id="sidebar_right" class="grid_4">

			<div class="sidebar_top_BG"></div>

			<section class="sidebar_content">

				<header>
					<h3>a delicate and quiet beauty</h3>
				</header>

				<ul class="sidebar">
					<li><img style="width:250px;height:350px;" src="public/images/12 (1).jpeg"/></li>
					<li><img style="width:250px;height:350px;" src="public/images/12 (2).jpeg"/></li>
					<li><img style="width:250px;height:350px;" src="public/images/12 (3).jpeg"/></li>
					<li><img style="width:250px;height:350px;" src="public/images/12 (4).jpeg"/></li>
					<li><img style="width:250px;height:350px;" src="public/images/12 (5).jpeg"/></li>
					<li><img style="width:250px;height:350px;" src="public/images/12 (6).jpeg"/></li>
				</ul>
			</section>	
				
			<div class="hr dotted clearfix"></div>
			

			<div class="sidebar_bottom_BG"></div>

		</aside><!-- #sidebar_right -->
		
		<div class="hr grid_12 clearfix"></div>

		
		</div><!-- #container -->

		<?php include "cache/tpl/721c824130dd8e3b46b71535bd749bbb.php" ;?>