<?php
/* @var $this AdminzhaopinController */
/* @var $model Zhaopin */

$this->breadcrumbs=array(
	'招聘'=>array('index'),
	'新建',
);

$this->menu=array(
	array('label'=>'照片列表', 'url'=>array('index')),
	array('label'=>'所有招聘', 'url'=>array('admin')),
);
?>

<h1>新建招聘</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>