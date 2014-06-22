<?php
/* @var $this AdmincontactController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'联系我们',
);

$this->menu=array(
	array('label'=>'新建联系我们', 'url'=>array('create')),
	array('label'=>'所有联系我们', 'url'=>array('admin')),
);
?>

<h1>联系我们</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
