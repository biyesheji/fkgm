<?php
Yii::app()->clientScript->registerCssFile('/css/style.css');
Yii::app()->clientScript->registerCssFile('/css/inner.css');
Yii::app()->clientScript->registerScriptFile('/js/jquery-1.6.4.min.js');
Yii::app()->clientScript->registerScriptFile('/js/hoverIntent.js');
Yii::app()->clientScript->registerScriptFile('/js/superfish.js');
Yii::app()->clientScript->registerScriptFile('/js/supersubs.js');
$this->title = '关于我们'.Yii::app()->name;
$seo = service::getseo();
$this->keywords = $seo[1];
$this->description = $seo[2];
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
        </div><!-- end #top -->
        <?php $this->Widget('application.Widgets.InnerWidget');?>
        <div id="content" class="withsidebar">
            <div id="main">
                <div id="maincontent">
                    <h2 class="title_pattern uppercase"><span>关于我们</span></h2>
                    <?php echo $about['top'];?>
                    <?php echo $about['center'];?>
                    <div class="separator"></div>
                    <h2 class="title_pattern uppercase"><span>更多关于我们</span></h2>
                    <?php echo $about['more_about'];?>
                    <p class="colortext"><?php echo $about['more_about_red'];?></p>
                    <img src="/images/content/pic13.jpg" alt="" class="frame" />
                    <span class="shadowimg610"></span>
                    <?php echo $about['more_about_botton'];?>
                     <div class="clear"></div><!-- clear float -->
                </div><!-- end #maincontent -->
                <div id="sidebar">
                    <ul>
                        <li class="widget-container">
                            <h2 class="widget-title">公司新闻</h2>
                            <ul>
                                <?php
                                    foreach ($shuiji as $key => $value) {
                                ?>
                                <li>
                                    <img src="<?php echo $value->image;?>" alt="" class="alignleft"  width='57' height='57'/>
                                    <span class="colortext"><?php echo $value->name;?></span><br />
                                    <span><a href="<?php echo $this->createUrl('news/detail',array('id' => $value->id));?>"><?php echo mb_substr(strip_tags($value->body), 0,15,'UTF-8')?>....</a></span>
                                    <span class="clear"></span>
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </li>
                        <li class="widget-container">
                            <h2 class="widget-title">热门产品</h2>
                           <ul id="recentprojectwidget">
                                <?php
                                    foreach ($hot as $key => $value) {
                                ?>
                                <li>
                                    <a href="<?php echo $this->createUrl('product/detail',array('id' => $value['id']));?>" target='_blank'><img src="<?php echo $value['image'];?>" alt="" class="alignleft" width='57' height='57' /></a>
                                    <span class="colortext"><?php echo $value['name'];?></span><br/>
                                    <span class="date"><?php echo mb_substr(strip_tags($value['introduce']), 0,15,'UTF-8'),'.....';?></span>
                                    <span class="clear"></span>
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="clear"></div><!-- clear float -->
            </div><!-- end #main -->
        </div><!-- end #content -->
    <!-- 页面link 和其他信息的widgets -->
    <?php $this->Widget('application.widgets.FooterWidget');?>
    <!-- 页面底部 widgets 视图 -->
    <?php $this->Widget('application.widgets.BottomWidget'); ?>
    </div><!-- end #container -->
</div><!-- end #outer-container -->