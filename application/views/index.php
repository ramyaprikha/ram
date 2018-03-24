<div class="row">
    <?php if(!empty($products)): foreach($products as $product): ?>
    <div class="thumbnail">
        <img src="<?php echo base_url().'includes/images/'.$product['image']; ?>" alt="">
        <div class="caption">
            <h4 class="pull-right">$<?php echo $product['price']; ?> USD</h4>
            <h4><a href="javascript:void(0);"><?php echo $product['name']; ?></a></h4>
        </div>
<!--        <a href="<?php echo base_url().'products/buy/'.$product['id']; ?>"><img alt="ok" border="0" width="10" height="10" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif"></a>-->
        <a href="<?php echo base_url().'products/buy/'.$product['id']; ?>"><button type="button">click</button></a>
    </div>
    <?php endforeach; endif; ?>
</div>