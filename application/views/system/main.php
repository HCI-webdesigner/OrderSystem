		<div class="mainboard">
			<div class="changepwd">
				<p class="change_title">修改密码</p>
				<form id="changepwdform" action="#">
					<label class="label" for="oldpwd">旧密码</label><input class="inputbox" type="password" name="oldpwd">
					<br>
					<label class="label" for="newpwd">新密码</label><input class="inputbox" type="password" name="newpwd">
					<br>
					<label class="label" for="ensurepwd">再确认</label><input class="inputbox" type="password" name="ensurepwd">
					<br>
					<input class="button" type="submit" value="修   改">
				</form>
			</div>
			<div class="changeinfo">
				<p class="change_title">我的资料</p>
				<form id="changeinfoform" action="#">
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
								<td>部门</td><td>HCI</td>
							</tr>
							<tr>
								<td>职位</td><td>后台部部长</td>
							</tr>
							<tr>
								<td>E-mail</td><td><input class="inputbox" type="text" name="email"></td>
							</tr>
							<tr>
								<td>电话</td>
								<td><input class="inputbox" type="text"></td>
							</tr>
							<tr>
								<td>传真</td>
								<td><input class="inputbox" type="text"></td>
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
	</div>