<!-- Sidebar -->
		<div id="sidebar">
			
			<!-- Search -->
			
			
			<!-- Categories -->
			<div class="box categories">
				<h2>Categories <span></span></h2>
				<div class="box-content">
					<ul>
					    <?php foreach($rsCategory as $row): ?>
                                                <li><a href="/category/<?php echo $row['id'] ?>/"><?php echo $row['name']; ?></a></li>
                                                    <?php if (isset($row['children'])) foreach ($row['children'] as $rowChild): ?>
                                                        <li><a href="/category/<?php echo $rowChild['id'] ?>/">--<?php echo $rowChild['name'] ?></a>
                                                    <?php endforeach; ?>
                                             <?php endforeach;?>
					    
					</ul>
    <div class ="menuCaption">Корзина</div>
    <a href="/cart/" title="Перейти в корзину">В корзину</a>
    <span id="CartCntItems">
        <?php if($cartCntItems > 0): ?>
            <?php echo $cartCntItems; ?>
        <?php endif; ?>
        <?php if($cartCntItems == 0): ?>
            Пусто
        <?php endif; ?>
    </span> 
				</div>
			</div>
			<!-- End Categories -->
			
		</div>
		<!-- End Sidebar -->
		
		<div class="cl">&nbsp;</div>
                
       
	</div>
	<!-- End Main -->
