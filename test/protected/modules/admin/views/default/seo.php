<?php
$form = $this->beginWidget('CActiveForm');
?>
<h1>输入默认的SEO设置</h1>
<textarea type="text" name='seo' style="width:560px;height:100px;padding:8px;color:#777;resize:none;overflow:hidden;border:1px solid #dedfdf;outline:none;"><?php echo $info['seo'];?></textarea>
<p>每行一个回车换行 第一行title 第二行 keywords 第三行 description 中间用户竖线分割 ( | )</p>
<input  type='submit' value='提交' style="border:1px solid #ddd;background:#e7e5e5;width:60px;height:22px;outline:none;vertical-align: bottom;">
<?php $this->endWidget();?>

