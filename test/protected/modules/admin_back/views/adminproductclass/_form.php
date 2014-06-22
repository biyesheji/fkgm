<?php
/* @var $this AdminproductclassController */
/* @var $model Productclass */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'productclass-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">带 <span class="required">*</span> 是必填项</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '新建' : '确认修改'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->