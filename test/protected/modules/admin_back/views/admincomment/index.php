<?php
/* @var $this AdmincommentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'产品留言',
);

$this->menu=array(
	array('label'=>'新建留言', 'url'=>array('create')),
	array('label'=>'更多留言', 'url'=>array('admin')),
);
?>

<h1>产品留言</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
