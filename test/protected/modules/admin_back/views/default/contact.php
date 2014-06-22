<?php
$form = $this->beginWidget('CActiveForm');
?>
<style type="text/css">
    .contact span{
    	display: inline-block;
    	width:65px;
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
<h1>联系我们设置</h1>
<div class="contact">
<span>teip:</span><input type='text' name = 'teip' value='<?php echo $info['teip'];?>'><br />
<span>fax:</span><input type='text' name = 'fax' value='<?php echo $info['fax'];?>' ><br />
<span>email:</span><input type='text' name = 'email' value='<?php echo $info['email'];?>'><br />
<span>website:</span><input type='text' name = 'website' value='<?php echo $info['website'];?>'><br />
<span>right_top:</span><input type='text' name = 'right_top' value='<?php echo $info['right_top'];?>'><br />
<span>top:</span><input type='text' name = 'top' value='<?php echo $info['top'];?>'><br />
<input  type='submit' value='提交' style="border:1px solid #ddd;background:#e7e5e5;width:60px;height:22px;outline:none;vertical-align: bottom;margin-left:106px;margin-top:15px;">
<?php $this->endWidget();?>
</div>