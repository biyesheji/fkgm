<?php
/* @var $this AdmindologController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'操作日志',
);

$this->menu=array(
	array('label'=>'新建操作日志', 'url'=>array('create')),
	array('label'=>'所有操作日志', 'url'=>array('admin')),
);
?>

<h1>操作日志</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
