
    <h2><?php echo __('Shop for Movies and TV Shows'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
<!--            <th>--><?php //echo $this->Paginator->sort('product_id'); ?><!--</th>-->
            <th><?php echo $this->Paginator->sort('product_name'); ?></th>
<!--            <th>--><?php //echo $this->Paginator->sort('product_description'); ?><!--</th>-->
<!--            <th>--><?php //echo $this->Paginator->sort('product_category'); ?><!--</th>-->
            <th><?php echo $this->Paginator->sort('total_stock'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($productDetails as $productDetail): ?>
            <tr>
<!--                <td>--><?php //echo h($productDetail['ProductDetail']['product_id']); ?><!--&nbsp;</td>-->
                <td><?php echo h($productDetail['ProductDetail']['product_name']); ?>&nbsp;</td>
<!--                <td>--><?php //echo h($productDetail['ProductDetail']['product_description']); ?><!--&nbsp;</td>-->
<!--                <td>--><?php //echo h($productDetail['ProductDetail']['product_category']); ?><!--&nbsp;</td>-->
                <td><?php echo h($productDetail['ProductDetail']['total_stock']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View Details'), array('action' => 'view_cat', $productDetail['ProductDetail']['product_id'])); ?>

                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <p>
        <?php
        echo $this->Paginator->counter(array(
            'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
        ));
        ?>	</p>
    <div class="paging">
        <?php
        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
    </div>

