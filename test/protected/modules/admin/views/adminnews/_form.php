<?php
/* @var $this AdminnewsController */
/* @var $model News */
/* @var $form CActiveForm */
?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'news-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">带 <span class="required">*</span> 是必填项</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click'); ?>
		<?php echo $form->textField($model,'click',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'click'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'auto'); ?>
		<?php //echo $form->textField($model,'auto',array('size'=>60,'maxlength'=>200)); ?>
		<?php //echo $form->error($model,'auto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'new_class'); ?>
		<?php //echo $form->textField($model,'new_class'); ?>
		<?php echo $form->dropDownList($model,'new_class',CHtml::listData(Newclass::model()->findAll(array('order' => 'id ASC')), 'id', 'name'));?>
		<?php echo $form->error($model,'new_class'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'video'); ?>
		<?php echo $form->fileField($model,'video',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'video'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'source'); ?>
		<?php echo $form->textField($model,'source',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'source'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->fileField($model,'image',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shows'); ?>
		<?php //echo $form->textField($model,'shows'); ?>
		<?php echo $form->dropDownList($model,'shows',array(1=> '显示' , 0=> '不显示'));?>
		<?php echo $form->error($model,'shows'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'weight'); ?>
		<?php echo $form->textField($model,'weight'); ?>
		<?php echo $form->error($model,'weight'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'tags'); ?>
		<?php echo $form->textField($model,'tags'); ?>
		<?php echo $form->error($model,'tags'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keyword'); ?>
		<?php echo $form->textField($model,'keyword',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'keyword'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '新建' : '确认修改'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<script type="text/javascript">
    UE.getEditor('News_body',{
    	initialFrameWidth:700,
        initialFrameHeight:300,
    });
</script>