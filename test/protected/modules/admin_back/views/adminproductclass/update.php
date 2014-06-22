<?php
/* @var $this AdminproductclassController */
/* @var $model Productclass */

$this->breadcrumbs=array(
	'产品类别'=>array('index'),
    '更新',
	$model->name=>array('view','id'=>$model->id),
);

$this->menu=array(
	array('label'=>'产品类别列表', 'url'=>array('index')),
	array('label'=>'新建产品类别', 'url'=>array('create')),
	array('label'=>'查看该产品类别信息', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'所有产品类别', 'url'=>array('admin')),
);
?>

<h1>更新产品类别信息  <?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>