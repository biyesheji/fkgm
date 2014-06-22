<?php
$form = $this->beginWidget('CActiveForm');
?>
<style type="text/css">
	.comments{
		width: 700px;
		font-size: 14px;
		color: #555;
	}
	.comments span{
		display: inline-block;
		width: 140px;
		text-align: right;
		margin-right: 5px;
		vertical-align: middle;
	}
	.comments input{
		width:190px;
		height: 22px;
		border:1px solid #ddd;
		padding:0 5px;
		line-height: 22px;
		color: #777;
		font-size: 12px;
		margin-bottom: 10px;
	}
	.comments select{
		border:1px solid #ddd;
		margin-bottom: 8px;
	}
	.edui-editor{
		margin-top: 10px;
		margin-left: 80px;
	}
</style>
<h1>用户留言配置</h1>
<div class="comments">
<span>是否发送：</span><select name='send'> <option value='1' <?php echo $info['send'] ? "selected = 'selected'" : '' ;?>>发送</option> <option value='0' <?php echo  !$info['send'] ? "selected = 'selected'" : '';?>>不发送</option> </select><br />
<span>用户名:</span><input name ='username' type='text' value='<?php echo $info['username'];?>'> <br />
<span>密码:</span><input name ='password' type='text' value='<?php echo $info['password'];?>'> <br />
<span>smtp地址:</span><input name ='host' type='text' value='<?php echo $info['host'];?>'> <br />
<span>发件人(默认是用户名，尽量不要更改):</span><input name ='from' type='text' value='<?php echo $info['username'];?>'> <br />
<span>altbody属性:</span><input name ='altbody' type='text' value='<?php echo $info['altbody'];?>'> <br />
<span>发件人姓名(fromname):</span><input name ='fromname' type='text' value='<?php echo $info['fromname'];?>'> <br />
<span>邮件主题: </span><input name ='subject' type='text' value='<?php echo $info['subject'];?>'> <br />
<span>邮件模板:</span><textarea id='mail_body' name='body'><?php echo $info['body'];?></textarea>
<input  type='submit' value='提交' style="border:1px solid #ddd;background:#e7e5e5;width:120px;height:24px;line-height:22px;outline:none;margin-left:400px;margin-top:15px;">
<?php $this->endWidget();?>
<script type="text/javascript">
    UE.getEditor('mail_body',{
        initialFrameWidth:700,
        initialFrameHeight:300,
    });
</script>
</div>