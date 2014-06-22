<?php
$this->title = '联系我们'.Yii::app()->name;
$seo = service::getseo();
$this->keywords = $seo[1];
$this->description = $seo[2];
Yii::app()->clientScript->registerCssFile('/css/style.css');
Yii::app()->clientScript->registerCssFile('/css/inner.css');
Yii::app()->clientScript->registerScriptFile('/js/jquery-1.6.4.min.js');
Yii::app()->clientScript->registerScriptFile('/js/hoverIntent.js');
Yii::app()->clientScript->registerScriptFile('/js/superfish.js');
Yii::app()->clientScript->registerScriptFile('/js/supersubs.js');
Yii::app()->clientScript->registerScriptFile('/js/contact.js');
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
                    <h2 class="title_pattern uppercase"><span>联系我们</span></h2>
                    <?php echo $contact_right['top'];?>
                    <div class="separator line"></div>
                    <div id="contactform">
                       <?php $form=$this->beginWidget('CActiveForm',array(
                              'id'=>'contact',
                              'enableAjaxValidation'=>true,
                              'enableClientValidation'=>true,
                              'clientOptions'=>array(
                                  'validateOnSubmit'=>true,
                                  'accept-charset'=>"UTF-8",
                                  ),
                               ));?>
                        <fieldset>
                          <label for="name" id="name_label">请填写你的名称:</label>
                          <?php echo $form->textField($contact,'name',array('id' => 'name','class' => 'text-input'));?><span style="display:none; color:red;" id='contact_username'>请填写你的名称</span><br/>
                          <label for="email" id="email_label">请填写邮箱地址:</label>
                          <?php echo $form->textField($contact,'email',array('id' => 'email','class' => 'text-input'));?><span style="display:none; color:red;" id='contact_email'>请填写正确的邮箱 </span><br/>
                          <label for="subject" id="subject_label">请填写主题:</label>
                          <?php echo $form->textField($contact,'subject',array('id' => 'subject','class' => 'text-input'));?><span style="display:none; color:red;" id='contact_theme'>请填写主题</span><br/>
                          <label for="msg" id="msg_label">请填写信息:</label>
                         <?php echo $form->textArea($contact,'message',array('id' => 'msg','cols' => '60','rows' => '10'));?><span style="display:none; color:red;" id='contact_body'>请填写留言信息</span><br class="clear" />
                          <?php echo CHtml::submitButton('提交',array('name' =>'submit','class' => 'butcontact','id' => 'submit_btn'));?>
                        </fieldset>
                      <?php $this->endWidget();?>
                      <br class="clear" />
                      <span class="error" id="name_error">请填写名称</span>
                      <span class="error" id="email_error">请填写邮箱</span>
                      <span class="error" id="email_error2">请填写正确的邮箱</span>
                      <span class="error" id="msg_error">请填写信息</span>
                    </div><!-- end #contactform -->
                     <div class="clear"></div><!-- clear float -->
                </div><!-- end #maincontent -->
                <div id="sidebar">
                    <ul>
                        <li class="widget-container">
                            <h2 class="widget-title">联系我们</h2>
                            <?php //var_dump($contact_right);?>
                            <div class="textwidget">
                            <?php echo $contact_right['top'];?>
                            <p>
                            传真:<?php echo $contact_right['teip'];?><br/>
                            电话: <?php echo $contact_right['fax'];?><br/>
                            邮箱: <a href="mailto:<?php echo $contact_right['email'];?>" target="_blank"><?php echo $contact_right['email'];?></a><br/>
                            主页: <?php echo $contact_right['website'];?><br/>
                            </p>
                            </div>
                        </li>
                        <li class="widget-container">
                            <h2 class="widget-title">公司地址</h2>
                            <div class="textwidget">
                            <iframe style="width:270px; height:250px; border:0; margin:0"
                            src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Jalan+Kemanggisan+Utama,+Jakarta,+Indonesia&amp;sll=37.0625,-95.677068&amp;
                            sspn=37.0625,-95.677068&amp;ie=UTF8&amp;hq=&amp;hnear=Jalan+Kemanggisan+Utama,+Jakarta+Barat,+Jakarta,+Indonesia&amp;ll=34.783693,113.644214
                            &amp;spn=0.016639,0.034246&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                            <br /><small>
                            <a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Jalan+Kemanggisan+Utama,+Jakarta,+Indonesia&amp;
                            sll=37.0625,-95.677068&amp;sspn=46.092115,79.013672&amp;ie=UTF8&amp;hq=&amp;hnear=Jalan+Kemanggisan+Utama,+Jakarta+Barat,+Jakarta,+Indonesia
                            &amp;ll=34.783693,113.644214&amp;spn=0.016639,0.034246&amp;z=14&amp;iwloc=A" style="text-align:left; color:#555">我们的地址</a></small>
                            </div>
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

<?php
  if (Yii::app()->user->hasFlash('send_email')) {
    echo '<script> alert('.Yii::app()->user->getFlash('send_email').')</script>';
  }
?>