<?php
/* @var $this AdminflashController */
/* @var $model Flash */

$this->breadcrumbs=array(
	'Flash图片'=>array('index'),
	'新建',
);

// echo $this->error();

$this->menu=array(
	array('label'=>'Flash列表', 'url'=>array('index')),
	array('label'=>'所有Flash', 'url'=>array('admin')),
);
?>

<h1>新建 Flash</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>