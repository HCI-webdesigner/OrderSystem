	
	<div class="viewproduct">
		<?php echo anchor('/product/page/', '显示所有产品');?>
	</div><br>

	<div class="search">
		<?php echo validation_errors(); ?>
		<?php 
			echo form_open('product/searchProducts'); 
		?>
		<input type="text" name="searchkey" id="search">
		<input type="submit" name="searchSub" value="搜索">
		</form>
	</div><br>

	<div class="producttypelv1">
	<?php foreach($producttype1 as $productType1Row):?>
		<ul>
		<h2><input type="button" name="getProduct_lv2" value="<?=$productType1Row['name']?>" onclick="showProductLv2Names(<?=$productType1Row['id']?>)"></h2>
			<div id="productLv2Names<?=$productType1Row['id']?>" style="display:none">
				<?php foreach($producttype2 as $productType2Row):?>
				<?php foreach ($productType2Row as $row): ?>
				<?php if($productType1Row['id'] == $row['PTid']):?>	
				<li><span class="producttypelv1"><?=$row['name'];?></span></li>
				<?php endif?>
				<?php endforeach?>
				<?php endforeach?>
			</div>
			<br>
		</ul>
	<?php endforeach?>
	</div>