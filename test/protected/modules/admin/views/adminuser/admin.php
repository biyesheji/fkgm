<?php
/* @var $this AdminuserController */
/* @var $model User */

$this->breadcrumbs=array(
	'用户'=>array('index'),
	'信息',
);

$this->menu=array(
	array('label'=>'用户列表', 'url'=>array('index')),
	array('label'=>'新建用户', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>用户信息</h1>

<p>在搜索中，你可以使用这些数据库查询条件(<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>)
</p>

<?php echo CHtml::link('高级搜索','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'username',
		'password',
		array(
			'name' => 'role',
			'value' => '$data->role == 1 ? 超级管理员 : 普通管理员'
			),
		array(
			'name' => 'status',
			'value' => '$data->status ? 启用 : 阻止'
			),
		'email',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
