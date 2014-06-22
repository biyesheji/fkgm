<?php
$this->pageTitle = Yii::app()->name . '--产品评论';
Yii::app()->clientScript->registerCssFile('/css/style.css');
Yii::app()->clientScript->registerCssFile('/css/inner.css');
Yii::app()->clientScript->registerScriptFile('/js/jquery-1.6.4.min.js');
Yii::app()->clientScript->registerScriptFile('/js/superfish.js');
Yii::app()->clientScript->registerScriptFile('/js/hoverIntent.js');
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

                     <div class="post">
                         <img src="/images/content/post1.jpg" alt="" class="frame" />
                         <span class="shadowimg610"></span>
                         <div class="entry-utility">
                            <span class="postauthor"><img src="/images/icons/author.png" alt="" /><a href="#">Richard Johnson</a></span>
                            <span class="postdate"><img src="/images/icons/date.png" alt="" />January 17, 2012</span>
                            <span class="postcomm"><img src="/images/icons/comment.png" alt="" /><a href="#">0 Comment</a></span>
                            <span class="postcat"><img src="/images/icons/cat.png" alt="" /><a href="#">Site Templates</a></span>
                         </div>
                         <div class="entry-content">
                         	<h2 class="posttitle"><a href="#">Etiam tincidunt felis posuere nisl.</a></h2>
                            <p>Nam ac eros sit amet justo lacinia iaculis. Nam a tincidunt velit. Etiam nec diam vitae urna hendrerit placerat. In cursus placerat mauris id imperdiet.</p>
                            <p>Curabitur enim metus, malesuada a congue id, luctus vel velit. Integer faucibus venenatis cursus. Sed eu odio non nibh tempus vestibulum ac vel lectus. Etiam viverra, arcu nec ullamcorper ornare, velit purus blandit ante, in suscipit tellus odio eu urna. Fusce a urna nibh. </p>
                            <p>Curabitur luctus euismod arcu, non volutpat erat fringilla non. Duis venenatis lorem condimentum ante fermentum nec consectetur tortor lacinia. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dignissim pellentesque velit in vestibulum. Nullam tempus tempus elit sed dictum. </p>
                            <p>Praesent vestibulum hendrerit posuere. Aenean nec felis id ipsum auctor faucibus. Nulla facilisi. Duis nec est vitae leo volutpat auctor non in neque. In hac habitasse platea dictumst. Aenean rhoncus rhoncus nunc at eleifend. Suspendisse at nisi purus, eget placerat tellus. Sed convallis dapibus quam, nec viverra neque auctor porta. Etiam dapibus pretium massa nec pellentesque. Integer purus turpis, mollis sit amet mattis vel, facilisis nec enim.</p>

                         </div>
                         <div class="clear"></div><!-- clear float -->
                     </div><!-- .post -->

                    <div id="comment">
                        <h2>Comments</h2>
                        <ol class="commentlist">
                            <li>
                                <div class="comment-body">
                                <div class="avatar">
                                    <img src="/images/content/avatar.gif" alt=""/>
                                <span class="shadowimg70"></span>
                                </div>
                                <span class="tuser">Richard Delano</span>
                                <span class="tdate">August 17, 2010 7:15 am</span><br/><br/>
                                <p>Nulla lobortis facilisis eros vitae mollis. Morbi consectetur, tortor ut feugiat rhoncus, nunc augue placerat massa, sit amet laoreet est libero quis nisl. Integer cursus sodales sem eu dapibus. Morbi lobortis eleifend lectus sit amet porttitor. Nam tincidunt congue laoreet.</p>
                                <a href="#">Reply</a>
                                </div>
                            </li>
                            <li>
                                <div class="comment-body">
                                <div class="avatar">
                                    <img src="/images/content/avatar.gif" alt=""/>
                                <span class="shadowimg70"></span>
                                </div>
                                <span class="tuser">Farleys Ditz</span>
                                <span class="tdate">August 17, 2010 7:15 am</span><br/><br/>
                                <p>Nulla lobortis facilisis eros vitae mollis. Morbi consectetur, tortor ut feugiat rhoncus, nunc augue placerat massa, sit amet laoreet est libero quis nisl. Integer cursus sodales sem eu dapibus. Morbi lobortis eleifend lectus sit amet porttitor. Nam tincidunt congue laoreet.</p>
                                <a href="#">Reply</a>
                                </div>
                                <ol>
                                    <li>
                                        <div class="comment-body">
                                        <div class="avatar">
                                            <img src="/images/content/avatar2.gif" alt=""/>
                                        <span class="shadowimg70"></span>
                                        </div>
                                        <span class="tuser">Lyns Ramirez</span>
                                        <span class="tdate">August 17, 2010 7:15 am</span><br/><br/>
                                        <p>Nulla lobortis facilisis eros vitae mollis. Morbi consectetur, tortor ut feugiat rhoncus, nunc augue placerat massa, sit amet laoreet est libero quis nisl. Integer cursus sodales sem eu dapibus. Morbi lobortis eleifend lectus sit amet porttitor. Nam tincidunt congue laoreet.</p>
                                        <a href="#">Reply</a>
                                        </div>
                                    </li>
                                </ol>
                            </li>
                            <li>
                                <div class="comment-body">
                                <div class="avatar">
                                    <img src="/images/content/avatar2.gif" alt=""/>
                                <span class="shadowimg70"></span>
                                </div>
                                <span class="tuser">Dakota Kings</span>
                                <span class="tdate">August 17, 2010 7:15 am</span><br/><br/>
                                <p>Nulla lobortis facilisis eros vitae mollis. Morbi consectetur, tortor ut feugiat rhoncus, nunc augue placerat massa, sit amet laoreet est libero quis nisl. Integer cursus sodales sem eu dapibus. Morbi lobortis eleifend lectus sit amet porttitor. Nam tincidunt congue laoreet.</p>
                                <a href="#">Reply</a>
                                </div>
                            </li>
                        </ol>
                        <h3>Leave Comment</h3>
                          <form id="commentform" action="#">
                            <fieldset>
                              <label for="name" id="name_label">Name:</label>
                              <input type="text" name="name" id="name" size="50" value="" class="text-input" />
                              <label for="email" id="email_label">Email:</label>
                              <input type="text" name="email" id="email" size="50" value="" class="text-input" />
                              <label for="msg" id="msg_label">Message:</label>
                             <textarea cols="60" rows="10" name="msg" id="msg" class="textarea"></textarea><br />
                              <input type="submit" name="submit" id="submit_btn" value="Submit"/>
                            </fieldset>

                          </form>
                    </div><!-- end #comment -->


                     <div class="clear"></div><!-- clear float -->
                </div><!-- end #maincontent -->
                <div id="sidebar">
                	<ul>
                    	<li class="widget-container">
                        	<h2 class="widget-title">Text Widget</h2>
                            <div class="textwidget">
                            <span class="colortext">Cras faucibus ante ut diam</span> laoreet a congue mi aliquam. Sed interdum nisl pharetra ipsum aliquet tempus.
                            </div>
                        </li>
                    	<li class="widget-container">
                            <h2 class="widget-title">Recent Comments</h2>
                            <ul id="recentcommentwidget">
                                <li>
                                    <img src="/images/content/imgcomm1.jpg" alt="" class="alignleft" />
                                    <span class="colortext">Marina Whitty</span>
                                    <span><a href="#">Mauris interdum lectus accumsan viverra. Curabitur dictum felis.</a></span>
                                    <span class="clear"></span>
                                </li>
                                <li>
                                    <img src="/images/content/imgcomm2.jpg" alt="" class="alignleft" />
                                    <span class="colortext">Raymond Knox</span>
                                     <span><a href="#">Mauris interdum lectus accumsan viverra. Curabitur dictum felis.</a></span>
                                    <span class="clear"></span>
                                </li>
                                <li>
                                    <img src="/images/content/imgcomm3.jpg" alt="" class="alignleft" />
                                    <span class="colortext">Aiko Takamichi</span>
                                     <span><a href="#">Mauris interdum lectus accumsan viverra. Curabitur dictum felis.</a></span>
                                    <span class="clear"></span>
                                </li>
                            </ul>
                        </li>
                    	<li class="widget-container">
                        	<h2 class="widget-title">Latest Post</h2>
                            <ul>
                            	<li><a href="#">Powerful Design by Templatesquare</a></li>
                                <li><a href="#">How Does it Works ?</a></li>
                                <li><a href="#">The History about Magnum</a></li>
                                <li><a href="#">Photography Design</a></li>
                            </ul>
                        </li>
                    	<li class="widget-container">
                        	<h2 class="widget-title">Tags</h2>
                            <span class="tag"><span class="left"></span><span class="middle"><a href='#'>Design</a></span><span class="right"></span></span>
                            <span class="tag"><span class="left"></span><span class="middle"><a href='#'>Site Templates</a></span><span class="right"></span></span>
                            <span class="tag"><span class="left"></span><span class="middle"><a href='#'>Photography Design</a></span><span class="right"></span></span>
                            <span class="tag"><span class="left"></span><span class="middle"><a href='#'>Music</a></span><span class="right"></span></span>
                            <span class="tag"><span class="left"></span><span class="middle"><a href='#'>Wordpress</a></span><span class="right"></span></span>
                            <div class="clear"></div>
                        </li>
                    	<li class="widget-container">
                            <h2 class="widget-title">Recent Projects</h2>
                            <ul id="recentprojectwidget">
                                <li>
                                    <a href="#"><img src="/images/content/rp1.jpg" alt="" class="alignleft" /></a>
                                    <span class="colortext">Project by: Andrew Saltchesse</span><br/>
                                    <span class="date">Januari 17, 2012</span>
                                    <span class="clear"></span>
                                </li>
                                <li>
                                    <a href="#"><img src="/images/content/rp2.jpg" alt="" class="alignleft" /></a>
                                    <span class="colortext">Project by: Rachel Carrisa</span><br/>
                                    <span class="date">Januari 17, 2012</span>
                                    <span class="clear"></span>
                                </li>
                                <li>
                                    <a href="#"><img src="/images/content/rp3.jpg" alt="" class="alignleft" /></a>
                                    <span class="colortext">Project by: Diana Rose</span><br/>
                                    <span class="date">Januari 17, 2012</span>
                                    <span class="clear"></span>
                                </li>
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

