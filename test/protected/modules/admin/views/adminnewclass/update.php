<?php
/* @var $this AdminnewclassController */
/* @var $model Newclass */

$this->breadcrumbs=array(
	'新闻类别'=>array('index'),
    '更新',
	$model->name=>array('view','id'=>$model->name),
);

$this->menu=array(
	array('label'=>'新闻类别列表', 'url'=>array('index')),
	array('label'=>'新建新闻类别', 'url'=>array('create')),
	array('label'=>'查看该新闻类别', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'所有信息类别信息', 'url'=>array('admin')),
);
?>

<h1>更新新闻类别 ： <?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>