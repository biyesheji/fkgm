<?php
/* @var $this AdmindologController */
/* @var $model Dolog */

$this->breadcrumbs=array(
	'操作日志'=>array('index'),
    '更新',
	$model->name=>array('view','id'=>$model->id),
);

$this->menu=array(
	array('label'=>'操作日志列表', 'url'=>array('index')),
	array('label'=>'新建操作日志', 'url'=>array('create')),
	array('label'=>'查看该操作日志', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'所有操作日志', 'url'=>array('admin')),
);
?>

<h1>更新操作日志： <?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>