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

	<table>
		<tr>
			<th>选择</th>
			<th>图片</th>
			<th>产品名称</th>
			<th>产品分类</th>
			<th>PSN</th>
			<th>价格</th>
			<th>unit</th>
		</tr>
	<?php foreach($searchResults as $searchRows):?>
		<tr>
			<td></td>
			<td><img src="<?php echo base_url("public/images/$searchRows[picture]");?>" class="product_img" ></td>
			<td class="name"><?=$searchRows['name'];?></td>
			<td><?=$searchRows['lv2name'];?></td>
			<td><?=$searchRows['PSN'];?></td>
			<td class="price"><?=$searchRows['price'];?></td>
			<td><?=$searchRows['unit'];?></td>
		</tr>
	<?php endforeach?>
	</table>