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
<span>关于我们上部配置:</span>
<textarea  name="top" style="width:560px;height:100px;padding:8px;color:#777;resize:none;overflow:hidden;border:1px solid #dedfdf;outline:none;"><?php echo $info['top'];?></textarea><br /><br />
<span>关于我们中部配置:</span>
<textarea  name="center" style="width:560px;height:100px;padding:8px;color:#777;resize:none;overflow:hidden;border:1px solid #dedfdf;outline:none;"><?php echo $info['center'];?></textarea><br /><br />
<span>更多关于我们:</span>
<textarea  name="more_about" style="width:560px;height:100px;padding:8px;color:#777;resize:none;overflow:hidden;border:1px solid #dedfdf;outline:none;"><?php echo $info['more_about'];?></textarea><br /><br />
<span>更多关于我们红色字:</span>
<textarea  name="more_about_red" style="width:560px;height:100px;padding:8px;color:#777;resize:none;overflow:hidden;border:1px solid #dedfdf;outline:none;"><?php echo $info['more_about_red'];?></textarea><br /><br />
<span>关于我们底部配置:</span>
<textarea  name="more_about_botton" style="width:560px;height:100px;padding:8px;color:#777;resize:none;overflow:hidden;border:1px solid #dedfdf;outline:none;"><?php echo $info['more_about_botton'];?></textarea><br /><br />
<p></p>
<input  type='submit' value='提交' style="border:1px solid #ddd;background:#e7e5e5;width:60px;height:22px;outline:none;vertical-align: bottom;margin-left:130px;margin-top:15px;">
<?php $this->endWidget();?>
</div>