<?php
/* @var $this AdminzhaopinController */
/* @var $model Zhaopin */

$this->breadcrumbs=array(
	'招聘'=>array('index'),
    '更新',
	$model->name=>array('view','id'=>$model->id),
);

$this->menu=array(
	array('label'=>'招聘列表', 'url'=>array('index')),
	array('label'=>'新建招聘', 'url'=>array('create')),
	array('label'=>'查看该招聘', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'所有招聘', 'url'=>array('admin')),
);
?>

<h1>更新招聘  <?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>