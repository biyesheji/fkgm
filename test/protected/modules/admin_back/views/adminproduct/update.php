<?php
/* @var $this AdminproductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'产品'=>array('index'),
    '更新产品',
	$model->name=>array('view','id'=>$model->id),
);

$this->menu=array(
	array('label'=>'产品列表', 'url'=>array('index')),
	array('label'=>'新建产品', 'url'=>array('create')),
	array('label'=>'查看该产品', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'所有产品', 'url'=>array('admin')),
);
?>

<h1>更新产品 <?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>