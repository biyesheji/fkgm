<?php
/* @var $this AdminflashController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'flash图片',
);

$this->menu=array(
	array('label'=>'新建Flash', 'url'=>array('create')),
	array('label'=>'所有Flash图片', 'url'=>array('admin')),
);
?>

<h1>所有flash</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
