<div id="category_div"><h1>Товары категории <?php echo $rsCategories['name'] ?></h1></br>
    <?php if ($rsProducts != null): ?>
    <?php foreach ($rsProducts as $item): ?>
            <div style="float:left; padding: 0px 30px 40px 0px">
                <a href="/product/<?php echo $item['id'] ?>/">
                    <img src="/images/products/<?php echo $item['image'] ?>" width="300" height="250" />
                </a><br/>
                <a href="/product/<?php echo $item['id'] ?>/"><?php echo $item['name'] ?></a>
            </div>
    <?php endforeach; ?> 
    <?php endif; ?>
    <?php if ($rsChildCats != null): ?>
    <?php foreach ($rsChildCats as $item): ?>
    <h2><a href="/category/<?php echo $item['id'] ?>/"><?php echo $item['name'] ?></a></h2></br>
    <?php endforeach; ?>
    <?php endif; ?>
</div>
