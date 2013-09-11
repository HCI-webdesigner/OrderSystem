	<?php foreach($producttype1 as $productType1Row):?>
	<h2><?=$productType1Row['name']?></h2>
		<?php foreach($allProduct2Names as $productType2Row):?>
		<?php foreach ($productType2Row as $row): ?>
		<?php if($productType1Row['id'] == $row['PTid']):?>	
			<h4><?=$row['name'];?></h4>
		<?php endif?>
		<?php endforeach?>
		<?php endforeach?>
	<?php endforeach?>