<!-- Content -->
		<div id="content">
			
			
			
			<!-- Products -->
			<div class="products">
				<div class="cl">&nbsp;</div>
				<ul>
		<?php foreach($rsProducts as $item): ?>
                    <li>
                        <a href="/product/<?php echo $item['id'] ?>/">
                                <img src="images/products/<?php echo $item['image'] ?>" />
                        </a>
                        <a href="/product/<?php echo $item['id'] ?>/"><?php echo $item['name'] ?></a>
                        
                    </li>
                <?php endforeach; ?>
			    
                                </ul>
			</div>
			<!-- End Products -->
			
		</div>
		<!-- End Content -->
               
 
