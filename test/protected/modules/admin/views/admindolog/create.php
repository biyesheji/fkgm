<?php
/* @var $this AdmindologController */
/* @var $model Dolog */

$this->breadcrumbs=array(
	'操作日志'=>array('index'),
	'新建',
);

$this->menu=array(
	array('label'=>'操作日志列表', 'url'=>array('index')),
	array('label'=>'所有操作日志', 'url'=>array('admin')),
);
?>

<h1>新建操作日志</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>