<?php
$this->title = Yii::app()->name . '产品首页';
$seo = service::getseo();
$this->keywords = $seo[1];
$this->description = $seo[2];
Yii::app()->clientScript->registerCssFile('/css/style.css');
Yii::app()->clientScript->registerCssFile('/css/inner.css');
Yii::app()->clientScript->registerCssFile('/css/prettyPhoto.css');
Yii::app()->clientScript->registerScriptFile('/js/hoverIntent.js');
Yii::app()->clientScript->registerScriptFile('/js/jquery-1.6.4.min.js');
Yii::app()->clientScript->registerScriptFile('/js/superfish.js');
Yii::app()->clientScript->registerScriptFile('/js/supersubs.js');
Yii::app()->clientScript->registerScriptFile('/js/fade.js');
Yii::app()->clientScript->registerScriptFile('/js/js/jquery.prettyPhoto.js');
Yii::app()->clientScript->registerScriptFile('/js/nav.js');
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
    /* portfolio gallery */
    jQuery('a[data-rel]').each(function() {jQuery(this).attr('rel', jQuery(this).data('rel'));});
    jQuery("a[rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',theme:'facebook',slideshow:2000});
});
</script>
<div id="outer-container">
	<div id="container">
    	<div id="top">
         <?php $this->Widget('application.Widgets.NavWidget');?>
        </div><!-- end #top -->
        <?php $this->Widget('application.Widgets.InnerWidget');?>
		<div id="content">
        	<div id="main">
                <div id="ts-display-portfolio">
                <ul id="ts-display-pf-col-4">
                <?php
                $i = 1;
                foreach ($result['result'] as $key => $value) {
                ?>
                    <li <?php echo $i%4 == 0 ? "class='nomargin'" : '' ;?>>
                        <div class="ts-display-pf-img">
                            <a class="image" href="<?php echo $value->image;?>"  data-rel="prettyPhoto[mixed]" >
                            <span class="rollover"></span>
                            <img src="<?php echo $value->image; ?>" alt="" width='210' height='158'/></a>
                            <span class="shadowimg220"></span>
                        </div>
                        <div class="ts-display-pf-text">
                            <h2 class="posttitle colortext"><?php echo $value->name; ?></h2>
                            <p><?php echo mb_strcut($value->introduce,0,50,'UTF-8');?></p>
                            <a href="<?php echo $this->createUrl('product/detail',array('id' => $value->id));?>" target = '_blank' class="button">查看更多</a>
                        </div>
                        <div class="ts-display-clear"></div>
                    </li>
                <?php
                $i++;
                }
                ?>
                </ul>
                 <div class="separator line"></div>
                </div><!-- end #ts-display-portfolio -->
                <div id="nav-below" class="navigation">
                    <div class="nav-previous"><!-- <span class="meta-nav"><ul><li><a href="dd">&larr;上一页</a></li></ul></span> --></div>
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
                                'selectedPageCssClass'=>'active',
                                'previousPageCssClass'=>false,
                                'htmlOptions'=>array('class'=>false)
                                ));
                        ?>
                    </div>
                </div><!-- #nav-below -->
            	<div class="clear"></div><!-- clear float -->
            </div><!-- end #main -->
		</div><!-- end #content -->
    <!-- 页面link 和其他信息的widgets -->
    <?php $this->Widget('application.widgets.FooterWidget');?>
    <!-- 页面底部 widgets 视图 -->
    <?php $this->Widget('application.widgets.BottomWidget'); ?>
	</div><!-- end #container -->
</div><!-- end #outer-container