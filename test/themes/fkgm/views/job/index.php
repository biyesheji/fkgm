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
// Yii::app()->clientScript->registerScriptFile('/js/data.js');
Yii::app()->clientScript->registerScriptFile('/js/js1.js');
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
                    <li><a class="active" href="javascript:;">社会招聘</a></li>
                    <li><a href="javascript:;">校园招聘</a></li>
                </ul>
            </div>
            <div class="cont-wrap">
                <div class="img"><img src="/images/0.jpg" /></div>
                <div class="cont-tit"><img id="img" src="/images/1.gif" /></div>
                <ul id="cont" class="cont">
                </ul>
                <div class="page clearfix">
                    <div class="next"></div>
                    <div id="page" class="num"></div>
                </div>
            </div>
        </div>
    <!-- 页面link 和其他信息的widgets -->
    <?php $this->Widget('application.widgets.FooterWidget');?>
    <!-- 页面底部 widgets 视图 -->
    <?php $this->Widget('application.widgets.BottomWidget'); ?>
    </div><!-- end #container -->
</div><!-- end #outer-container -->
<script>
var societyList=[
<?php
    foreach ($zhaopin_result_shehui as $key => $value) {
?>
    {
        job:'<?php echo $value['name'];?>',
        num:'<?php echo $value['number'];?>名',
        times:'<?php echo $value['time'];?>',
        id:'<?php echo $value['id'];?>',
        require:['<?php echo $value['body'];?>']
    },
<?php
    }
?>
];
var societyCont=[
<?php
    foreach ($zhaopin_result_shehui as $key => $value) {
?>
   {
        job:'<?php echo $value['name'];?>(校园招聘)',
        message:[
            ['招聘公司：浙江省富康工贸有限公司','公司性质：股份制公司'],
            ['职位性质：<?php echo $value['work_type'];?>','工作地点：<?php echo $value['addr'];?>'],
            ['工作经验：<?php echo $value['work_time'];?>','学历要求：<?php echo $value['xueli'];?>'],
            ['招聘人数：<?php echo $value['number'];?>人','薪资待遇：<?php echo $value['money'];?>'],
            ['发布日期：<?php echo $value['time'];?>','招聘类型：校园招聘']
        ],
        // require:[]
    },
<?php
    }
 ?>
];

var schoolCont=[
<?php
    foreach ($zhaopin_result_school as $key => $value) {
?>
    {
        job:'<?php echo $value['name'];?>(校园招聘)',
        message:[
            ['招聘公司：浙江省富康工贸有限公司','公司性质：股份制公司'],
            ['职位性质：<?php echo $value['work_type'];?>','工作地点：<?php echo $value['addr'];?>'],
            ['工作经验：<?php echo $value['work_time'];?>','学历要求：<?php echo $value['xueli'];?>'],
            ['招聘人数：<?php echo $value['number'];?>人','薪资待遇：<?php echo $value['money'];?>'],
            ['发布日期：<?php echo $value['time'];?>','招聘类型：校园招聘']
        ],
        // require:['本科以上学历',
        // '有一年以上iOS/Objective-C、Cocoa、XCode、Android、Eclipse使用及开发经验，能够独立或者团队完成一个应用的开发',
        // '有良好的面向对象分析、设计能力、规范的编程风格和良好文档习惯',
        // '对新技术持有敏感性以及愿意致力于新技术的探索和研究',
        // '参与或独立进行过一次完整的iPhone/iPad/Android App产品开发',
        // '有AppStore线上作品者优先']
    },
<?php
    }
?>
];

var schoolList=[
<?php
    foreach ($zhaopin_result_school as $key => $value) {
?>
    {
        job:'<?php echo $value['name'];?>(校园招聘)',
        num:'<?php echo $value['number'];?>名',
        times:'<?php echo $value['time'];?>',
        id:'<?php echo $value['id'];?>',
        require:['<?php echo mb_substr($value['body'],0,20,'UTF-8');?>']
    },
<?php
    }
?>
];
</script>