<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
  <meta http-equiv="refresh" content="<?php echo Yii::app()->params['session_timeout'];?>;"/>
  <!-- blueprint CSS framework -->
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
  <!--[if lt IE 8]>
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
  <![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<!-- <link rel="stylesheet" type="text/css" href="/css/admin/menu.css"> -->
	<link rel="stylesheet" type="text/css" href="/css/admin/css.css">
<script>
//初始化
var def="1";
function mover(object){
  //主菜单
  var mm=document.getElementById("m_"+object);
  mm.className="m_li_a";
  //初始主菜单隐藏效果
  if(def!=0){
    var mdef=document.getElementById("m_"+def);
    mdef.className="m_li";
  }
  //子菜单
  var ss=document.getElementById("s_"+object);
  ss.style.display="block";
  //初始子菜单隐藏效果
  if(def!=0){
    var sdef=document.getElementById("s_"+def);
    sdef.style.display="none";
  }
}

function mout(object){
  //主菜单
  var mm=document.getElementById("m_"+object);
  mm.className="m_li";
  //初始主菜单
  if(def!=0){
    var mdef=document.getElementById("m_"+def);
    mdef.className="m_li_a";
  }
  //子菜单
  var ss=document.getElementById("s_"+object);
  ss.style.display="none";
  //初始子菜单
  if(def!=0){
    var sdef=document.getElementById("s_"+def);
    sdef.style.display="block";
  }
}
</script>
	<?php
    Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/ueditor/ueditor.config.js');
    Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/ueditor/ueditor.all.min.js');
    Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/ueditor/lang/zh-cn/zh-cn.js');
    ?>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
	<div id="rt-main-header">
  <div id="menu">
  <ul>
    <li class="m_line"><img src="/images/admin/line2.gif" /></li>
    <li id="m_1" class='<?php echo Yii::app()->controller->id == 'default' ? 'm_li_a' : 'm_li' ; ?>'><a href="/admin/default">首页</a></li>
    <li class="m_line"><img src="/images/admin/line2.gif" /></li>
    <li id="m_2" class='<?php echo Yii::app()->controller->id == 'adminflash' ? 'm_li_a' : 'm_li' ; ?>' onmouseover='mover(2);'
      onmouseout='mout(2);'><a href="/admin/adminflash/admin">Flash管理</a></li>
    <li class="m_line"><img src="/images/admin/line2.gif" /></li>
    <li id="m_3" class='<?php echo Yii::app()->controller->id == 'adminnews' ? 'm_li_a' : 'm_li' ; ?>' onmouseover='mover(3);'
     onmouseout='mout(3);'><a href="/admin/adminnews/admin">新闻管理</a></li>
    <li class="m_line"><img src="/images/admin/line2.gif" /></li>
    <li id="m_4" class='<?php echo Yii::app()->controller->id == 'adminproduct' ? 'm_li_a' : 'm_li' ; ?>' onmouseover='mover(4);'
     onmouseout='mout(4);'><a href="/admin/adminproduct/admin">产品管理</a></li>
    <li class="m_line"><img src="/images/admin/line2.gif" /></li>
    <li id="m_5" class='<?php echo Yii::app()->controller->id == 'admincontact' ? 'm_li_a' : 'm_li' ; ?>' onmouseover='mover(5);'
      onmouseout='mout(5);'><a href="/admin/admincontact/admin">联系我们管理</a></li>
    <li class="m_line"><img src="/images/admin/line2.gif" /></li>
    <li id="m_6" class='<?php echo Yii::app()->controller->id == '' ? 'm_li_a' : 'm_li' ; ?>' onmouseover='mover(6);'
     onmouseout='mout(6);'><a href="">其他管理</a></li>
    <li class="m_line"><img src="/images/admin/line2.gif" /></li>
    <li id="m_7" class='<?php echo Yii::app()->controller->id == 'admindolog' ? 'm_li_a' : 'm_li' ; ?>' onmouseover='mover(7);'
      onmouseout='mout(7);'><a href="/admin/admindolog/admin">日志管理</a></li>
  </ul>
</div>
<div style="height:32px; background-color:#F1F1F1;">
   <ul class="smenu">
     <li style="padding-left:29px;" id="s_1" class='s_li_a'></li>
     <li style="padding-left:141px;" id="s_2" class='s_li' onmouseover='mover(2);' onmouseout='mout(2);'>
      <a href="/admin/adminflash/create">添加flash</a>  |
      <a href="/admin/adminflash/admin">flash列表</a>   |
      </li>
     <li style="padding-left:252px;" id="s_3" class='s_li' onmouseover='mover(3);' onmouseout='mout(3);'>
      <a href="/admin/adminnews/create">新建新闻</a>  |
      <a href="/admin/adminnews/admin">新闻列表</a>  |
      <a href="/admin/adminnewclass/admin">新闻类别管理</a>
      </li>
     <li style="padding-left:362px;" id="s_4" class='s_li' onmouseover='mover(4);' onmouseout='mout(4);'>
      <a href="/admin/adminproduct/admin">产品管理</a>  |
      <a href="/admin/admincomment/admin/">评论管理</a>|
      <a href="/admin/adminproductclass/admin">产品类别管理</a></li>
     <li style="padding-left:474px;" id="s_5" class='s_li' onmouseover='mover(5);' onmouseout='mout(5);'>
      <!-- <a href="/">最新政策</a>  |  <a href="#">政策法规查询|  <a href="#">政策法规查询|  <a href="#">政策法规查询</a -->

      <!-- > -->
      </li>
     <li style="padding-left:447px;" id="s_6" class='s_li' onmouseover='mover(6);' onmouseout='mout(6);'>
      <a href="/admin/adminzhaopin/admin">招聘管理</a> |
      <a href="/admin/adminuser/admin">用户管理</a>  |
       <a href="/admin/adminlink/admin">友情链接</a>  |
         <!-- <a href="#">文明创建</a> -->
         </li>
     <li style="padding-left:696px;" id="s_7" class='s_li' onmouseover='mover(7);' onmouseout='mout(7);'>
      <a ><?php echo Yii::app()->user->username; ?></a>
      <a href="/admin/default/logout">退出</a>
     </li>
   </ul>
</div>
<!-- 			<div class="menu">

<div class="menu_right"></div>
					</div> -->
				</div>
<div style="clear:both"></div>
<!-- 	<div id="header">
		<div id="logo"><?php //echo CHtml::encode(Yii::app()->name); ?></div>
	</div>< -->
	<!-- <div id="mainmenu"> -->
		<?php
		// $this->widget('zii.widgets.CMenu',array(
		// 	'items'=>array(
		// 		array('label'=>'Home', 'url'=>array('/site/admin')),
		// 		array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
		// 		array('label'=>'Contact', 'url'=>array('/site/contact')),
		// 		array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
		// 		array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
		// 	),
		// ));
		?>
	<!-- </div>mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	<?php echo $content; ?>
	<div class="clear"></div>
	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/> john_zxw@gmail.com
	</div><!-- footer -->
</div><!-- page -->
</body>
</html>
