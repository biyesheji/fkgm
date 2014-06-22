<?php
$this->title = Yii::app()->name . '新闻首页';
$seo = service::getseo();
$this->keywords = $seo[1];
$this->description = $seo[2];
Yii::app()->clientScript->registerCssFile('/css/style.css');
Yii::app()->clientScript->registerCssFile('/css/inner.css');
Yii::app()->clientScript->registerScriptFile('/js/jquery-1.6.4.min.js');
Yii::app()->clientScript->registerScriptFile('/js/hoverIntent.js');
Yii::app()->clientScript->registerScriptFile('/js/superfish.js');
Yii::app()->clientScript->registerScriptFile('/js/supersubs.js');
?>
<script type="text/javascript">
jQuery(document).ready(function(){
	//Menu
	jQuery("ul.sf-menu").supersubs({
	minWidth		: 12,		// requires em unit.
	maxWidth		: 27,		// requires em unit.
	extraWidth		: 3	// extra width can ensure lines don't sometimes turn over due to slight browser differences in how they round-off values
						   // due to slight rounding differences and font-family
	}).superfish();  // call supersubs first, then superfish, so that subs are
					 // not display:none when measuring. Call before initialising
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
                <?php
                foreach ($result['result'] as $key => $value) {
                ?>
                <div class="post">
                     <!-- 如果没有图片 可以不输处 image 和span标签  -->
                     <?php
                        if (empty($value->image)) {
                        } else {
                    ?>
                    <img src="<?php echo $value->image; ?>" alt="<?php echo $value->name; ?>" class="frame"  width='600' height='232'/>
                    <span class="shadowimg610"></span>
                    <?php
                        }
                     ?>
                         <div class="entry-utility">
                            <span class="postauthor"><img src="/images/icons/author.png" alt="" /><a href="#">作者:<?php echo User::model()->findByPk($value->auto)->username;?></a></span>
                            <span class="postdate"><img src="/images/icons/date.png" alt="" />日期:<?php $time = explode(' ', $value->updatetime) ; echo $time[0]; ?></span>
                            <span class="postcomm"><img src="/images/icons/comment.png" alt="" /><a href="#">点击次数:<?php echo $value->click;?> </a></span>
                            <span class="postcat"><img src="/images/icons/cat.png" alt="" /><a href="#">来源:<?php echo $value->source; ?></a></span>
                         </div>
                         <div class="entry-content">
                            <h2 class="posttitle"><a href="<?php echo $this->createUrl('news/detail',array('id' => $value->id));?>" target='_black'><?php echo  mb_substr(strip_tags($value->name),0,18,'UTF-8'); ?></a></h2>
                           <?php echo mb_substr(strip_tags($value->body),0,80,'UTF-8');?>......<br /><br />
                            <a href="<?php echo $this->createUrl('news/detail',array('id' => $value->id));?>" class="button" target='_black'>更多</a>
                         </div>
                         <div class="clear"></div><!-- clear float -->
                     </div><!-- .post -->
                <?php
                }
                ?>
                <style type="text/css">
                        .meta-nav li{
                            width: 100px;
                            line-height: 25px;
                            list-style-type: none;
                            text-align: center;
                        }
                </style>
                    <div id="nav-below" class="navigation">
                        <div class="nav-next">
                             <?php  $this->widget('CLinkPager',array(
                'header'=>'',
                'firstPageLabel'=>'首页',
                'lastPageLabel' => '末页',
                'prevPageLabel' => '上一页',
                'nextPageLabel' => '下一页',
                'pages' => $result['pages'],
                'maxButtonCount'=>6,
                'internalPageCssClass'=>false,
                'firstPageCssClass'=>false,
                'lastPageCssClass'=>false,
                'hiddenPageCssClass'=>false,
                'nextPageCssClass'=>false,
                'selectedPageCssClass'=>false,
                'previousPageCssClass'=>false,
                'htmlOptions'=>array('class'=>false)
                ));?>
                        </div>
                    </div><!-- #nav-below -->
                     <div class="clear"></div><!-- clear float -->
                </div><!-- end #maincontent -->
                <div id="sidebar">
                	<ul>
<!--                     	<li class="widget-container">
                        	<h2 class="widget-title">Text Widget</h2>
                            <div class="textwidget">
                            <span class="colortext">Cras faucibus ante ut diam</span> laoreet a congue mi aliquam. Sed interdum nisl pharetra ipsum aliquet tempus.
                            </div>
                        </li> -->
                    	<li class="widget-container">
                            <h2 class="widget-title">相关文章</h2>
                            <ul id="recentcommentwidget">
                                <?php
                                    foreach ($shuiji as $key => $value) {
                                ?>
                                <li>
                                    <img src="<?php echo $value->image;?>" alt="" class="alignleft"  width='57' height='57'/>
                                    <span class="colortext"><?php echo $value->name;?></span>
                                    <span><a href="<?php echo $this->createUrl('news/detail',array('id' => $value->id));?>"><?php echo mb_substr(strip_tags($value->body), 0,90,'UTF-8')?>...</a></span>
                                    <span class="clear"></span>
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </li>
                    	<li class="widget-container">
                        	<h2 class="widget-title">新闻标签</h2>
                            <?php

                                foreach ($tags_all as $key => $value) {
                            ?>
                            <span class="tag"><span class="left"></span><span class="middle"><a href='<?php echo $this->createUrl('news/index',array('tags' => $value['tags']));?>'><?php echo $value['tags'];?></a></span><span class="right"></span></span>
                            <?php
                                }
                            ?>
                            <div class="clear"></div>
                        </li>
                    	<li class="widget-container">
                            <h2 class="widget-title">热门产品</h2>
                            <ul id="recentprojectwidget">
                                <?php
                                    foreach ($hotProduct as $key => $value) {
                                ?>
                                <li>
                                    <a href="<?php echo $this->createUrl('product/detail',array('id' => $value['id']));?>" target='_blank'><img src="<?php echo $value['image'];?>" alt="" class="alignleft" width='57' height='57' /></a>
                                    <span class="colortext"><?php echo $value['name'];?></span><br/>
                                    <span class="date"><?php echo mb_substr($value['introduce'], 0,30,'UTF-8'),'.....';?></span>
                                    <span class="clear"></span>
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </li>
                    </ul>
                </div><!-- end #sidebar -->
                <div class="clear"></div><!-- clear float -->
            </div><!-- end #main -->
		</div><!-- end #content -->
            <!-- 页面link 和其他信息的widgets -->
    <?php $this->Widget('application.widgets.FooterWidget');?>
    <!-- 页面底部 widgets 视图 -->
    <?php $this->Widget('application.widgets.BottomWidget'); ?>
	</div><!-- end #container -->
</div><!-- end #outer-container -->
