	<table align="center">
		<tr>
			<th>送货地址</th>
			<th>电话号码</th>
			<th>收货人</th>
			<th>邮政编码</th>
			<th>操作</th>
		</tr>
	<?php foreach($allAddressMessage as $row):?>
		<tr>
			<td align="center"><?=$row['destination']?></td>
			<td align="center"><?=$row['phone']?></td>
			<td align="center"><?=$row['person']?></td>
			<td align="center"><?=$row['mailnumber']?></td>
			<td align="center">
			<?php
				echo anchor('address/deleteOneAddress/'."$row[id]",'删除','');
			?>
			 | 
			 <?php
			 	echo anchor('address/editAddressPage/'."$row[id]", '修改', '');
			 ?></td>
			<br>
		</tr>
	<?php endforeach?>
	</table>
	<a href="#"><span class="addAddress">添 加</span></a> 