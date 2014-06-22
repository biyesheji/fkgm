<?php
/* @var $this AdminlinkController */
/* @var $model Link */

$this->breadcrumbs=array(
	'友情链接'=>array('index'),
	'新建',
);

$this->menu=array(
	array('label'=>'友情链接列表', 'url'=>array('index')),
	array('label'=>'所有友情链接', 'url'=>array('admin')),
);
?>

<h1>新建友情链接</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>