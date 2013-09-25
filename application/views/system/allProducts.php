	<div class="viewproduct">
		<?php echo anchor('/product/page/', '显示所有产品');?>
	</div><br>

	<div class="search">
		<?php 
			echo form_open('product/searchProducts'); 
		?>
		<input type="text" name="searchkey" id="search">
		<input type="submit" name="searchSub" value="搜索">
		</form>
	</div><br>

	<div class="product-list">
		<span class="pagetitle"> >> 商品列表</span>
		<hr class="line" />
		<table>
		<tr>
			<th>选择</th>
			<th>图片</th>
			<th>产品名称</th>
			<th>PSN</th>
			<th>产品分类</th>
			<th>价格</th>
			<th>unit</th>
		</tr>
		<?php foreach($catagories as $catagoriesRow):?>
			<tr>
				<td><input type="checkbox" name="chooseOne"></td>
				<td><span><img src="<?php echo base_url("public/images/$catagoriesRow[picture]");?>" class="product_img"></span></td>
				<td><span class="name"><?=$catagoriesRow['name'];?></span></td>
				<td><span><?=$catagoriesRow['PSN'];?></span></td>
				<td><span><?=$catagoriesRow['lv2name'];?></span></td>
				<td><span class="price"><?=$catagoriesRow['price'];?></span></td>
				<td><span><?=$catagoriesRow['unit'];?></span></td>
			</tr>
		<?php endforeach?>
		</table>
		
		<?=$page?>
		共 <?=$totalPages?> 页
	</div>