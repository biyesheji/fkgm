<?php
$form = $this->beginWidget('CActiveForm');
?>
<h1>输入需要添加的qq号码</h1>
<textarea type="text" name='qq' style="width:560px;height:100px;padding:8px;color:#777;resize:none;overflow:hidden;border:1px solid #dedfdf;outline:none;"><?php echo $info['qq'];?></textarea>
<p>每行一个 回车换行  中间用户竖线分割 ( | ) 前面是qq号码  后面是名称</p>
<input  type='submit' value='提交' style="border:1px solid #ddd;background:#e7e5e5;width:60px;height:22px;outline:none;vertical-align: bottom;">
<?php $this->endWidget();?>

