<?php
/* @var $this AdminflashController */
/* @var $model Flash */
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

	<!-- <div class="row"> -->
		<?php //echo $form->label($model,'image'); ?>
		<?php //echo $form->textField($model,'image',array('size'=>60,'maxlength'=>100)); ?>
	<!-- </div> -->

	<div class="row">
		<?php echo $form->label($model,'shows'); ?>
		<?php //echo $form->textField($model,'shows'); ?>
		<?php echo $form->dropDownList($model,'shows',array(1=>'显示',0=>'不显示'));?>

	</div>

	<div class="row">
		<?php echo $form->label($model,'alt'); ?>
		<?php echo $form->textField($model,'alt',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'weight'); ?>
		<?php echo $form->textField($model,'weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('搜索'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->