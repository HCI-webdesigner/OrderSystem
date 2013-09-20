	<?php foreach($catagories as $catagoriesRow):?>
		<span>产品名称 : </span><span><?=$catagoriesRow['name'];?></span>
		<span>  |  产品分类 : </span><span><?=$catagoriesRow['lv2name'];?></span><br>
	<?php endforeach?>