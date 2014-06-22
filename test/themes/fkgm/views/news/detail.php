<?php
$this->title = Yii::app()->name . '新闻详细页';
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
        <?php //$this->Widget('application.Widgets.InnerWidget');?>
		<div id="content" class="withsidebar">
        	<div id="main">
            	<div id="maincontent">
                    <h1 style='text-align:center'><?php echo $news_result->name;?></h1>
                    <?php
                        if ($news_result->video) {
                    ?>
                    <div class="video">
            		<object class id="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="500" height="300">
					  <param name="movie" value="/js/flvplayer.swf">
					  <param name="quality" value="high">
					  <param name="allowFullScreen" value="true">
					  <param name="FlashVars" value="vcastr_file=<?php echo $news_result->video;?>&LogoText=<?php echo $_SERVER['SERVER_NAME']; ?>&BufferTime=3&IsAutoPlay=0">
					  <embed src="/js/flvplayer.swf" allowfullscreen="true" flashvars="vcastr_file=<?php echo $news_result->video;?>&LogoText=<?php echo $_SERVER['SERVER_NAME']; ?>&IsAutoPlay=0" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="500" height="600"></embed>
					</object>
                    </div>
                    <?php
                        }
                    ?>
                    <div>
                        <span>作者：<?php $user = User::model()->findByPk($news_result->auto); echo $user->username;?></span>
                        <span>来源<?php echo $news_result->source;?></span>
                        <span>点击量：<?php echo $news_result->click;?></span>
                        <span>新闻类别：<?php $newsclass = Newclass::model()->findByPk($news_result->new_class); echo $newsclass->name;?></span>
                        <span>创建时间：<?php echo $news_result->createtime;?></span>
                    </div>
                    <div class='body'><?php echo $news_result->body;?></div>
                    <div class="news">
                        <div class="news_pre"><span>上一篇:<?php if (!empty($pre_id)) {
                        ?>
                        <a href="<?php echo $this->createUrl('news/detail',array('id' => $pre_id['id']));?>"><?php echo $pre_id['name']?></a>
                        <?php
                        } else {
                        ?>
                        <a href="javascript:;">没有上一篇了</a>
                        <?php
                        }?>
                        </span></div>
                        <div class="news_nex"><span>下一篇：
                        <?php
                        if (!empty($nex_id)) {
                        ?>
                        <a href="<?php echo $this->createUrl('news/detail',array('id' => $nex_id['id']));?>"><?php echo $nex_id['name'];?></a>
                        <?php
                        } else {
                        ?>
                        <a href="javascript:;">没有下一篇了</a>
                        <?php
                        }
                        ?>
                        </span></div>
                    </div>
                    <?php
                        $this->title = $news_result->name.Yii::app()->name;
                        $seo = service::getseo();
                        if ($news_result->keyword) {
                            $this->keywords = $news_result->keyword;
                        } else {
                            $this->keywords = $seo[1];
                        }
                        if ($news_result->description) {
                            $this->description = $news_result->description;
                        } else {
                            $this->description = $seo[2];
                        }
                    ?>
                     <div class="clear"></div><!-- clear float -->
                </div><!-- end #maincontent -->
                <div id="sidebar">
                	<ul>
                    	<li class="widget-container">
                            <h2 class="widget-title">热门产品</h2>
                            <ul id="recentcommentwidget">
                                <?php
                                    foreach ($hot_product as $key => $value) {
                                ?>
                                <li>
                                    <img src="<?php echo $value['image'];?>" alt="" class="alignleft" width='57' height='57' />
                                    <span class="colortext"><?php echo $value['name'];?></span>
                                    <span><a href="<?php echo $this->createUrl('product/detail',array('id' => $value['id']));?>"><?php echo  mb_substr(strip_tags($value['introduce']), 0,30,'UTF-8');?></a></span>
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
                            <h2 class="widget-title">推荐产品</h2>
                            <ul id="recentprojectwidget">
                                <?php
                                    foreach ($commt_product as $key => $value) {
                                ?>
                                <li>
                                    <a href="#"><img src="<?php echo $value['image'];?>" alt="" class="alignleft"  width='57' height='57'/></a>
                                    <span class="colortext"><?php echo $value['name'];?></span><br/>
                                    <span ><a href="<?php echo $value['id'];?>"><?php echo mb_substr(strip_tags($value['introduce']), 0,30,'UTF-8');?></a></span>
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
