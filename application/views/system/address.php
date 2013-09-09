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
			 | <input type="button" name="edit" value="修改" onclick="displayEditPage(<?=$row['id']?>);">
			 
			 </td>
			 <td>
			 	<div style="display:none" id="editAddressForm<?=$row['id']?>">
			 	<?php 
					$this->load->helper('form');
					$this->load->library('form_validation');
					echo validation_errors();
					$hidden = array('aId' => $row['id']);
					echo form_open('address/editAddress', '', $hidden);
				?>
				<br>
				<input type="text" value="<?=$row['destination']?>" name="newDestination">
				<br><input type="text" value="<?=$row['phone']?>" name="newPhone">
				<br><input type="text" value="<?=$row['person']?>" name="newPerson">
				<br><input type="text" value="<?=$row['mailnumber']?>" name="newMailnumber">
				<br><input type="submit" name="addressSub" value="保存">
				</form>
			 	</div>
			 </td>
			<br>
		</tr>
	<?php endforeach?>
	</table>
	<input type="button" name="addAddressButton" value="添 加" onclick="displayAddAddressPage();"></a> 
	<div style="display:none" id="addAddressForm">
		<?php 
			$this->load->helper('form');
			$this->load->library('form_validation');
			echo validation_errors();
			echo form_open('address/addAddress');
		?>
		<p>新增送货地址</p>
		<label class="label" for="destination">收货地址</label> <input type="text" name="destination"><br>
		<label class="label" for="phone">联系电话</label><input type="text" name="phone"><br>
		<label class="label" for="person">联系人姓名</label><input type="text" name="person"><br>
		<label class="label" for="mailnumber">邮政编码</label><input type="text" name="mailnumber"><br>
		<input type="submit" name="addSub" value="发送"><br>
		</form>
	</div>