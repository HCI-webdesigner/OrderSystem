	<?php foreach($producttype1 as $productType1Row):?>
		<h2><?php echo anchor('/product/getLv2Names/'.$productType1Row['id'],$productType1Row['name']);?></h2>
		<?php foreach($producttype2 as $productType2Row):?>
		<h3><?=$productType2Row['name'];?>
		<?php endforeach?>
	<?php endforeach?>