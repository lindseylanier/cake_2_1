<div class="productDetails form">
<?php echo $this->Form->create('ProductDetail'); ?>
	<fieldset>
		<legend><?php echo __('Edit Product Detail'); ?></legend>
	<?php
		echo $this->Form->input('product_id');
		echo $this->Form->input('product_name');
		echo $this->Form->input('product_description');
		echo $this->Form->input('product_category');
		echo $this->Form->input('total_stock');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ProductDetail.product_id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('ProductDetail.product_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Product Details'), array('action' => 'index')); ?></li>
	</ul>
</div>
