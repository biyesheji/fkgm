<?php
$this->title = Yii::app()->name . '产品详细';
$seo = service::getseo();
$this->keywords = $seo[1];
$this->description = $seo[2];
Yii::app()->clientScript->registerCssFile('/css/style.css');
Yii::app()->clientScript->registerCssFile('/css/inner.css');
Yii::app()->clientScript->registerCssFile('/css/single_product_show.css');
Yii::app()->clientScript->registerScriptFile('/js/jquery-1.6.4.min.js');
Yii::app()->clientScript->registerScriptFile('/js/hoverIntent.js');
Yii::app()->clientScript->registerScriptFile('/js/superfish.js');
// Yii::app()->clientScript->registerScriptFile('/js/superfish.js');
// Yii::app()->clientScript->registerScriptFile('/js/nav.js');
Yii::app()->clientScript->registerScriptFile('/js/js/detail.js', CClientScript::POS_END);
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
					 // containing tabs for same reason.
	/* portfolio gallery */
	jQuery('a[data-rel]').each(function() {jQuery(this).attr('rel', jQuery(this).data('rel'));});
	jQuery("a[rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',theme:'facebook',slideshow:2000});
});</script>
<div id="outer-container">
	<div id="container">
	     <?php $this->Widget('application.Widgets.NavWidget');?>
        <?php $this->Widget('application.Widgets.InnerWidget');?>
		<div id="content" class="withsidebar">
        	<div id="main">
            	<div id="maincontent">

                     <div id="single-product">

                     	<div id="single-product-img">
                        	<img class="big-img" src="<?php echo $product_result->image;?>" alt="" class="frame" />

                            <!-- 大图上的遮罩层部分 begin -->
                            <div class="mask-y"></div>
                            <div class="mask-t"></div>
                            <!-- 大图上的遮罩层部分 end -->
                            <!-- 产品展示，小缩略图部分 begin -->
                            <div id="product-img-thumbnail-box" class="product-img-thumbnail-box">
                                <ul>
                                    <li class="active">
                                    <!-- src 对应小图 _src中等图 __src2大图  -->
                                    <img
                                        src="<?php echo $product_result->image_1; ?>" height="50" width="50"
                                        _src="<?php echo $product_result->image_1; ?>"
                                        _src2="<?php echo $product_result->image_1; ?>"
                                        alt="">
                                    </li>
                                    <li><img
                                        src="<?php echo $product_result->image_2; ?>"
                                        _src="<?php echo $product_result->image_2; ?>"
                                        _src2="<?php echo $product_result->image_2; ?>"

                                        alt=""></li>
                                    <li><img
                                    src="<?php echo $product_result->image_3; ?>"
                                    _src="<?php echo $product_result->image_3; ?>"
                                    _src2="<?php echo $product_result->image_3; ?>"
                                    alt=""></li>
                                    <li><img
                                    src="<?php echo $product_result->image_4; ?>"
                                    _src="<?php echo $product_result->image_4; ?>"
                                    _src2="<?php echo $product_result->image_4; ?>"
                                    alt=""></li>
                                </ul>
                            </div>
                            <!-- 产品展示，小缩略图部分 end -->

                            <!-- 大图细节展示 begin -->
                                <div id="big-img-box" class="big-img-box">
                                    <img src="<?php echo $product_result->image;?>" alt="" />
                                </div>
                            <!-- 大图细节展示 end -->
                        </div><!-- end #single-product-img -->
                     	<div id="single-product-description">
                        	<h2 class="colortext" style="text-align:center; font-size:19px"><?php echo $product_result->name; ?></h2>
                            <span class="price">¥ <?php echo $product_result->price;?>元</span>
                            <!-- <p><?php //echo  mb_substr(strip_tags($product_result->introduce), 0,100,'UTF-8'); ?></p> -->
                            <div class="product-option-container">
                            	<div class="product-option">
                                    <fieldset>
                                    <label for="size" id="size_label">容量(ML):</label>
                                    <span><?php echo $product_result->volume;?></span>
                                    </fieldset>
                                </div>
                                <div class="product-option">
                                	<fieldset>
                                    <label for="size" id="size_label">类别:</label>
                                    <span><?php echo Productclass::model()->findByPk($product_result->class_id)->name;?></span>
                                    </fieldset>
                                </div>
                            	<div class="product-option ">
                                    <label for="colour" id="colour_label">产品材质:</label>
                                    <span><?php echo $product_result->texture;?></span>
                                    </fieldset>
                                </div>
                                <div class="product-option">
                                    <fieldset>
                                    <label for="size" id="size_label">适用人群:</label>
                                    <span><?php echo $product_result->people;?></span>
                                    </fieldset>
                                </div>
                                <div class="product-option">
                                    <fieldset>
                                    <label for="size" id="size_label">重量:</label>
                                    <span><?php echo $product_result->heft;?>g</span>
                                    </fieldset>
                                </div>
                                <div class="product-option">
                                    <fieldset>
                                    <label for="size" id="size_label">点击次数:</label>
                                    <span><?php echo $product_result->click;?>次</span>
                                    </fieldset>
                                </div>
                            </div><!-- end product-option-container -->
