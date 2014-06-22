<?php
/* @var $this AdminnewsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'新闻',
);

$this->menu=array(
	array('label'=>'新建新闻', 'url'=>array('create')),
	array('label'=>'所有新闻', 'url'=>array('admin')),
);
?>
<h1>新闻列表</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
