<?php
/**
 * 关于
 * 
 * @package custom
 *
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php'); ?>
 <?php $this->need('sidebar.php'); ?>
 
 <!--顶部美化开始-->  
   <div class="board">
          <div class="left">
       <ul class="user-info-menu left-links list-inline list-unstyled">	 
     <li><span class="board-title zmki_wap_zsy1"><a href="<?php $this->options->siteUrl();?>" ><i class="fa fa-home  "></i> 首页</a></span></li>
	 <li><span class="board-title"><a href="<?php $this->options->zmki_links(); ?>"><i class="fa fa-plus-square  " ></i> 收录提交</a></span></li>
	 <li><span class="board-title "><a href="<?php $this->options->zmki_url(); ?>" target="_blank"><i class="fa fa-heart xiaotubiao" style="color: #fb5962;"></i>&nbsp;<?php $this->options->zmki_name(); ?></a></span></li>
	 <li><div class="zmki_wap" id="tp-weather-widget"> </li>
	 <?php if($this->options->zmki_ah == '1'): ?>  
	 <li><div class="zmki_yldh zmki_wap_zsy2"  title="切换模式"><a href="javascript:switchNightMode()"  target="_self"><svg  class="icon zmki_dh" aria-hidden="true"><use xlink:href="#icon-yueliang2"></use></svg></a></div></li> 
	 <?php endif; ?>
		  </ul>
       </div>
   </div>
   	<li><a type="button" id="fullscreen" > </li>
<!--心知天气开始-->
<!--由于默认调用的免费版每分钟20次API调用限制，如有需求可前往知心天气官网购买服务配置-->
<div id="tp-weather-widget"></div>
<script>
  (function(a,h,g,f,e,d,c,b){b=function(){d=h.createElement(g);c=h.getElementsByTagName(g)[0];d.src=e;d.charset="utf-8";d.async=1;c.parentNode.insertBefore(d,c)};a["SeniverseWeatherWidgetObject"]=f;a[f]||(a[f]=function(){(a[f].q=a[f].q||[]).push(arguments)});a[f].l=+new Date();if(a.attachEvent){a.attachEvent("onload",b)}else{a.addEventListener("load",b,false)}}(window,document,"script","SeniverseWeatherWidget","//cdn.sencdn.com/widget2/static/js/bundle.js?t="+parseInt((new Date().getTime() / 100000000).toString(),10)));
  window.SeniverseWeatherWidget('show', {
    flavor: "slim",
    location: "WX4FBXXFKE4F",
    geolocation: true,
    language: "zh-Hans",
    unit: "c",
    theme: "auto",
    token: "6cc2a314-5422-4e9c-b3ad-7b9217f4e494",
    hover: "enabled",
    container: "tp-weather-widget"
  })
</script>
<!--心知天气结束-->


 <div class="main-content" >
	<div class="row">
		<div class="col-md-12" style="margin-top: 20px;">
			<div class="panel panel-default">
				<!-- 关于网站 -->
				<h4 class="text-gray"><?php $this->title() ?></h4>
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-12">
							<!--<blockquote>-->
								<?php $this->content(); ?>
							</blockquote>
						</div>
					</div>
				</div>
				 
			</div>
		</div>
	</div>
	<?php $this->need('comments.php'); ?>

<br>

<!-- Main Footer -->
<?php $this->need('footer.php'); ?>
   