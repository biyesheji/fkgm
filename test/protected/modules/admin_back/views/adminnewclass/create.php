<?php
/* @var $this AdminnewclassController */
/* @var $model Newclass */

$this->breadcrumbs=array(
	'新闻类别'=>array('index'),
	'新闻类别信息',
);

$this->menu=array(
	array('label'=>'新闻类别列表', 'url'=>array('index')),
	array('label'=>'所有新闻类别', 'url'=>array('admin')),
);
?>

<h1>新建新闻类别</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>