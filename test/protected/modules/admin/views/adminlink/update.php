<?php
/* @var $this AdminlinkController */
/* @var $model Link */

$this->breadcrumbs=array(
	'友情链接'=>array('index'),
    '更新',
	$model->name=>array('view','id'=>$model->id),
);

$this->menu=array(
	array('label'=>'友情链接', 'url'=>array('index')),
	array('label'=>'新建友情链接', 'url'=>array('create')),
	array('label'=>'查看该友情链接', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'所有友情链接', 'url'=>array('admin')),
);
?>

<h1>更新友情链接 ：<?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>