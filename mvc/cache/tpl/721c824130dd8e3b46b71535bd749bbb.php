<!-- =Footer -->
		<footer class="container_12 clearfix">
			<section class="footer">
			<p>
				<span class="float"><b>&copy; 2017  Lab <a href="bbs/"> bbs论坛</a></b>  请叫我李维维哟~ </span>
				<a class="float right toplink" href="#">top</a>
				
			</p>
			</section><!-- footer -->
		</footer>
	
	</div><!-- #wrapper -->
	
	<!-- Javascript at the bottom for fast page loading -->	
	
	<!-- Grab Google CDN's jQuery. fall back to local if necessary -->



<script src="http://apps.bdimg.com/libs/jquery/1.9.1/jquery.js"></script>
<script src="public/js/gt.js"></script>
<script>
    var handlerEmbed = function (captchaObj) {
        $("#embed-submit").click(function (e) {
            var validate = captchaObj.getValidate();
            if (!validate) {
                $("#notice")[0].className = "show";
                setTimeout(function () {
                    $("#notice")[0].className = "hide";
                }, 2000);
                e.preventDefault();
            }
        });
        // 将验证码加到id为captcha的元素里，同时会有三个input的值：geetest_challenge, geetest_validate, geetest_seccode
        captchaObj.appendTo("#embed-captcha");
        captchaObj.onReady(function () {
            $("#wait")[0].className = "hide";
        });
        // 更多接口参考：http://www.geetest.com/install/sections/idx-client-sdk.html
    };
    $.ajax({
        // 获取id，challenge，success（是否启用failback）
        url: "public/jiyan/web/StartCaptchaServlet.php?t=" + (new Date()).getTime(), // 加随机数防止缓存
        type: "get",
        dataType: "json",
        success: function (data) {
            console.log(data);
            // 使用initGeetest接口
            // 参数1：配置参数
            // 参数2：回调，回调的第一个参数验证码对象，之后可以使用它做appendTo之类的事件
            initGeetest({
                gt: data.gt,
                challenge: data.challenge,
                new_captcha: data.new_captcha,
                product: "embed", // 产品形式，包括：float，embed，popup。注意只对PC版验证码有效
                offline: !data.success // 表示用户后台检测极验服务器是否宕机，一般不需要关注
                // 更多配置参数请参见：http://www.geetest.com/install/sections/idx-client-sdk.html#config
            }, handlerEmbed);
        }
    });
</script>

<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

		
	<script src="public/js/jquery.min.js"></script>
	<script>!window.jQuery && document.write('<script src="public/js/jquery-1.4.2.min.js"><\/script>')</script>
	
	<!-- =Menu -->
	<script src="public/js/nt_nav.js"></script>

	<!-- =Contact -->
	<script src="public/js/contact.js"></script>
	
	<!-- =styleswitcher -->
	<script src="public/js/styleswitcher.js"></script>
	
	<!-- =Prettyphoto -->
	<script src="public/js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("a.portfolio_item[rel^='prettyPhoto'], a.isphoto_m[rel^='prettyPhoto'], a.isphoto_b[rel^='prettyPhoto'], a.isvideo_m[rel^='prettyPhoto'], a.isvideo_b[rel^='prettyPhoto'], a.islink_mini[rel^='prettyPhoto'], a.islink_m[rel^='prettyPhoto']").prettyPhoto({
			animationSpeed: 'slow',
			theme: 'nitro_dark_rounded',
			slideshow: 4000,
			autoplay_slideshow: false});
		});
	</script>

	<!-- =Cufon -->
	<script src="public/js/cufon-yui.js?v=1.09"></script>
	<script src="public/js/lab.font.js"></script>
	<script type="text/javascript">
		Cufon.replace('h1, h2, h3, h4:not(.nocufon), h5, h6, .heading_page, .search_text');
	</script>
	
	<!-- Call =Coin Slider -->
	<script src="public/js/coin-slider.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$('#coin-slider').coinslider({
			width: 960, // width of slider panel
			height: 459, // height of slider panel	// 459 default -1px for img margins error
			spw: 4,  // squares per width - 5 by default
			sph: 2, // squares per height - 3 by default
			delay: 3000, // delay between images in ms - 3000 by default
			sDelay: 30, // delay beetwen squares in ms - 30 by default
			opacity: 0.8, // opacity of title and navigation - 0.8 by default
			titleSpeed: 500, // speed of title appereance in ms - 500 by default
			effect: '', // random, swirl, rain, straight - empty by default
			navigation: true, // prev next and buttons - true by default
			links : true, // show images as links - true by default
			hoverPause: true // pause on hover - true by default
		});
	});
	</script>
	
	<!-- =Tooltip -->
	<script src="public/js/tooltip.min.js"></script>
	<script type="text/javascript">
	jQuery(function() {
		//tooltip
		$("a .tooltip").addClass("tooltip");
		tooltip();  		
	});
	</script>
	
	<!-- =Truncate -->
	<script src="public/js/jquery.jtruncate.pack.js"></script>
	<script type="text/javascript">
	$().ready(function() {  
		$('h4.title').jTruncate({  
			length: 14,
			minTrail: 0,
			moreText: "", //[see all]
			lessText: "", //[hide extra]
			ellipsisText: "", // (truncated)
			moreAni: "", // fast
			lessAni: 2000
		});
	});
	</script>



	<script>
		window.onload = function ()
		{
			var oBox = document.getElementById('lalala');
			var n = <?=$time;?>;
			oBox.innerHTML = n+'秒后跳转 请稍后.......<p><a href="<?=$url;?>">如果你的浏览器没有自动跳转，请点击此链接</a></p>';
			
			
			setInterval(function(){
			
				n--;
				
				if (n == 0) {
					window.location.href="<?=$url;?>";
				} else {
					oBox.innerHTML = n+'秒后跳转 请稍后.......<p><a href="<?=$url;?>">如果你的浏览器没有自动跳转，请点击此链接</a></p>';
				}
				
			},1000);
		}
		
		</script>

