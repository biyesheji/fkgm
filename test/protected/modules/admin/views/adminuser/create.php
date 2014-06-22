<?php
/* @var $this AdminuserController */
/* @var $model User */

$this->breadcrumbs=array(
	'用户'=>array('index'),
	'新建',
);

$this->menu=array(
	array('label'=>'用户列表', 'url'=>array('index')),
	array('label'=>'所有用户', 'url'=>array('admin')),
);
?>

<h1>新建用户</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>