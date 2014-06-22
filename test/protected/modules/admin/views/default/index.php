<?php
/* @var $this DefaultController */
$this->breadcrumbs=array(
	$this->module->id,
);
?>
<h1>
<?php
    if (Yii::app()->user->hasFlash('alter_variable')) {
        echo Yii::app()->user->getFlash('alter_variable');
    }
?>
</h1>
<style type="text/css">
        .portlet-content{
            padding: 5px 8px 6px 8px;
        }
        .portlet-content ul li{
            line-height: 25px;
        }
</style>
    <div class="span-5 last" style="float:right;">
        <div id="sidebar">
            <div class="portlet" id="yw2">
                <div class="portlet-decoration">
                    <div class="portlet-title">Operations</div>
                </div>
                <div class="portlet-content">
                    <ul class="operations" id="yw3">
                        <li><a href="<?php echo $this->createUrl('default/index',array('type' => 'index_boom_info'));?>">页面底部配置</a></li>
                        <li><a href="<?php echo $this->createUrl('default/index',array('type' => 'contact'));?>">联系我们配置</a></li>
                        <li><a href="<?php echo $this->createUrl('default/index',array('type' => 'about'));?>">关于我们我们配置</a></li>
                        <li><a href="<?php echo $this->createUrl('default/index',array('type' => 'inner'));?>">紧急通知配置</a></li>
                        <li><a href="<?php echo $this->createUrl('default/index',array('type' => 'comment'));?>">留言配置</a></li>
                        <li><a href="<?php echo $this->createUrl('default/index',array('type' => 'ga'));?>">统计代码</a></li>
                        <li><a href="<?php echo $this->createUrl('default/index',array('type' => 'seo'));?>">seo默认设置</a></li>
                        <li><a href="<?php echo $this->createUrl('default/index',array('type' => 'fenxiang'));?>">分享代码设置</a></li>
                        <li><a href="<?php echo $this->createUrl('default/index',array('type' => 'qq'));?>">在线客服qq号码设置</a></li>
                        <li><a href="<?php echo $this->createUrl('default/index',array('type' => 'config'));?>">首页公司实力 公司市场配置</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- sidebar -->
    </div>
<div class="clear"></div>