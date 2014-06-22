<?php
/* @var $this AdminproductController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'所有产品',
);

$this->menu=array(
	array('label'=>'新建产品', 'url'=>array('create')),
	array('label'=>'所有产品', 'url'=>array('admin')),
);?>

<h1>所有产品</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
