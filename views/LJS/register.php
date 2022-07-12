<script type="text/javascript">
    $(function () {
        $("#regi_btn").click(function () {
            var chk_form = [
                {'target': '아이디를', 'name': 'user_id'},
                {'target': '비밀번호를', 'name': 'user_pw'},
                {'target': '이름을', 'name': 'user_name'},
                {'target': '성별을', 'name': 'user_gender'},
                {'target': '휴대폰을', 'name': 'user_phone'},
                {'target': '생년월일을', 'name': 'user_birth'}
            ];
            var exists = true;
            chk_form.forEach(function (row) {
                if (exists) {
                    if ($('#' + row["name"]).val() == "") {
                        alert(row["target"] + "입력해주세요.");
                        exists = false;
                    }
                }
            });

            $.post("id_chk", {'user_id': $('#user_id').val()}, function (data) {
                if (data == "X") {
                    alert("아이디가 존재합니다");
                } else {
                    if (exists) {
                        $('form').submit();
                    }
                }
            }, "text");

        });
    });
</script>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background: #34495e;
    }

    form {
        width: 300px;
        padding: 40px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #eeeeee;
        text-align: center;
        box-shadow: 3px 3px 5px #000;
    }

    td {
        padding: 10px;
        border: 1px solid #eee
    }

    #regi_btn {
        width: 280px;
        height: 40px;
    }
    #user_birth{
        width: 175px;
        height: 30px;
    }

    input {
        border: 1px solid black;

    }
    #user_id,#user_pw,#user_name,#user_phone{
        height: 30px;
    }
</style>
<body>
<form action="/LJS/login/register_ok" method="post">
    <table>
        <tr>
            <td>아이디:</td>
            <td><input type="text" name="user_id" id="user_id"></td>
        </tr>
        <tr>
            <td>비밀번호:</td>
            <td><input type="password" name="user_pw" id="user_pw"></td>
        </tr>
        <tr>
            <td>이름:</td>
            <td><input type="text" name="user_name" id="user_name"></td>
        </tr>
        <tr>
            <td>성별:</td>
            <td><input type="radio" name="user_gender" value="F"> 여자
                <input type="radio" name="user_gender" value="M"> 남자
            </td>
        </tr>
        <tr>
            <td>휴대폰:</td>
            <td><input type="text" name="user_phone" id="user_phone"></td>
        </tr>
        <tr>
            <td>생년월일:</td>
            <td><input type="date" name="user_birth" id="user_birth"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="button" id="regi_btn" value="확인"></td>
        </tr>
    </table>
</form>
</body>