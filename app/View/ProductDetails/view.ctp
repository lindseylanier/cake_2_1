<div class="productDetails view">
<h2><?php echo __('Product Detail'); ?></h2>
	<dl>
		<dt><?php echo __('Product Id'); ?></dt>
		<dd>
			<?php echo h($productDetail['ProductDetail']['product_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Name'); ?></dt>
		<dd>
			<?php echo h($productDetail['ProductDetail']['product_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Description'); ?></dt>
		<dd>
			<?php echo h($productDetail['ProductDetail']['product_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Category'); ?></dt>
		<dd>
			<?php echo h($productDetail['ProductDetail']['product_category']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Stock'); ?></dt>
		<dd>
			<?php echo h($productDetail['ProductDetail']['total_stock']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product Detail'), array('action' => 'edit', $productDetail['ProductDetail']['product_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product Detail'), array('action' => 'delete', $productDetail['ProductDetail']['product_id']), array(), __('Are you sure you want to delete # %s?', $productDetail['ProductDetail']['product_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Details'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Detail'), array('action' => 'add')); ?> </li>
	</ul>
</div>
