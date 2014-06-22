<?php
/* @var $this AdminproductclassController */
/* @var $model Productclass */

$this->breadcrumbs=array(
	'产品类别'=>array('index'),
	'新建',
);

$this->menu=array(
	array('label'=>'产品类别列表', 'url'=>array('index')),
	array('label'=>'所有产品类别', 'url'=>array('admin')),
);
?>

<h1>新建产品类别</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>