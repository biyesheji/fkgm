<?php
/* @var $this AdmincontactController */
/* @var $model Contact */

$this->breadcrumbs=array(
	'联系我们'=>array('index'),
	'新建',
);

$this->menu=array(
	array('label'=>'联系我们列表', 'url'=>array('index')),
	array('label'=>'所有联系我们', 'url'=>array('admin')),
);
?>

<h1>新建联系我们</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>