<?php
/* @var $this AdminnewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'新闻'=>array('index'),
    '更新',
	$model->name=>array('view','id'=>$model->id),
);

$this->menu=array(
	array('label'=>'新闻列表', 'url'=>array('index')),
	array('label'=>'新建新闻', 'url'=>array('create')),
	array('label'=>'查看该新闻', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'所有新闻', 'url'=>array('admin')),
);
?>

<h1>更新新闻 ：<?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>