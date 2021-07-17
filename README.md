<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta content="width=device-width,maximum-scale=1.0,minimum-scale=1.0,initial-scale=1.0,user-scalable=no" name="viewport">
<title>某成的博客 - 全网短视频无水印在线解析</title>
<meta name="keywords" content="易搜影视,易搜,易搜解析,易搜助手,易搜无水印,无水印解析,短视频无水印,聚合无水印">
<meta name="description" content="易搜助手是一款多功能聚合去水印平台,为网友提供免费在线去水印，给您全新的“悦享品质”体验。">
<link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="public/style.css" rel="stylesheet">
<script src="public/jquery.min.js"></script>
</head>
<body>
<div class="header">
	<div class="logo-header"><a href="./" title="易搜助手"><img src="public/logo.png"></a></div>
</div>
<div class="home_container">
    <div class="wrap">
	    <div class="wrap_background"></div>
		<div class="wrap_search">
		    <input type="text" id="url" placeholder="请将APP里复制的视频链接粘贴到这里" autocomplete="off">
			<button type="submit" id="button">解析</button>
		</div>
	</div>
	<!-- 内容 -->
	<div class="home_page">
	    <div class="page_list">
		    <div class="list_box">
			    <div class="list_ico"><i class="fa fa-paw"></i></div>
				<div class="list_title">一键解析</div>
			</div>
			<div class="list_box">
			    <div class="list_ico"><i class="fa fa-safari"></i></div>
				<div class="list_title">方便快捷</div>
			</div>
			<div class="list_box">
			    <div class="list_ico"><i class="fa fa-gift"></i></div>
				<div class="list_title">永久免费</div>
			</div>
			<div class="list_box">
			    <div class="list_ico"><a href="tencent://message/?uin=1281546270" target="_blank" rel="nofollow"><i class="fa fa-qq"></i></a></div>
				<div class="list_title">联系客服</div>
			</div>
		</div>
		<!-- 公告 -->
		<div class="page_notice">
		    站点公告：<span>因某些不可抗拒的因素而关闭,在此感谢大家一直以来的支持....</span>
		</div>
		<div class="watermark">
		    <div class="mark_title">使用说明</div>
			<div class="mark_content">
			    <p><em></em>暂支持抖茵丶快首丶火山丶微视等四类解析,后续还会增加。敬请期待...</p>
				<p><em></em>打开视频APP，点开某个视频，点击分享按钮，在分享弹框中点击复制链接或通过分享到微信QQ等获取分享链接</p>
				<p><em></em>将复制的分享链接粘贴到输入框进行解析</p>
				<p><em></em>本站可以解析99%以上的视频。但如果视频作者上传的视频本身就有水印，这种水印暂时无法去除。如何判断原视频是否有水印？请查看该视频在相应的APP里播放时是否有水印。</p>
				<p><em></em>视频被删除、被设置成私密、或在审核中都有可能导致解析失败。</p>
			</div>
		</div>	
	</div>
</div>
<div class="footer">
	<div class="link">
		<div class="link_title">隔壁老王</div>
		<div class="link_content">
			<a href="https://www.x6d.com/" target="_blank" title="figerous.github.io">figerous.github.io</a>
			<a href="http://www.xiaodao.biz/" target="_blank" title="网址发布页">网址发布页</a>
		</div>
	</div>
	<div class="footer_content">
		<p>
			<a href="http://www.xiaodao.biz/" title="某成助手">某成助手</a>
			<a href="http://www.beian.miit.gov.cn" target="_blank" rel="nofollow" title="备案号">备案号</a>
			<a href="#" title="站点统计" target="_blank" rel="nofollow">站点统计</a>
		</p>
		<p>解析结果归相关平台所有，易搜解析不拥有其版权。</p>
	</div>
</div>
<div id="load"></div>
<script>
//协议判断 勿删
var protocolStr = document.location.protocol;
if(protocolStr == "http:"){
    var meta = '<meta name="author" content="蓝优">';
}else if(protocolStr == "https:"){
	var meta = '<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />';
}
$(document).ready(function(){
	$('#button').click(function (){		
		var text = $('#url').val();
		if (text == '') {
			alert('域名不能为空');
			return false;
		}
		$.ajax({			
			url:'api.php',
			type:'get', 
			dataType:'json', 
			data: {url:text},
			beforeSend: function(){
               $("#load").html('<div class="preloader"><div class="loader"></div></div>');
			   $("head").prepend(meta);
            },
			success:function(data){
				if (data.code == 200) {
					var mkhtml = '<div class="mark_title">解析结果</div><div class="water_content"><p>'+data.title+'</p><div class="video"><iframe src="'+data.url+'" width="100%" height="100%" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay" referrerpolicy="no-referrer"></iframe></div><div class="download"><a href="'+data.pic+'" target="_blank" rel="nofollow">封面图片</a><a href="'+data.url+'" target="_blank" rel="nofollow" referrerpolicy="no-referrer">下载视频</a></div></div>';
					$(".watermark").html(mkhtml);
					$("#load").empty();
				}else{
					alert(data.msg);
					$("#load").empty();
				}	
			}
		});
	});
});
</script>
</body>
</html>
