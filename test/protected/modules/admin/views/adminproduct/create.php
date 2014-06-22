<?php
/* @var $this AdminproductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'产品'=>array('index'),
	'新建',
);

$this->menu=array(
	array('label'=>'产品列表', 'url'=>array('index')),
	array('label'=>'所有产品', 'url'=>array('admin')),
);
?>

<h1>新建产品</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>