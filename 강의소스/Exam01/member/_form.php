<form method="post" action="member_ps.php" target="ifrmHidden" autocomplete="off">
	<input type="hidden" name="mode" value="join">
	<dl>
		<dt>아이디</dt>
		<dd>
			<input type="text" name="memId">
		</dd>
	</dl>

	<dl>
		<dt>비밀번호</dt>
		<dd>
			<input type="password" name="memPw">
		</dd>
	</dl>
	<dl>
		<dt>비밀번호확인</dt>
		<dd>
			<input type="password" name="memPwRe">
		</dd>
	</dl>
	<dl>
		<dt>회원명</dt>
		<dd>
			<input type="text" name="memNm">
		</dd>
	</dl>
	<dl>
		<dt>휴대전화번호</dt>
		<dd>
			<input type="text" name="cellPhone">
		</dd>
	</dl>
	<input type="submit" value="가입하기">
</form>