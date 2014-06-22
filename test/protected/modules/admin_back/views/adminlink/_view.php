<?php
/* @var $this AdminlinkController */
/* @var $data Link */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<br />
	<?php //echo CHtml::encode($data->image); ?>
	<img src="<?php echo $data->image;?>" widgt='150' height='50'>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wight')); ?>:</b>
	<?php echo CHtml::encode($data->wight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shows')); ?>:</b>
	<?php //echo CHtml::encode($data->shows); ?>
	<?php echo $data->shows ? '显示' : '不显示' ; ?>
	<br />ddd

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />


</div>