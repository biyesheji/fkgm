<?php
/* @var $this AdmincommentController */
/* @var $model Comment */

$this->breadcrumbs=array(
    '产品留言'=>array('index'),
    '更多留言',
);

$this->menu=array(
	array('label'=>'留言列表', 'url'=>array('index')),
	array('label'=>'更多留言', 'url'=>array('admin')),
);
?>

<h1>新建产品留言</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>