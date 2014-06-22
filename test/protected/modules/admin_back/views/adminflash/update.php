<?php
/* @var $this AdminflashController */
/* @var $model Flash */

$this->breadcrumbs=array(
	'Flashes图片'=>array('index'),
    '更新',
	$model->title=>array('view','id'=>$model->id),
);

$this->menu=array(
	array('label'=>'Flash列表', 'url'=>array('index')),
	array('label'=>'新建Flash', 'url'=>array('create')),
	array('label'=>'查看该Flash信息', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'所有Flash', 'url'=>array('admin')),
);
?>

<h1>更新 Flash <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>