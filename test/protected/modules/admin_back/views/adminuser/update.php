<?php
/* @var $this AdminuserController */
/* @var $model User */

$this->breadcrumbs=array(
	'用户'=>array('index'),
    '更新',
	$model->username=>array('view','id'=>$model->id),
);

$this->menu=array(
	array('label'=>'用户列表', 'url'=>array('index')),
	array('label'=>'新建用户', 'url'=>array('create')),
	array('label'=>'查看该用户信息', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'所有用户', 'url'=>array('admin')),
);
?>

<h1>更新用户信息 <?php echo $model->username; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>