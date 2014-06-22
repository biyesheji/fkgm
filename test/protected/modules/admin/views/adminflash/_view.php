<?php
/* @var $this AdminflashController */
/* @var $data Flash */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<image width='50px;' height='50px' src='<?php echo CHtml::encode($data->image); ?>'></image>
	<?php// echo CHtml::encode($data->image); ?>

	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shows')); ?>:</b>
	<?php //echo CHtml::encode($data->shows); ?>
	<?php echo $data->shows ? '显示' :'不显示';?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alt')); ?>:</b>
	<?php echo CHtml::encode($data->alt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('weight')); ?>:</b>
	<?php echo CHtml::encode($data->weight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />


</div>