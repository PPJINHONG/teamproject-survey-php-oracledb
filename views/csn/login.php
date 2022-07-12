<!DOCTYPE html>
<!--VIEW-->
<head>
	<title>Login</title>
	<link href="/assets/css/csn/style_csn.css" rel="stylesheet" type="text/css" media="all">
</head>
<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
	$(function () {
		$("#login_btn").click(function () {
			if ($("#user_id").val() == "") {
				alert("아이디를 입력하세요");
				return;
			}
			if ($("#user_pass").val() == "") {
				alert("비밀번호를 입력하세요");
				return;
			}
			$("form").submit();
		});
	});
</script>
<body>
<div>
	<form name="login_form" method="POST" action="/csn/login/login_check">
		<table>
			<tr>
				<td>
					아이디
				</td>
				<td>
		<input type="text" name="user_id" id="user_id" placeholder="USER ID" style="width:200px; height: 30px;">
				</td>
			</tr>
			<tr>
				<td>
					비밀번호
				</td>
				<td>
		<input type="password" name="user_pass" id="user_pass" placeholder="USER PASSWORD" style="width:200px; height: 30px;">
				</td>
			</tr>
			<tr>
				<td colspan="2">
		<input type="button" id="login_btn" value="Login" style="width: 140px; height: 30px;">
				</td>
			</tr>
			<tr>
				<td colspan="2">
		<a href="login/register">회원가입</a>
				</td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>
