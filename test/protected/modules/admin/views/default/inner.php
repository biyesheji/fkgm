<?php
$form = $this->beginWidget('CActiveForm');
?>
<style type="text/css">
	.title{
		color:#555;
		font-style: 14px;
	}
	.title input{
		width:190px;
		height: 22px;
		border:1px solid #ddd;
		padding:0 5px;
		line-height: 22px;
		color: #777;
		font-size: 12px;
		margin-bottom: 10px;
	}
</style>
<div class="title">
标题： <input  type="text" name='title' value = '<?php echo $info['title'];?>'/><br />
内容： <input  type="text" name='body'  value = '<?php echo $info['body'];?>' /> <br />
<input  type='submit' value='提交' style="border:1px solid #ddd;background:#e7e5e5;width:60px;height:22px;line-height:22px;outline:none;margin-left:40px;margin-top:15px;">
<?php $this->endWidget();?>
</div>
