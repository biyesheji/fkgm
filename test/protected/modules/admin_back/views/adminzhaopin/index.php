<?php
/* @var $this AdminzhaopinController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'招聘',
);

$this->menu=array(
	array('label'=>'新建招聘', 'url'=>array('create')),
	array('label'=>'所有招聘', 'url'=>array('admin')),
);
?>

<h1>所有招聘信息</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
