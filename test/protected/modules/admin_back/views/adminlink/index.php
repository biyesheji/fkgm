<?php
/* @var $this AdminlinkController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'友情链接',
);

$this->menu=array(
	array('label'=>'新建友情链接', 'url'=>array('create')),
	array('label'=>'所有友情链接', 'url'=>array('admin')),
);
?>

<h1>友情链接</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
