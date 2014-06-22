	<div id="footer">
        <div id="footer-pattern">
			<div class="container940">
            	<div id="footcol1">
                	<ul>
                    	<li class="widget-container">
                            <h2 class="widget-title">热门产品</h2>
                            <ul id="recentpostwidget">
                            <?php
                                foreach ($hot_result as $key => $value) {
                            ?>
                                <li>
                                    <img src="<?php echo $value['image'];?>"
                                    alt="<?php echo mb_substr($value['introduce'],0,50,'UTF-8');?>"
                                    title="<?php echo mb_substr($value['introduce'],0,70,'UTF-8'),'......';?>"
                                    class="alignleft frame" style="width: 61px;height: 61px" />
                                    <h5><a href="<?php echo Yii::app()->createUrl('product/detail',array('id' => $value['id']));?>"><?php echo $value['name'];?></a></h5>
                                    <span><?php  echo mb_substr($value['introduce'],0,25,'UTF-8'),'......'; ?></span>
                                </li>
                            <?php
                                }
                            ?>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div id="footcol2">
                	<ul>
                        <li class="widget-container">
                        	<h2 class="widget-title">友情链接</h2>
                            <div class="youqing-link-box">
                                <ul>
                                <?php foreach ($result as $key => $value) {
                                    if (empty($value['image'])) {
                                ?>
                                <li><a href="<?php echo $value['url'];?>" target='_black' title ='<?php echo $value['title'];?>'><?php echo $value['name'];?></a></li>
                                <?php
                                    }
                                }?>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- 友情链接 无缝滚动效果 -->
                <script type="text/javascript">
                $(function() {
                    (function() {
                        $('.youqing-link-box ul').get(0).innerHTML += $('.youqing-link-box ul').html();

                        var timer = setInterval(function() {
                            $('.youqing-link-box ul').css('top',function() {
                                if ( parseInt($('.youqing-link-box ul').css('top')) - 1 <= -parseInt($('.youqing-link-box ul').css('height'))/2) {
                                    return 0;
                                }
                                return  parseInt($('.youqing-link-box ul').css('top')) - 1
                            });

                        },30);

                        $('.youqing-link-box').hover(function() {
                            clearInterval(timer);
                        },function() {
                            timer = setInterval(function() {
                            $('.youqing-link-box ul').css('top',function() {
                                if ( parseInt($('.youqing-link-box ul').css('top')) - 1 <= -parseInt($('.youqing-link-box ul').css('height'))/2) {
                                    return 0;
                                }
                                return  parseInt($('.youqing-link-box ul').css('top')) - 1
                            });

                        },30);
                        })
                    })();
                })
                </script>
                <!-- 友情链接 无缝滚动效果 -->
                <div id="footcol3">
                	<ul>
                        <li class="widget-container">
                        	<h2 class="widget-title"></h2>
                            <ul id="flickr">
                            <?php
                            $i = 1;
                            foreach ($result as $key => $value) {
                                if ($value['image']) {
                            ?>
                            <li <?php echo $i%3 == 0 && $i != 0? "class = 'nomargin'" : '';?>><a href="<?php echo $value['url'];?>" title = "<?php echo $value['title'];?>" target='_black'>
                            <img src="<?php echo $value['image'];?>" alt="<?php echo $value['title'];?>" class="frame"  style='width: 51px;height: 51px'/></a></li>
                            <?php
                                $i++;
                                }
                            }?>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- 友情链接 无缝滚动效果 -->
                <script type="text/javascript">
                $(function() {
                    (function() {
                        $('#flickr').get(0).innerHTML += $('#flickr').html();

                        var timer = setInterval(function() {
                            $('#flickr').css('top',function() {
                                if ( parseInt($('#flickr').css('top')) - 1 <= -parseInt($('#flickr').css('height'))/2) {
                                    return 0;
                                }
                                return  parseInt($('#flickr').css('top')) - 1
                            });

                        },30);

                        $('#footcol3').hover(function() {
                            clearInterval(timer);
                        },function() {
                            timer = setInterval(function() {
                            $('#flickr').css('top',function() {
                                if ( parseInt($('#flickr').css('top')) - 1 <= -parseInt($('#flickr').css('height'))/2) {
                                    return 0;
                                }
                                return  parseInt($('#flickr').css('top')) - 1
                            });

                        },30);
                        })
                    })();
                })
                </script>
                <!-- 友情链接 无缝滚动效果 -->
                <div id="footcol4">
                	<ul>
                        <li class="widget-container">
                        	<h2 class="widget-title">公司宗旨</h2>
                            <div class="textwidget">
                            <?php echo $index_variable; ?>
                            <!-- <p> -->
                            <!-- Nulla interdum, enim eu dictum pellentesque, ipsum elit varius purus, et imperdiet odio magna lobortis purus. -->
                            <!-- </p> -->
                            <!-- <span>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus sed mauris at eros mollis ultricies vitae porta dui. </span> -->
                            </div>
                        </li>
                    </ul>
                </div>
            <div class="clear"></div><!-- clear float -->
            </div><!-- end container940 -->
        </div><!-- end #footer-pattern -->
		</div><!-- end #footer -->