<?php
$this->title = '产品搜索'.Yii::app()->name;
$seo = service::getseo();
$this->keywords = $seo[1];
$this->description = $seo[2];
Yii::app()->clientScript->registerCssFile('/css/style.css');
Yii::app()->clientScript->registerCssFile('/css/inner.css');
Yii::app()->clientScript->registerCssFile('/css/prettyPhoto.css');
Yii::app()->clientScript->registerCssFile('/css/search.css');
Yii::app()->clientScript->registerScriptFile('/js/jquery-1.6.4.min.js');
Yii::app()->clientScript->registerScriptFile('/js/hoverIntent.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('/js/superfish.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('/js/supersubs.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('/js/fade.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile('/js/js/jquery.prettyPhoto.js', CClientScript::POS_END);
// Yii::app()->clientScript->registerScriptFile('/js/search.js', CClientScript::POS_END);
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
<!-- </head>
<body> -->
<div id="outer-container">
    <div id="container">
    <div id="top">
        <?php $this->Widget('application.Widgets.NavWidget');?>
    </div>
     <?php $this->Widget('application.Widgets.InnerWidget');?>
        <div id="content">
            <div class="search-box">
                <div class="tit">
                    <h1>浙江省富康工贸公司<strong> - 商品筛选</strong></h1><br/>
                    <h1></h1>
                </div>
<!--                 <div id="condition-box" class="condition-box" style="display: none">
                    <div class="a-key">已选条件：</div>
                    <ul id="cheched-box" class="a-values">
                    </ul>
                    <br>
                </div> -->
                <div id="tabs-box" class="tabs-box">
                    <div class="brand-attr">
                        <div class="attr">
                            <div class="a-key" _type="type">产品类别：</div>
                            <div class="a-values">
                                <div class="v-tabs">
                                    <div class="tabcon">
                                    <div <?php echo empty($class_id) ? "class = 'active'" : ''; ?>>
                                        <a href="<?php echo $this->createUrl('product/search',array(
                                                'texture' => $texture,
                                                'people' => $people,
                                                'price' => $price,
                                                'class_id' => '',
                                                'volume' => $volume,
                                                'heft' => $heft,
                                        ));?>">所有类别</a>
                                    </div>
                                    <?php
                                        foreach ($pclss_all as $key => $value) {
                                    ?>
                                        <div <?php echo $value['id'] == $class_id ? " class='active'" : ''; ?>>
                                            <a href="<?php echo $this->createUrl('product/search',array(
                                                'texture' => $texture,
                                                'people' => $people,
                                                'price' => $price,
                                                'class_id' => $value['id'],
                                                'volume' => $volume,
                                                'heft' => $heft,
                                                ));?>" title=""><?php echo $value['name'];?></a>
                                        </div>
                                    <?php
                                        }
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="attr">
                            <div class="a-key"_type="type2">产品材质：</div>
                            <div class="a-values">
                                <div class="v-tabs">
                                    <div class="tabcon">
                                    <div <?php echo empty($texture) ? "class = 'active'" : ''; ?>>
                                        <a href="<?php echo $this->createUrl('product/search',array(
                                                'texture' => '',
                                                'people' => $people,
                                                'price' => $price,
                                                'class_id' => $class_id,
                                                'volume' => $volume,
                                                'heft' => $heft,
                                        ));?>">所有材质</a>
                                    </div>
                                    <?php
                                        foreach ($texture_all as $key => $value) {
                                            // var_dump($value['texture']);
                                    ?>
                                        <div <?php echo $value['texture'] == $texture ? " class='active'" : ''; ?>>
                                            <a href="<?php echo $this->createUrl('product/search',array(
                                                'texture' => $value['texture'],
                                                'people' => $people,
                                                'price' => $price,
                                                'class_id' => $class_id,
                                                'volume' => $volume,
                                                'heft' => $heft,
                                                ));
                                            ?>" title=""><?php echo $value['texture'];?></a>
                                        </div>
                                    <?php
                                        }
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="attr">
                            <div class="a-key"_type="type3">产品容量(ML)：</div>
                            <div class="a-values">
                                <div class="v-tabs">
                                    <div class="tabcon">
                                    <div <?php echo empty($volume) ? "class = 'active'" : ''; ?>>
                                        <a href="<?php echo $this->createUrl('product/search',array(
                                                'texture' => $texture,
                                                'people' => $people,
                                                'price' => $price,
                                                'class_id' => $class_id,
                                                'volume' => '',
                                                'heft' => $heft,
                                        ));?>">所有容量</a>
                                    </div>
                                    <?php
                                            for ($i=1; $i <12 ; $i++) {
                                    ?>
                                        <div <?php echo $volume == $i ? " class='active'" : ''; ?>>
                                            <a href="<?php echo $this->createUrl('product/search',array(
                                               'texture' => $texture,
                                                'people' => $people,
                                                'price' => $price,
                                                'class_id' => $class_id,
                                                'volume' => $i,
                                                'heft' => $heft,
                                            ));?>" title=""><?php  echo ($i) * 100 .' - '. (($i+2) * 100);?></a>
                                        </div>
                                    <?php
                                        }
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="attr">
                            <div class="a-key" _type="type4">适用人群：</div>
                            <div class="a-values">
                                <div class="v-tabs">
                                    <div class="tabcon">
                                    <div <?php echo empty($people) ? "class = 'active'" : ''; ?>>
                                        <a href="<?php echo $this->createUrl('product/search',array(
                                                'texture' => $texture,
                                                'people' => '',
                                                'price' => $price,
                                                'class_id' => $class_id,
                                                'volume' => $volume,
                                                'heft' => $heft,
                                            ));
                                        ?>">所有人</a>
                                    </div>
                                    <?php
                                        foreach ($people_all as $key => $value) {
                                    ?>
                                        <div <?php echo $value['people'] == $people ? " class='active'" : ''; ?>>
                                            <a href="<?php echo $this->createUrl('product/search',array(
                                                'texture' => $texture,
                                                'people' => $value['people'],
                                                'price' => $price,
                                                'class_id' => $class_id,
                                                'volume' => $volume,
                                                'heft' => $heft,
                                            ));?>" title=""><?php echo $value['people'];?></a>
                                        </div>
                                    <?php
                                        }
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="attr">
                            <div class="a-key" _type="type4">价格(元)：</div>
                            <div class="a-values">
                                <div class="v-tabs">
                                    <div class="tabcon">
                                    <div <?php echo empty($price) ? "class = 'active'" : ''; ?> >
                                        <a href="<?php echo $this->createUrl('product/search',array(
                                            'texture' => $texture,
                                            'people' => $people,
                                            'price' => '',
                                            'class_id' => $class_id,
                                            'volume' => $volume,
                                            'heft' => $heft,
                                        ));?>">所有价格</a>
                                    </div>
                                     <?php
                                            for ($i=1; $i <12 ; $i++) {
                                    ?>
                                        <div <?php echo $price == $i ? " class='active'" : ''; ?>>
                                            <a href="<?php echo $this->createUrl('product/search',array(
                                               'texture' => $texture,
                                                'people' => $people,
                                                'price' => $i,
                                                'class_id' => $class_id,
                                                'volume' => $volume,
                                                'heft' => $heft,
                                            ));?>" title=""><?php  echo ($i) * 30 .' - '. (($i+1) * 30);?></a>
                                        </div>
                                    <?php
                                        }
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="attr">
                            <div class="a-key" _type="type4">重量(g)：</div>
                            <div class="a-values">
                                <div class="v-tabs">
                                    <div class="tabcon">
                                    <div <?php echo empty($heft) ? "class = 'active'" : ''; ?>>
                                        <a href="<?php echo $this->createUrl('product/search',array(
                                            'texture' => $texture,
                                            'people' => $people,
                                            'price' => $price,
                                            'class_id' => $class_id,
                                            'volume' => $volume,
                                            'heft' => '',
                                        ));?>">所有重量</a>
                                    </div>
                                    <?php
                                            for ($i=1; $i <12 ; $i++) {
                                    ?>
                                        <div <?php echo $heft == $i ? " class='active'" : ''; ?>>
                                            <a href="<?php echo $this->createUrl('product/search',array(
                                               'texture' => $texture,
                                                'people' => $people,
                                                'price' => $price,
                                                'class_id' => $class_id,
                                                'volume' => $volume,
                                                'heft' => $i,
                                            ));?>" title=""><?php  echo ($i) * 50 .' - '. (($i+1) * 50);?></a>
                                        </div>
                                    <?php
                                        }
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="main">
                <div id="ts-display-portfolio">
                <ul id="ts-display-pf-col-3">
                <?php
                if (empty($result['result'])) {
                ?>
               <li style="text-align:center">查询不到相关的产品信息</li>
                <?php
                } else {
                $i = 1;
                    foreach ($result['result'] as $key => $value) {
                ?>
                    <li <?php echo $i %3 == 0 ? "class='nomargin'" : ''; ?>>
                        <div class="ts-display-pf-img">
                            <a class="image" href="<?php echo $value->image;?>" data-rel="prettyPhoto[mixed]" >
                            <span class="rollover"></span>
                            <img src="<?php echo $value->image;?>" alt="" width='290' height='184' /></a>
                            <span class="shadowimg300"></span>
                        </div>
                        <div class="ts-display-pf-text">
                            <h2 class="posttitle colortext"><?php echo $value->name;?></h2>
                            <p><?php echo mb_substr(strip_tags($value->introduce), 0,50,'UTF-8');?></p>
                            <a href="<?php echo $this->createUrl('product/detail',array('id' => $value->id));?>" target='_blank' class="button">查看更多</a> <!-- <a href="#" class="button">Visit Website &rarr;</a> -->
                        </div>
                        <div class="ts-display-clear"></div>
                    </li>
                <?php
                $i++;
                    }
                }
                ?>
                </ul>

                 <div class="separator line"></div>

                </div><!-- end #ts-display-portfolio -->
                <div id="nav-below" class="navigation">
                    <!-- <div class="nav-previous"><span class="meta-nav"><a href="#">&larr; Older Post</a></span></div> -->
                    <div class="nav-next">
                        <?php  $this->widget('CLinkPager',array(
                'header'=>'',
                'firstPageLabel'=>'首页',
                'lastPageLabel' => '末页',
                'prevPageLabel' => '上一页',
                'nextPageLabel' => '下一页',
                'pages' => $result['pages'],
                'maxButtonCount'=>5,
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
            </div><!-- end #main -->
        </div><!-- end #content -->
            <!-- 页面link 和其他信息的widgets -->
    <?php $this->Widget('application.widgets.FooterWidget');?>
    <!-- 页面底部 widgets 视图 -->
    <?php $this->Widget('application.widgets.BottomWidget'); ?>

    </div><!-- end #container -->
</div><!-- end #outer-container -->

</body>
</html>
