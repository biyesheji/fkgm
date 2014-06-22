<?php
$form = $this->beginWidget('CActiveForm');
?>
<h1>输入需要配置的信息</h1>
<textarea type="text" name='shili' style="width:560px;height:100px;padding:8px;color:#777;resize:none;overflow:hidden;border:1px solid #dedfdf;outline:none;"><?php echo $info['shili'];?></textarea>
<p>请输入实力配置</p>
<textarea type="text" name='shichang' style="width:560px;height:100px;padding:8px;color:#777;resize:none;overflow:hidden;border:1px solid #dedfdf;outline:none;"><?php echo $info['shichang'];?></textarea>
<p>请输入市场配置</p>
<input  type='submit' value='提交' style="border:1px solid #ddd;background:#e7e5e5;width:60px;height:22px;outline:none;vertical-align: bottom;">
<?php $this->endWidget();?>

