<script type="text/javascript">
    $(function () {
        $("#regi_btn").click(function () {
            var chk_form = [
                {'target': '아이디', 'name': 'user_id'},
                {'target': '비밀번호', 'name': 'user_pw'},
                {'target': '이름', 'name': 'user_name'},
                {'target': '성별', 'name': 'user_gender'},
                {'target': '휴대폰', 'name': 'user_phone'},
                {'target': '생년월일', 'name': 'user_birth'}
            ];
            var exists = true;
            chk_form.forEach(function (row) {
                if (exists) {
                    if ($("#" + row["name"]).val() == "") {
                        alert(row["target"] + "을(를) 입력해주세요.");
                        exists = false;
                    }
                }
            });

            $.post("id_chk", {'user_id': $("#user_id").val()}, function (data) {
                if (data == "x") {
                    alert("이미 아이디가 존재합니다");
                } else {
                    if (exists) {
                        $("form").submit();
                    }
                }
            }, "text");

        });
    });
</script>
<link href="/assets/css/csn/register_csn.css" rel="stylesheet" type="text/css" media="all">
<div>
<form action="/csn/login/register_ok" method="post">
	<table>
		<tr class="right_tr"><td>
    아이디: <input type="text" name="user_id" id="user_id" class="right_input">
			</td></tr>

		<tr class="right_tr"><td>
    비밀번호: <input type="password" name="user_pw" id="user_pw" class="right_input">
			</td></tr>

		<tr class="right_tr"><td>
    이름: <input type="text" name="user_name" id="user_name" class="right_input">
			</td></tr>

		<tr><td class="left_td">
    성별: <input type="radio" name="user_gender" value="F" >여자
        <input type="radio" name="user_gender" value="M" >남자
			</td></tr>

		<tr class="right_tr"><td>
    휴대폰: <input type="text" name="user_phone" id="user_phone" class="right_input">
			</td></tr>

		<tr class="right_tr"><td>
    생년월일: <input type="date" name="user_birth" id="user_birth" class="right_input">
			</td></tr>

		<tr class="right_tr"><td>
				부서<select name="user_dept" id="user_dept" class="right_input">
					<option value="IT과">IT과</option>
					<option value="경영과">경영과</option>
					<option value="경찰행정과">경찰행정과</option>
				</select>

			</td></tr>

		<tr><td>
    <input type="button" id="regi_btn" value="회원가입" class="right_input_btn">
			</td></tr>

	</table>
</form>
</div>
