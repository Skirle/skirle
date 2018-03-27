<div id="cart_id">
<h1>Корзина</h1><br />
    <?php if (! $rsProducts): ?>
        В корзине пусто.
    <?php endif; ?>
    <?php if ($rsProducts): ?>
        <h2>Данные заказа</h2><br />
        <table>
            <tr>
                <td>
                    №
                </td>
                <td>
                    Наименование
                </td>
                <td>
                    Количество
                </td>
                <td>
                    Цена за еденицу
                </td>   
                <td>
                    Цена
                </td>
                <td>
                    Действие
                </td>
            </tr>
        </table>
        <?php $i = 0; ?>
        <?php foreach($rsProducts as $item): ?>
        <?php $i++; ?>
        <table>
            <tr>
                <td>
                   <?php echo $i; ?>
                </td>
                <td>
                    <a href="/product/<?php echo $item['id']; ?>/"> <?php echo $item['name']; ?></a><br />
                </td>
                <td>
                    <input name="itemCnt_<?php echo $item['id']; ?>" id="itemCnt_<?php echo $item['id']; ?>" type="text" value="1" onchange="conversionPrice(<?php echo $item['id']; ?>);"/>
                </td>
                <td>
                    <span id="itemPrice_<?php echo $item['id']; ?>" value="<?php echo $item['price']; ?>">
                        <?php echo $item['price']; ?>
                    </span>
                </td>   
                <td>
                    <span id="itemRealPrice_<?php echo $item['id']; ?>">
                        <?php echo $item['price']; ?>
                    </span>
                </td>
                <td>
                    <a id="removeCart_<?php echo $item['id']; ?>" href="#" onClick="removeFromCart(<?php echo $item['id']; ?>); return false;" title="Удалить из корзины">Удалить</a>
                    <a id="addCart_<?php echo $item['id']; ?>" class="hideme" href="#" onClick="addToCart(<?php echo $item['id']; ?>); return false;" title="Восстановить элемент">Восстановить</a>
                </td>
            </tr>
        </table>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
