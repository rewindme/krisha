<?php include '_header.php' ?>

<table width="100%" border="0" cellpadding="0" cellspacing="0" style="table-layout:fixed">
	<tr>
		<td height="100" style="height:100px;line-height:0;font-size:0"></td>
	</tr>
	<tr>
		<td style="text-align:center">
			<img src="<?php echo $img_path; ?>/p_authorize_number.png" alt="p_authorize_number" width="480" height="109" style="vertical-align:top" />
		</td>
	</tr>
	<tr>
		<td style="padding:20px 27px 100px">
			<p style="font-size:14px;color:#757575;line-height:22px;font-family:sans-serif;text-align:center">
				{name} 고객님 안녕하세요!<br>
				요청하신 비밀번호찾기 인증번호를 확인해주세요.<br>
				아래번호를 인증번호 입력란에 입력해주세요.
			</p>
			<table width="356" border="0" cellpadding="0" cellspacing="0" style="table-layout:fixed;margin:0 auto;" align="center">
				<tr>
					<td height="46" style="background:#eaeaea;text-align:center;font-family:sans-serif;font-size:18px;line-height:29px;color:#454545">
						<span style="display:inline-block;vertical-align:middle">인증번호</span>
						<span style="color:#f54500;font-size:24px;font-weight:bold;display:inline-block;vertical-align:middle">{authNum}</span>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<?php include '_footer.php' ?>
