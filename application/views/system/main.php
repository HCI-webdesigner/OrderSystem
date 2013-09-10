		<div class="mainboard">
			<div class="changepwd">
				<p class="change_title">修改密码</p>
				<?php 
					$this->load->helper('form');
					$this->load->library('form_validation');
					echo validation_errors();
					$attributes = array('onsubmit'=>'return tranNewPsd();');
					$hidden = array('uId' => $uId, 'oldpassword' => $oldpassword);
					echo form_open('main/editPassword', $attributes, $hidden);
				?>
					<label class="label" for="oldpwd">旧密码</label><input class="inputbox" type="password" name="oldpwd" id="oldpwd">
					<br>
					<label class="label" for="newpwd">新密码</label><input class="inputbox" type="password" name="newpwd" id="newpwd">
					<br>
					<label class="label" for="ensurepwd">再确认</label><input class="inputbox" type="password" name="ensurepwd" id="ensurepwd">
					<br>
					<span id="warn"></span><br>
					<input class="button" type="submit" value="修   改">
				</form>
			</div>
			<div class="changeinfo">
				<p class="change_title">我的资料</p>
				<?php 
					$this->load->helper('form');
					$this->load->library('form_validation');
					echo validation_errors();
					$hidden = array('uId' => $uId);
					echo form_open('main/updateUserMessage', '', $hidden); 
				?>
					<table class="infotable">
						<thead>
							<tr>
								<th width="30%">&nbsp;</th><th>&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>姓名</td><td><?php echo $account?></td>
							</tr>
							<tr>
								<td>用户名</td><td><?php echo $username;?></td>
							</tr>
							<tr>
								<td>部门</td><td><?php echo $department;?></td>
							</tr>
							<tr>
								<td>职位</td><td><?php echo $role;?></td>
							</tr>
							<tr>
								<td>E-mail</td><td><input class="inputbox" type="text" name="newEmail" value="<?php echo $email;?>"></td>
							</tr>
							<tr>
								<td>电话</td>
								<td><input class="inputbox" type="text" name="newPhone" value="<?php echo $phone;?>"></td>
							</tr>
							<tr>
								<td>传真</td>
								<td><input class="inputbox" type="text" name="newFax" value="<?php echo $fax;?>"></td>
							</tr>
							<tr>
								<td style="line-height: 10px;">&nbsp;</td>
								<td></td>
							</tr>
							<tr>
								<td colspan="2"><input class="button" type="submit" value="保   存"></td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>
		</div>

		<div>
			<?php 
				// if($islogged()) {
				echo anchor('log/logout','注 销','');
				// }
			?>
		</div>
	</div>