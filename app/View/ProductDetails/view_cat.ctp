<div class="productDetails view">
    <h2><?php echo __('Product Details'); ?></h2>
    <dl>
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
        <dt><?php echo __('Total Stock'); ?></dt>
        <dd>
            <?php echo h($productDetail['ProductDetail']['total_stock']); ?>
            &nbsp;
        </dd>
    </dl>
    <p>
        <?php echo $this->Form->create('Cart',array('id'=>'add-form','url'=>array('controller'=>'carts','action'=>'add')));?>
        <?php echo $this->Form->hidden('product_id',array('value'=>$productDetail['ProductDetail']['product_id']))?>
        <?php echo $this->Form->submit('Add to cart',array('class'=>'btn-success btn btn-lg'));?>
        <?php echo $this->Form->end();?>
    </p>
</div>

<script>
    $(document).ready(function(){
        $('#add-form').submit(function(e){
            e.preventDefault();
            var tis = $(this);
            $.post(tis.attr('action'),tis.serialize(),function(data){
                $('#cart-counter').text(data);
            });
        });
    });
</script>



