<?php
/* @var $this AdminproductclassController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'产品类别',
);

$this->menu=array(
	array('label'=>'新建产品类别', 'url'=>array('create')),
	array('label'=>'所有产品类别', 'url'=>array('admin')),
);
?>

<h1>产品类别信息</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
