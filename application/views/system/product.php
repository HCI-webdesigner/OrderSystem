	<div>
	<?php echo validation_errors(); ?>
	<?php 
		echo form_open('product/searchProducts'); 
	?>
	<input type="text" name="searchkey" id="search">
	<input type="submit" name="searchSub" value="搜索">
	</form>
	</div>

	<?php echo anchor('/product/allProducts/', '显示所有产品');?>

	<?php foreach($producttype1 as $productType1Row):?>
		<ul class="">
		<h2><input type="button" name="getProduct_lv2" value="<?=$productType1Row['name']?>" onclick="showProductLv2Names(<?=$productType1Row['id']?>)"></h2>
			<div id="productLv2Names<?=$productType1Row['id']?>" style="display:none">
			<?php foreach($producttype2 as $productType2Row):?>
			<?php foreach ($productType2Row as $row): ?>
			<?php if($productType1Row['id'] == $row['PTid']):?>	
			<li><h3><?=$row['name'];?></h3></li>
			<?php endif?>
			<?php endforeach?>
			<?php endforeach?>
			</div>
		</ul>
	<?php endforeach?>