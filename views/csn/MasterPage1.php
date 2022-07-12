<!DOCTYPE html>
<html>
<head>
	<title><?= $title;?></title>
	<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
	<link href="/assets/css/csn/masterpage1.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
<header>
	<table>
		<tr>
			<td id="a_1">관리자 이름</td>
			<td id="a_2"><?= $admin_name ?></td>

			<td id="a_1">관리자 등급</td>
			<td id="a_2"><?= $admin_level ?></td>
		</tr>
	</table>
</header>
<mp:content />
</body>
</html>
