<?php
/* @var $this AdminproductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">带<span class="required">*</span> 是必填项</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'class_id'); ?>
		<?php //echo $form->textField($model,'class_id'); ?>
		<?php echo $form->dropDownList($model,'class_id',CHtml::listData(Productclass::model()->findAll(array('order' => 'id ASC')), 'id', 'name'));?>
		<?php echo $form->error($model,'class_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'texture'); ?>
		<?php echo $form->textField($model,'texture',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'texture'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'volume'); ?>
		<?php echo $form->textField($model,'volume',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'volume'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'people'); ?>
		<?php echo $form->textField($model,'people',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'people'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->fileField($model,'image',array('size'=>60,'maxlength'=>10000)); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'introduce'); ?>
		<?php echo $form->textArea($model,'introduce',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'introduce'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'introduce_image'); ?>
		<?php echo $form->fileField($model,'introduce_image',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'introduce_image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
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
		<?php echo $form->labelEx($model,'heft'); ?>
		<?php echo $form->textField($model,'heft'); ?>
		<?php echo $form->error($model,'heft'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recomment'); ?>
		<?php //echo $form->textField($model,'recomment'); ?>
		<?php echo $form->dropDownList($model,'recomment',array(1=> '推荐' , 0=> '不推荐'));?>
		<?php echo $form->error($model,'recomment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_1'); ?>
		<?php echo $form->fileField($model,'image_1',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'image_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_2'); ?>
		<?php echo $form->fileField($model,'image_2',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'image_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_3'); ?>
		<?php echo $form->fileField($model,'image_3',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'image_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_4'); ?>
		<?php echo $form->fileField($model,'image_4',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'image_4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hot'); ?>
		<?php echo $form->textField($model,'hot'); ?>
		<?php echo $form->error($model,'hot'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'click'); ?>
		<?php echo $form->textField($model,'click',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'click'); ?>
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
    UE.getEditor('Product_introduce',{
    	initialFrameWidth:700,
        initialFrameHeight:300,
    });
</script>