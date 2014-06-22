<!DOCTYPE html>
<html lang="zh">
<meta charset="UTF-8" />
<meta content="" type=charset=>
<meta name="keywords" content="<?php echo $this->keywords; ?>" />
<meta name="description" content="<?php echo $this->description; ?>" />
<!--[if lt IE 9]>
<link href="/css/ie8.css" rel="stylesheet" type="text/css" />
<![endif]-->
<head>
<title><?php echo $this->title; ?></title>
</head>
<body>
<?php echo $content; ?>
<?php
$ga = Service::GetVariable('ga');
echo $ga['ga'];
$qq = Service::GetVariable('qq');
$qq = explode("\n", $qq['qq']);
$fenxiang = Service::GetVariable('fenxiang');
echo $fenxiang['fenxiang'];
?>
<link rel="stylesheet" type="text/css" href="/css/lanrenzhijia.css">
<script type="text/javascript" src='/js/jquery.js'></script>
<script type="text/javascript" src='/js/kefu.js'></script>
<DIV id=floatTools class=float0831>
  <DIV class=floatL><A style="DISPLAY: none" id=aFloatTools_Show class=btnOpen
title=查看在线客服
onclick="javascript:$('#divFloatToolsView').animate({width: 'show', opacity: 'show'}, 'normal',function(){ $('#divFloatToolsView').show();kf_setCookie('RightFloatShown', 0, '', '/', 'www.istudy.com.cn'); });$('#aFloatTools_Show').attr('style','display:none');$('#aFloatTools_Hide').attr('style','display:block');"
href="javascript:void(0);">展开</A> <A id=aFloatTools_Hide class=btnCtn
title=关闭在线客服
onclick="javascript:$('#divFloatToolsView').animate({width: 'hide', opacity: 'hide'}, 'normal',function(){ $('#divFloatToolsView').hide();kf_setCookie('RightFloatShown', 1, '', '/', 'www.istudy.com.cn'); });$('#aFloatTools_Show').attr('style','display:block');$('#aFloatTools_Hide').attr('style','display:none');"
href="javascript:void(0);">收缩</A> </DIV>
  <DIV id=divFloatToolsView class=floatR>
    <DIV class=tp></DIV>
    <DIV class=cn>
      <UL>
        <LI class=top>
          <H3 class=titZx>QQ咨询</H3>
        </LI>
        <LI><SPAN class=icoZx>在线咨询</SPAN> </LI>
            <?php
                foreach ($qq as $key => $value) {
            ?>
            <li><a class=icoTc target=blank href=tencent://message/?uin=<?php $qq = explode('|',$value); echo $qq[0];?>&Site=浙江省富康工贸公司&Menu=yes><?php echo $qq[1];?></a></li>
            <?php
               }
            ?>
      </UL>
      <UL>
        <LI>
          <H3 class=titDh>电话咨询</H3>
        </LI>
        <LI><SPAN class=icoTl>400-000-0000</SPAN> </LI>
      </UL>
    </DIV>
  </DIV>
</DIV>
</body>
</html>