<?php
/* @var $this AdminnewclassController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'新闻类别',
);

$this->menu=array(
	array('label'=>'新建新闻类别', 'url'=>array('create')),
	array('label'=>'所有新闻类别', 'url'=>array('admin')),
);
?>

<h1>新闻类别信息</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
