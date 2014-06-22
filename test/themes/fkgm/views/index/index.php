<?php
$this->title = Yii::app()->name . '首页';
$seo = service::getseo();
$this->keywords = $seo[1];
$this->description = $seo[2];
Yii::app()->clientScript->registerCssFile('/css/style.css');
Yii::app()->clientScript->registerCssFile('/css/skitter.styles.css');
Yii::app()->clientScript->registerCssFile('/css/ie8.css');
Yii::app()->clientScript->registerScriptFile('/js/jquery-1.6.4.min.js');
Yii::app()->clientScript->registerScriptFile('/js/jquery.easing.1.3.js');
Yii::app()->clientScript->registerScriptFile('/js/jquery.animate-colors-min.js');
Yii::app()->clientScript->registerScriptFile('/js/jquery.skitter.js');
Yii::app()->clientScript->registerScriptFile('/js/hoverIntent.js');
Yii::app()->clientScript->registerScriptFile('/js/superfish.js');
Yii::app()->clientScript->registerScriptFile('/js/supersubs.js');
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
});
</script>
<div id="outer-container">
	<div id="container">
    <!-- nav widget -->
            <?php $this->Widget('application.Widgets.NavWidget');?>
        <div id="header">
        <?php// $this->Widget('application.Widgets.InnerWidget');?>
        	<div id="slider-container">
                <div class="box_skitter box_skitter_large">
                    <ul>
                    <?php
                        foreach ($flash_result as $key => $value) {
                    ?>
                        <li>
                            <a href=""><img src="<?php echo $value['image'];?>" alt="<?php echo $value['alt'];?>"  width = '450' height='1020'/></a>
                            <!-- <div class="label_text"><?php //echo $value['title'];?> -->
<!--                                 <h3 class="colortext uppercase"> We are Magnum</h3>
                                <span>Morbi porta neque ut neque iaculis ac venenatis sem consequat.Integer vitae diam quam.</span>
                            </div> -->
                        </li>
                    <?php
                        }
                    ?>
                    </ul>
                </div>
                <div id="shadow-img-slider"></div>
            </div><!-- end #slider-container -->
        </div><!-- end #header -->

<!--         <div id="after-header">
        	<h1>Hello! WE are <span class="colortext">Magnum</span> and we make a great <span class="colortext">Website</span> Themes.<br/>Let’s Take a Tour and You’ll Love This tHeme.</h1>
        </div> -->

        <div id="before-content" class="patternbox">
        	<div class="shadow"></div>
        	<div class="container940">
            	<ul class="customlist">
                	<li>
                        <img src="<?php echo $product_new->image; ?>" alt="<?php echo $product_new->introduce; ?>" class="alignleft" width='43'  height='45' /><h3 class="valignmiddle">推荐产品</h3>
                        <span><?php echo mb_substr(strip_tags($product_new->introduce), 0,100,'UTF-8');?></span>
                    </li>
                	<li>
                        <img src="/images/icons/icon2.png" alt="" class="alignleft" width='43'  height='45' /><h3 class="valignmiddle">公司市场</h3>
                        <span><?php echo $info['shichang'];?></span>
                    </li>
                	<li class="last">
                        <img src="/images/icons/icon3.png" alt="" class="alignleft" width='43'  height='45' /><h3 class="valignmiddle">公司实力</h3>
                        <span><?php echo $info['shili'];?> </span>
                    </li>
                </ul>
                <div class="clear"></div><!-- clear float -->
            </div><!-- end container940 -->
        </div><!-- end #before-content -->

		<div id="content">
        	<div id="main">
                <h2 class="title_pattern uppercase"><span>推荐产品</span></h2>
                <ul id="recentpost">
                    <?php
                    $i = 1;
                        foreach ($recomment as $key => $value) {
                    ?>
                    <li <?php echo $i == 4 ? " class='last'" : '';?>>
                        <img src="<?php echo $value['image'];?>" alt="" class="frame" width='210' height='158' />
                        <span class="shadowimg220"></span>
                        <div class="entry-date"><?php echo date('Y/m/d',strtotime($value['created']));?> - <a href="<?php echo $this->createUrl('product/detail',array('id' => $value['id']));?>" target='_blank'><?php echo $value['name'];?></a></div>
                        <!-- <h5 class="colortext"><a href="#">Proin tempus  imperdiet.</a></h5> -->
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo mb_substr(strip_tags($value['introduce']), 0,50,'UTF-8');?></span>
                    </li>
                    <?php
                    $i++;
                        }
                    ?>
                </ul>
                <div class="clear"></div><!-- clear float -->
            </div><!-- end #main -->
		</div><!-- end #content -->
<!--         <div id="after-content" class="patternbox">
        	<div class="container940">
            	<a href="#" class="button large">Buy Now !</a>
            	<h2>Started Using the <span class="colortext">Magnum</span> Theme for Your Next <span class="colortext">Project</span> ? Available.</h2>
                <div class="clear"></div>
            </div>
        </div>
 -->
    <!-- 页面link 和其他信息的widgets -->
<?php $this->Widget('application.widgets.FooterWidget');?>
<!-- 页面底部 widgets 视图 -->
<?php $this->Widget('application.widgets.BottomWidget'); ?>
    </div><!-- end #container -->
</div><!-- end #outer-container -->
