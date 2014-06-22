<?php
$this->title = Yii::app()->name . '--招聘';
$seo = service::getseo();
$this->keywords = $seo[1];
$this->description = $seo[2];
Yii::app()->clientScript->registerCssFile('/css/style.css');
Yii::app()->clientScript->registerCssFile('/css/inner.css');
Yii::app()->clientScript->registerCssFile('/css/css.css');
Yii::app()->clientScript->registerScriptFile('/js/jquery-1.6.4.min.js');
Yii::app()->clientScript->registerScriptFile('/js/hoverIntent.js');
Yii::app()->clientScript->registerScriptFile('/js/superfish.js');
Yii::app()->clientScript->registerScriptFile('/js/supersubs.js');
?>
<script type="text/javascript">
jQuery(document).ready(function(){
    //Menu
    jQuery("ul.sf-menu").supersubs({
    minWidth        : 12,       // requires em unit.
    maxWidth        : 27,       // requires em unit.
    extraWidth      : 3 // extra width can ensure lines don't sometimes turn over due to slight browser differences in how they round-off values
                           // due to slight rounding differences and font-family
    }).superfish();  // call supersubs first, then superfish, so that subs are
                     // not display:none when measuring. Call before initialising
                     // containing tabs for same reason.
});
</script>
<div id="outer-container">
    <div id="container">
        <div id="top">
        <?php $this->Widget('application.Widgets.NavWidget');?>
        </div>
        <div class="wrap clearfix">
            <div class="title">
                <h2 style="font-family: '微软雅黑';font-weight: bold;">招贤纳士</h2>
                <ul id="btn">
                    <li><a href='/job'>社会招聘</a></li>
                    <li><a href="/job">校园招聘</a></li>
                </ul>
            </div>
            <div id="cont-wrap" class="cont-wrap">
                <div class="img"><img src="/images/0.jpg" /></div>
                <?php if ($zhaopin_result[0]->type == 1) {
                ?>
                <div class="cont-tit"><img id="img" src="/images/2.gif" /></div>
                <?php
                } else {
                ?>
                <div class="cont-tit"><img id="img" src="/images/1.gif" /></div>
                <?php
                    }
                ?>
                <h3 class="cont-cont-tit"><?php echo $zhaopin_result[0]->name;?></h3>
                <ul class="cont-cont">
                    <li><span>职位性质：<?php echo $zhaopin_result[0]->work_type; ?></span><span>工作地点：<?php echo $zhaopin_result[0]->addr;?></span></li>
                    <li><span>工作经验：<?php echo $zhaopin_result[0]->work_time; ?></span><span>学历要求：<?php echo$zhaopin_result[0]->xueli;?></span></li>
                    <li><span>招聘人数：<?php echo $zhaopin_result[0]->number; ?></span><span>薪资待遇：<?php echo $zhaopin_result[0]->money;?></span></li>
                    <li><span>发布日期：<?php $time = explode(' ', $zhaopin_result[0]->time); echo $time[0]; ?></span><span>招聘类型：<?php echo $zhaopin_result[0]->type ? '校园招聘' : '社会招聘' ;?></span></li>
                </ul>
                <div id="cont-text" class="cont-cont-text">
                    <p>岗位要求：</p>
                    <?php
                    echo $zhaopin_result[0]->body;
                    ?>
                </div>
            </div>
        </div>
    <!-- 页面link 和其他信息的widgets -->
    <?php $this->Widget('application.widgets.FooterWidget');?>
    <!-- 页面底部 widgets 视图 -->
    <?php $this->Widget('application.widgets.BottomWidget'); ?>
    </div><!-- end #container -->
</div><!-- end #outer-container -->