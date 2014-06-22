<?php
/* @var $this AdminnewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'新闻'=>array('index'),
	'新建',
);

$this->menu=array(
	array('label'=>'新闻列表', 'url'=>array('index')),
	array('label'=>'所有新闻', 'url'=>array('admin')),
);
?>

<h1>新建新闻</h1>
<?php
    if (Yii::app()->user->hasFlash('upload_error')) {
        echo Yii::app()->user->getFlash('upload_error');
    }

?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>