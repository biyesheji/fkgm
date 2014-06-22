<?php
/* @var $this AdminflashController */
/* @var $model Flash */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'flash-form',
	'enableAjaxValidation'=>false,
	 'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">带 <span class="required">*</span> 是必填的</p>

	<?php echo $form->errorSummary($model); ?>

	<!-- <div class="row"> -->
		<?php //echo $form->labelEx($model,'id'); ?>
		<?php //echo $form->textField($model,'id',array('size'=>10,'maxlength'=>10)); ?>
		<?php //echo $form->error($model,'id'); ?>
	<!-- </div> -->

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->fileField($model,'image',array('size'=>60,'maxlength'=>100)); ?>
		<?php //echo $form->textField($model,'image',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shows'); ?>
		<?php echo $form->textField($model,'shows'); ?>
		<?php echo $form->error($model,'shows'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alt'); ?>
		<?php echo $form->textField($model,'alt',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'alt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'weight'); ?>
		<?php echo $form->textField($model,'weight'); ?>
		<?php echo $form->error($model,'weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '新建' : '确认修改'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->