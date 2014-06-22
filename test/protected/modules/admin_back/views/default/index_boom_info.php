<?php
$form = $this->beginWidget('CActiveForm');
?>
<h1>页面底部公司宗旨设置：</h1>
<textarea type="text" name='value' style="width:560px;height:100px;padding:8px;color:#777;resize:none;overflow:hidden;border:1px solid #dedfdf;outline:none;"><?php echo $info;?></textarea>
<p></p>
<input  type='submit' value='提交' style="border:1px solid #ddd;background:#e7e5e5;width:60px;height:22px;outline:none;vertical-align: bottom;">
<?php $this->endWidget();?>

