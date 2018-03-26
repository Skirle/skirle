<div id="product_div">
    <img id="productimg" src="/images/products/<?php echo $rsProduct['image']; ?>" width="475" height="350"></br>
        <?php echo $rsProduct['name']; ?></br>
        Стоимость: <?php echo $rsProduct['price']; ?>
    
        <a id="removeCart_<?php echo $rsProduct['id']; ?>" <?php if(! $itemInCart): ?> class="hideme" <?php endif; ?> href="#" onClick="removeFromCart(<?php echo $rsProduct['id']; ?>); return false;" alt="Удалить из корзины">Удалить из корзины</a>
        <a id="addCart_<?php echo $rsProduct['id']; ?>" <?php if($itemInCart): ?> class="hideme" <?php endif; ?> href="#" onClick="addToCart(<?php echo $rsProduct['id']; ?>); return false;" alt="Добавить в корзину">Добавить в корзину</a>
        <p>Описание: <br /><?php echo $rsProduct['description'] ?>
            </div>

