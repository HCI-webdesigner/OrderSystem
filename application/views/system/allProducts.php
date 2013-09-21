	<table>
	<tr>
		<th>产品名称</th>
		<th>产品分类</th>
		<th>PSN</th>
		<th>价格</th>
		<th>unit</th>
		<th>图片</th>
	</tr>
	<?php foreach($catagories as $catagoriesRow):?>
		<tr>
			<td><span><?=$catagoriesRow['name'];?></span></td>
			<td><span><?=$catagoriesRow['lv2name'];?></span></td>
			<td><span><?=$catagoriesRow['PSN'];?></span></td>
			<td><span><?=$catagoriesRow['price'];?></span></td>
			<td><span><?=$catagoriesRow['unit'];?></span></td>
			<td><span><img src="<?php echo base_url("public/images/$catagoriesRow[picture]");?>" class="product_img"></span></td>
		</tr>
	<?php endforeach?>
	</table>