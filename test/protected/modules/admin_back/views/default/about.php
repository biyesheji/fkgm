<?php
$form = $this->beginWidget('CActiveForm');
?>
<style type="text/css">
    .contact span{
    	display: inline-block;
    	width:120px;
    	text-align: right;
    	margin-right: 8px;
    }
	.contact input{
		margin-bottom: 8px;
		width:170px;
		height:22px;
		padding:0 5px;
		line-height:22px;
		color:#777;
	}
</style>
<div class="contact">
<span>top:</span><input type='text' name = 'top'     value='<?php echo $info['top'];?>'><br />
<span>center:</span><input type='text' name = 'center'      value='<?php echo $info['center'];?>'><br />
<span>more_about:</span><input type='text' name = 'more_about'    value='<?php echo $info['more_about'];?>'><br />
<span>more_about_red:</span><input type='text' name = 'more_about_red'  value='<?php echo $info['more_about_red'];?>'><br />
<span>more_about_botton:</span><input type='text' name = 'more_about_botton'  value='<?php echo $info['more_about_botton'];?>'><br />
<p></p>
<input  type='submit' value='提交' style="border:1px solid #ddd;background:#e7e5e5;width:60px;height:22px;outline:none;vertical-align: bottom;margin-left:130px;margin-top:15px;">
<?php $this->endWidget();?>
</div>