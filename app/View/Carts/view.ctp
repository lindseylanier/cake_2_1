<?php echo $this->Form->create('Cart',array('url'=>array('action'=>'update')));?>
        <table class="table">
            <thead>
            <tr>
                <th>Product Name</th>
<!--                <th>Quantity</th>-->
                <th>Total</th>
            </tr>
            </thead>
            <tbody>
            <?php $total=0;?>
            <?php foreach ($products as $product):?>
                <tr>
                    <td><?php echo $product['ProductDetail']['product_name'];?></td>
<!--                    <td><div class="col-xs-3">-->
<!--                            --><?php //echo $this->Form->hidden('product_id.',array('value'=>$product['ProductDetail']['product_id']));?>
<!--                            --><?php //echo $this->Form->input('count.',array('type'=>'number', 'label'=>false,
//                                'class'=>'form-control input-sm', 'value'=>$product['ProductDetail']['total_stock']));?>
<!--                        </div></td>-->
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>

<!--            --><?php //echo $this->Form->submit('Update',array('class'=>'btn btn-warning','div'=>false));?>
        <?php echo $this->Html->link(__('Back to Shopping'), array('controller' => 'productdetails', 'action' => 'catalog')); ?>


<?php echo $this->Form->end();?>