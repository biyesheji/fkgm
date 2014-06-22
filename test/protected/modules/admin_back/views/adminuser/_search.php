<?php
/* @var $this AdminuserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'role'); ?>
		<?php //echo $form->textField($model,'role',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->dropDownList($model,'role',array(2=> '普通管理员',1=> '超级管理员'));?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php //echo $form->textField($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',array(0=> '阻止',1=> '启用'));?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('搜索'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->