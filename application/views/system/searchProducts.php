	<table>
		<tr>
			<th>产品名称</th>
			<th>产品分类</th>
			<th>PSN</th>
			<th>价格</th>
			<th>unit</th>
			<th>图片</th>
		</tr>
	<?php foreach($searchResults as $searchRows):?>
		<tr>
			<td class="name"><?=$searchRows['name'];?></td>
			<td><?=$searchRows['lv2name'];?></td>
			<td><?=$searchRows['PSN'];?></td>
			<td class="price"><?=$searchRows['price'];?></td>
			<td><?=$searchRows['unit'];?></td>
			<td><img src="<?php echo base_url("public/images/$searchRows[picture]");?>" class="product_img" ></td>
		</tr>
	<?php endforeach?>
	</table>