<!--                             <span class="price">From:  $870.00</span>
                            <div class="product-button-container">
                            	<div class="additem">
                                 <a href="#" class="min">-</a> <a href="#">1</a>  <a href="#" class="plus">+</a>
                                </div>
                            	<a href="#" class="button">Add to cart</a>
                                <span class="clear"></span> -->
                            <!-- </div>end product-button-container -->
                            <!-- Category: <a href="#">Gadget</a>, <a href="#">Headphone</a> -->
                        </div><!-- end #single-product-description -->
                         <div class="clear"></div><!-- clear float -->
                     </div> <!-- end #single-product -->
                    <div class="tabcontainer producttab">
                        <ul id="tabs" class="tabs">
                            <li><a href="javascript::">产品描述</a></li>
                            <li><a href="javascript::">产品评论</a></li>
                            <li><a href="javascript::">我要评论</a></li>
                        </ul>
                        <div id="tab-body">
                            <div id="tab0" class="tab-content">
                                <img src="<?php echo $product_result->introduce_image; ?>" alt="" width='220' height='168' class="alignleft frame" />
                                <?php echo $product_result->introduce;?>
                            </div>
                            <div id="tab1" class="tab-content">
                            <!-- 输出关于该产品的留言 -->
                                <div id="comment">
                                    <ol class="commentlist">
                                    <?php
                                    if (empty($comment)) {
                                        echo '该产品暂时没有评论';
                                    } else {

                                    foreach ($comment as $key => $value) {
                                    ?>
                                        <li>
                                            <div class="comment-body">
                                            <div class="avatar">
                                                <!-- <img src="images/content/avatar.gif" alt=""> -->
                                            <span class="shadowimg70"></span>
                                            </div>
                                            <span class="tuser"><?php echo $value['name'];?></span>
                                            <span class="tdate"><?php echo $value['time'];?></span><br><br>
                                            <p><?php echo htmlspecialchars($value['body'],ENT_QUOTES);?></p>
                                            </div>
                                        </li>
                                    <?php
                                    }
                                    }
                                    ?>
                                    </ol>
                                </div>
                            <!--  -->
                            </div>
                            <div id="tab2" class="tab-content">
                            <!-- 提交地址是 /product/addcomment -->
                                <form id="commentform" action="#">
                                    <fieldset>
                                      <label for="name" id="name_label">你的名称:</label>
                                      <input type="text" name="name" id="name" size="50" value="" class="text-input"><span style="display:none; color:red;" id='recomment_username'>请填写你的名称</span>
                                      <input type="hidden" name="product" id="hidden" value="<?php echo $product_result->id;?>">
                                      <label for="email" id="email_label">邮箱地址:</label>
                                      <input type="text" name="email" id="email" size="50" value="" class="text-input"><span style="display:none;color:red;" id='recomment_email'>请填写正确的邮箱</span>
                                      <label for="msg" id="msg_label">留言内容:</label>
                                     <textarea cols="60" rows="10" name="msg" id="msg" class="textarea"></textarea><span style="display:none;color:red;" id='recomment_body'>请填写留言信息</span<br>
                                     <input type="submit" name="submit" id="submit_btn" value="提交">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div><!-- tabcontainer -->
                    <script type="text/javascript">
                        $('#tab-body .tab-content').hide().eq( 0 ).show();

                        $('#tabs li').click(function() {
                            $('#tab-body .tab-content').hide().eq( $(this).index() ).show();
                        })
                        var data = ['','',''];
                        var onOff = {
                            username: false,
                            email: false,
                            msg: false
                        }

                        var $name = jQuery("input#name");
                        $name.blur(function() {
                            if ( $(this).val() != '' ) {
                                data[0] = right($(this), 'username');
                                $('#recomment_username').hide();
                            } else {
                                error($(this), 'username');
                                $('#recomment_username').show();
                            }
                        });

                        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                        var $email = $('input#email');
                        $email.blur(function() {
                            if ( $(this).val() != '' && emailReg.test($(this).val()) ) {
                                data[1] = right($(this), 'email');
                                $('#recomment_email').hide();
                            } else {
                                error($(this), 'email');
                                $('#recomment_email').show();
                            }
                        });

                        var $msg = $('#msg');
                        $msg.blur(function() {
                            if ( $.trim( $(this).val() ) != '' ) {
                                data[2] = right($(this), 'msg');
                                $('#recomment_body').hide();
                            } else {
                                error($(this), 'msg');
                                $('#recomment_body').show();
                            }
                        });

                        function error(obj,attr) {
                            onOff[attr] = false;
                            obj.css('borderColor','red');
                        }
                        function right(obj,attr) {
                            onOff[attr] = true;
                            obj.css('borderColor','#ececec');

                            return obj.val();
                        }

                        $('#submit_btn').click(function() {
                            for(var attr in onOff) {
                                if ( !onOff[attr] ) {
                                    return false;
                                }
                            }
                            var dataStr = 'name=' + data[0] + '&email=' + data[1] + '&msg='  + data[2] + '&product=' + $('#hidden').val() ;
                            jQuery.ajax({
                                type: "POST",
                                url: "/product/addcomment",
                                data: dataStr,
                                success: function() {
                                    // alert('success');
                                    jQuery('#contactform').html("<div id='message'></div>");
                                    jQuery('#message').html("<strong>提交成功</strong>")
                                    .append("<p>感谢你的留言</p>")
                                    .hide()
                                    .fadeIn(1500, function() {
                                        jQuery('#message');
                                    });
                                }
                            });
                            return false;
                        })
                    </script>
                    <div class="separator line"></div>
                   <h2 class="uppercase">相关产品</h2>
                   <ul id="relatedproduct">
                   	<li>
                    	<div class="relatedproduct-img">
                        	<a href="<?php echo $this->createUrl('product/detail',array('id' => $xiangguan[0][id]));?>" target='_blank'><img src="<?php echo $xiangguan[0]['image']?>" alt="" class="frame" width='160' height='133'/></a>
                        </div>
                    	<div class="relatedproduct-text">
                        	<h5 class="colortext"><a href="#"><?php echo $xiangguan[0]['name']; ?></a></h5>
                            <span class="price">¥ <?php echo $xiangguan[0]['price']; ?>元</span>
                            <span >材质：<?php echo $xiangguan[0]['texture']; ?></span><br/>
                            <span >适用人群：<?php echo $xiangguan[0]['people']; ?></span>
                            <!-- <a href="#" class="button">Add to cart</a> -->
                        </div>
                    </li>
                   	<li class="last">
                    	<div class="relatedproduct-img">
                            <a href="<?php echo $this->createUrl('product/detail',array('id' => $xiangguan[1][id]));?>" target='_blank'><img src="<?php echo $xiangguan[1]['image']?>" alt="" class="frame" width='160' height='133'/></a>
                        </div>
                        <div class="relatedproduct-text">
                            <h5 class="colortext"><a href="#"><?php echo $xiangguan[1]['name']; ?></a></h5>
                            <span class="price">¥ <?php echo $xiangguan[1]['price']; ?>元</span>
                            <span >材质：<?php echo $xiangguan[1]['texture']; ?></span><br/>
                            <span >适用人群：<?php echo $xiangguan[1]['people']; ?></span>
                            <!-- <a href="#" class="button">Add to cart</a> -->
                        </div>
                    </li>
                   </ul>
                     <div class="clear"></div><!-- clear float -->
                </div><!-- end #maincontent -->
                <div id="sidebar">
                	<ul>
                    	<li class="widget-container">
                            <h2 class="widget-title">热门产品</h2>
                            <ul id="shoppingcartwidget">
                            <?php
                                foreach ($hot as $key => $value) {
                            ?>
                                <li>
                                    <a href="<?php echo $this->createUrl('product/detail',array('id' => $value->id));?>" target='_blank'><img src="<?php echo $value->image;?>" alt="" class="alignleft" width='57' height='57' /></a>
                                    <span class="colortext"><?php echo $value->name;?></span><br/>
                                    <span>材质：<?php echo $value->texture;?></span><br/>
                                    <span>适用人群：<?php echo $value->people; ?></span><br/>
                                    <span>价格：¥ <?php echo $value->price;?>元</span>
                                    <span class="clear"></span>
                                </li>
                            <?php
                                }
                            ?>
                            </ul>
                        </li>
                    	<li class="widget-container">
                            <h2 class="widget-title">推荐产品</h2>
                            <ul id="recentproductwidget">
                            <?php
                                foreach ($recomment as $key => $value) {
                            ?>
                                <li>
                                    <a href="<?php echo $this->createUrl('product/detail',array('id' => $value->id));?>" target='_blank'><img src="<?php echo $value->image;?>" alt="" class="alignleft" width='57' height='57' /></a>
                                    <span class="colortext"><?php echo $value->name;?></span><br/>
                                    <span>材质：<?php echo $value->texture;?></span><br/>
                                    <span>适用人群：<?php echo $value->people; ?></span><br/>
                                    <span>价格：¥ <?php echo $value->price;?>元</span>
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