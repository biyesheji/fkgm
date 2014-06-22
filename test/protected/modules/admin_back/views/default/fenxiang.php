<?php
$form = $this->beginWidget('CActiveForm');
?>
<h1>请输入分享</h1>
<textarea type="text" name='fenxiang' style="width:560px;height:100px;padding:8px;color:#777;resize:none;overflow:hidden;border:1px solid #dedfdf;outline:none;"><?php echo $info['fenxiang'];?></textarea>
<p>输入分享代码</p>
<input  type='submit' value='提交' style="border:1px solid #ddd;background:#e7e5e5;width:60px;height:22px;outline:none;vertical-align: bottom;">
<?php $this->endWidget();?>

