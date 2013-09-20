	
	<?php foreach($searchResults as $searchRows):?>
		产品名称 : <?=$searchRows['name'];?><br>
		产品分类 : <?=$searchRows['lv2name'];?><br>
		PSN : <?=$searchRows['PSN'];?><br>
		价格 : <?=$searchRows['price'];?><br>
		unit : <?=$searchRows['unit'];?><br>
		图片 : <img src="<?php echo base_url("public/images/$searchRows[picture]");?>" width="200" height="200"><br>
	<?php endforeach?>