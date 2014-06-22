<?php
/* @var $this AdminproductController */
/* @var $data Product */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('texture')); ?>:</b>
	<?php echo CHtml::encode($data->texture); ?>
	<br />
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('volume')); ?>:</b>
	<?php echo CHtml::encode($data->volume),'ML'; ?>
	<br />
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('people')); ?>:</b>
	<?php echo CHtml::encode($data->people); ?>
	<br />
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<br />
	<img src="<?php echo $data->image?>" width='150' height='50'>
	<br />
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('introduce')); ?>:</b>
	<?php echo $data->introduce; ?>
	<br />
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('introduce_image')); ?>:</b>
	<br />
	<img src="<?php echo $data->introduce_image; ?>" width='150' height='50'>
	<br />
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price),'元'; ?>
	<br />
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('class_id')); ?>:</b>
	<?php echo Productclass::model()->findByPk($data->class_id)->name;?>
	<br />
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shows')); ?>:</b>
	<?php echo $data->shows ? '显示' : '不显示';?>
	<br />
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('weight')); ?>:</b>
	<?php echo CHtml::encode($data->weight); ?>
	<br />
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('heft')); ?>:</b>
	<?php echo CHtml::encode($data->heft),'g'; ?>
	<br />
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recomment')); ?>:</b>
	<?php echo $data->recomment ? '推荐' : '不推荐';?>
	<br />
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_1')); ?>:</b>
	<br />
	<img src="<?php echo $data->image_1; ?>" width='150' height='50'>
	<br />
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_2')); ?>:</b>
	<br />
	<img src="<?php echo $data->image_2; ?>" width='150' height='50'>
	<br />
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_3')); ?>:</b>
	<br />
	<img src="<?php echo $data->image_3; ?>" width='150' height='50'>
	<br />
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_4')); ?>:</b>
	<br />
	<img src="<?php echo $data->image_4; ?>" width='150' height='50'>
	<br />
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hot')); ?>:</b>
	<?php echo CHtml::encode($data->hot),'次'; ?>
	<br />
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('click')); ?>:</b>
	<?php echo CHtml::encode($data->click),'次'; ?>
	<br />
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keyword')); ?>:</b>
	<?php echo CHtml::encode($data->keyword); ?>
	<br />
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />
	<br />

</div>